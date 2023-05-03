<?php 
include "../../bd.php";


if(isset($_GET['txtID'])){
    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";
    $sentencia=$conexion->prepare("SELECT * FROM `tbl_servicios` WHERE id=:id");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    $registro=$sentencia->fetch(PDO::FETCH_LAZY);

    $icono=$registro['icono'];
    $titulo=$registro['titulo'];
    $descripcion=$registro['descripcion'];
}


include ("../../templates/header.php");?>

<div class="card">
    <div class="card-header">
        Editando informacion de servicios
    </div>

    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

        <div class="mb-3">
          <label for="txtID" class="form-label">ID:</label>
          <input value="<?php echo $txtID;?>" type="text"
            class="form-control" name="txtID" id="txtID" aria-describedby="helpId" placeholder="ID">
          
        </div>

        <div class="mb-3">
          <label for="icono" class="form-label">Icono:</label>
          <input value="<?php echo $icono;?>" type="text"
            class="form-control" name="" id="" aria-describedby="helpId" placeholder="Icono">
          
        </div>
        <div class="mb-3">
          <label for="titulo" class="form-label">Titulo:</label>
          <input value="<?php echo $titulo;?>" type="text"
            class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Titulo">
        </div>

        <div class="mb-3">
          <label for="descripcion" class="form-label">Descripcion:</label>
          <input value="<?php echo $descripcion;?>" type="text"
            class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Descripcion">
        </div>

        <button type="submit" class="btn btn-success">Agregar</button>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>


        </form>
    </div>

    <div class="card-footer text-muted">
        
    </div>
</div>


<?php include ("../../templates/footer.php");?>