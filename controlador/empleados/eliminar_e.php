<?php

if (!empty($_GET["id_empleado"])){

    $id_empleado=$_GET["id_empleado"];
    $sql=$conn->query("delete from empleado where id_empleado=$id_empleado");

    if ($sql==1) {
        echo "<div class='alert alert-success'> Empleado eliminado </div>";
    } else {
        echo "<div class='alert alert-success' > No se pudo eliminar al empleado</div>";
    }
    
}

?>