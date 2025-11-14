<?php
// CORRECCIÓN: El archivo de funciones debe llamarse 'categorias.php' (en plural)
require_once '../../funciones/conexion.php';
require_once '../../funciones/categorias.php'; // ESTA ES LA LÍNEA MODIFICADA (Añadimos 's')

$categoria = ''; // Variable para guardar el nombre de la categoría

// Si se envió el formulario (POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Obtener el valor enviado
    $catNombre = $_POST['catNombre'];

    // 2. Ejecutar la función para agregar la categoría (debes tener una función llamada 'agregarCategoria' en tu archivo 'categorias.php')
    if (agregarCategoria($catNombre)) {
        // Redirigir al panel después de agregar
        header('location: adminCategorias.php?estado=agregada');
        exit;
    } else {
        // Manejar error si no se pudo agregar
        $error = "Error al agregar la categoría.";
    }
}

// Incluimos la plantilla de cabecera
include '../../includes/header.php'; 
?>

<main class="main container my-5">
    <section class="panel panel-form">
        <h2 class="text-center mb-5">Alta de nueva categoría</h2>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Mostramos error si existe -->
                <?php if (isset($error)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $error ?>
                    </div>
                <?php } ?>

                <form action="agregarCategoria.php" method="post">
                    <div class="mb-3">
                        <label for="catNombre" class="form-label">Nombre de la categoría</label>
                        <input type="text" 
                               name="catNombre" 
                               id="catNombre" 
                               class="form-control" 
                               required>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <button type="submit" class="btn btn-primary btn-lg">Agregar Categoría</button>
                        <a href="adminCategorias.php" class="btn btn-secondary">Volver al Panel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php 
// Incluimos la plantilla de pie de página
include '../../includes/footer.php'; 
?>