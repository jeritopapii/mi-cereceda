<?php
require_once '../../funciones/conexion.php';
require_once '../../funciones/productos.php';

$productos = listarProductos();

// --- El código HTML debe empezar aquí ---
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AutoGestión - Panel de Productos</title>

  <!-- Bootstrap (MANTENIDO) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- CSS personalizado (MANTENIDO) -->
  <link href="/prueba/css/estilos.css" rel="stylesheet">
</head>
<body>

<?php
// Incluir el HEADER al inicio del BODY
include '../../includes/header.php';
?>

<main class="main container my-5">
  <section class="panel">
    
    <h2 class="text-center mb-4">Panel de administración de Productos</h2>
    
    <!-- Botones de Acción: Usamos clases de Bootstrap (btn-primary, btn-secondary) -->
    <div class="d-flex justify-content-center gap-3 mb-5">
      <a href="../../index.php" class="btn btn-secondary btn-lg shadow-sm">
        <i class="bi bi-house-door-fill"></i> Volver a Principal
      </a>
      <a href="formAgregarProducto.php" class="btn btn-primary btn-lg shadow-sm">
        <i class="bi bi-plus-circle-fill"></i> Agregar Producto
      </a>
    </div>

    <!-- TABLA DE PRODUCTOS -->
    <!-- Usamos la clase 'table-responsive' para que la tabla se vea bien en móviles -->
    <div class="table-responsive">
      <table class="tabla-panel table table-hover align-middle">
        <thead>
          <tr>
            <!-- Aseguramos que los anchos se ajusten mejor -->
            <th>Nombre</th>
            <th>Precio</th>
            <th>Presentación</th>
            <th>Stock</th>
            <th>Imagen</th>
            <th>Marca</th>
            <th>Categoría</th>
            <!-- Colspan 2 para las dos acciones (Modificar y Eliminar) -->
            <th colspan="2" class="text-center">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($producto = mysqli_fetch_assoc($productos)) { ?>
            <tr>
              <td class="fw-bold"><?= $producto['prdNombre'] ?></td>
              <td class="text-nowrap">$<?= number_format($producto['prdPrecio'], 2) ?></td>
              <td class="small"><?= $producto['prdPresentacion'] ?></td>
              <td><?= $producto['prdStock'] ?></td>
              <td>
                <img src="/productos/<?= $producto['prdImagen'] ?>" alt="<?= $producto['prdNombre'] ?>" width="70" class="img-fluid rounded shadow-sm">
              </td>
              <td><?= $producto['mkNombre'] ?></td>
              <td><?= $producto['catNombre'] ?></td>
              
              <!-- Botón Modificar -->
              <td class="text-center">
                <a href="formModificarProducto.php?idProducto=<?= $producto['idProducto'] ?>" 
                  class="btn btn-warning btn-sm">
                  <i class="bi bi-pencil"></i> Modificar
                </a>
              </td>
              
              <!-- Botón Eliminar -->
              <td class="text-center">
                <a href="eliminarProducto.php?idProducto=<?= $producto['idProducto'] ?>" 
                  class="btn btn-danger btn-sm">
                  <i class="bi bi-trash"></i> Eliminar
                </a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div> <!-- Cierre de .table-responsive -->
    
  </section>
</main>

<?php 
include '../../includes/footer.php'; 
?>
<!-- Script de Bootstrap (Recomendado al final del body) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>