Cat: <input type="text" id="cat" onkeyup="refresh();" /> <span id="cat2"></span>
<br />
Bg: <input type="text" id="bg" onkeyup="refresh();" />
<br / >
Nick: <input type="text" id="nick" onkeyup="refresh();" />
<br>

<img src="" id="img" />

<script type="text/javascript">
	
	function refresh()
	{
		document.getElementById('img').src = 'img.php?bg=' + document.getElementById('bg').value + '&nick=' + document.getElementById('nick').value + '&cat=' + document.getElementById('cat').value;
	}


</script>
