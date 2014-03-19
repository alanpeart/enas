(function ($) {$(document).ready(function() { 
	if($('.view-news.view-display-id-page .view-content').length) {
	  $('.view-news.view-display-id-page .view-content').imagesLoaded( function() {
	    var container = document.querySelector('.view-news.view-display-id-page .view-content');
		  var msnry = new Masonry( container, {
			columnWidth: 230,
			itemSelector: '.views-row',
		  });
		 });
	}
	if($('.view-related-news .view-content').length) {
	  $('.view-related-news .view-content').imagesLoaded( function() {
	    var container = document.querySelector('.view-related-news .view-content');
		  var msnry = new Masonry( container, {
			columnWidth: 230,
			itemSelector: '.views-row',
		  });
		 });
	}
	$('#edit-mailchimp-lists-mailchimp-email-newsletter-signup-mergevars-email').example('Enter email for newsletter sign-up');
	$('#edit-mailchimp-lists-mailchimp-email-newsletter-signup-mergevars-fname').example('Name');
});})(jQuery);