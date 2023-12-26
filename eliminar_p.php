<?php


if (!empty($_GET["id_permiso"])){

    $id_permiso=$_GET["id_permiso"];
    $sql=$conexion->query("delete from permiso where id_permiso=$id_permiso");

    if ($sql==1) {
        echo "<div class='alert alert-success'> Permiso  eliminado </div>";
    } else {
        echo "<div class='alert alert-success' > No se pudo eliminar el permiso</div>";
    }
    
}


?>