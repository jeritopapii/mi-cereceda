<?php

	// crud de categorias ///
function listarcategorias (){
	$link=conectar();
	$sql="SELECT idCategoria, catNombre FROM categorias";

	$resultado= mysqli_query($link, $sql);
	return $resultado; 

}
function AgregaCategoria(){
	$catNombre=$_POST['catNombre'];
	
	$link=conectar();
	$sql="INSERT into categorias (catNombre) VALUES ('$catNombre')";

	$resultado=mysqli_query($link, $sql); 
	return $resultado; 

	function  ModificarCategoria(){
		$idCategoria=$_POST['idCategoria'];
		$catNombre=$_POST['catNombre'];

		$link=conectar();
		$sql="UPDATE categorias SET catNombre='$catNombre' WHERE idcategoria= '$idCategoria'";
		$resultado=mysqli_query($link, $sql);
		return $resultado; 
	}
function eliminarcategoria (){

	$idMarca=$_POST['idCategoria'];

	$link=conectar (); 
	$sql="DELETE FROM categoria where idCategoria= '$idCategoria'";

	$resultado =mysqli_query ($link ,$sql);
	return $resultado; 
}
?>