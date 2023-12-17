<?php

if (!empty($_GET["id_usuario"])){

    $id_usuario=$_GET["id_usuario"];
    $sql=$conexion->query("delete from usuario where id_usuario=$id_usuario");

    if ($sql==1) {
        echo "<div class='alert alert-success'> Usuario eliminado </div>";
    } else {
        echo "<div class='alert alert-success' > No se pudo eliminar al Usuario</div>";
    }
    
}

?>