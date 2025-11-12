<?php
require_once '../../funciones/conexion.php';
require_once '../../funciones/categorias.php';
include '../../includes/header.php';
?>

<main class="container my-5">
  <section class="panel mx-auto col-lg-8 col-md-10 p-5 shadow-sm rounded-3 bg-white">
    <h1 class="fw-semibold mb-4 text-center">Alta de nueva categoría</h1>

    <form action="agregarCategoria.php" method="POST" class="text-start bg-light border-0 p-4 rounded-3">
      <div class="mb-3">
        <label for="catNombre" class="form-label fw-semibold">Nombre de la categoría</label>
        <input type="text" name="catNombre" class="form-control" id="catNombre" required>
      </div>

      <div class="d-flex justify-content-center mt-4">
        <input type="submit" class="btn btn-dark px-4 me-3" value="Agregar Categoría">
        <a href="adminCategorias.php" class="btn btn-outline-secondary px-4">Volver</a>
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

  .footer {
    background-color: #1a1a1a;
    color: #ccc;
    text-align: center;
    padding: 1rem 0;
    margin-top: 3rem;
    border-top: 3px solid #cc0000;
  }

  .footer p {
    margin: 0;
    font-size: 0.9rem;
  }
</style>

<?php include '../../includes/footer.php'; ?>
