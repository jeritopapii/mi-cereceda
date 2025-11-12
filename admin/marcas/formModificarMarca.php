<?php
require_once '../../funciones/conexion.php';
require_once '../../funciones/marca.php';

$marcas = listarMarcas(); // traemos todas las marcas
include '../../includes/header.php';
?>

<main class="container my-5">
  <section class="panel mx-auto col-lg-8 col-md-10 p-5 shadow-sm rounded-3 bg-white">
    <h1 class="fw-semibold mb-4 text-center">Modificar Marca</h1>

    <form action="modificarMarca.php" method="POST" class="text-start bg-light border-0 p-4 rounded-3">
      
      <div class="mb-3">
        <label for="idMarca" class="form-label fw-semibold">Seleccionar marca a modificar</label>
        <select name="idMarca" id="idMarca" class="form-control" required>
          <option value="">Seleccione una marca</option>
          <?php while ($marca = mysqli_fetch_assoc($marcas)) { ?>
            <option value="<?= $marca['idMarca'] ?>"><?= $marca['mkNombre'] ?></option>
          <?php } ?>
        </select>
      </div>

      <div class="mb-3">
        <label for="mkNombre" class="form-label fw-semibold">Nuevo nombre de la marca</label>
        <input type="text" name="mkNombre" class="form-control" id="mkNombre" placeholder="Ingrese nuevo nombre" required>
      </div>

      <div class="d-flex justify-content-center mt-4">
        <input type="submit" class="btn btn-dark px-4 me-3" value="Guardar Cambios">
        <a href="adminMarcas.php" class="btn btn-outline-secondary px-4">Volver</a>
      </div>
    </form>
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

  label {
    font-weight: 500;
  }

  .form-control {
    border-radius: 6px;
    box-shadow: none;
    border: 1px solid #ccc;
  }

  .form-control:focus {
    border-color: #cc0000;
    box-shadow: 0 0 0 0.2rem rgba(204,0,0,0.25);
  }

  .btn-dark {
    background-color: #1a1a1a;
    border: none;
    color: #fff; /* contraste mejorado */
    transition: all 0.3s ease;
  }

  .btn-dark:hover {
    background-color: #cc0000;
    color: #fff;
  }

  .btn-outline-secondary:hover {
    background-color: #eee;
  }
</style>

<?php include '../../includes/footer.php'; ?>
