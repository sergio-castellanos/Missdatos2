<?php

if (!empty($_GET["id_usuario"])){

    $id_usuario=$_GET["id_usuario"];
    $sql=$conn->query("delete from usuario where id_usuario=$id_usuario");

    if ($sql==1) {
        echo "<div class='alert alert-success'> Empleado eliminado </div>";
    } else {
        echo "<div class='alert alert-success' > No se pudo eliminar al empleado</div>";
    }
    
}

?>