<?php
require 'funciones/conexion.php';
require 'funciones/productos.php';

$id = $_GET['id'] ?? null;
$chequeo = eliminarProducto($id);

include 'includes/header.html';
include 'includes/nav.php';
?>
<main class="container">
    <h1>Eliminar un producto</h1>
    <?php
    $class = 'danger';
    $mensaje = 'No se pudo eliminar el producto';
    if ($chequeo) {
        $class = 'success';
        $mensaje = 'Producto eliminado correctamente';
    }
    ?>
    <div class="alert alert-<?= $class ?>">
        <?= $mensaje ?>
    </div>
</main>
<?php include 'includes/footer.php'; ?>
