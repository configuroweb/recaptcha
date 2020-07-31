<!DOCTYPE html>
<?php session_start()?>
<html lang="es">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://www.configuroweb.com">ConfiguroWeb</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Generador de Captcha</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-3"></div>	
		<div class="col-md-6">
			<a class="btn btn-success" href="image.php">Genera el Captcha</a>
			<br />
			<br />
			<img src="images/captcha.jpg" />
		</div>	
	</div>
</body>
</html>