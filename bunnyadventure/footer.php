<div id="footer">  
	<p>Copyright &copy;2009 Mom and Pop</p> 
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