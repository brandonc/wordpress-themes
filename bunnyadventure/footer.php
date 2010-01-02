<div id="footer">  
	<div class="content">
		<div class="left">
			<p>Copyright &copy;<?php echo date('Y'); ?> Levi Awesome<br/>
			Myself and this website were produced by <a href="mailto:meredith.yvonne@gmail.com">Momma</a> and <a href="mailto:brandon.croft@gmail.com">Papa</a></p>
		</div>
		<div class="right">
			<p>Published using <a href="http://www.wordpress.org">Wordpress</a>.</p>
		</div>
	</div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
	$('#s').val('search');
	
	$('#s').focus(function() {
		if($(this).val() == 'search')
			$(this).val('');
	});
	
	$('#s').blur(function() {
		if($(this).val() == '')
			$(this).val('search');
	});
</script>
</body>
</html>