<div id="footer">
	<div class="container_16">
		<div class="grid_4">
			<h3>Declassified</h3>
			<hr/>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
		</div>
		<div class="grid_6">
			<h3>SIGINT</h3>
			<hr/>
		</div>
		<div class="grid_6">
			<h3>Surveillance</h3>
			<hr/>
		</div>
		<div class="clear grid_16 quiet" id="copyright">
			Copyright &copy;<?php echo date('Y') ?> S.F.A.
		</div>
	</div>
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">
	$('#nav a').hover(function() {
		Cufon.replace($(this).find('strong').get(), { color: '#4e8264', textShadow: '1px 1px #0d0e0e' });
	}, function() {
		Cufon.replace($(this).find('strong').get(), { color: '#000000', textShadow: 'none' });
	});
</script>
</body>
</html>