<?php
include_once "conexion.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    if(empty($usuario)){
        header("Location: login.php?error=1");  
        }
    if(empty($contrasena)){
        header("Location: login.php?error=2");     
    }

$consulta= "SELECT * FROM usuario WHERE usuario='$usuario' AND contrasena='$contrasena' ";
    $resultado=$conexion->query($consulta);
    if ($resultado->num_rows == 1){
        $fila = $resultado->fetch_assoc();
        session_start();

        $nombre= $fila["nombre_completo"];
        $rolActual = $fila["rol"];
        $Usuario = $fila["usuario"];
        $contrasena =$fila["contrasena"];
        $_SESSION["nombre_completo"]=$fila["$nombre_completo"];
        $_SESSION["rol"] = $rolActual;
        $_SESSION["usuario"] = $usuario;
        $_SESSION["contrasena"] = $contrasena;
        switch($rolActual){
            case 'admin':
            
                header("Location: admin.php");
                break;
            case 'empleado':
                header("Location: empleado.php");
                break;
        }
    }else {
        echo"
    <script>
    alert ('no se encontro la cuenta');
    location.href = 'login.php';
    </script>
    
    ";
}
      

}
mysqli_close($conexion);