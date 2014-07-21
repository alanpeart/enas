<?php
print drupal_render($form['form_build_id']);
print drupal_render($form['form_id']);
?>
<h1 id="register-title">Register</h1>
<div id="register-main" class="large-9">
	<p class="intro">There are a host of benefits to becoming an ENAS member. You will automatically join a community of hundreds of artists across the county.</p>
	<p>You will also be eligible for opportunities which include commissions, residencies, studio visits, research trips, professional development, business training and many more. Whether you choose to set up your own studio or register as an individual, ENAS can support your practice. Visit our <a href="<?php print url('associate-membership'); ?>">Associate Studio</a> and <a href="<?php print url('affiliate-membership'); ?>">Affiliate Artist</a> pages for more detail.</p>
	<div id="register-account">
		<h2>Account login</h2>
		<?php print drupal_render($form['account']['name']); ?>
		<?php print drupal_render($form['account']['mail']); ?>
	</div>
	<div id="register-about">
		<h2>About me</h2>
		<?php print drupal_render($form['field_about_the_artist']); ?>
		<?php print drupal_render($form['field_more_about_me']); ?>
	</div>
	<div id="register-photos">
		<h2>My images</h2>
		<?php unset($form['field_photo']['und'][0]['#description']); ?>
		<?php print drupal_render($form['field_photo']); ?>
		<p>A picture of yourself. This will appear on your profile page and in the forums. The picture will be resized to 100px wide and 100px tall, so please upload an image that works at small size (a picture of your face will work best). Images with a file size larger than 512KB cannot be uploaded here.</p>
		
		<?php unset($form['picture']['picture_upload']['#description']); ?>
		<?php print str_replace('<span class="fieldset-legend">Picture</span>', '<span class="fieldset-legend">Your Personal Banner</span>', drupal_render($form['picture'])); ?>
		<p>A wide picture used at the top of your Artist Profile in our directory and as a thumbnail image if you are selected as a featured artist by site moderators. Pictures larger than 720x380 pixels will be scaled down. For optimum viewing, we suggest uploading an image of your work in landscape formap at 720x380px if you want to avoid any cropping/scaling.</p>
		
		<?php print drupal_render($form['field_more_pictures']); ?>
		<p>If you wish, you can upload more pictures of your own work here. These will be displayed on your profile page in our directory. They will not be cropped but they may be scaled in proportion for our gallery view. A full size expanded image can be viewed at any time by a user browsing your personal gallery by simply clicking a thumbnail.</p>
	</div>
	<div id="register-disciplines">
		<h2>My discipines</h2>
		<?php print drupal_render($form['field_disciplines']); ?>
	</div>
	<div id="register-links">
		<h2>My links</h2>
		<?php print drupal_render($form['field_website']); ?>
		<?php print drupal_render($form['field_twitter_handle']); ?>
		<?php print drupal_render($form['field_facebook_page']); ?>
	</div>
	<div id="register-join-studio">
		<h2>How would you like to join ENAS?</h2>
		<?php print drupal_render($form['field_i_want_to']); ?>
		<?php // print drupal_render($form['field_choose_a_studio']); ?>
		<?php print drupal_render($form['field_how_many_members']); ?>
		<?php print drupal_render($form['og_user_node']); ?>
	</div>
	<div id="register-mailchimp">
		<?php print drupal_render($form['mailchimp_lists']); ?>
	</div>
	<div id="register-submit">
		<?php print drupal_render($form['actions']); ?>
		<?php print drupal_render($form['#attached']); ?>
	</div>
</div>
<pre>
<?php // print_r($form); ?>
</pre>