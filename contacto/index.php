<?php
session_start();
?>
<html>
	<head>
		<title>.: VER, AGREGAR, ACTUALIZAR Y ELIMINAR :.</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
	<div class="container">
	<div class="row">
	<div class="col-md-12">
			<h2>Bienvenidos a App WEB Contacto</h2>
			<p class="lead">Ejemplo de ver, agregar, actualizar, eliminar con PHP y MySQL</p>
			<p>Instrucciones:</p>
			<ol>
				<li>Ir a la opcion Contactos.</li>
				<li>Agregar elementos desde el boton agregar.</li>
				<li>Seleccionar el boton Editar de cualquier elemento.</li>
				<li>Seleccionar el boton Eliminar de cualquier elemento.</li>
			</ol>
			<ol>
				<li>Ir a la opcion Usuario.</li>
				<li>Agregar elementos desde el boton agregar.</li>
				<li>Seleccionar el boton Editar de cualquier elemento.</li>
				<li>Seleccionar el boton Eliminar de cualquier elemento.</li>
				<li>Al cambiar o eliminar usuario al Cerrar Session no podra ingresar.</li>
			</ol>
			

	</div>
	</div>
	</div>
	</body>
</html>