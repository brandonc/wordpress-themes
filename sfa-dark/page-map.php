<div class="container_16 modal-container">
	<div class="grid_16 mapcontainer">
		<div class="modal">
			<div class="map"></div>
			<a href="/" class="modal-close"></a>
			
			<?php
				$posts = get_posts(array('numberposts'=>-1, 'orderby'=>'meta_value', 'order'=>'ASC', 'meta_key'=>'map_coords'));
				foreach($posts as $post) {
					$coords = get_post_meta($post->ID, 'map_coords', true);
					if($coords) {
						$coords_sploded = explode(",", $coords);
						$left = $coords_sploded[0];
						$top = $coords_sploded[1];
						echo '<a href="';
						the_permalink();
						echo '"><span class="pushpin" style="left: '.$left.'px; top: '.$top.'"><p class="title">'.$post->post_title.'</p><p class="description">'.$post->post_excerpt.'</p><p class="year">'.$year.'</p></a>';
					}
				}
			?>
		</div>
	</div>
</div>