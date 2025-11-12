<?php
require_once '../../funciones/conexion.php';
require_once '../../funciones/marca.php';

$id = $_GET['id'] ?? null;
$resultado = eliminarMarca($id);

include '../../includes/header.php';
?>
<main class="container">
    <h1>Eliminar una marca</h1>
    <?php
    $class = 'danger';
    $mensaje = 'No se pudo eliminar la marca';

    if ($resultado['ok'] ?? false) {
        $class = 'success';
        $mensaje = 'Marca eliminada correctamente';
    } elseif (isset($resultado['error'])) {
        $mensaje = $resultado['error'];
    }
    ?>
    <div class="alert alert-<?= $class ?>">
        <?= $mensaje ?>
    </div>
</main>
<?php include '../../includes/footer.php'; ?>
