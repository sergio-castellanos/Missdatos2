<?php
if (!empty($_POST["btnregistrar"])){
    if (!empty($_POST["identificacion"]) and !empty($_POST["nombre_completo"]) and !empty($_POST["fecha_nacimiento"]) and !empty($_POST["direccion"]) and !empty($_POST["telefono"]) and !empty($_POST["cargo"]) and !empty($_POST["correo"])){
        
        $identificacion=$_POST["identificacion"];
        $nombre_completo=$_POST["nombre_completo"];
        $fecha_nacimiento=$_POST["fecha_nacimiento"];
        $direccion=$_POST["direccion"];
        $telefono=$_POST["telefono"];
        $cargo=$_POST["cargo"];
        $correo=$_POST["correo"];

        $sql=$conexion->query(" insert into empleado(identificacion,nombre_completo,fecha_nacimiento,direccion,telefono,cargo,correo)values('$identificacion','$nombre_completo','$fecha_nacimiento','$direccion','$telefono','$cargo','$correo')");

            if ($sql==1) {
                echo '<div class="alert alert-success">Se registro correctamente el empleado</div>';
                
            } else {
                echo '<div class="alert alert-danger">Error al registrar el empleado</div>';
            }  
        
    } else {
        echo '<div class="alert alert-danger">Alguno de los campos esta vacio</div>';
    }
    

}
?>