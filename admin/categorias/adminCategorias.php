<?php
require_once '../../funciones/conexion.php';
require_once '../../funciones/categorias.php';

$categorias = listarCategorias();

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
  <section class="panel p-4 shadow-sm rounded-3 bg-white">
    <h2 class="fw-semibold text-center mb-4">Panel de administración de Categorías</h2>

    <div class="text-center mb-4">
      <a href="../../index.php" class="btn btn-outline-secondary me-2">Volver a Principal</a>
      <a href="formAgregarCategoria.php" class="btn btn-dark">Agregar Categoría</a>
    </div>

    <table class="table table-striped table-hover align-middle text-center">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Categoría</th>
          <th colspan="2">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($categoria = mysqli_fetch_assoc($categorias)) { ?>
          <tr>
            <td><?= $categoria['idCategoria'] ?></td>
            <td><?= $categoria['catNombre'] ?></td>
            <td>
              <a href="formModificarCategoria.php?idCategoria=<?= $categoria['idCategoria'] ?>" class="btn btn-outline-primary btn-sm">
                <i class="bi bi-pencil-square"></i> Modificar
              </a>
            </td>
            <td>
              <a href="eliminarCategoria.php?idCategoria=<?= $categoria['idCategoria'] ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Seguro que desea eliminar esta categoría?');">
                <i class="bi bi-trash3"></i> Eliminar
              </a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </section>
</main>

<!-- === ESTÉTICA DEL PANEL === -->
<style>
  body {
    background-color: #f4f4f4;
    color: #222;
    font-family: "Poppins", sans-serif;
  }

  .panel {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 3rem;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  }

  .btn-dark {
    background-color: #1a1a1a;
    border: none;
    transition: all 0.3s ease;
  }

  .btn-dark:hover {
    background-color: #cc0000;
    color: #fff;
  }

  .btn-outline-danger:hover {
    background-color: #cc0000;
    color: #fff;
  }

  .table-dark {
    background-color: #1a1a1a !important;
    color: #fff;
  }
</style>

<?php include '../../includes/footer.php'; ?>
