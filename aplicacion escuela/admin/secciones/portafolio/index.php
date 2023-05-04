<?php 
include ("../../bd.php");


$sentencia=$conexion->prepare("SELECT * FROM `tbl_portafolio`");
$sentencia->execute();
$lista_portafolio=$sentencia->fetchAll(PDO::FETCH_ASSOC);


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
                    <th scope="col">Subtitulo</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Url</th>
                    <td scope="col">Acciones</td>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="col">1</td>
                    <td scope="col">Software de restaurante</td>
                    <td scope="col">Software para su restaurante a la medida</td>
                    <td scope="col">imagen.jpg</td>
                    <td scope="col">Realizado con PHP y MYSQL</td>
                    <td scope="col">Restaurante Develoteca</td>
                    <td scope="col">Software</td>
                    <td scope="col">https://develoteca.com/restaurante</td>
                    <td scope="col">Editar | Eliminar</td>
                </tr>
            </tbody>
        </table>
    </div>
    

    </div>
</div>



<?php include("../../templates/footer.php"); ?>