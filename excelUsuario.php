<?php require_once "vistas_admin/vistainferior.php"; ?>
<?php
header("Content-type: application/xlsx");
header("Content-Disposition: attachment; filename = excel.xls");
?>
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
      
    </tr>  
    <?php }
    ?>
    
  </tbody>
</table>
</div>
</div>
<?php require_once "vistas_admin/vistainferior.php"; ?>
               