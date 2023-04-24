<?php

$nombreArchivo="archivo.txt";
$contenidoArchivo="Hola, soy un archivo creado en el ejer39.php";

$archivosACrear=fopen($nombreArchivo,"w");

fwrite($archivosACrear,$contenidoArchivo);
fclose($archivosACrear);

?>