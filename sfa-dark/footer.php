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
				<p><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url') ?>/img/rss.png" width="16" height="16" align="absmiddle" alt="Subscribe to RSS Feed"/>Subscribe to RSS Feed</a></p>
				<p><a href="http://twitter.com/wordpollution"><img src="<?php bloginfo('template_url') ?>/img/twitter.png" width="16" height="16" align="absmiddle" alt="Follow @wordpollution on Twitter"/>Follow @wordpollution</a> on Twitter</p>
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
</body>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<?php if(defined('DEBUG')): ?>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.hoverIntent.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.colorbox.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/app.js"></script>
<?php else: ?>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/app-compiled.js"></script>
<?php endif; ?>
</html>