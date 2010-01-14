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
		Cufon.replace('h1', { fontFamily: 'Rockwell Std', textShadow: '1px 1px #9bd6a3' });
		Cufon.replace('h2', { fontFamily: 'Rockwell Std' });
		Cufon.replace('h3', { fontFamily: 'Rockwell Std', textShadow: '1px 1px #000000' });
		Cufon.replace('#nav strong', { fontFamily: 'Rockwell Std', hover: true});
	</script>
</head>
<body <?php body_class(); ?>>
<div id="wrap">
	<div id="page" class="container_16 clearfix">
		<div id="header">
			<div id="logo" class="grid_7"><a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="Secret Foreign Action"/></a></div>
			<div class="grid_9">
				<ul id="nav">
					<?php 
					  $pages = get_pages('hierarchical=0&meta_key=nav_section&meta_value=primary&sort_column=post_date&sort_order=DESC'); 
					  foreach ($pages as $n => $page):
						$nav_hint = get_post_meta($page->ID, 'nav_hint', true);
					?>
						<li class="grid_3<?php if($n == 0) echo ' alpha'; elseif($n == 2) echo ' omega'; ?>"><a href="<?php echo get_page_link($page->ID); ?>"><em><?php echo $nav_hint; ?></em><br/>
							<strong><?php echo $page->post_title ?></strong></a>
						</li>
					<?php
					  endforeach;
					?>
				</ul>
			</div>
		</div>
		