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

	function get_president_by_year(year) {
		year = parseInt(year);
		if(year >= 1945 && year <= 1953)
			return 'truman';
		else if(year > 1953 && year <= 1961)
			return 'eisenhower';
		else if(year > 1961 && year <= 1963)
			return 'kennedy';
		else if(year > 1963 && year <= 1969)
			return 'johnson';
		else if(year > 1969 && year <= 1974)
			return 'nixon';
		else if(year > 1974 && year <= 1977)
			return 'ford';
		else if(year > 1977 && year <= 1981)
			return 'carter';
		else if(year > 1981 && year <= 1989)
			return 'reagan';
		else if(year > 1989 && year <= 1993)
			return 'bush41';
		else if(year > 1993 && year <= 2001)
			return 'clinton';
		else if(year > 2001 && year <= 2009)
			return 'bush43';
		else if(year > 2009)
			return 'obama';
	}
	
	$('.pushpin').hover(function() {
		var callout = $('<div class="callout callout-vertical"><h4>' +
							$(this).find('.title').text() +
						'</h4><em>' + $(this).find('.info').text() +
						'</em><p>' + $(this).find('.description').text() +
						'<a href="' + $(this).find('a').attr('href') + '"> Read More...</a></p></div>');
		
		callout.css('left', $(this).css('left') - 150);
		callout.css('top', '-120px');
		callout.css('display', 'block');
		callout.css('opacity', '0');
		$(this).append(callout);
		Cufon.replace('.callout h4', { fontFamily: 'Rockwell Std', textShadow: '1px 1px #161a1c' });
		Cufon.now();
		callout.animate({
			top: '-90px',
			opacity: 1.0,
		}, 200);

		var saturate;
		var label;

		var president = get_president_by_year(parseInt($(this).find('.year').text()));
		saturate = $('<div class="president ' + president + ' saturate"></div>');
		label = $('.' + president + ' label');
		$('.' + president).append(saturate);

		saturate.animate({
			opacity: 1.0,
		}, 500);
	}, function() {
		$(this).find('.callout').animate({
			top: '-120px',
			opacity: 0.0,
		}, 200, function() { $(this).remove(); });

		var president = get_president_by_year(parseInt($(this).find('.year').text()));
		$('.' + president + ' > .saturate').animate({
			opacity: 0.0,
		}, 500, function() { $(this).remove(); });
	});
</script>
</body>
</html>