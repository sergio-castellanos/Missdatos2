<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Incapacidad</title>
    <link rel="stylesheet" href="permiso.css">
</head>
<body>

    <div class="container">
        <h1>Formulario de Permiso</h1>
        <form action="procesar_incapacidad.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>

            <label for="tipo_incapacidad">Tipo de Incapacidad:</label>
            <select id="tipo_incapacidad" name="tipo_incapacidad" required>
                <option value="enfermedad">Enfermedad</option>
                <option value="accidente">Accidente</option>
                <option value="maternidad">Maternidad</option>
            </select>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" rows="4" required></textarea>

            <label for="fecha_inicio">Fecha de Inicio:</label>
            <input type="date" id="fecha_inicio" name="fecha_inicio" required>

            <label for="fecha_fin">Fecha de Fin:</label>
            <input type="date" id="fecha_fin" name="fecha_fin" required>

            <button type="submit">Enviar</button>
            <button><a class="btn btn-primary" href="../empleado.php" role="button">Volver</a></button>
        </form>
    </div>

</body>
</html>