<!DOCTYPE html>
<?php session_start()?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">ConfiguroWeb</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Generador de Captcha<h3/>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-3"></div>	
		<div class="col-md-6">
			<form action="" method="POST">
				<h3>Resuelve el Captcha</h3>
				<center><img src="captcha.php" /></center>
				<br />
				<?php include'solve.php'?>
				<div class="form-group">
					<input type="number" min="0" class="form-control" name="captcha" required="required"/>
					<center><button class="btn btn-primary" name="solve">Resolver</button></center>
				</div>
			</form>
		</div>	
	</div>
</body>
</html>