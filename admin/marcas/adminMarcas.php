<?php
require_once '../../funciones/conexion.php';
require_once '../../funciones/marca.php';

$marcas = listarMarcas();

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
    <h2>Panel de administración de Marcas</h2>
    <div class="d-flex justify-content-center gap-3 mb-4">
      <a href="../../index.php" class="btn-dashboard">Volver a Principal</a>
      <a href="formAgregarMarca.php" class="btn-dashboard btn-agregar">Agregar Marca</a>
    </div>

    <table class="tabla-panel">
      <thead>
        <tr>
          <th>ID</th>
          <th>Marca</th>
          <th colspan="2">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($marca = mysqli_fetch_assoc($marcas)) { ?>
          <tr>
            <td><?= $marca['idMarca'] ?></td>
            <td><?= $marca['mkNombre'] ?></td>
            <td>
              <a href="formModificarMarca.php?idMarca=<?= $marca['idMarca'] ?>" 
                 class="btn btn-outline-primary btn-sm">
                <i class="bi bi-pencil-square"></i> Modificar
              </a>
            </td>
            <td>
              <a href="eliminarMarca.php?idMarca=<?= $marca['idMarca'] ?>" 
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
