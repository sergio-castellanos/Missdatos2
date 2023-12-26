<?php


if (!empty($_GET["id_vacaciones"])){

    $id_vacaciones=$_GET["id_vacaciones"];
    $sql=$conexion->query("delete from vacaciones where id_vacaciones=$id_vacaciones");

    if ($sql==1) {
        echo "<div class='alert alert-success'> Vacaciones eliminadas </div>";
    } else {
        echo "<div class='alert alert-success' > No se pudo eliminar las vacaciones</div>";
    }
    
}


?>