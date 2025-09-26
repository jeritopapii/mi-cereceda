<?php 
	require 'funciones/conexion.php';
	require 'funciones/marcas.php';

	$marcas=listarmarcas();
	require 'funciones/categorias.php';
	$marcas=listarcategorias();

	include 'includes/header.html';
	include 'includes/nav.php';

	?>

	<main class="container">
		<h1> Alta de nuevo producto </h1>

		<div class="alert alert-secondary p-8 col-8 mx-auto"> 
			<form action="agregarproducto.php" method="POST" enctype="multipart/form-data">

		<div class="form-group">
		<label for="prdnombre"> Nombre del producto </label>

		<input type="text" name="prdnombre" class="form-control" id="prdnombre" required>
	</div>

	<label for="prdprecio"> Precio del producto </label>
	<input type="number" name="prdprecio" class="form-control" id="prdPrecio" min="0" step="0.01" required="required">


	<div class="form-group">
		<label for="idMarca">Marca</label>

		<select class="form-control" name="idMarca" id="idMarca" required> 
			<option value=""> Seleccione una marca </option>

			while($marca=mysqli-fetch-assocc($marcas)) 

			{

				<option value="<?= $marca ['idMarca'] ?>">" ><?=$marca ['mknombre'] ?> </option>
			}

	</select>
	</div>



	<div class="form-group">
		<label for="idCategoria">Categoria</label>

		<select class="form-control" name="idCategoria" id="idCategoria" required> 
			<option value=""> Seleccione una categoria </option>

			while($Categoria =mysqli-fetch-assocc($Categorias)) 

			{

				<option value="<?= $Categoria ['idCategoria'] ?>">" ><?=$Categoria ['catNombre'] ?> </option>
			}

	</select>
	</div>

	<div class="form-group">
		<label for="prdpresentacion"> Presentacion del producto </label>
		<input type="text" name="prdPresentacion" required>
	</div>

	<div class="form-group">
		<label for="prdStock"> Stock del producto </label>
		<input type="number" name="prdStock" id="prdStock" required>
	</div>

	<div class="form-group">
		<label for="prdImagen"> Imagen del producto </label>
		<input type="file" name="prdImagen" id="prdImagen" required class="form-control-file">
	</div>

	<input type="submit" name="value" Agregar Producto>

	</form>
	</main>

	<?php include 'includes/footer.php'; ?>