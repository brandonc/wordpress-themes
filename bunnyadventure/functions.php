<?php
	if(function_exists( 'add_theme_support')) {
		add_theme_support('post-thumbnails', array('post'));
		set_post_thumbnail_size(120, 60, true);
		add_image_size( 'single-post-thumbnail', 760, 9999 );
	}
?>