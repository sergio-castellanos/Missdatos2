<?php
session_start();
require_once "vistas_admin/vistasuperior.php";
include "modelo/conexion.php";

if (isset($_SESSION['usuario'])) {
    // Accede al valor del índice "usuario"
    $usuario = $_SESSION['usuario'];

    // Realiza la consulta para obtener los datos del usuario desde la base de datos
    $query = "SELECT * FROM 'empleado' WHERE identificacion = '$identificacion', nombre_completo = '$nombre_completo', fecha_nacimiento = '$fecha_nacimiento', direccion = '$direccion', telefono = '$telefono', cargo = '$cargo', correo = '$correo'";
    $resultado = mysqli_query($conexion, $query);

    if ($resultado) {
        // Obtiene la fila de resultados como un array asociativo
        $fila = mysqli_fetch_assoc($resultado);

        // Asigna los valores de la fila a las variables
        $identificacion = $fila['identificacion'];
        $nombre_completo = $fila['nombre_completo'];
        $fecha_nacimiento = $fila['fecha_nacimiento'];
        $direccion = $fila['direccion'];
        $telefono = $fila['telefono'];
        $cargo = $fila['cargo'];
        $correo = $fila['correo'];
    } else {
        echo "Error en la consulta: " . mysqli_error($conexion);
    }

} else {
    // Si el índice "usuario" no está definido, maneja la situación adecuadamente
    echo "Usuario no definido";
}
?>

<!-- Mostrar la información del usuario -->
<div class="container">
    <h2>Mi Perfil</h2>
    <form>
        <div class="form-group">
            <label for="nombre">Identificación:</label>
            <input type="number" class="form-control" id="identificacion" value="<?php echo $identificacion; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="correo">Nombre:</label>
            <input type="text" class="form-control" id="nombre_completo" value="<?php echo $nombre_completo; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="correo">Fecha de nacimiento:</label>
            <input type="date" class="form-control" id="fecha_nacimiento" value="<?php echo $fecha_nacimiento; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="correo">Dirección de residencia:</label>
            <input type="text" class="form-control" id="direccion" value="<?php echo $direccion; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="correo">Teléfono:</label>
            <input type="number" class="form-control" id="telefono" value="<?php echo $telefono; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="correo">Cargo:</label>
            <input type="text" class="form-control" id="cargo" value="<?php echo $cargo; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="correo">Correo electrónico:</label>
            <input type="email" class="form-control" id="correo" value="<?php echo $correo; ?>" readonly>
        </div>
        
        <a href="editar_perfil.php" class="btn btn-primary">Editar Perfil</a>
    </form>
</div>

<?php require_once "vistas_admin/vistainferior.php";?>