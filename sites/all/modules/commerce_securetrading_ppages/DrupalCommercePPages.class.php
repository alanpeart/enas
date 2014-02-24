<?php

/**
 * SecureTrading STPP Shopping Carts
 * Drupalcommerce 7.x-1.5
 * Module Version 2.5.0
 * Last Updated 10 April 2013
 * Written by Peter Barrow for SecureTrading Ltd.
 * http://www.securetrading.com
 */

?><?php

class DrupalCommercePPages extends AbstractPaymentPages
{
	protected function handleError($message, $params) {
		if (isset($params['orderreference']) && $params['orderreference']) {
			$_SESSION['securetrading_ppages_error'] = $message;
			drupal_goto('checkout/' . $params['orderreference'] . '/review');
			exit;
		}
		else { // If the orderreference is not available (it was not passed to the notification/redirect script, for example, we can't redirect the customer to the checkout.  In these instances we call drupal_set_message() and redirect the user to the homepage instead.
			drupal_set_message($message, 'error');
			drupal_goto('');
			exit;
		}
	}
}