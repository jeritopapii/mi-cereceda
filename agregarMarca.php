<?php 
	require 'funciones/conexion.php';
	require 'funciones/marca.php';
	$chequeo=agregarMarca();
	include 'includes/header.html';
	include 'includes/nav.php';
 ?>
 <main class="container">
 	<h1> Alta de nueva Marca </h1>
<?php 
	$class='danger';
	$mensaje='No se puede agregar un Marca';

	if($chequeo){
		$class='success';
		$mensaje='Marca agregado correctamente';
	}
?>
	<div class="alert alert-<?= $class ?>"> 
		<?= $mensaje ?> </div>
</main>
<?php include 'includes/footer.php';
?>

