<?php require_once "vistas_admin/vistasuperior.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a href="estilo.css"></a>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script defer src="https://kit.fontawesome.com/35e80ccf1c.js" crossorigin="anonymous"></script>
    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="js/scriptdt.js"></script>

    <title>Administrador</title>

</head>

<body>
  
  <div class="container-fluid row">

<script>
        function eliminar (){
            var respuesta=confirm("Estas seguro que deseas eliminar?");
            return respuesta
        }
    </script>


<center>
<form class="col-3 p-3  " method="POST">
    <h3 class="text-center text-secundary ">Registro de Usuarios</h3>
    <?php
    include "modelo/conexion.php";
    include "controlador/usuarios/registro_usuario.php";
    ?>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre completo:</label>
    <input type="text" class="form-control" name="nombre_completo"> 
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Rol empresarial:</label>
    <select class="form-select" aria-label="Default select example" name="rol">
    <option selected>Seleccione</option>
    <option>admin</option>
    <option>empleado</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre de usuario:</label>
    <input type="text" class="form-control" name="usuario"> 
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Contraseña:</label>
    <input type="password" class="form-control" name="contrasena"> 
  </div>
 
  <button type="submit" class="btn btn-primary" name="btnregistraru" value="ok">Registrar</button>
  <a class="btn btn-primary" href="admin.php" role="button">Atrás</a>
  <button type="button" onclick="excel()" class="btn btn-primary" name="btnregistraru" value="ok">Excel</button>
  </form>
      </center>


  <div class="container pt-5 col-10">
  <table class="table" id="usuarios">
  <thead class="bg-info bg-info">
    <tr>
      <th scope="col">Id_usuario</th>  
      <th scope="col">Nombre Completo</th>     
      <th scope="col">Rol</th>
      <th scope="col">Nombre usuario</th>
      <th scope="col">Contraseña</th>
      <th scope="col"></th>
      <th scope="col"></th>
      
      <?php
include "modelo/conexion.php";
include "controlador/usuarios/eliminar_usuario.php";

?>
    </tr>
  </thead>
  <tbody>
    <?php
    include "modelo/conexion.php";
    $sql=$conn->query(" select * from usuario ");
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
<script>
  function excel(){
    (header:location("excelUsuario.php"))
  }
</script>

<script src="cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<?php require_once "vistas_admin/vistainferior.php"; ?>
               