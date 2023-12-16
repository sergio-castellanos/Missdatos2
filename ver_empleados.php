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



<body >

<h1 class="text-center">Ver y Gestionar Empleados</h1>
  
  <div class="container-fluid row">


<div class=" col-8 p-4 mx-auto ">
<script>
        function eliminar (){
            var respuesta=confirm("Estas seguro que deseas eliminar?");
            return respuesta
        }
    </script>
<table class="table table-bordered border-dark">
  
  <thead class="bg-info bg-info">
    <tr>
      <th scope="col">Id empleado</th>
      <th scope="col">Identificacion</th>
      <th scope="col">Nombre Completo</th>
      <th scope="col">Fecha de nacimiento</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
      <th scope="col">Cargo</th>
      <th scope="col">Correo</th>
      <th scope="col"></th>
      <th scope="col"></th>
      
      <?php
include "conexion.php";
include "eliminar_e.php";

?>
    </tr>
  </thead>
  <tbody>
    <?php
    include "conexion.php";
    $sql=$conexion->query(" select * from empleado ");
    while($datos = $sql->fetch_object()) { ?>
     <tr>
      <td><?=$datos->id_empleado?></td> 
      <td><?=$datos->identificacion?></td>
      <td><?=$datos->nombre_completo?></td>
      <td><?=$datos->fecha_nacimiento?></td>
      <td><?=$datos->direccion?></td>
      <td><?=$datos->telefono?></td>
      <td><?=$datos->cargo?></td>
      <td><?=$datos->correo?></td>
      
      <td>
        <a href="actualizar_empleado.php? id_empleado=<?= $datos->id_empleado?>" class="btn btn-danger"><i class="fa-solid fa-user-pen"></i></a></td>
        <td><a onclick="return eliminar()" href="inicio.php?id_empleado=<?= $datos->id_empleado?>" class="btn btn-primary"><i class="fa-solid fa-trash"></i></a>
        
    </td>
    </tr>  
    <?php }
    ?>
    
  </tbody>
</table>
<a href="admin.php" class="btn btn-primary"> <i class="fa-solid fa-backward"></i></a>
</div>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
        