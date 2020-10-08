<!doctype html>

<html>
<head>
	<title>Eliminar Mastros</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/extras/bootstrap/css/bootstrap.min.css">
	<link href="/extras/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="/extras/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="span10 ofset1">
			<div class="row">
				<h3>Eliminar Maestro</h3>
			</div>
			<form class="form-horizontal" action="" method="post">
				
				<input type="hidden" name="id" value="<?php echo $objMaestros->id; ?>">
				
				<p class="aler alert-error"> Estas seguro de eliminar a <?php echo $objMaestros->nombre ,' ', $objMaestros->apellido;?></p>

				<div class="form-action">
					<button type="submit" class="btn btn-danger">Sí</button>

					<a class="btn btn-succes" href="<?php echo base_url('maestroscontroller/index'); ?>">No</a>
				</div>
			</form>
		</div>
	</div>
</body>
</html>