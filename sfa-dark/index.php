<?php
		get_header(); ?>
		
		<div id="tagline" class="grid_16">
			<?php bloginfo('description'); ?> <a href="/about">More</a> &raquo;
		</div>
		<div>
		<?php if (have_posts()) : the_post(); ?>
			<div class="summary grid_10" id="post-<?php the_ID(); ?>">
				<?php the_post_thumbnail('single-post-thumbnail'); ?>
				<h1><?php the_title(); ?></h1>
				<h2><?php the_excerpt(); ?></h2>
			</div>
			<?php if (have_posts()) : the_post(); ?>
				<div class="summary grid_6" id="post-<?php the_ID(); ?>">
					<?php the_post_thumbnail(array(320,999)); ?>
					<h2><?php the_title(); ?></h2>
					<p><?php the_excerpt(); ?></p>
				</div>
			<?php endif; ?>
		<?php else: ?>
			<h1>Either You Shouldn't Be Here,</h1>
			<h2>Or the blog has been dismantled by Other Government Agencies.</h2>
		<?php endif; ?>
		</div>
		<div class="grid_6">
			
		</div>
	</div>
</div>
<?php get_footer(); ?>