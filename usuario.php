<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>usuario</title>
</head>
<body>
    <h1 class="text-center"></h1>
    
  <?php
  include "conexion.php";
  session_start();

  $sesion=$_SESSION['cliente'];
  $datos=mysqli_query($conexion,"select * from usuario where usuario='$sesion'");

    while($consulta=mysqli_fetch_array($datos)){
        $rol = $consulta['rol'];

    }
    if($rol=="admin"){
        include 'admin.php';
        
    }elseif($rol=='empleado'){
        include 'empleado.php';
    }
  ?> 
</body>
</html>