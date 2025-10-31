<?php

###CRUD DE USUARIOS

function listarusuarios (){
	$link=conectar()
	$sql="SELECT idUsuario, usuNombre, usuApellido, usuEmail, usuPass, usuEstado FROM usuarios";
	$resultado=mysqli_query($link, $sql);
	return $resultado;
}

function agregarUsuario(){
	$usuNombre=$_POST['usuNombre'];
	$usuApellido=$_POST['usuApellido'];
	$usuEmail=$_POST['usuEmail'];
	$usuPass=$_POST['usuPass'];
	$usuEstado=$_POST['usuEstado'];
	

	$link=conectar();
	$sql="INSERT into usuarios (usuNombre, usuApellido, usuEmail, usuPass, usuEstado) VALUES ('$usuNombre, $usuApellido, $usuEmail, $usuPass, $usuEstado')";

	$resultado=mysqli_query($link, $sql); 
	return $resultado; 

}

function modificarUsuario () {
	$idUsuario = $_POST['idUsuario'];
	$usuNombre=$_POST['usuNombre'];
	$usuApellido=$_POST['usuApellido'];
	$usuEmail=$_POST['usuEmail'];
	$usuPass=$_POST['usuPass'];
	$usuEstado=$_POST['usuEstado'];
	
	$link=conectar();
	$sql="UPDATE usuarios SET usuNombre ='$usuNombre', usuApellido='$usuApellido', usuEmail='$usuEmail', usuPass='$usuPass', usuEstado='$usuEstado' WHERE idUsuario= '$idUsuario'";
	$resultado=mysqli_query($link, $sql);
	return $resultado; 


}

function eliminarUsuarios () {

	$idUsuario=$_GET['idUsuario'];

	$link=conectar (); 
	$sql="DELETE FROM usuario where idUsuario= '$idUsuario'";

	$resultado =mysqli_query ($link ,$sql);
	return $resultado; 

}

function verUsuarios () {

	function verUsuarioPorID(){
		$idProducto=$_GET['idProducto'];
		$link=conectar();
		$sql="SELECT idProducto,prdNombre,prdPrecio,idMarca,idCategoria,prdPresentacion,prdStock,prdImagen FROM productos WHERE idProducto='$idProducto' "; 

		$resultado=mysqli_query($link,$sql);
		$producto=mysql_fetch_assoc($resultado);
		return $producto;  
	}
}

?>