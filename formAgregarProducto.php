<?php
	require 'funciones/conexion.php';
	require 'funciones/marcas.php';
	require 'funciones/categorias.php';
	require 'funciones/productos.php';

	$marcas=listarMarcas();
	$categorias=listarCategorias();

	include 'includes/header.html';
	include 'includes/nav.php';



?>

<main class="container">
	<h1> Alta de nuevo producto </h1>

	<div class="alert alert-secondary p-8 col-8 mx-auto">
		<form action="agregarProducto.php" method="POST" enctype="multipart/form-data">


				<div class="form-group">
					<label for='prdNombre'>Nombre del Producto:</label>
					<input type="text" name="prdNombre" class="form-control" id="prdNombre" required>
				</div>
			
				<div class="form-group">
					<label for='prdPrecio'>Precio del Producto:</label>
					<input type="number" name="prdPrecio" class="form-control" id="prdPrecio" min="1" step="0.01" required>
				</div>
			
				<div class="form-group">
					<label for='idMarca'>Marca</label>
					<select class="form-control" name="idMarca" id="idMarca" required>
						<option value="">Seleccione un amarca</option>
<?php
			while($marca=mysqli_fetch_assoc($marcas)){
?>
				<option value="<?= $marca['idMarca'] ?>"> <?= $marca['mkNombre'] ?> </option>
<?php
	}
?>
		</select>
				</div>
			



				<div class="form-group">
					<label for='idCategoria'>Categoria</label>
					<select class="form-control" name="idCategoria" id="idCategoria" required>
						<option value="">Seleccione un Categoria</option>
<?php
			while($categoria=mysqli_fetch_assoc($categorias)){
?>
				<option value="<?= $categoria['idCategoria'] ?>"> <?= $categoria['catNombre'] ?> </option>
<?php
	}
?>
		</select>
				</div>


			
				<div class="form-group">
					<label for='prdPresentacion'>Presentacion del Producto</label>
					<input type="text" name="prdPresentacion" class="form-control" id="prdPresentacion" required>
				</div>

				<div class="form-group">
					<label for='prdStock'>Stock del Producto</label>
					<input type="number" name="prdStock" class="form-control" id="prdStock" required min="0">
				</div>

					<div class="form-group">
					<label for='prdImagen'>Imagen del Producto</label>
					<input type="file" name="prdImagen" class="form-control-file" id="prdImagen" >
				</div>


				<input type="submit" class="btn btn-dark mr-3 px-4" value="Agregar Producto">



		</form>
	</div>
</main>

<?php include 'includes/footer.php'; ?>
