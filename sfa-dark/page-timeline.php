<?php
		get_header(); ?>
		
		<div class="pagecontent container_16">
			<div class="grid_16">
				<h1>Browse Entries by Executive Timeline</h1>
			</div>
			<div class="grid_8 push_1 timeline">
				<ol class="portraits">
					<li class="years_8"><label class="lighter">Henry S. Truman</label><img src="<?php bloginfo('template_url') ?>/img/president-truman.jpg" alt="Henry S. Truman (1945-1953)"/></li>
					<li class="years_8"><label class="lighter">Dwight D. Eisenhower</label><img src="<?php bloginfo('template_url') ?>/img/president-eisenhower.jpg" alt="Dwight D. Eisenhower (1953-1961)"/></li>
					<li class="years_2"><label class="lighter">John F. Kennedy</label><img src="<?php bloginfo('template_url') ?>/img/president-kennedy.jpg" alt="John F. Kennedy (1961-1963)"/></li>
					<li class="years_6"><label class="lighter">Lyndon B. Johnson</label><img src="<?php bloginfo('template_url') ?>/img/president-johnson.jpg" alt="Lyndon B. Johnson (1963-1969)"/></li>
					<li class="years_6"><label class="lighter">Richard M. Nixon</label><img src="<?php bloginfo('template_url') ?>/img/president-nixon.jpg" alt="Richard M. Nixon (1969-1974)"/></li>
					<li class="years_4"><label class="lighter">Gerald R. Ford</label><img src="<?php bloginfo('template_url') ?>/img/president-ford.jpg" alt="Gerald R. Ford (1974-1977)"/></li>
				</ol>
				<div class="timeline-ticks">
					<?php
						$startyear = 1945;
						$lastyear = 1977;
						$posts = get_posts(array('numberposts'=>-1));
						foreach($posts as $post) {
							$year = get_post_meta($post->ID, 'timeline_year', true);
							if($year) {
								$top = (($year-$startyear)*15);
								echo '<a href="';
								the_permalink();
								echo '"><span class="pushpin" style="top: '.$top.'px;"><p class="title">'.$post->post_title.'</p><p class="description">'.$post->post_excerpt.'</p></a>';
							}
						}
						
						for($y = $startyear; $y <= $lastyear; $y += 10) {
							$top = (($y-$startyear)*15);
							echo '<span class="year" style="top: '.$top.'px;">'.$y.'</span>';
						}
					?>
				</div>
			</div>
		</div>
		<p class="clear">&nbsp;</p>
		<p class="clear">&nbsp;</p>
	</div><?php // page ?>
</div><?php // wrap ?>
<?php get_footer(); ?>
