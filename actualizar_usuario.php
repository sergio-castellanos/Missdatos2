<?php
include "conexion.php";
$id_usuario=$_GET["id_usuario"];

$sql=$conexion->query (" select * from usuario where id_usuario= $id_usuario");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<form class="col-3 p-3 m-auto" method="POST">
    <h3 class="text-center text-secundary ">Actualizar Usuario</h3>
    <input type="hidden" name="id_usuario" value="<?= $_GET["id_usuario"] ?>">
    <?php
include "actualizar_usuario.php";

  while($datos = $sql->fetch_object()){?>

<div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Nombre completo</label>
    <input type="text" class="form-control" name="nombre_completo" value="<?=$datos->nombre_completo?>"> 
  </div>

  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Rol</label>
    <input type="option" class="form-control" name="rol" value="<?=$datos->rol?>"> 
  </div>

  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input type="text" class="form-control" name="usuario" value="<?=$datos->usuario?>"> 
  </div>

  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="contrasena" value="<?=$datos->$contrasena?>"> 
  </div>

  



  <?php }
    ?>

 
  
  <button type="submit" class="btn btn-primary" name="btnactualizaru" value="ok">Actualizar empleado</button>

</form>

</body>
</html>