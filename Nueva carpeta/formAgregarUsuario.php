<?php
	include 'includes/header.html';
	include 'includes/nav.php';


?>


<main class="container">
	<h1> Alta de nuevo usuario</h1>

	<div class="alert alert-secondary p-4 col-8 mx-auto">

		<form action="agregarUsuario.php" method="POST">
				Nombre: <br>
				<input type="text" name="usuNombre">
				<br>
				Apellido:<br>
				<input type="text" name="usuApellido">
				<br>
				E-mail:<br>
				<input type="email" name="usuEmail">
				<br>
				Contraseña:<br>
				<input type="password" name="usuPass"><br>
				<input type="submit" name="" value="Registrar">
			</form>
		</div>

	<a href="adminUsuarios.php">Volver</a>
</main>

<?php
	include 'includes/footer.php'; 
?>