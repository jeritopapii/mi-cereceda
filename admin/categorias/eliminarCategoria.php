<?php
require_once '../../funciones/conexion.php';
require_once '../../funciones/categorias.php';

$id = $_GET['id'] ?? null;
$chequeo = eliminarCategoria($id);

include '../../includes/header.php';

?>
<main class="container">
    <h1>Eliminar una categoría</h1>
    <?php
    $class = 'danger';
    $mensaje = 'No se pudo eliminar la categoría';
    if ($chequeo) {
        $class = 'success';
        $mensaje = 'Categoría eliminada correctamente';
    }
    ?>
    <div class="alert alert-<?= $class ?>">
        <?= $mensaje ?>
    </div>
</main>
<?php include '../../includes/footer.php'; ?>
