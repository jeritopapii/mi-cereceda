<?php
require 'funciones/conexion.php';
require 'funciones/marca.php';

$id = $_GET['id'] ?? null;
$chequeo = eliminarMarca($id);

include 'includes/header.html';
include 'includes/nav.php';
?>
<main class="container">
    <h1>Eliminar una marca</h1>
    <?php
    $class = 'danger';
    $mensaje = 'No se pudo eliminar la marca';
    if ($chequeo) {
        $class = 'success';
        $mensaje = 'Marca eliminada correctamente';
    }
    ?>
    <div class="alert alert-<?= $class ?>">
        <?= $mensaje ?>
    </div>
</main>
<?php include 'includes/footer.php'; ?>
