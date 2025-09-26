<?php
		require 'funciones/conexion.php'; //conectaba con la BD
		require 'funciones/usuarios.php'; // llamamos a las funciones del usuario
		$usuarios=listarUsuarios();

		include 'includes/header.html';
		include 'includes/nav.php';
?>

<main class="container">
		<h1> Panel de administración de usuarios</h1>

		<a href="admin.php" class="btn btn-outline-secondary m-3">Volver al menu principal </a>

	<table class="table table-bordered table-striped table-hover">
			<thead class="thead-dark">
				<tr>
					<th>id</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Email</th>
					<th colspan="2">
						 <a href="formAgregarUsuario.php" class="btn btn-dark"> 
						 Agregar 
						</a>
					</th>

				</tr>
			</thead>
			<tbody>
<?php
		while($usuario=mysqli_fetch_assoc($usuarios)) {
?>				
		<tr>
			
			<td> <?= $usuario['idUsuario']; ?> </td>
			<td> <?= $usuario['usuNombre']; ?> </td>
			<td> <?= $usuario['usuApellido']; ?> </td>
			<td> <?= $usuario['usuEmail']; ?> </td>
			<td> <a href="formModificarUsuario.php" class="btn btn-outline-secondary">Modificar</a>
				<a href="EliminarUsuario.php?idUsuario=<?= $usuario['idUsuario'] ?>" class="btn btn-outline-danger">Eliminar</a>
			</td>
		</tr>
<?php
 }
?>
	</tbody>
</table>

</main>

<?php include 'incldues/footer.php'; ?>


