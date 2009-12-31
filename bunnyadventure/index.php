<?php
		get_header(); ?>
		
		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>

				<div class="post" id="post-<?php the_ID(); ?>">
					<div class="title">
						<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
						<div class="date"><?php the_time('F jS, Y') ?></div>
					</div>
					
					<div class="entry">
						<?php the_content('Continue &raquo;'); ?>
					</div>
				</div>
			<?php endwhile; ?>
			
			<div class="navigation">
				<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
				<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
			</div>
			
		<?php else: ?>
			<h1>Not Found</h1>
			<p>Sorry, there are no posts yet.</p>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>