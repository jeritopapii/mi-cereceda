<?php
	require 'funciones/conexion.php';
	require 'funciones/usuarios.php';
	$chequeo=agregarUsuario();
	include 'include/header.html';
	include 'includes/nav.php';
?>
	<main class="container">
		<h1> Alta de nuevo usuario </h1>
		<?php
		$class='danger';
		$mensaje='No se pudo agregar el usuario';
		if($chequeo){
			$class='success';
			$mensaje='Usuario Agregado Correctamente';
		}
	?>
	 	<div class="alert alert-<?= $class ?>">
	 		<?= $mensaje ?>
	 	</div>
	 </main>

<?php 
include 'includes/footer.php'; 
?>