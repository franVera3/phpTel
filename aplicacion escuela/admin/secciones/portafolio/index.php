<?php
include("../../bd.php");


$sentencia = $conexion->prepare("SELECT * FROM `tbl_portafolio`");
$sentencia->execute();
$lista_portafolio = $sentencia->fetchAll(PDO::FETCH_ASSOC);


include("../../templates/header.php");

?>



<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar registros</a>
    </div>
    <div class="card-body">

        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Cliente</th>
                        <td scope="col">Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <?php foreach ($lista_portafolio as $registros) { ?>
                            <td scope="col"><?php echo $registros['id'] ?></td>
                            <td scope="col">
                                <h6><?php echo $registros['titulo'] ?></h6>
                                <?php echo $registros['subtitulo'] ?>
                                <br>
                                -<?php echo $registros['url'] ?>
                            </td>
                            <td scope="col"><?php echo $registros['imagen'] ?></td>
                            <td scope="col"><?php echo $registros['descripcion'] ?></td>
                            <td scope="col">
                                - <?php echo $registros['cliente'] ?> -
                                <br>
                                <?php echo $registros['categoria'] ?>
                            </td>
                            
                            <td scope="col"><a name="" id="" class="btn btn-primary" href="editar.php?txtID=<?php echo $registros['id']; ?>" role="button">Editar</a>
                                |
                                <a name="" id="" class="btn btn-danger" href="index.php?txtID=<?php echo $registros['id']; ?>" role="button">Eliminar</a>
                            </td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>
</div>



<?php include("../../templates/footer.php"); ?>