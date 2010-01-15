<div id="footer">
	<div class="container_16">
		<div class="grid_5">
			<h3>Declassified</h3>
			<hr/>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
		</div>
		<div class="grid_5">
			<h3>SIGINT</h3>
			<hr/>
			<div class="network">
				<p><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url') ?>/img/rss.png" align="absmiddle" alt="Subscribe to RSS Feed"/>Subscribe to RSS Feed</a></p>
				<p><a href="http://twitter.com/wordpollution"><img src="<?php bloginfo('template_url') ?>/img/twitter.png" align="absmiddle" alt="Follow @wordpollution on Twitter"/>Follow @wordpollution</a> on Twitter</p>
			</div>

			<form action="<?php bloginfo('home'); ?>" id="searchform" method="get">
				<div class="search">
					<label for="s">Search</label>
					<input type="text" id="s" name="s" value=""/>
					<input type="submit" value="Search" id="searchsubmit" />
				</div>
			</form>
		</div>
		<div class="grid_6">
			<h3>Surveillance</h3>
			<hr/>
			<div class="tweet">
				<?php aktt_latest_tweet(); ?>
			</div>
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

	$('#s').focus(function() {
		$('#searchform label').hide(0);
	});

	$('#s').blur(function() {
		if($(this).val() == '') {
			$('#searchform label').show(0);
		}
	});
	
	$('.pushpin').hover(function() {
		var callout = $('<div class="callout"><h4>' +
							$(this).find('.title').text() +
						'</h4><em>' + $(this).find('.info').text() +
						'</em><p>' + $(this).find('.description').text() +
						'<a href="' + $(this).find('a').attr('href') + '"> Read More...</a></p></div>');
						
		callout.css('left', '40px');
		callout.css('display', 'block');
		callout.css('opacity', '0');
		$(this).append(callout);
		Cufon.replace('.callout h4', { fontFamily: 'Rockwell Std', textShadow: '1px 1px #161a1c' });
		Cufon.now();
		callout.animate({
			left: '10px',
			opacity: 1.0,
		}, 200);
	}, function() {
		$(this).find('.callout').animate({
			left: '40px',
			opacity: 0.0,
		}, 200, function() { $(this).remove(); });
	});
</script>
</body>
</html>