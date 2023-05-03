<?php

$servidor='localhost';
$usuario='root';
$contraseña='';
$bd='website';

try {
    $conexion=new PDO("mysql:host=$servidor;dbname=$bd",$usuario,$contraseña);

    echo "Conexion ok";
} catch (Exception $error) {
    echo "La conexion con la base de datos ha fallado <br>".$error->getMessage();
}
?>