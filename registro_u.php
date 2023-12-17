<?php
if (!empty($_POST["btnregistraru"])){
    if (!empty($_POST["nombre_completo"]) and !empty($_POST["rol"]) and !empty($_POST["usuario"]) and !empty($_POST["contrasena"])){
        
       
        $nombre_completo=$_POST["nombre_completo"];
        
        
        $rol=$_POST["rol"];
        $usuario=$_POST["usuario"];
        $contrasena=$_POST["contrasena"];

        $sql=$conexion->query(" insert into usuario(nombre_completo,rol,usuario,contrasena)values('$nombre_completo','$rol','$usuario','$contrasena')");

            if ($sql==1) {
                echo '<div class="alert alert-success">Se registro correctamente el usuario</div>';
                
            } else {
                echo '<div class="alert alert-danger">Error al registrar el usuario</div>';
            }  
        
    } else {
        echo '<div class="alert alert-danger">Alguno de los campos esta vacio</div>';
        
    }
    

}
?>