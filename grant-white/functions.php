<?php

	if(function_exists( 'add_theme_support')) {
		add_theme_support('post-thumbnails', array('post'));
		set_post_thumbnail_size(120, 80, true);
		add_image_size( 'single-post-thumbnail', 700, 9999 );
	}

	automatic_feed_links();

	if (function_exists('register_sidebar'))
		register_sidebar(array(
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
		));

?>