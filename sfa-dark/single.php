<?php
		get_header(); ?>
		
		<div id="main" class="content">
			<div class="container_16">
				<div class="grid_10">
					<?php if (have_posts()) : the_post(); ?>
						<h1><?php the_title(); ?></h1>
						<h2><?php the_excerpt(); ?></h2>
						<p><?php the_content(); ?></p>
					<?php endif; ?>
				</div>
				<div class="grid_6">
				</div>
				<p class="clear">&nbsp;</p>
				<div class="discuss grid_16">
					<a id="load-comments" href="<?php bloginfo('home'); ?>/comments/?id=<?php echo $post->ID ; ?>">Discuss</a>
				</div>
			</div>
			
			<p class="clear">&nbsp;</p>
		</div>
		
		<div class="comments">
			<div class="container_16">		
				<div class="grid_16"></div>
			</div>
		</div>
	<!--[if IE]></div><![endif]-->
	</div><?php // page ?>
</div><?php // wrap ?>
<?php get_footer(); ?>
