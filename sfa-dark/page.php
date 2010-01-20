<?php
		get_header(); ?>
		
		<div id="main" class="pagecontent container_16">
			<div class="grid_10">
				<?php if (have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p>
				<?php endif; ?>
			</div>
			<div class="grid_6">
			</div>
		</div>
		<p class="clear">&nbsp;</p>
		<p class="clear">&nbsp;</p>
	<!--[if IE]></div><![endif]-->
	</div><?php // page ?>
</div><?php // wrap ?>
<?php get_footer(); ?>
