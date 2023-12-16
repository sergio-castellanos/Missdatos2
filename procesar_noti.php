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


<div class="container pt-5 col-10">
  <table class="table" id="usuarios">
  <thead class="bg-info bg-info">
    <tr>  
      <th scope="col">Nombre Completo</th>     
      <th scope="col">Rol</th>
      <th scope="col">Usuario</th>
      <th scope="col">Motivo</th>
    
      
      
      <?php
include "modelo/conexion.php";

?>
</tr>
  </thead>
  <tbody>
    <?php
    include "modelo/conexion.php";
    $sql=$conn->query(" select * from usuario");
    while($datos = $sql->fetch_object()) { ?>
     <tr>
      
      <td><?=$datos->nombre_completo?></td>
      <td><?=$datos->rol?></td>
      <td><?=$datos->usuario?></td>
      
      
      <td>
        
        
    </td>
    </tr>  
    <?php }
    ?>
    
  </tbody>
</table>


<?php require_once "vistas_admin/vistainferior.php"; ?>