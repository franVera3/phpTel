<?php
//consumicion de API de la pagina dailymotion

    $url="https://api.dailymotion.com/videos?channel=sport&limit=10";

    $opciones=array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));

    $respuesta=file_get_contents($url,false,stream_context_create($opciones));

    $objRespuesta=json_decode($respuesta);

?>
<ul>
    <?php foreach($objRespuesta->list as $video){ ?><!-- con la flecha accedo al subarray que quiero-->
        <li><?php echo ($video->title); ?> | <?php echo ($video->channel);?></li> 
    <?php } ?><!--Imprime cada video en una etiqueta li-->
</ul>