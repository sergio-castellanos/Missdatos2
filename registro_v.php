<?php
if (!empty($_POST["btnregistrarv"])){
    if (!empty($_POST["identificacion"]) and !empty($_POST["nombre_completo"]) and !empty($_POST["fecha_inicio"]) and !empty($_POST["fecha_final"]) and !empty($_POST["cargo"])){
        
        $identificacion=$_POST["identificacion"];
        $nombre_completo=$_POST["nombre_completo"];
        
        $fecha_inicio=$_POST["fecha_inicio"];
        $fecha_final=$_POST["fecha_final"];
        $cargo=$_POST["cargo"];
        
       

        $sql=$conexion->query("insert into vacaciones(identificacion,nombre_completo,fecha_inicio,fecha_final,cargo)values('$identificacion','$nombre_completo','$fecha_inicio','$fecha_final','$cargo')");

            if ($sql==1) {
                echo '<div class="alert alert-success">Se registraron correctamente las vacaciones</div>';
                
            } else {
                echo '<div class="alert alert-danger">Error al registrar vacaciones</div>';
            }  
        
    } else {
        echo '<div class="alert alert-danger">Alguno de los campos esta vacio</div>';
    }
    

}
?>