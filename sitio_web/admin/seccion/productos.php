<?php include "../template/cabecera.php"; ?>
<?php
$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";

$txtImagen=(isset($_FILES['txtID']['name']))?$_FILES['txtID']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

$host="localhost";
$bd="sitio";
$usuario="root";
$contrasenia="";

try {
    $conexion=new PDO("myslq:host=$host;dbname=$bd",$usuario,$contrasenia);
    if($conexion){
        echo "Conectado";
    }
} catch (Exception $er) {
    echo ("Error al conectar con la base de datos".$er->getMessage());
}

echo $txtID."<br>";
echo $txtNombre."<br>";
echo $txtImagen."<br>";
echo $accion."<br>";

switch($accion){
    case "Agregar":
        //INSERT INTO `libros` (`id`, `nombre`, `imagen`) VALUES (NULL, 'Libro de php', 'imagen.jpg');
        echo "Presionando boton agregar";
        break;
    case "Modificar":
        echo "Estas apretando modificar";
        break;
    case "Cancelar":
        echo "canceladoooo";
        break;
    default:
        echo "no esta funcionando ok";
        break;
}

?>

<div class="col-md-5">
    <div class="card">
        <div class="card-header">
            Datos de libros
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="txtID">ID:</label>
                    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID">
                </div>

                <div class="form-group">
                    <label for="txtNombre">Nombre:</label>
                    <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre del libro">
                </div>

                <div class="form-group">
                    <label class="form-check-label" for="txtImagen"></label>
                    <input type="file" class="form-check-input" name="txtImagen" id="txtImagen">
                </div>
                <br>

                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
                    <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
                </div>

            </form>
        </div>
    </div>





</div>
<div class="col-md-7">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>Apredne PHP</td>
                <td>imagen.php</td>
                <td>Seleccionar | Borrar</td>
            </tr>
        </tbody>
    </table>
</div>

<?php include "../template/pie.php"; ?>