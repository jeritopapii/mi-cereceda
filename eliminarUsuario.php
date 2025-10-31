<?php
	require 'funciones/conexion.php';
	require 'funciones/usuarios.php';
	$chequeo=eliminarUsuario();
	include 'include/header.html';
	include 'includes/nav.php';
?>
	<main class="container">
		<h1> Eliminar un usuario </h1>
		<?php
		$class='danger';
		$mensaje='No se pudo Eliminar el usuario';
		if($chequeo){
			$class='success';
			$mensaje='Usuario Eliminado Correctamente';
		}
	?>
	 	<div class="alert alert-<?= $class ?>">
	 		<?= $mensaje ?>
	 	</div>
	 </main>

<?php 
include 'includes/footer.php'; 
?>