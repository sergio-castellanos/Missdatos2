<?php
if (!empty($_POST["btnregistrari"])){
    if (!empty($_POST["identificacion"]) and !empty($_POST["nombre_completo"])  and !empty($_POST["eps"]) and !empty($_POST["fecha_inicio"]) and !empty($_POST["fecha_final"]) and !empty($_POST["cargo"]) and !empty($_POST["soporte"])){
        
        $identificacion=$_POST["identificacion"];
        $nombre_completo=$_POST["nombre_completo"];
        $eps=$_POST["eps"];
        $fecha_inicio=$_POST["fecha_inicio"];
        $fecha_final=$_POST["fecha_final"];
        $cargo=$_POST["cargo"];
        $soporte=$_POST["soporte"];
       

        $sql=$conexion->query("insert into incapacidad(identificacion,nombre_completo,eps,fecha_inicio,fecha_final,cargo,soporte)values('$identificacion','$nombre_completo','$eps','$fecha_inicio','$fecha_final','$cargo','$soporte')");

            if ($sql==1) {
                echo '<div class="alert alert-success">Se registro correctamente la incapacidad</div>';
                
            } else {
                echo '<div class="alert alert-danger">Error al registrar incapacidad</div>';
            }  
        
    } else {
        echo '<div class="alert alert-danger">Alguno de los campos esta vacio</div>';
    }
    

}
?>