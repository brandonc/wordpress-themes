<?php
		get_header(); ?>
		
		<div class="left">
		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<div class="title">
						<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
						<div class="date"><?php the_time('F jS, Y') ?> by <?php the_author_posts_link(); ?></div>
					</div>

					<?php if (!has_post_thumbnail()) : ?>
						<div class="entry article">
							<?php the_content('Continue &raquo;'); ?>
						</div>
					<?php else: ?>
						<div class="entry image">
							<?php the_post_thumbnail('single-post-thumbnail'); ?>
							<div class="caption"><?php the_content(); ?></div>
						</div>
					<?php endif;

						$posttags = get_the_tags();
						$is_first = True;
						if ($posttags) { ?>
						<div class="meta">
							<p>See more posts tagged <?php foreach($posttags as $tag) {
								if(!$is_first) {
									echo " or "; 
								} $is_first = False; ?>
								<a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name ?></a> <?php } ?>
							</p>
						</div>
						<?php } ?>
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
		<div class="right sidebar">
			<h1>I RUN IT</h1>
		</div>
	</div>
<?php get_footer(); ?>