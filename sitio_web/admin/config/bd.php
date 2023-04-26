<?php

$host="localhost";
$bd="sitio";
$usuario="root";
$contrasenia="";

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
    /*if($conexion){
        //echo "Conectado";
    }*/
} catch (Exception $er) {
    echo ("Error al conectar con la base de datos ".$er->getMessage());
}

?>