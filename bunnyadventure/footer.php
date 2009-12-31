<div id="footer">  
	<div class="content">
		<div class="left">
			<p>Copyright &copy;2009 Levi Awesome<br/>
			Myself and this website were produced by Mom and Pop</p>
		</div>
		<div class="right">
			<p><a href="/archive">View Archives</a><br/>
			Contact: <a href="mailto:meredith.yvonne@gmail.com">Mom</a>, <a href="mailto:brandon.croft@gmail.com">Pop</a></p>
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