<!DOCTYPE html>
<html lang="es">
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
<body>

  <?php include 'includes/header.php'; ?>

  <main class="main container my-5">
    <section class="panel bg-white shadow-sm rounded-3 p-5 text-center">
      <h2 class="fw-semibold mb-4">Bienvenido al sistema de gestión</h2>
      <p class="text-secondary mb-5">
        Usa los accesos directos a continuación para administrar los datos de la concesionaria.
      </p>

      <div class="dashboard-buttons d-flex justify-content-center flex-wrap gap-4">
        <a href="admin/productos/adminProductos.php" class="btn-dashboard">
          <i class="bi bi-car-front"></i>
          Vehículos
        </a>
        <a href="admin/marcas/adminMarcas.php" class="btn-dashboard">
          <i class="bi bi-tags"></i>
          Marcas
        </a>
        <a href="admin/categorias/adminCategorias.php" class="btn-dashboard">
          <i class="bi bi-list-ul"></i>
          Categorías
        </a>
      </div>
    </section>
  </main>

  <?php include 'includes/footer.php'; ?>

</body>
</html>

