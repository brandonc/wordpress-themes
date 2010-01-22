<?php 
	$post = get_post($_GET['id']);

	comments_template( '/comments.php' );
?> 
<p class="clear">&nbsp;</p>