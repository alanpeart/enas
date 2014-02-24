<?php

class DrupalCommerceSTAPI extends AbstractSTAPI {

	/**
	 * This variable should be retrieved by commerce_securetrading_webservices_submit_form_submit() after calling DrupalCommerceWebServices::runSTAPI().
	 * This variable should be used as a return value to that function.  It will allow Drupal Commerce to handle post-payment update routines (update order, redirection, etc.).
	 * This is not used if 3D Secure is enabled: we are returned to the Term URL and have to update the order manually.  See commerce_securetrading_webservices.module's commerce_securetrading_webservices_3d_secure_view and DrupalCommerceWebServices::process3dSecure().
	 */
	public $success;
	
	/**
	 * Facade method that loads an order and handles the error if it cannot be loaded correctly. 
	 */
	public function loadOrder($orderReference) {
		$order = commerce_order_load($orderReference);
		
		if (!$order) {
			$this->handleException(sprintf('Order number % could not be loaded.', $orderReference), __FILE__, __CLASS__, __LINE__);
		}
		return $order;
	}
	
	/**
	 * Store the MD and the orderreference so we can lookup the orderreference by the MD value in the term URL (see commerce_securetrading_stapi_3d_secure_view()).
	 */
	protected function before3dRedirectAction($params) {
		db_query("INSERT INTO {commerce_securetrading_stapi_3dsecure} (md, orderreference) VALUES(:md, :orderreference)", array('md' => $params['result']->md, 'orderreference' => $params['result']->orderreference));
	}
	
	protected function handleError($message, $params) {
		$_SESSION['securetrading_stapi_error'] = $message;
		if (!isset($params['noRedirect']) || $params['noRedirect']) {
			drupal_goto('checkout/' . $params['order']->order_number . '/review'); // We may not always have $params['result']->orderreference (e.g. errors in connecting to STAPI) so retrieve the orderreference from the order object.
			exit;
		}
	}
	
	protected function processPayment($params) {
		$this->success = TRUE;
		commerce_securetrading_stapi_transaction($params['payment_method'], $params['order'], $params['charge'], $params['result']->transactionreference);
		commerce_checkout_complete($params['order']);
	}
	
	protected function processPaymentFailure($params) {
		$this->success = FALSE;
	}
	
	protected function process3dSecure($params) {
		commerce_securetrading_stapi_transaction($params['payment_method'], $params['order'], $params['charge'], $params['result']->transactionreference);
		commerce_checkout_complete($params['order']);
		db_query('DELETE FROM {commerce_securetrading_stapi_3dsecure} WHERE orderreference = :orderreference', array(':orderreference' => $params['result']->orderreference));
		drupal_goto('checkout/' . $params['result']->orderreference . '/complete');
		exit;
	}
	
	protected function process3dSecureFailure($params) {
		return FALSE; // Return FALSE here so handling of this goes to $this->handleError().
	}
}