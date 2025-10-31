<?php 
    require 'funciones/conexion.php';
    require 'funciones/categorias.php';

    $chequeo = modificarCategoria();

    include 'includes/header.html';
    include 'includes/nav.php';
?>
<main class="container">
    <h1>Modificar Categoría</h1>

    <?php 
        $class = 'danger';
        $mensaje = 'No se pudo modificar la categoría.';

        if ($chequeo) {
            $class = 'success';
            $mensaje = 'Categoría modificada correctamente.';
        }
    ?>

    <div class="alert alert-<?= $class ?>">
        <?= $mensaje ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
