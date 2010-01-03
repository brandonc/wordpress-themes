<?php get_header(); ?>

<?php get_sidebar(); ?>

<div class="column content">
<?php if (have_posts()) : the_post(); ?>
	<?php the_title(); ?><br/>
    <?php the_content(); ?>
<?php endif; ?>
</div>

<?php get_footer(); ?>