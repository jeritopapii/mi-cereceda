<?php
require_once 'conexion.php';

// CRUD de marcas
function listarMarcas()
{
    $link = conectar();
    $sql = "SELECT idMarca, mkNombre FROM marcas";
    $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
    return $resultado;
}

function agregarMarca()
{
    $mkNombre = $_POST['mkNombre'] ?? null;
    if (!$mkNombre) return false;

    $link = conectar();
    $sql = "INSERT INTO marcas (mkNombre) VALUES ('$mkNombre')";
    return mysqli_query($link, $sql);
}

function modificarMarca()
{
    $idMarca = $_POST['idMarca'] ?? null;
    $mkNombre = $_POST['mkNombre'] ?? null;
    if (!$idMarca || !$mkNombre) return false;

    $link = conectar();
    $sql = "UPDATE marcas SET mkNombre = '$mkNombre' WHERE idMarca = '$idMarca'";
    return mysqli_query($link, $sql);
}

function eliminarMarca($idMarca = null)
{
    $idMarca = $idMarca ?? ($_POST['idMarca'] ?? null);
    if (!$idMarca) return false;

    $link = conectar();

    // Verificar si hay productos asociados
    $sqlCheck = "SELECT COUNT(*) AS total FROM productos WHERE idMarca = '$idMarca'";
    $resCheck = mysqli_query($link, $sqlCheck);
    $row = mysqli_fetch_assoc($resCheck);
    if ($row['total'] > 0) {
        // No se puede eliminar por restricciones de productos
        return ['ok' => false, 'error' => 'Existen productos asociados a esta marca.'];
    }

    // Eliminar la marca
    $sql = "DELETE FROM marcas WHERE idMarca = '$idMarca'";
    if (mysqli_query($link, $sql)) {
        return ['ok' => true];
    } else {
        return ['ok' => false, 'error' => mysqli_error($link)];
    }
}

function verMarcaPorID()
{
    $idMarca = $_GET['idMarca'] ?? null;
    if (!$idMarca) return null;

    $link = conectar();
    $sql = "SELECT idMarca, mkNombre FROM marcas WHERE idMarca = '$idMarca'";
    $resultado = mysqli_query($link, $sql);
    return mysqli_fetch_assoc($resultado);
}
?>



