<?php
		get_header(); ?>
		
		<div id="main" class="pagecontent container_16">
			<div class="grid_16">
				<h1>Executive Timeline</h1>
				
				<div class="timeline-ticks">
					<?php
						$startyear = 1945;
						$lastyear = 2012;
						$posts = get_posts(array('numberposts'=>-1, 'orderby'=>'meta_value', 'order'=>'ASC', 'meta_key'=>'timeline_year'));
						foreach($posts as $post) {
							$year = get_post_meta($post->ID, 'timeline_year', true);
							if($year) {
								$left = (($year-$startyear)*14);
								echo '<a href="';
								the_permalink();
								echo '"><span class="pushpin" style="left: '.$left.'px;"><p class="title">'.$post->post_title.'</p><p class="description">'.$post->post_excerpt.'</p><p class="year">'.$year.'</p></span></a>';
							}
						}
						
						for($y = $startyear; $y <= $lastyear; $y += 5) {
							$left = (($y-$startyear)*14);
							echo '<span class="year" style="left: '.$left.'px;">'.$y.'</span>';
						}
					?>
					<div class="callout callout-vertical" style="display: none; top: -101px;">
						<h4></h4>
						<em></em><p>
						<a href="#"> Read More...</a></p>
					</div>
				</div>

				<ol class="portraits">
					<li class="years_8"><div class="president truman"><label>Henry S. Truman (1945-1953)</label></div></li>
					<li class="years_8"><div class="president eisenhower"><label>Dwight D. Eisenhower (1953-1961)</label></div></li>
					<li class="years_2"><div class="president kennedy"><label>John F. Kennedy (1961-1963)</label></div></li>
					<li class="years_6"><div class="president johnson"><label>Lyndon B. Johnson (1963-1969)</label></div></li>
					<li class="years_5"><div class="president nixon"><label>Richard M. Nixon (1969-1974)</label></div></li>
					<li class="years_3"><div class="president ford"><label>Gerald R. Ford (1974-1977)</label></div></li>
					<li class="years_4"><div class="president carter"><label>James Carter (1977-1981)</label></div></li>
					<li class="years_8"><div class="president reagan"><label>Ronald Reagan (1981-1989)</label></div></li>
					<li class="years_4"><div class="president bush41"><label>George H. W. Bush (1989-1993)</label></div></li>
					<li class="years_8"><div class="president clinton"><label>William J. Clinton (1993-2001)</label></div></li>
					<li class="years_8"><div class="president bush43"><label>George W. Bush (2001-2009)</label></div></li>
					<li class="years_3"><div class="president obama"><label>Barack H. Obama (2009)</label></div></li>
				</ol>
			</div>
		</div>
		<p class="clear">&nbsp;</p>
		<p class="clear">&nbsp;</p>
	</div><?php // page ?>
</div><?php // wrap ?>
<?php get_footer(); ?>
