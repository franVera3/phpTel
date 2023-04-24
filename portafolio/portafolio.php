<?php include('cabecera.php'); ?>
<?php include("conexion.php"); ?>
<?php

if ($_POST) {
    $nombre = $_POST['nombre'];
    $descripcion=$_POST['descripcion'];

    $fecha=new DateTime();

    $imagen=$fecha->getTimestamp()."_".$_FILES['archivo']['name'];
    
    $imagen_temporal=$_FILES['archivo']['tmp_name'];

    move_uploaded_file($imagen_temporal,"imagenes/".$imagen);

    $objConexion = new conexion();
    $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES ('null','$nombre','$imagen','$descripcion');";
    $objConexion->ejecutar($sql);
}

if ($_GET) {
    $id=$_GET['borrar'];
    $objConexion=new conexion();
    $sql="DELETE FROM `proyectos` WHERE `proyectos`.`id` =".$id;
    $objConexion->ejecutar($sql);
}

$objConexion = new conexion();
$proyectos = $objConexion->consultar("SELECT * FROM `proyectos`");


?>
<br>
<br>

<div class="container">
    <div class="row">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Datos del proyecto
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">
                        Nombre del proyecto: <input class="form-control" type="text" name="nombre" id="">
                        <br>
                        Imagen del proyecto: <input class="form-control" type="file" name="archivo" id="">
                        <br>
                        Agregar descripcion: <textarea name="descripcion" class="form-control" rows="3" placeholder="Ingresa detalle..."></textarea>
                        <br>
                        <input class="btn btn-success" type="submit" value="Enviar Proyecto">
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($proyectos as $proyecto) { ?>
                            <tr class="">
                                <td scope="row"><?php echo ($proyecto['id']); ?></td>
                                <td><?php echo ($proyecto['nombre']); ?></td>
                                <td><?php echo ($proyecto['imagen']); ?></td>
                                <td><?php echo ($proyecto['descripcion']); ?></td>
                                <td><a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>">Eliminar</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>








<?php
include "pie.php";
?>