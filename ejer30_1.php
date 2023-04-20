<?php
session_start();

if (isset($_SESSION['usuario'])) {
    echo "Ususario: ".$_SESSION['usuario']."<br> Estatus: ".$_SESSION["estatus"];
} else {
    echo "No hay datos";
}



?>