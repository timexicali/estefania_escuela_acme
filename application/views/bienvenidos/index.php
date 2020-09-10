<!DOCTYPE html>
<html>
<head>
	<title>Escuela</title>
	<link  type="text/css" href="/extras/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link  type="text/css" href="/extras/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">

	<script type="text/javascript" ></script>
	<script type="text/javascript" src="/extras/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="header clearfix">
		<nav>
			<ul class="nav nav-pills pull-right">
				<li>Inicio</li>
				<li>Acerca de Nosotros</li>
				<li>Contactos</li>
			</ul>

		</nav>
		<h3>Escuela</h3>
	</div>
	<div class="jumbotron">
		<h1>Bienvenidos al Sistema de Escuela</h1>
		<p>Aqui esta el negocio de: paciente, medicos, citas, especialidad</p>
	</div>
	<div class="row marketing">
		<div class="col-lg-6">
			<h4><a href="<?php echo base_url('alumnocontroller/index');?>">Alumno</a></h4>
			<h4><a href="<?php echo base_url('asignaalumnos/index') ?>">Asignaciones</a></h4>
			<h4><a href="<?php echo base_url('maestroscontroller/index') ?>">Maestros</a></h4>
			<h4>Especialidad</h4>
		</div>
	</div>
</div>
</body>
</html>