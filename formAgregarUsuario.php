<?php



include 'includes/header.html';
include 'includes/nav.php';


?>

<main class="container">

<h1>Alta de nuevo usaurio</h1>

<div class="alert alert-secondary p-4 col-8 mx-auto">
	<form action="agregarUsuario.php" method="POST">
			Nombre:
			<br>
				<input type="text" name="usuNombre" required>
			Apellido:
			<br>
				<input type="text" name="usuApellido" required>
			E-mail:
			<br>
				<input type="email" name="usuEmail" required>

			Clave:
			<br>
				<input type="password" name="usuPass" required>
			<br>
			
			<input type="submit" class="btn btn-dark mr-3 px-4" value="Agregar">	
	</form>
	<a href="adminUsuarios.php">
<button class="btn btn-outline-secondary">Volver al panel</button>
	</a>
</div>
</main>
<?php include 'includes/footer.php'; ?>