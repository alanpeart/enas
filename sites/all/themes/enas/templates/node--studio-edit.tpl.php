<div id="studio-main" class="large-9">
	<div id="studio-one" class="odd first form-zebra">
		<h2>The Basics</h2>
		<?php print drupal_render($form['title']); ?>
		<?php print drupal_render($form['field_studio_type']); ?>
		<?php print drupal_render($form['field_size']); ?>
		<?php print drupal_render($form['body']); ?>
	</div>
	<div id="studio-two" class="even form-zebra">
		<h2>Address</h2>
		<?php print drupal_render($form['field_location']); ?>
	</div>	
	<div id="studio-three" class="odd form-zebra">
		<h2>Opening Times and Availibility</h2>
		<?php print drupal_render($form['field_opening_times']); ?>
		<?php print drupal_render($form['field_availibility']); ?>
	</div>	
	<div id="studio-four" class="even form-zebra">
		<h2>Image</h2>
		<?php print drupal_render($form['field_image']); ?>
		<p>An image to represent your studio on the website. Files must be less than 20MB and the allowable file types are png, jpg, jpeg and gif. Images will be scaled and cropped to a landscape format with dimensions of 720px width and 380px height.</p>
	</div>	
	<div id="studio-five" class="odd form-zebra">
		<h2>Contact Details</h2>
		<?php print drupal_render($form['field_email']); ?>
		<?php print drupal_render($form['field_telephone']); ?>
		<?php print drupal_render($form['field_website']); ?>
		<?php print drupal_render($form['field_facebook_page']); ?>
		<?php print drupal_render($form['field_twitter_handle']); ?>
	</div>
	<?php 
		global $user; $admin=FALSE;
		$check = array_intersect(array('network manager', 'administrator'), array_values($user->roles));
		$admin = empty($check) ? FALSE : TRUE;
		if($admin) {
	?>
	<div id="studio-six" class="even form-zebra">
		<h2>Files for Download</h2>
		<?php print drupal_render($form['field_file']); ?>
	</div>
	<div id="studio-seven" class="odd form-zebra">
		<h2>Administrator Options</h2>
		<?php print drupal_render($form['field_feature_this']); ?>
		<?php print drupal_render($form['group_register']); ?>
	</div>	
		<!--Print the rest of the form-->
	<div id="studio-remain" class="even last form-zebra">
		<?php print drupal_render_children($form); ?>
	</div>
	<?php 
		}
		else {
	?>
	<div id="studio-remain" class="even last form-zebra">
		<?php print drupal_render_children($form); ?>
	</div>	
	<?php } ?>
</div>