<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Signature Generator by inteNsE-</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="">SignatureGenerator</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a role="button" data-toggle="modal" data-target="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contact">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Contact</h4>
				</div>
				<div class="modal-body">
					<div class="col-md-6">
						<p>Generator created by <strong>RaiZeN</strong>.</p>
						<p><a href="http://steamcommunity.com/id/xRaiZeN" target="_blank"><i class="fa fa-steam-square"></i> Steam</a></p>
						<p><a href="http://twitter.com/xRaiZeN_" target="_blank"><i class="fa fa-twitter-square"></i> Twitter</a></p>
					</div>
					<div class="col-md-6 text-right">
						<img src="https://i.imgur.com/f5gUlep.jpg" class="avatar" />
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container container2">

		<div class="col-md-12">
			<h3 class="pull-left"><i class="fa fa-pencil-square-o"></i> SignatureGenerator v1.3</h3>
			<h3 class="pull-right">Preview</h3>
		</div>

	</div>

	<div class="container container2" style="margin-top:10px">

		<div class="col-md-4">
			<label>Category</label>
			<select class="form-control" id="cat" onchange="refresh();">
				<option value="cars" selected="selected">Cars</option>
				<option value="films">Films</option>
				<option value="games">Games</option>
				<option value="girls">Girls</option>
			</select>

			<label>Background</label>
			<select  class="form-control" id="bg" onchange="refresh();">
				<option value="bg1">Background #1</option>
				<option value="bg2">Background #2</option>
				<option value="bg3">Background #3</option>
				<option value="bg4">Background #4</option>
				<option value="bg5" selected="selected">Background #5</option>
			</select>

			<label>Nickname</label>
			<input type="text" class="form-control" id="nick" onkeyup="refresh();" placeholder="RaiZeN" />
		</div>

		<div class="col-md-8 text-right">
			
			<img src="" id="img" />

			<div class="well well-sm col-md-10 text-right pull-right" style="margin-top:5px">https://skript.pl/projekty/generator-sygnatur/<span id="string"></span></div>

		</div>

	</div>

	<div class="container text-right">
		Copyright &copy; 2016 yourdomain.com
	</div>

	<!-- jQuery Version 1.11.1 -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<script type="text/javascript">
	
		function refresh()
		{
			var e = document.getElementById("cat");
			var cat = e.options[e.selectedIndex].value;

			var string = 'img.php?bg=' + document.getElementById('bg').value + '&nick=' + document.getElementById('nick').value + '&cat=' + cat;

			var string2 = cat + '/' + document.getElementById('bg').value + '/' + document.getElementById('nick').value + '.png';

			document.getElementById('img').src = string;
			document.getElementById('string').innerHTML = string2;
		}

		refresh();


	</script>

</body>

</html>
