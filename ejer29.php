<?php

$server="localhost";
$usuario='root';
$password='';


try {
    $conexion=new PDO("mysql:host=$server;dbname=album", $usuario, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $sql="SELECT * FROM `fotos`";
    
    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();

    //print_r($resultado);
    
    foreach($resultado as $foto){
        echo($foto['nombre'])."<br>";
    }

    echo "conexion establecida";

} catch (PDOException $error) {
    echo "Conexion erronea <br>".$error;
}



?>