<?php 
    require 'funciones/conexion.php';
    require 'funciones/marca.php';

    $chequeo = modificarMarca();

    include 'includes/header.html';
    include 'includes/nav.php';
?>
<main class="container">
    <h1>Modificar Marca</h1>

    <?php 
        $class = 'danger';
        $mensaje = 'No se pudo modificar la marca.';

        if ($chequeo) {
            $class = 'success';
            $mensaje = 'Marca modificada correctamente.';
        }
    ?>

    <div class="alert alert-<?= $class ?>">
        <?= $mensaje ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
