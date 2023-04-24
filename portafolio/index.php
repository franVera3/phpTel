<?php
include "cabecera.php";
include "conexion.php";
?>
<?php

$objConexion = new conexion();
$proyectos = $objConexion->consultar("SELECT * FROM `proyectos`");

?>


<div class="p-5 mb-4 bg-light rounded-3">
  <div class="container-fluid py-5">
    <h1 class="display-5 fw-bold">Bienvenidos</h1>
    <p class="col-md-8 fs-4">Este es un portfolio o un portafolio privado</p>
    <button class="btn btn-primary btn-lg" type="button">Más informacion</button>
  </div>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">

  <?php foreach ($proyectos as $proyecto) { ?>

    <div class="col">
      <div class="card h-100">
        <img src="<?php echo "imagenes/".$proyecto['imagen'];?>" class="card-img-top" width=100 alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $proyecto['nombre']?></h5>
          <p class="card-text"><?php echo $proyecto['descripcion']?></p>
        </div>
      </div>
    </div>

  <?php } ?>

  <?php
  include "pie.php";
  ?>