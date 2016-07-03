Category:
<select id="cat" onchange="refresh();">
	<option value="cars" selected="selected">cars</option>
	<option value="films">films</option>
	<option value="games">games</option>
	<option value="girls">girls</option>
</select>

<br />

Background:
<select id="bg" onchange="refresh();">
	<option value="bg1">bg1</option>
	<option value="bg2">bg2</option>
	<option value="bg3">bg3</option>
	<option value="bg4">bg4</option>
	<option value="bg5" selected="selected">bg5</option>
</select>

<br / >
Nick: <input type="text" id="nick" onkeyup="refresh();" />
<br>

<img src="" id="img" />

<script type="text/javascript">
	
	function refresh()
	{
		var e = document.getElementById("cat");
		var cat = e.options[e.selectedIndex].value;

		document.getElementById('img').src = 'img.php?bg=' + document.getElementById('bg').value + '&nick=' + document.getElementById('nick').value + '&cat=' + cat;
	}

	refresh();


</script>
