<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a href="estilo.css"></a>
    <title>Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/35e80ccf1c.js" crossorigin="anonymous"></script>
    
</head>

<body>
  
  <div class="container-fluid row">

<script>
        function eliminar (){
            var respuesta=confirm("Estas seguro que deseas eliminar?");
            return respuesta
        }
    </script>


<div class="container-fluid row">

<form class="col-3 p-3  " method="POST">
    <h3 class="text-center text-secundary ">Registro De Usuarios</h3>
    <?php
    include "conexion.php";
    include "registro_usuario.php";
    ?>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre completo</label>
    <input type="text" class="form-control" name="nombre_completo"> 
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Rol</label>
    <input type="text" class="form-control" name="rol"> 
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">usuario</label>
    <input type="text" class="form-control" name="usuario"> 
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">contraseña</label>
    <input type="password" class="form-control" name="contrasena"> 
  </div>
 
  <button type="submit" class="btn btn-primary" name="btnregistraru" value="ok">Registrar</button>
  <a class="btn btn-primary" href="usuario.php" role="button">atras</a>
  </form>


  <div class=" col-8 p-4">
<table class="table">
  <thead class="bg-info bg-info">
    <tr>
      <th scope="col">Id_usuario</th>  
      <th scope="col">Nombre Completo</th>     
      <th scope="col">rol</th>
      <th scope="col">usuario</th>
      <th scope="col">contrasena</th>
      <th scope="col"></th>
      <th scope="col"></th>
      
      <?php
include "conexion.php";
include "eliminar_usuario.php";

?>
    </tr>
  </thead>
  <tbody>
    <?php
    include "conexion.php";
    $sql=$conexion->query(" select * from usuario ");
    while($datos = $sql->fetch_object()) { ?>
     <tr>
      <td><?=$datos->id_usuario?></td> 
      <td><?=$datos->nombre_completo?></td>
      <td><?=$datos->rol?></td>
      <td><?=$datos->usuario?></td>
      <td><?=$datos->contrasena?></td>
      
      
      <td>
        <a href="actualizar_usuario.php? id_usuario=<?= $datos->id_usuario?>" class="btn btn-small btn-warning"><i class="fa-solid fa-user-pen"></i></a></td>
        <td><a onclick="return eliminar()" href="registrar_usuarios.php?id_usuario=<?= $datos->id_usuario?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
        
    </td>
    </tr>  
    <?php }
    ?>
    
  </tbody>
</table>
</div>


</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>