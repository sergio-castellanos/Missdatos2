<?php require_once "vistas_admin/vistasuperior.php"; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a href="estilo.css"></a>
    <title>Administrador</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <script src="https://kit.fontawesome.com/35e80ccf1c.js" crossorigin="anonymous"></script>
    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="js/scriptdt.js"></script>
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
<center>
<form class="col-3 p-3  " method="POST">
    <h3 class="text-center text-secundary ">Registro de Empleados</h3>
    <?php
    include "modelo/conexion.php";
    include "controlador/empleados/registro_p.php";
    ?>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Identificación:</label>
    <input type="text" class="form-control" name="identificacion"> 
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre completo:</label>
    <input type="text" class="form-control" name="nombre_completo"> 
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento:</label>
    <input type="date" class="form-control" name="fecha_nacimiento"> 
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Dirección:</label>
    <input type="text" class="form-control" name="direccion"> 
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Teléfono:</label>
    <input type="text" class="form-control" name="telefono"> 
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cargo:</label>
    <input type="text" class="form-control" name="cargo"> 
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo electrónico:</label>
    <input type="email" class="form-control" name="correo"> 
  </div>

  
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
  <a class="btn btn-primary" href="admin.php" role="button">Atrás</a>
  </form>
      </center>


<div class="container pt-5 col-11">
<table class="table" id="usuarios">
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
include "modelo/conexion.php";
include "controlador/empleados/eliminar_e.php";

?>
    </tr>
  </thead>
  <tbody>
    <?php
    include "modelo/conexion.php";
    $sql=$conn->query(" select * from empleado ");
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
        <a href="actualizar_empleado.php? id_empleado=<?= $datos->id_empleado?>" class="btn btn-small btn-warning"><i class="fa-solid fa-user-pen"></i></a></td>
        <td><a onclick="return eliminar()" href="inicio.php?id_empleado=<?= $datos->id_empleado?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
        
    </td>
    </tr>  
    <?php }
    ?>
    
  </tbody>
</table>
</div>
</div>
<script src="cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<?php require_once "vistas_admin/vistainferior.php"; ?>
               