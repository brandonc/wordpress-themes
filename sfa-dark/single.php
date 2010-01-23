<?php
		get_header(); ?>
		
		<div id="main" class="content">
			<div class="container_16">
				<div class="grid_10">
					<?php if (have_posts()) : the_post(); ?>
						<h1><?php the_title(); ?></h1>
						<h2><?php the_excerpt(); ?></h2>
						<?php the_content(); ?>
					<?php endif; ?>
				</div>
				<div class="grid_6">
					<?php
						$overlay = get_post_meta($post->ID, 'map_overlay', true);
						if($overlay):
							$ud = wp_upload_dir();
?>
							<div class="minimap">
								<img width="340" height="181" src="<?php echo $ud['url']; ?>/overlay-<?php echo $overlay; ?>.png" alt="Mini-map"/>
							</div>
<?php
						endif;
					?>
				</div>
			</div>
			
			<p class="clear">&nbsp;</p>
		</div>
		
		<div class="comments">
			<div class="container_16">		
				<div class="grid_16">
					<?php comments_template( '/comments.php' ); ?>
				</div>
				<p class="clear">&nbsp;</p>
				<p class="clear">&nbsp;</p>
			</div>
		</div>
	<!--[if IE]></div><![endif]-->
	</div><?php // page ?>
</div><?php // wrap ?>
<?php get_footer(); ?>
