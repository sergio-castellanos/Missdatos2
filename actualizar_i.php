<?php

if (!empty($_POST["btnactualizari"])){

   if (!empty($_POST["identificacion"])  and !empty($_POST["nombre_completo"])and !empty($_POST["eps"]) and !empty($_POST["fecha_inicio"]) and !empty($_POST["fecha_final"])  and !empty($_POST["cargo"]) and !empty($_POST["soporte"])){
    
    
    $id_incapacidad=$_POST["id_incapacidad"];
    $identificacion=$_POST["identificacion"];
    $nombre_completo=$_POST["nombre_completo"];
    $eps=$_POST["eps"];
    $fecha_inicio=$_POST["fecha_inicio"];
    $fecha_finalo=$_POST["fecha_final"];
    $cargo=$_POST["cargo"];
   
    
    $sql=$conexion->query("update incapacidad set identificacion='$identificacion',nombre_completo='$nombre_completo',eps='$eps',fecha_inicio='$fecha_inicio',fecha_final='$fecha_final',cargo='$cargo',soporte='$soporte' where id_incapacidad = $id_incapacidad");
if ($sql==1) {
    header("location:ver_incapacidad.php");
    
} else {
         echo "<div class='alert alert-warning'>No se actualizo</div>";
}
}else{
    echo "<div class='alert alert-warning'>Tienes algun campo vacio </div>";
   }
} 

?>