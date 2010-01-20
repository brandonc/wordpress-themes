<?php
		get_header(); ?>
		
		<div id="main" class="container_16">
			<?php if (is_home()): ?>
			<div id="tagline" class="grid_16">
				<?php bloginfo('description'); ?> <a href="/about">More</a> &raquo;
			</div>
			<?php endif; ?>
			<?php if (have_posts()) : the_post(); ?>
				<div class="summary grid_10" id="post-<?php the_ID(); ?>">
					<?php the_post_thumbnail('single-post-thumbnail'); ?>
					<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
					<h2><?php the_excerpt(); ?></h2>
				</div>
				<?php if (have_posts()) : the_post(); ?>
					<div class="summary grid_6" id="post-<?php the_ID(); ?>">
						<?php the_post_thumbnail(array(320,999)); ?>
						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						<?php the_excerpt(); ?>
					</div>
				<?php endif; ?>
			<?php else: ?>
			<div class="grid_16 pagecontent">
				<h1>Either You Shouldn't Be Here,</h1>
				<h2>Or the blog has been dismantled by Other Government Agencies.</h2>
			</div>
			<?php endif; ?>
			<p class="clear">&nbsp;</p>
			<p class="clear">&nbsp;</p>
		</div>
	<!--[if IE]></div><![endif]-->
	</div><?php // page ?>
</div><?php // wrap ?>
<?php get_footer(); ?>
