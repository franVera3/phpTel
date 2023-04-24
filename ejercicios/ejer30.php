<?php
session_start();

$_SESSION['usuario']="develoteca";
$_SESSION['estatus']="logueado";

echo "sesion iniciada"."<br>";

echo "Ususario: ".$_SESSION['usuario']."<br> Estatus: ".$_SESSION["estatus"];




?>