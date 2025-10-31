<?php
		require 'funciones/conexion.php';
		require 'funciones/marca.php';
			$marcas=listarMarcas();

		include 'includes/header.html';
		include 'includes/nav.php';
?>

<main class="container">
	<h1> Panel de administracon de Marcas </h1>

	<a href="admin.php" class="btn btn-outline-secondary m-3">
		VOLVER A PRINICIPAL
	</a>

	<table class="table table-bordered table-striped table-hover">
		<thead class="thead-dark">
				<tr>
					<th>id</th>
					<th>Marca</th>
					<th colspan="2">
						<a href="formAgregarMarca.php" class="btn btn-dark"> Agregar </a>
					</th>
				</tr>
		 </thead>
		 <tbody>
	<?php
		 while($marca=mysqli_fetch_assoc($marcas) ){
	?>	
		<tr>
			<td><?= $marca['idMarca']; ?></td>
			<td><?= $marca['mkNombre']; ?></td>
			<td>
				<a href="formModificarMarca.php?idMarca=
					<?= $marca['idMarca'] ?>" class="btn btn-outline-secondary">
				Modificar
				</a>
			</td>
			<td>
				<a href="formEliminarMarca.php?idMarca=
					<?= $marca['idMarca'] ?>" class="btn btn-outline-secondary">
				Eliminar
				</a>
			</td>
		</tr>
	<?php 
		}
	?>
</tbody>
</table>

</main>

<?php 
include 'includes/footer.php'; 

?>
