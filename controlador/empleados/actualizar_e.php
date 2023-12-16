<?php

if (!empty($_POST["btnactualizar"])){

   if (!empty($_POST["identificacion"])  and !empty($_POST["nombre_completo"]) and !empty($_POST["fecha_nacimiento"]) and !empty($_POST["direccion"]) and !empty($_POST["telefono"]) and !empty($_POST["cargo"]) and !empty($_POST["correo"])){
    $id_producto=$_POST["id_empleado"];
    $identificacion=$_POST["identificacion"];
    $nombre_completo=$_POST["nombre_completo"];
    $fecha_nacimiento=$_POST["fecha_nacimiento"];
    $direccion=$_POST["direccion"];
    $telefono=$_POST["telefono"];
    $cargo=$_POST["cargo"];
    $correo=$_POST["correo"]; 
    
    $sql=$conn->query("update empleado set identificacion='$identificacion', nombre_completo='$nombre_completo',fecha_nacimiento='$fecha_nacimiento',direccion='$direccion',telefono='$telefono',cargo='$cargo',correo='$correo' where id_empleado = $id_empleado");
if ($sql==1) {
    header("location:inicio.php");
    
} else {
         echo "<div class='alert alert-warning'>No se actualizo</div>";
}
}else{
    echo "<div class='alert alert-warning'>Tienes algun campo vacio </div>";
   }
} 

?>