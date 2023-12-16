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
include "modelo/conexion.php";
session_start();

// Verifica si la sesión está iniciada y si existe la variable 'cliente'
if (isset($_SESSION['cliente'])) {
    $sesion = $_SESSION['cliente'];

    $datos = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario='$sesion'");

    // Inicializa $rol para manejar el caso en el que no se encuentra el rol
    $rol = null;

    while ($consulta = mysqli_fetch_array($datos)) {
        $rol = $consulta['rol'];
    }

    // Verifica el rol
    if ($rol == "admin") {
        include 'admin.php';
    } elseif ($rol == 'empleado') {
        include 'empleado.php';
    } else {
        // Manejar el caso en el que no se encontró el rol
        echo "No se encontró el rol para el usuario.";
    }
} else {
    // Si la sesión no está iniciada o no existe 'cliente', redirige a la página de inicio de sesión
    header("Location: login.php"); // Reemplaza 'login.php' con la página de inicio de sesión
    exit();
}
?>
</body>
</html>