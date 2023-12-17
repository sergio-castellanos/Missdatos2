<?php

if (!empty($_POST["btnactualizaru"])){

   if (!empty($_POST["nombre_completo"]) and !empty($_POST["rol"]) and !empty($_POST["usuario"]) and !empty($_POST["contrasena"])){
    
    $id_usu=$_POST["id_usuario"];
    $nombre_completo=$_POST["nombre_completo"];
    $rol=$_POST["rol"];
    $usuario=$_POST["usuario"];
    $contrasena=$_POST["contrasena"];
    
    
    $sql=$conexion->query("update usuario set  nombre_completo='$nombre_completo', rol='$rol', usuario='$usuario', contrasena='$contrasena' where id_usuario = $id_usuario");
if ($sql==1) {
    header("location:ver_usuario.php");
    
} else {
         echo "<div class='alert alert-warning'>No se actualizo</div>";
}
}else{
    echo "<div class='alert alert-warning'>Tienes algun campo vacio </div>";
   }
} 

    


?>