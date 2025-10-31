<?php 
    require 'funciones/conexion.php';
    require 'funciones/categorias.php';

    include 'includes/header.html';
    include 'includes/nav.php';
?>

<main class="container">
    <h1>Alta de nueva Categoría</h1>

    <div class="alert alert-secondary p-4 col-8 mx-auto">
        <form action="agregarCategoria.php" method="POST">

            <div class="form-group">
                <label for="catNombre">Nombre de la categoría:</label>
                <input type="text" name="catNombre" class="form-control" id="catNombre" required>
            </div>

            <input type="submit" class="btn btn-dark mr-3 px-4" value="Agregar Categoría">
            <a href="adminCategorias.php" class="btn btn-outline-secondary">Volver al panel</a>

        </form>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
