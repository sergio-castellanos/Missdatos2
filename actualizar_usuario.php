<?php
include "conexion.php";
/*$id_usuario=$_GET["id_usuario"];

$sql=$conexion->query (" select * from usuario where id_usuario= $id_usuario");
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
    <h3 class="text-center text-secundary ">Actualizar el Empleados</h3>
    <input type="hidden" name="id_e<usuario" velue="<?= $_GET["id_usuario"] ?>">
    <?php
include "actualizar_u.php";

  while($datos = $sql->fetch_object()){?>



  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Nombre Completo</label>
    <input type="text" class="form-control" name="nombre_completo" value="<?=$datos->nombre_completo?>"> 
  </div>

  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input type="text" class="form-control" name="usuario" value="<?=$datos->usuario?>"> 
  </div>

  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">usuario</label>
    <input type="text" class="form-control" name="rol" value="<?=$datos->rol?>"> 
  </div>

  

  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Contrasena</label>
    <input type="password" class="form-control" name="contrasena" value="<?=$datos->contrasena?>"> 
  </div>

 


  <?php }
    ?>

 
  
  <button type="submit" class="btn btn-primary" name="btnactualizaru" value="ok">Actualizar Usuario</button>

</form>


</body>
</html>*/


include "conexion.php";
$id_usuario=$_GET["id_usuario"];

$sql=$conexion->query (" select * from usuario where id_usuario=$id_usuario");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Usuario</title>
        
        <link href="css/styles1.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link href=" https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>


        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">


    </head>
    <body>
<form class="col-3 p-3 m-auto" method="POST">
    <h3 class="text-center text-secundary ">Actualizar Usuario</h3>
    <input type="hidden" name="id_usuario" velue="<?= $_GET["id_usuario"] ?>">
    <?php
include "actualizar_u.php";

  while($datos = $sql->fetch_object()){?>

<div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Nombre Completo</label>
    <input type="text" class="form-control" name="nombre_completo" value="<?=$datos->nombre_completo?>"> 
  </div>

  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Rol</label>
    <input type="text" class="form-control" name="rol" value="<?=$datos->rol?>"> 
  </div>

  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input type="text" class="form-control" name="usuario" value="<?=$datos->usuario?>"> 
  </div>

  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="contrasena" value="<?=$datos->contrasena?>"> 
  </div>

  

  <?php }
    ?>

 
  
  <button type="submit" class="btn btn-primary" name="btnactualizaru" value="ok">Actualizar Usuario</button>

</form>


</body>
</html>