<?php
require_once '../../funciones/conexion.php';
require_once '../../funciones/productos.php';

$productos = listarProductos();

include '../../includes/header.php';
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AutoGestión - Panel</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- CSS personalizado -->
  <link href="/prueba/css/estilos.css" rel="stylesheet">
</head>

<main class="main container my-5">
  <section class="panel">
    <h2>Panel de administración de Productos</h2>
    <div class="d-flex justify-content-center gap-3 mb-4">
      <a href="../../index.php" class="btn-dashboard">Volver a Principal</a>
      <a href="formAgregarProducto.php" class="btn-dashboard btn-agregar">Agregar Producto</a>
    </div>

    <table class="tabla-panel">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Presentación</th>
          <th>Stock</th>
          <th>Imagen</th>
          <th>Marca</th>
          <th>Categoría</th>
          <th colspan="2">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($producto = mysqli_fetch_assoc($productos)) { ?>
          <tr>
            <td><?= $producto['prdNombre'] ?></td>
            <td>$<?= number_format($producto['prdPrecio'], 2) ?></td>
            <td><?= $producto['prdPresentacion'] ?></td>
            <td><?= $producto['prdStock'] ?></td>
            <td>
              <img src="../../productos/<?= $producto['prdImagen'] ?>" width="80" class="img-thumbnail">
            </td>
            <td><?= $producto['mkNombre'] ?></td>
            <td><?= $producto['catNombre'] ?></td>
            <td>
              <a href="formModificarProducto.php?idProducto=<?= $producto['idProducto'] ?>" 
                 class="btn btn-outline-primary btn-sm">
                <i class="bi bi-pencil-square"></i> Modificar
              </a>
            </td>
            <td>
              <a href="eliminarProducto.php?idProducto=<?= $producto['idProducto'] ?>" 
                 class="btn btn-outline-danger btn-sm">
                <i class="bi bi-trash"></i> Eliminar
              </a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </section>
</main>

<?php include '../../includes/footer.php'; ?>
