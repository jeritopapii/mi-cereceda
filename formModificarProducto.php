<?php
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    require 'funciones/categorias.php';
    require 'funciones/productos.php';

    $producto = verProductoPorID();

    $marcas = listarMarcas();
    $categorias = listarCategorias();

    include 'includes/header.html';
    include 'includes/nav.php';
?>

<main class="container">
    <h1>Modificar Producto</h1>

    <div class="alert alert-secondary p-4 col-8 mx-auto">
        <form action="modificarProducto.php" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label for="prdNombre">Nombre del producto:</label>
                <input type="text" name="prdNombre" class="form-control" id="prdNombre" 
                       value="<?= $producto['prdNombre'] ?>" required>
            </div>

            <div class="form-group">
                <label for="prdPrecio">Precio:</label>
                <input type="number" name="prdPrecio" class="form-control" id="prdPrecio"
                       value="<?= $producto['prdPrecio'] ?>" min="1" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="idMarca">Marca:</label>
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

            <div class="form-group">
                <label for="idCategoria">Categoría:</label>
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

            <div class="form-group">
                <label for="prdPresentacion">Presentación:</label>
                <input type="text" name="prdPresentacion" class="form-control" id="prdPresentacion"
                       value="<?= $producto['prdPresentacion'] ?>" required>
            </div>

            <div class="form-group">
                <label for="prdStock">Stock:</label>
                <input type="number" name="prdStock" class="form-control" id="prdStock"
                       value="<?= $producto['prdStock'] ?>" min="0" required>
            </div>

            <div class="form-group">
                <label for="prdImagen">Imagen actual:</label><br>
                <img src="productos/<?= $producto['prdImagen'] ?>" class="img-thumbnail" width="100">
                <br><br>
                <label for="prdImagen">Cambiar imagen:</label>
                <input type="file" name="prdImagen" class="form-control-file" id="prdImagen">
                <input type="hidden" name="imgActual" value="<?= $producto['prdImagen'] ?>">
            </div>

            <!-- Campo oculto con el ID del producto -->
            <input type="hidden" name="idProducto" value="<?= $producto['idProducto'] ?>">

            <input type="submit" class="btn btn-dark mr-3 px-4" value="Modificar Producto">
            <a href="adminProductos.php" class="btn btn-outline-secondary">Volver al panel</a>

        </form>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
