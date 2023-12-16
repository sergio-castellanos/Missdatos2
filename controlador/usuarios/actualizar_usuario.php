<?php

if (!empty($_POST["btnactualizaru"])){

   if (!empty($_POST["nombre_completo"]) and !empty($_POST["rol"]) and !empty($_POST["usuario"]) and !empty($_POST["contrasena"])){
   
    $id=$_POST["id_usuario"];
    $nombre_completo=$_POST["nombre_completo"];
    $rol=$_POST["rol"];
    $usuario=$_POST["usuario"];
    $contrasena=$_POST["contrasena"];
    $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);
    
    $sql=$conn->query("update usuario set nombre_completo='$nombre_completo',rol='$rol',usuario='$usuario',contrasena='$hashed_password' where id_usuario = $id_usuario");
if ($sql==1) {
    header("location:registrar_usuarios.php");
    
} else {
         echo "<div class='alert alert-warning'>No se actualizo</div>";
}
}else{
    echo "<div class='alert alert-warning'>Tienes algun campo vacio </div>";
   }
} 

?>