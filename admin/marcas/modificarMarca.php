<?php 
require_once '../../funciones/conexion.php';
require_once '../../funciones/marca.php';

$chequeo = modificarMarca();

include '../../includes/header.php';
?>

<main class="container my-5">
  <section class="panel mx-auto col-lg-8 col-md-10 p-5 shadow-sm rounded-3 bg-white text-center">
    <h1 class="fw-semibold mb-4">Modificar Marca</h1>

    <?php 
      $class = 'danger';
      $mensaje = 'No se pudo modificar la marca.';

      if ($chequeo) {
          $class = 'success';
          $mensaje = 'Marca modificada correctamente.';
      }
    ?>

    <div class="alert alert-<?= $class ?> py-3 fs-5 mb-4">
      <?= $mensaje ?>
    </div>

    <a href="adminMarcas.php" class="btn btn-dark px-4">Volver al Panel</a>
  </section>
</main>

<!-- === ESTÉTICA DEL PANEL === -->
<style>
  body {
    background-color: #f4f4f4;
    color: #222;
    font-family: "Poppins", sans-serif;
    line-height: 1.6;
  }

  h1 {
    color: #111;
    font-weight: 600;
    text-align: center;
    margin-bottom: 1.5rem;
  }

  .panel {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 3rem;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  }

  .alert-success {
    background-color: #e6ffed;
    color: #155724;
    border: 1px solid #c3e6cb;
  }

  .alert-danger {
    background-color: #ffeaea;
    color: #721c24;
    border: 1px solid #f5c6cb;
  }

  .btn-dark {
    background-color: #1a1a1a;
    border: none;
    color: #fff;
    transition: all 0.3s ease;
  }

  .btn-dark:hover {
    background-color: #cc0000;
    color: #fff;
  }
</style>

<?php include '../../includes/footer.php'; ?>
