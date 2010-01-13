<?php
		get_header(); ?>
		
		<div class="grid_10">
		<?php if (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<?php the_post_thumbnail('single-post-thumbnail'); ?>
				<h1><?php the_title; ?></h2>
				<h2><?php the_excerpt; ?></h2>
			</div>			
		<?php else: ?>
			<div class="post">
				<h1>Either You Shouldn't Be Here,</h1>
				<h2>Or the blog has been dismantled by Other Government Agencies.</h2>
			</div>
		<?php endif; ?>
		<p>Test</p>
		</div>
		<div class="grid_6">
			<?php bloginfo('description'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>