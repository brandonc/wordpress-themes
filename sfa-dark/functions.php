<?php
	if(function_exists('add_theme_support')) {
		add_theme_support('post-thumbnails', array('post'));
		set_post_thumbnail_size(120, 60, true);
		add_image_size( 'single-post-thumbnail', 560, 9999 );
	}
	
	automatic_feed_links();
	remove_action('wp_head', 'wp_generator');
?>