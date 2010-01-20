<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<title><?php wp_title('&ndash;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/cufon-yui.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/Rockwell_Std_400.font.js"></script>
	<script type="text/javascript">
		Cufon.replace('.summary h1, .pagecontent h1', { fontFamily: 'Rockwell Std', textShadow: '1px 1px #9bd6a3' });
		Cufon.replace('.content h1', { fontFamily: 'Rockwell Std', textShadow: '1px 1px #4e8264' });
		Cufon.replace('h2,#nav strong', { fontFamily: 'Rockwell Std' });
		Cufon.replace('h3', { fontFamily: 'Rockwell Std', textShadow: '1px 1px #000000' });
	</script>
</head>
<body <?php body_class(); ?>>
<div id="wrap">
	<div id="page" class="clearfix">
		<!--[if lte IE 6]><div id="#ie6" class="ie"><![endif]-->
		<!--[if IE 7]><div id="#ie7" class="ie"><![endif]-->
		<!--[if IE 8]><div id="#ie8" class="ie"><![endif]-->
		<div id="header" class="container_16">
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

			<div class="grid_16 iewarning">
				<h1>Technical Warning</h1>
				<p>There are two very compelling reasons to switch browsers. First, other browsers support rendering improvements such as 2D graphics, rounded corners, and drop shadows. Second, you will enjoy at least double the javascript performance, especially on this website. We recommend downloading Google's <a href="http://www.google.com/chrome">Chrome browser</a> or <a href="http://www.getfirefox.com">Mozilla Firefox</a>.</p>
			</div>
		</div>		
