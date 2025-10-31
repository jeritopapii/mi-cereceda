<?php
	//este artcihivos sirve para conectar con la base de datos del catalogo//
	
	//parametros para usar en el link, los necesita para trabajar// 
	const SERVER ='localhost';
	const USUARIO = 'root';
	const CLAVE = '';
	const BASE = 'catalogo'; 

//conecta con la base de datos//
	function concectar () { 

	$link = mysqli_connect( SERVER, USUARIO, CLAVE, BASE ); 

//sirve para que te de un resultado//
	return $link; 
	}
// fin del comunicado anasheeee splishsplash//
?>