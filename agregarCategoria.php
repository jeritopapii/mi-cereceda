<?php 
	require 'funciones/conexion.php';
	require 'funciones/categoria.php';
	$chequeo=agregarCategoria();
	include 'includes/header.html';
	include 'includes/nav.php';
 ?>
 <main class="container">
 	<h1> Alta de nueva Categoria </h1>
<?php 
	$class='danger';
	$mensaje='No se puede agregar un Categoria';

	if($chequeo){
		$class='success';
		$mensaje='Categoria agregado correctamente';
	}
?>
	<div class="alert alert-<?= $class ?>"> 
		<?= $mensaje ?> </div>
</main>
<?php include 'includes/footer.php';
?>
