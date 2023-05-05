<?php 
include "../../bd.php";


if(isset($_GET['txtID'])){
    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";
    $sentencia = $conexion->prepare("SELECT * FROM `tbl_portafolio` WHERE id=:id");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    $registro = $sentencia->fetch(PDO::FETCH_LAZY);

    $titulo = $registro['titulo'];
    $subtitulo = $registro['subtitulo'];
    $imagen=$registro['imagen'];
    $descripcion = $registro['descripcion'];
    $cliente = $registro['cliente'];
    $categoria = $registro['categoria'];
    $url=$registro['url'];
}
if($_POST){
    $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
    $titulo=(isset($_POST['titulo']))?$_POST['titulo']:"";
    $subtitulo=(isset($_POST['subtitulo']))?$_POST['subtitulo']:"";
    $imagen=(isset($_POST['imagen']))?$_POST['imagen']:"";
    $descripcion=(isset($_POST['descripcion']))?$_POST['descripcion']:"";
    $cliente=(isset($_POST['cliente']))?$_POST['cliente']:"";
    $categoria=(isset($_POST['categoria']))?$_POST['categoria']:"";
    $url=(isset($_POST['url']))?$_POST['url']:"";


    $sentencia = $conexion->prepare("UPDATE tbl_portafolio
    SET 
    titulo=:titulo, 
    subtitulo=subtitulo,
    descripcion=:descripcion,
    cliente=:cliente,
    categoria=:categoria,
    url=:url
    WHERE id=:id");

    $sentencia->bindParam(":id", $txtID);
    $sentencia->bindParam(":titulo", $titulo);
    $sentencia->bindParam(":subtitulo", $subtitulo);
    
    $sentencia->bindParam(":descripcion", $descripcion);
    $sentencia->bindParam(":cliente", $cliente);
    $sentencia->bindParam(":categoria", $categoria);
    $sentencia->bindParam(":url", $url);

    $sentencia->execute();
}

include ("../../templates/header.php");

?>

<div class="card">
    <div class="card-header">
        Producto del portafolio
    </div>
    <div class="card-body">
        <form action="" enctype="multipart/form-data" method="post">

            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo:</label>
                <input type="text" value="<?php echo $registro['titulo'];?>" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Titulo">
            </div>
            <div class="mb-3">
                <label for="subtitulo" class="form-label">Subtitulo:</label>
                <input type="text" value="<?php echo $registro['subtitulo'];?>" class="form-control" name="subtitulo" id="subtitulo" aria-describedby="helpId" placeholder="Subtitulo">
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen:</label>
                <?php echo $registro['imagen'];?>
                <input type="file" class="form-control" name="imagen" id="imagen" placeholder="Imagen" aria-describedby="fileHelpId">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion:</i></label>
                <input type="text" value="<?php echo $registro['descripcion'];?>" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Descripcion">
            </div>
            <div class="mb-3">
                <label for="cliente" class="form-label">Cliente:</label>
                <input type="text" value="<?php echo $registro['cliente'];?>" class="form-control" name="cliente" id="cliente" aria-describedby="helpId" placeholder="Cliente">
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label"><i class="fa fa-caret-square-o-right" aria-hidden="true"></i>Categoria</label>
                <input type="text" value="<?php echo $registro['categoria'];?>" class="form-control" name="categoria" id="categoria" aria-describedby="helpId" placeholder="Categoria">
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">URL:</label>
                <input type="text" value="<?php echo $registro['url'];?>" class="form-control" name="url" id="url" aria-describedby="helpId" placeholder="URL del sitio">
            </div>

            <button type="submit" class="btn btn-success">Agregar</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>


        </form>
    </div>
    <div class="card-footer text-muted">
        Footer
    </div>
</div>

<?php include ("../../templates/footer.php");?>