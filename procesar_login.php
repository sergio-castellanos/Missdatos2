<?php
require_once "modelo/conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $username = $_POST["usuario"];
    $password = $_POST["contrasena"];
    
    

    // Consultar la base de datos para verificar las credenciales
    $sql = "SELECT * FROM usuario WHERE usuario = '$username' AND contrasena = '$password'";
    $result = $conn->query($sql);

    if (!$result) {
        die("Error en la consulta: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        // Credenciales válidas
        header('location:admin.php');

    } else {
        // Credenciales inválidas
        echo $sql;
        echo "Credenciales inválidas. Por favor, inténtelo de nuevo.";
    }
}
$conn->close();
?>
