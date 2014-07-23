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
	if($('.view-artist-more-pictures .view-content').length) {
	  $('.view-artist-more-pictures .view-content').imagesLoaded( function() {
	    var container = document.querySelector('.view-artist-more-pictures .view-content');
		  var msnry = new Masonry( container, {
			columnWidth: 230,
			itemSelector: '.views-row',
		  });
		 });
	}	
	$('.form-item-mailchimp-lists-mailchimp-email-newsletter-signup-mergevars-EMAIL input').example('Enter email for newsletter sign-up');
	$('.form-item-mailchimp-lists-mailchimp-email-newsletter-signup-mergevars-FNAME input').example('Name');
	if($('.flexslider_views_slideshow_slide .views-field-title').length) {
		var offsetl = $('#main-menu').offset();
		$('.flexslider_views_slideshow_slide .views-field-title').css('left',offsetl.left);
		window.onresize = function(event) {
			var offsetl = $('#main-menu').offset();
			$('.flexslider_views_slideshow_slide .views-field-title').css('left',offsetl.left);
		}
	}
	if($('#views-exposed-form-news-page .views-exposed-form').length) {
		$('#views-exposed-form-news-page .views-submit-button').insertBefore($('#views-exposed-form-news-page .views-exposed-widgets h3.sub-header').eq(1));
		$('#views-exposed-form-news-page .form-checkboxes input').change(function() {
			$('#views-exposed-form-news-page #edit-submit-news').click();
		});
	}
	if($('#views-exposed-form-events-list-page .views-exposed-form').length) {
		$('#views-exposed-form-events-list-page .views-submit-button').insertBefore($('#views-exposed-form-events-list-page .views-exposed-widgets h3.sub-header').eq(1));
		$('#views-exposed-form-events-list-page .form-checkboxes input').change(function() {
			$('#views-exposed-form-events-list-page #edit-submit-events-list').click();
		});
	}
	if($('#views-exposed-form-forum-page .views-exposed-form').length) {
		$('#views-exposed-form-forum-page .views-submit-button').insertBefore($('#views-exposed-form-forum-page .views-exposed-widgets h3.sub-header').eq(1));
		$('#views-exposed-form-forum-page .form-checkboxes input').change(function() {
			$('#views-exposed-form-forum-page #edit-submit-forum').click();
		});
	}
	if($('#views-exposed-form-resources-page .views-exposed-form').length) {
		$('#views-exposed-form-resources-page .views-submit-button').insertBefore($('#views-exposed-form-resources-page .views-exposed-widgets h3.sub-header').eq(1));
		$('#views-exposed-form-resources-page .form-checkboxes input').change(function() {
			$('#views-exposed-form-resources-page #edit-submit-resources').click();
		});
	}
});})(jQuery);