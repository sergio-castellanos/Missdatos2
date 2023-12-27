<?php

if (!empty($_POST["btnactualizarv"])){

   if (!empty($_POST["identificacion"])  and !empty($_POST["nombre_completo"])and !empty($_POST["fecha_inicio"]) and !empty($_POST["fecha_final"])  and !empty($_POST["cargo"])){
    
    
    $id_incapacidad=$_POST["id_vacaciones"];
    $identificacion=$_POST["identificacion"];
    $nombre_completo=$_POST["nombre_completo"];
   
    $fecha_inicio=$_POST["fecha_inicio"];
    $fecha_final=$_POST["fecha_final"];
    $cargo=$_POST["cargo"];
   
    
    $sql=$conexion->query("update vacaciones set identificacion='$identificacion',nombre_completo='$nombre_completo',fecha_inicio='$fecha_inicio',fecha_final='$fecha_final',cargo='$cargo' where id_vacaciones = $id_vacaciones");
if ($sql==1) {
    header("location:ver_vacaciones.php");
    
} else {
         echo "<div class='alert alert-warning'>No se actualizo</div>";
}
}else{
    echo "<div class='alert alert-warning'>Tienes algun campo vacio </div>";
   }
} 

?>