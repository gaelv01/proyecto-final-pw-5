<?php

$servidor = "localhost";
$usuario = "root";
$base = "imss";
$contrasena = "";

$conexion = new mysqli($servidor, $usuario, $contrasena, $base);

if (!$conexion) {
    echo "Conexion fallida, codigo #" . mysqli_errno($conexion);
} else {
    echo "Conexion exitosa";
}
