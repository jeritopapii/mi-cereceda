<?php
	require 'funciones/conexion.php';
	require 'funciones/marcas.php';


	
	include 'includes/header.html';
	include 'includes/nav.php';



?>

<main class="container">
	<h1> Alta de nuevo Marca </h1>

	<div class="alert alert-secondary p-8 col-8 mx-auto">a
		<form action="agregarMarca.php" method="POST" enctype="multipart/form-data">


				<div class="form-group">
					<label for='mkNombre'>Nombre de la marca:</label>
					<input type="text" name="mkNombre" class="form-control" id="mkNombre" required>
				</div>
			
				<input type="submit" class="btn btn-dark mr-3 px-4" value="Agregar Marca">



		</form>
	</div>
</main>

<?php include 'includes/footer.php'; ?>
