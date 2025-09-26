<?php

->	require 'funciones/conexion.php';
->	require 'funciones/usuarios.php';
-> 	$usuario=verUsuarioPorID();


	include 'includes/header.html';
	include 'includes/nav.php';


?>


<main class="container">
	<h1> Modificar usuario</h1>

	<div class="alert alert-secondary p-4 col-8 mx-auto">

		<form action="modificarUsuario.php" method="POST">
			<input type="number" name="idUsuario" value="<?= $usuario['idUsuario'] ?>" hidden>

				Nombre: <br>
				<input type="text" name="usuNombre"  value="<?= $usuario['usuNombre'] ?>">
				<br>
				Apellido:<br>
				<input type="text" name="usuApellido" value="<?= $usuario['usuApellido'] ?>">
				<br>
				E-mail:<br>
				<input type="email" name="usuEmail" value="<?= $usuario['usuEmail'] ?>">
				<br>
				Contraseña:<br>
				<input type="password" name="usuPass" value="<?= $usuario['usuPass'] ?>"><br>
				<input type="submit" name="" value="Registrar">
			</form>
		</div>

	<a href="adminUsuarios.php">Volver</a>
</main>

<?php
	include 'includes/footer.php'; 
?>