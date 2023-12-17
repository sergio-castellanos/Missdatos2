<?php


if (!empty($_GET["id_incapacidad"])){

    $id_incapacidad=$_GET["id_incapacidad"];
    $sql=$conexion->query("delete from incapacidad where id_incapacidad=$id_incapacidad");

    if ($sql==1) {
        echo "<div class='alert alert-success'> Incapacidad  eliminada </div>";
    } else {
        echo "<div class='alert alert-success' > No se pudo eliminar al empleado</div>";
    }
    
}


?>