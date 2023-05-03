<?php
include ("../../bd.php");
if($_POST){
  $icono=(isset($_POST['icono']))?$_POST['icono']:"";
  $titulo=(isset($_POST['titulo']))?$_POST['titulo']:"";
  $descripcion=(isset($_POST['descripcion']))?$_POST['descripcion']:"";

  $sentencia=$conexion->prepare("INSERT INTO `tbl_servicios`(`id`, `icono`, `titulo`, `descripcion`) VALUES (NULL,:icono,:titulo,:descripcion)");

  $sentencia->bindParam(":icono",$icono);
  $sentencia->bindParam(":titulo",$titulo);
  $sentencia->bindParam(":descripcion",$descripcion);
  $sentencia->execute();

}

?>
<?php include "../../templates/header.php";?>

<div class="card">
    <div class="card-header">
        Crear servicios
    </div>

    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

        <div class="mb-3">
          <label for="icono" class="form-label">Icono:</label>
          <input type="text"
            class="form-control" name="" id="" aria-describedby="helpId" placeholder="Icono">
          
        </div>
        <div class="mb-3">
          <label for="titulo" class="form-label">Titulo:</label>
          <input type="text"
            class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Titulo">
        </div>

        <div class="mb-3">
          <label for="descripcion" class="form-label">Descripcion:</label>
          <input type="text"
            class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Descripcion">
        </div>

        <button type="submit" class="btn btn-success">Agregar</button>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>


        </form>
    </div>

    <div class="card-footer text-muted">
        
    </div>
</div>

<?php include "../../templates/footer.php";?>