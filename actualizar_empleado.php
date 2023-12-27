<?php
include "conexion.php";
$id_empleado=$_GET["id_empleado"];

$sql=$conexion->query (" select * from empleado where id_empleado=$id_empleado");
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
    <h3 class="text-center text-secundary ">Actualizar el Empleado</h3>
    <input type="hidden" name="id_empleado" velue="<?=$_GET["id_empleado"] ?>">
    <?php
include "actualizar_e.php";

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
    <label for="exampleInputEmail1" class="form-label">Fecha De Nacimiento</label>
    <input type="date" class="form-control" name="fecha_nacimiento" value="<?=$datos->fecha_nacimiento?>"> 
  </div>

  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Direccion</label>
    <input type="text" class="form-control" name="direccion" value="<?=$datos->direccion?>"> 
  </div>

  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Telefono</label>
    <input type="text" class="form-control" name="telefono" value="<?=$datos->telefono?>"> 
  </div>

  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Cargo</label>
    <input type="text" class="form-control" name="cargo" value="<?=$datos->cargo?>">

  </div>

  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
    <input type="email" class="form-control" name="correo" value="<?=$datos->correo?>"> 
  </div>


  <?php }
    ?>

 
  
  <button type="submit" class="btn btn-primary" name="btnactualizare" value="ok">Actualizar empleado</button>
    
</form>


</body>
</html>