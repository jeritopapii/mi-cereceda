<?php


function listaMarcas(){

	$link=conectar();
	$sql= "SELECT idMarca, mkNombre FROM marcas"; //lo que esta despues de from es la tabla de donde traigo la informacion y lo que esta despues del select son los nombres de los campos de esa tabla//
	$resultado=mysql_query($link,$sql);
	RETURN $resultado;

}

	function agregarMarca(){

	$mkNombre=$_POST['mkNombre'];  //recibe del formulario el nombre de la marca de un input que se llama mkNombre//
	
	$link=conectar();
	$sql="INSERT INTO marcas (mkNombre) VALUES ($mkNombre)";
	$resultado=mysql_query($link,$sql);
	return $resultado;	
}


function modificarMarca(){
$idMarca=$_POST['idMarca'];
$idNombre=$_POST['mkNombre'];

$link=conectar();
$sql="UPDATE marcas set mkNombre='$mkNombre' WHERE idMarca='$idMarca'";
$resultado=mysql_query($link,$sql);
return $resultado;

}

function eliminarMarca (){

	$idMarca=$_POST['idMarca'];

	$link=conectar (); 
	$sql="DELETE FROM marcas where idmarca= '$idmarca'";

	$resultado =mysqli_query ($link ,$sql);
	return $resultado; 
}
function vermarcasporID (){
	$idmarca=$_GET ['idmarca'];

	$link=conectar ();
	$sql="SELECT idmarca, mknombre FROM marcas WHERE idmarca='$idmarca'"; 

	$resultado=mysqli_query ($link, $sql);

	$marca= mysql_fetch_assoc($resultado); 
	return $marca; 
}

















?>
