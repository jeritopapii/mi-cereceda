<?php
// funciones/conexion.php

function conectar()
{
    $host = 'localhost';
    $usuario = 'root';
    $clave = '';
    $base = 'catalogo';

    $link = mysqli_connect($host, $usuario, $clave, $base);

    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    return $link;
}

