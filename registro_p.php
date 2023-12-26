<?php
if (!empty($_POST["btnregistrarp"])){
    if (!empty($_POST["identificacion"]) and !empty($_POST["nombre_completo"]) and !empty($_POST["fecha_inicio"]) and !empty($_POST["fecha_final"])  and !empty($_POST["cargo"]) and !empty($_POST["motivo"])){
        
        $identificacion=$_POST["identificacion"];
        $nombre_completo=$_POST["nombre_completo"];
        $fecha_inicio=$_POST["fecha_inicio"];
        $fecha_final=$_POST["fecha_final"];
       
        $cargo=$_POST["cargo"];
        $motivo=$_POST["motivo"];

        $sql=$conexion->query(" insert into permiso(identificacion,nombre_completo,fecha_inicio,fecha_final,cargo,motivo)values('$identificacion','$nombre_completo','$fecha_inicio','$fecha_final','$cargo','$motivo')");

            if ($sql==1) {
                echo '<div class="alert alert-success">Se registro correctamente el Permiso</div>';
                
            } else {
                echo '<div class="alert alert-danger">Error al registrar permiso</div>';
            }  
        } else {
            echo '<div class="alert alert-danger">Alguno de los campos esta vacio</div>';
        
        }
    

}
?>


