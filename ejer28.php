<?php

$server="localhost";
$usuario='root';
$password='';


try {
    $conexion=new PDO("mysql:host=$server;dbname=album", $usuario, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $sql="INSERT INTO `fotos`(`id`, `nombre`, `ruta`) VALUES ('null','Jugando con la BBDD','foto.jpg')";
    
    $conexion->exec($sql);
    echo "conexion establecida";

} catch (PDOException $error) {
    echo "Conexion erronea <br>".$error;
}



?>