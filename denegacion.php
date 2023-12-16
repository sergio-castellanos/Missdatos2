<?php
include "modelo/conexion.php";

session_start();

  $sesion=$_SESSION['cliente'];
  $datos=mysqli_query($conexion,"select * from usuario where usuario='$sesion'");

    while($consulta=mysqli_fetch_array($datos)){
        $rol = $consulta['rol'];

    }if($rol=='admin'){
        echo"
        <script>
        alert ('no tienes acceso');
        location.href = 'login.php';
        </script>
        
        ";
        die();
     } elseif($rol=='empleado'){
            echo"
        <script>
        alert ('no tienes acceso');
        location.href = 'login.php';
        </script>
        
        ";
        }
    
?>