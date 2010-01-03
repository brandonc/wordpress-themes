<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title('&ndash;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<?php wp_head(); ?>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/cufon-yui.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/VAG_Rounded_Std_700.font.js"></script>
	<script type="text/javascript">
		Cufon.replace('h1', { fontFamily: 'VAG Rounded Std' });
	</script>
</head>
<body <?php body_class(); ?>>
<div id="page">
	<div id="wrap" class="content clearfix">
		<div id="header">
			<div id="logo"><a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="Levi Awesome"/></a></div>
			
			<a href="<?php bloginfo('rss2_url'); ?>" class="rss"></a>
		
			<div id="search">
				<?php get_search_form(); ?>
			</div>
		</div>
		
