<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title('&ndash;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<?php wp_head(); ?>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/cufon-yui.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/Rockwell_Std_400.font.js"></script>
	<script type="text/javascript">
		Cufon.replace('h1,h2,#nav strong', { fontFamily: 'Rockwell Std' });
	</script>
</head>
<body <?php body_class(); ?>>
<div id="wrap">
	<div id="page" class="container_16 clearfix">
		<div id="header" class="grid_7">
			<div id="logo"><a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="Secret Foreign Action"/></a></div>
		</div>
		<div class="grid_9">
			<ul id="nav">
				<?php 
				  $pages = get_pages('hierarchical=0&meta_key=nav_section&meta_value=primary&sort_column=post_date&sort_order=ASC'); 
				  foreach ($pages as $page):
				?>
					<li><a href="<?php echo get_page_link($page->ID); ?>"><strong><?php echo $page->post_title ?></strong><br/>
						<em><?php echo $page->post_excerpt; ?></em></a>
					</li>
				<?php
				  endforeach;
				?>
			</ul>
		</div>
		
