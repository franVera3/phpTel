<?php
//transformando de json para ingresar a la info

    $jsonContenido='[
    {"nombre":"Oscar","apellido":"Uh"},
    {"nombre":"Juan","apellido":"Rivas"},
    {"nombre":"Jose","apellido":"Perez"}
    ]';

    $resultado=json_decode($jsonContenido);//muestar el contenido dentro de el json
    //print_r($resultado);

    foreach($resultado as $persona){
        echo($persona->nombre)." ".($persona->apellido)."<br>";//solo pide el nombre
        echo "<br>";
        echo "<br>";
    }
?>