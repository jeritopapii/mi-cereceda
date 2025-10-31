<?php
    require 'funciones/conexion.php';
    require 'funciones/marca.php';

    // Trae los datos de la marca por ID
    $marca = verMarcaPorID();

    include 'includes/header.html';
    include 'includes/nav.php';
?>

<main class="container">
    <h1>Modificar Marca</h1>

    <div class="alert alert-secondary p-4 col-8 mx-auto">
        <form action="modificarMarca.php" method="POST">

            <div class="form-group">
                <label for="mkNombre">Nombre de la marca:</label>
                <input type="text" name="mkNombre" class="form-control" id="mkNombre" value="<?= $marca['mkNombre'] ?>" required>
            </div>

            <!-- Campo oculto con el ID de la marca -->
            <input type="hidden" name="idMarca" value="<?= $marca['idMarca'] ?>">

            <input type="submit" class="btn btn-dark mr-3 px-4" value="Modificar Marca">
            <a href="adminMarcas.php" class="btn btn-outline-secondary">Volver al panel</a>

        </form>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
