<?php get_header(); ?>

<?php get_sidebar(); ?>

<div class="column content">
<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	global $query_string;
	query_posts($query_string.'&posts_per_page=1&paged='.$paged);

	if (have_posts()) : the_post();
		$has_next = ($paged < $wp_query->max_num_pages);
		$has_prev = ($paged > 1);
?>
	<div class="photo">
        <div style="margin-top: 0;">
			<?php the_post_thumbnail('single-post-thumbnail'); ?>
	        <img id="arrow-previous" class="arrow" src="<?php bloginfo('template_directory') ?>/img/left_arrow.png"/>
	        <img id="arrow-next" class="arrow" src="<?php bloginfo('template_directory') ?>/img/right_arrow.png"/>
	        <br clear="all"/>
			<div class="number left">
                Image <?php echo $paged; ?> / <?php echo $wp_query->max_num_pages; ?><br/>
				<?php previous_posts_link('PREVIOUS'); ?>
				<?php next_posts_link('NEXT'); ?>
            </div>
            <div class="caption right">
                <?php the_title(); ?><br/>
                <?php the_content(); ?>
            </div>
        </div>
	</div>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
	<script type="text/javascript">        
        $(window).load(function() {
            var photo = $('.wp-post-image');
            var offset = photo.offset();
            var width = photo.width();
            var height = photo.height();
            var current_position = 0;
            
            var MousePosition = {
                NONE:0,
                LEFT:1,
                RIGHT:2
            };

            $.mouse_within = function(obj, e) {
                var offset = obj.offset();
                var width = obj.width();
                var height = obj.height();

                if(e.pageX >= offset.left && e.pageY >= offset.top
                    && e.pageY < height && e.pageX < (width / 2 + offset.left))
                {
                    return MousePosition.LEFT;
                } else if(e.pageX >= offset.left && e.pageY >= offset.top
                    && e.pageY < (offset.top + height) && e.pageX > (width / 2) + offset.left && e.pageX < offset.left + width)
                {
                    return MousePosition.RIGHT;
                }
                return MousePosition.NONE;
            };

            $.photo_detect = function(pos) {
                current_position = pos;

				$('.arrow').hide();
               	$('.wp-post-image').css('cursor', 'default');
              	
                if(pos == MousePosition.LEFT) {
                    <?php if($has_prev): ?>
                    $('#arrow-previous').show();
                    $('.wp-post-image').css('cursor', 'pointer');
                	<?php endif; ?>
                } else if(pos == MousePosition.RIGHT) {
                    <?php if($has_next): ?>
                    $('#arrow-next').show();
                    $('.wp-post-image').css('cursor', 'pointer');
                	<?php endif; ?>
                }
            };
            
            $('#arrow-previous').css({ left: (27 + offset.left) + 'px', top: (height / 2 + offset.top - 22) + 'px'});
            $('#arrow-next').css({left: (width - 75 + offset.left) + 'px', top: (height / 2 + offset.top - 22) + 'px'});
            
            if(location.search.indexOf('i=p') >= 0) {
                $.photo_detect(MousePosition.LEFT);
            } else if(location.search.indexOf('i=n') >= 0) {
                $.photo_detect(MousePosition.RIGHT);
            }

            $(document).mousemove(function(e) {
				$.photo_detect($.mouse_within($('.wp-post-image'), e));
				
				if(current_position == MousePosition.LEFT || current_position == MousePosition.RIGHT) {
					$('.caption').show();
				} else {
					$('.caption').hide();
				}
            });
			
            $('.wp-post-image,.arrow').click(function() {
                if(current_position == MousePosition.RIGHT) {
                    <?php if($has_next): ?>
                        document.location.href = '<?php next_posts() ?>';
               		<?php endif; ?>
                } else if(current_position == MousePosition.LEFT) {
                    <?php if($has_prev): ?>
                        document.location.href = '<?php previous_posts() ?>';
                	<?php endif; ?>
                }
            });
        });
    </script>
<?php
	endif;
	wp_reset_query();
?>
</div>

<?php get_footer(); ?>