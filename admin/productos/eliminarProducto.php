<?php 
require_once '../../funciones/conexion.php';
require_once '../../funciones/productos.php';

$idProducto = $_GET['idProducto'] ?? null;
$chequeo = $idProducto ? eliminarProducto($idProducto) : false;

include '../../includes/header.php';
?>

<main class="container my-5 text-center">
  <h1>Eliminar Producto</h1>
  <?php
    $class = $chequeo ? 'success' : 'danger';
    $mensaje = $chequeo 
        ? 'Producto eliminado correctamente.' 
        : 'No se pudo eliminar el producto.';
  ?>
  <div class="alert alert-<?= $class ?> mt-4"><?= $mensaje ?></div>
  <a href="adminProductos.php" class="btn btn-dark mt-3">Volver al panel</a>
</main>

<?php include '../../includes/footer.php'; ?>

