<?php
// --- 1. LÓGICA PHP PRIMERO ---
// Toda la lógica de PHP debe ir antes de que se imprima cualquier HTML.
require_once '../../funciones/conexion.php';
require_once '../../funciones/productos.php';

$idProducto = $_GET['idProducto'] ?? null;
$chequeo = $idProducto ? eliminarProducto($idProducto) : false;

// Preparamos los mensajes para mostrarlos luego en el HTML
$class = $chequeo ? 'success' : 'danger';
$mensaje = $chequeo
    ? 'Producto eliminado correctamente.'
    : 'No se pudo eliminar el producto.';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto - AutoGestión Motors</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>
<body>

    <?php
    // --- 3. INCLUIR EL HEADER ---
    // Ahora que el <body> existe, podemos incluir tu header.php
    include '../../includes/header.php';
    ?>

    <main class="container my-5 text-center">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6"> <h1 class="mb-4">Eliminar Producto</h1>

                <div class="alert alert-<?= $class ?>" role="alert">
                    <?= htmlspecialchars($mensaje) // Usamos htmlspecialchars por seguridad ?>
                </div>

                <a href="adminProductos.php" class="btn btn-dark btn-lg mt-3">
                    Volver al panel
                </a>

            </div>
        </div>
    </main>

    <?php
    // --- 5. INCLUIR EL FOOTER ---
    include '../../includes/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>