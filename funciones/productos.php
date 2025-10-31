<?php
	//crud de productos// 
	//Create , Read, Update, Delete//
	function listarproductos(){
		$link=conectar();
		$sql="SELECT idProducto, prdNombre, prdPrecio, p.idMarca , mkNombre, p.idCategoria, catNombre, prdPresentacion, prdStock, prdImagen FROM, productos p, marcas m, categorias c WHERE p.idMarca=m.idMarca AND p.idCategoria=c.idCategoria"; 
		$resultado=mysql_query($link,$resultado);
		return $resultado;  
	}

	function subirArchivo(){
		$prdImagen='noDisponible.jpg';
		if ($_FILES['prdImagen']['error']==0){
			
			$dir='productos/';  
			$temp=$_FILES['prdImagen']['tmp_name'];
			$ext=pathinfo($_FILES['prdImagen']['name']);
			$prdImagen=time().'.'.$ext['extension'];
			move_uploaded_file($temp,$dir.$prdImagen);
		}
		return $prdImagen;
	}
	function agregarProducto(){ 
		$prdNombre=$_POST['prdNombre'];
		$prdPrecio=$_POST['prdPrecio'];
		$idMarca=$_POST['idMarca'];
		$idCategoria=$_POST['idCategoria'];
		$prdPresentacion=$_POST['prdPresentacion'];
		$prdStock=$_POST['prdstock'];
		$prdImagen=subirArchivo();

		$link=conectar();
		$sql="INSERT INTO productos (DEFAULT,'$prdNombre','$prdPrecio','$idMarca','$idCategoria','$prdCategoria','$prdPresentacion','$prdStock','$prdImagen')";
		$resultado = mysqli_query ($link,$sql);
		return $resultado;
	}
	
	function eliminarProducto(){
		$idProducto=$_POST['idProducto'];
		$link=conectar();
		$sql="DELETE FROM productos WHERE idProducto='$idProducto'";
		$resultado
	}	
	function verproductosPorID(){
		$idProducto=$_GET['idProducto'];
		$link=conectar();
		$sql="SELECT idProducto,prdNombre,prdPrecio,idMarca,idCategoria,prdPresentacion,prdStock,prdImagen FROM productos WHERE idProducto='$idProducto' "; 

		$resultado=mysqli_query($link,$sql);
		$producto=mysql_fetch_assoc($resultado);
		return $producto;  
	}
	
function modificarProducto(){
    $idProducto     = $_POST['idProducto'];
    $prdNombre      = $_POST['prdNombre'];
    $prdPrecio      = $_POST['prdPrecio'];
    $idMarca        = $_POST['idMarca'];
    $idCategoria    = $_POST['idCategoria'];
    $prdPresentacion= $_POST['prdPresentacion'];
    $prdStock       = $_POST['prdStock'];

    // Si el usuario sube una nueva imagen, la reemplazamos
    if( $_FILES['prdImagen']['error'] == 0 ){
        $prdImagen = subirArchivo(); 
    } else {
        // Si no se sube nueva imagen, mantenemos la anterior
        $prdImagen = $_POST['prdImagenActual'];
    }

    $link = conectar();
    $sql = "UPDATE productos 
            SET 
                prdNombre = '$prdNombre',
                prdPrecio = '$prdPrecio',
                idMarca = '$idMarca',
                idCategoria = '$idCategoria',
                prdPresentacion = '$prdPresentacion',
                prdStock = '$prdStock',
                prdImagen = '$prdImagen'
            WHERE idProducto = '$idProducto'";

    $resultado = mysqli_query($link, $sql) 
                    or die(mysqli_error($link));
    return $resultado;
}

	                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
?>