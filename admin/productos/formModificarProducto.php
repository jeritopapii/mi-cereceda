<?php
require_once '../../funciones/conexion.php';
require_once '../../funciones/marca.php';
require_once '../../funciones/categorias.php';
require_once '../../funciones/productos.php';

$producto = verProductoPorID();
$marcas = listarMarcas();
$categorias = listarCategorias();

include '../../includes/header.php';
?>

<main class="container my-5">
  <section class="panel mx-auto col-lg-8 col-md-10 p-5 shadow-sm rounded-3 bg-white">
    <h1 class="fw-semibold mb-4 text-center">Modificar Producto</h1>

    <form action="modificarProducto.php" method="POST" enctype="multipart/form-data" class="text-start bg-light border-0 p-4 rounded-3">

      <div class="mb-3">
        <label for="prdNombre" class="form-label fw-semibold">Nombre del producto</label>
        <input type="text" name="prdNombre" class="form-control" id="prdNombre" 
               value="<?= $producto['prdNombre'] ?>" required>
      </div>

      <div class="mb-3">
        <label for="prdPrecio" class="form-label fw-semibold">Precio</label>
        <input type="number" name="prdPrecio" class="form-control" id="prdPrecio"
               value="<?= $producto['prdPrecio'] ?>" min="1" step="0.01" required>
      </div>

      <div class="mb-3">
        <label for="idMarca" class="form-label fw-semibold">Marca</label>
        <select name="idMarca" id="idMarca" class="form-control" required>
          <option value="">Seleccione una marca</option>
          <?php while($marca = mysqli_fetch_assoc($marcas)) { ?>
            <option 
              value="<?= $marca['idMarca'] ?>"
              <?= ($marca['idMarca'] == $producto['idMarca']) ? 'selected' : '' ?>>
              <?= $marca['mkNombre'] ?>
            </option>
          <?php } ?>
        </select>
      </div>

      <div class="mb-3">
        <label for="idCategoria" class="form-label fw-semibold">Categoría</label>
        <select name="idCategoria" id="idCategoria" class="form-control" required>
          <option value="">Seleccione una categoría</option>
          <?php while($categoria = mysqli_fetch_assoc($categorias)) { ?>
            <option 
              value="<?= $categoria['idCategoria'] ?>"
              <?= ($categoria['idCategoria'] == $producto['idCategoria']) ? 'selected' : '' ?>>
              <?= $categoria['catNombre'] ?>
            </option>
          <?php } ?>
        </select>
      </div>

      <div class="mb-3">
        <label for="prdPresentacion" class="form-label fw-semibold">Presentación</label>
        <input type="text" name="prdPresentacion" class="form-control" id="prdPresentacion"
               value="<?= $producto['prdPresentacion'] ?>" required>
      </div>

      <div class="mb-3">
        <label for="prdStock" class="form-label fw-semibold">Stock</label>
        <input type="number" name="prdStock" class="form-control" id="prdStock"
               value="<?= $producto['prdStock'] ?>" min="0" required>
      </div>

      <div class="mb-3 text-center">
        <label class="form-label fw-semibold">Imagen actual</label><br>
        <img src="../../productos/<?= $producto['prdImagen'] ?>" class="img-thumbnail mb-3" width="120">
        <div>
          <label for="prdImagen" class="form-label fw-semibold">Cambiar imagen</label>
          <input type="file" name="prdImagen" class="form-control" id="prdImagen">
          <input type="hidden" name="imgActual" value="<?= $producto['prdImagen'] ?>">
        </div>
      </div>

      <input type="hidden" name="idProducto" value="<?= $producto['idProducto'] ?>">

      <div class="d-flex justify-content-center mt-4">
        <input type="submit" class="btn btn-dark px-4 me-3" value="Guardar Cambios">
        <a href="adminProductos.php" class="btn btn-outline-secondary px-4">Volver</a>
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
