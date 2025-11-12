<?php
// funciones/productos.php
require_once 'conexion.php';

// CRUD de productos

function listarProductos()
{
    $link = conectar();
    $sql = "SELECT 
                p.idProducto,
                p.prdNombre,
                p.prdPrecio,
                p.idMarca,
                m.mkNombre,
                p.idCategoria,
                c.catNombre,
                p.prdPresentacion,
                p.prdStock,
                p.prdImagen
            FROM productos p
            JOIN marcas m ON p.idMarca = m.idMarca
            JOIN categorias c ON p.idCategoria = c.idCategoria";

    $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
    return $resultado;
}

function verProductoPorID()
{
    $idProducto = $_GET['idProducto'];
    $link = conectar();

    $sql = "SELECT 
                p.idProducto,
                p.prdNombre,
                p.prdPrecio,
                p.idMarca,
                m.mkNombre,
                p.idCategoria,
                c.catNombre,
                p.prdPresentacion,
                p.prdStock,
                p.prdImagen
            FROM productos p
            JOIN marcas m ON p.idMarca = m.idMarca
            JOIN categorias c ON p.idCategoria = c.idCategoria
            WHERE p.idProducto = " . intval($idProducto);

    $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
    $producto = mysqli_fetch_assoc($resultado);
    return $producto;
}

function subirArchivo()
{
    $prdImagen = 'noDisponible.jpg';

    if ($_FILES['prdImagen']['error'] == 0) {
        $dir = __DIR__ . '/../productos/'; // ruta absoluta
        $temp = $_FILES['prdImagen']['tmp_name'];
        $ext = pathinfo($_FILES['prdImagen']['name'], PATHINFO_EXTENSION);
        $prdImagen = time() . '.' . $ext;
        move_uploaded_file($temp, $dir . $prdImagen);
    }

    return $prdImagen;
}

function agregarProducto()
{
    $prdNombre       = $_POST['prdNombre'];
    $prdPrecio       = $_POST['prdPrecio'];
    $idMarca         = $_POST['idMarca'];
    $idCategoria     = $_POST['idCategoria'];
    $prdPresentacion = $_POST['prdPresentacion'];
    $prdStock        = $_POST['prdStock'];
    $prdImagen       = subirArchivo();

    $link = conectar();
    $sql = "INSERT INTO productos
                (prdNombre, prdPrecio, idMarca, idCategoria, prdPresentacion, prdStock, prdImagen)
            VALUES
                ('$prdNombre', '$prdPrecio', '$idMarca', '$idCategoria', '$prdPresentacion', '$prdStock', '$prdImagen')";

    $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
    return $resultado;
}

function eliminarProducto($idProducto)
{
    $link = conectar();

    if (!$idProducto) {
        return false;
    }

    $idProducto = mysqli_real_escape_string($link, $idProducto);

    $sql = "DELETE FROM productos WHERE idProducto = $idProducto";
    $resultado = mysqli_query($link, $sql);

    return $resultado;
}

function modificarProducto($data)
{
    $link = conectar();

    // Validamos que venga el ID
    if (!isset($data['idProducto']) || empty($data['idProducto'])) {
        return false; // 🔹 Evita el warning
    }

    $idProducto = mysqli_real_escape_string($link, $data['idProducto']);
    $prdNombre = mysqli_real_escape_string($link, $data['prdNombre']);
    $prdPrecio = mysqli_real_escape_string($link, $data['prdPrecio']);
    $idMarca = mysqli_real_escape_string($link, $data['idMarca']);
    $idCategoria = mysqli_real_escape_string($link, $data['idCategoria']);
    $prdPresentacion = mysqli_real_escape_string($link, $data['prdPresentacion']);
    $prdStock = mysqli_real_escape_string($link, $data['prdStock']);
    $imgActual = $data['imgActual'];
    $prdImagen = $imgActual;

    // 📂 Si se sube una nueva imagen
    if (!empty($_FILES['prdImagen']['name'])) {
        $tmp = $_FILES['prdImagen']['tmp_name'];
        $nombreImagen = time() . '_' . $_FILES['prdImagen']['name'];
        $destino = __DIR__ . "/../../productos/$nombreImagen";

        // Creamos el directorio si no existe
        if (!file_exists(dirname($destino))) {
            mkdir(dirname($destino), 0777, true);
        }

        if (move_uploaded_file($tmp, $destino)) {
            $prdImagen = $nombreImagen;
        }
    }

    // 🔸 Query de actualización
    $sql = "UPDATE productos
            SET prdNombre = '$prdNombre',
                prdPrecio = '$prdPrecio',
                idMarca = '$idMarca',
                idCategoria = '$idCategoria',
                prdPresentacion = '$prdPresentacion',
                prdStock = '$prdStock',
                prdImagen = '$prdImagen'
            WHERE idProducto = '$idProducto'";

    $resultado = mysqli_query($link, $sql);
    return $resultado;
}

?>

