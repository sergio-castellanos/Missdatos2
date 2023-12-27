<?php
include "conexion.php";
$id_vacaciones=$_GET["id_vacaciones"];

$sql=$conexion->query (" select * from vacaciones where id_vacaciones=$id_vacaciones");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        
        <link href="css/styles1.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link href=" https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>


        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">


    </head>
    <body>
    <form class="col-3 p-3 m-auto" method="POST">
    <h3 class="text-center text-secundary ">Actualizar vacaciones</h3>
    <input type="hidden" name="id_vacaciones" velue="<?= $_GET["id_vacaciones"] ?>">
    <?php
include "actualizar_v.php";

  while($datos = $sql->fetch_object()){?>


<div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Identificacion</label>
    <input type="text" class="form-control" name="identificacion" value="<?=$datos->identificacion?>"> 
  </div>

  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Nombre Completo</label>
    <input type="text" class="form-control" name="nombre_completo" value="<?=$datos->nombre_completo?>"> 
  </div>

 
  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Fecha De Inicio</label>
    <input type="date" class="form-control" name="fecha_inicio" value="<?=$datos->fecha_inicio?>"> 
  </div>

  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Fecha Final</label>
    <input type="date" class="form-control" name="fecha_final" value="<?=$datos->fecha_final?>"> 
  </div>

  

  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Cargo</label>
    <input type="text" class="form-control" name="cargo" value="<?=$datos->cargo?>"> 
  </div>


 

  <?php }
    ?>

 
  
  <button type="submit" class="btn btn-primary" name="btnactualizarv" value="ok">Actualizar vacaciones</button>

</form>


</body>
</html>