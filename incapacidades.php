<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Incapacidad</title>
    <link rel="stylesheet" href="incapacidad.css">
</head>
<body>

    <div class="container">
        <h1>Formulario de Incapacidad</h1>
        <form action="procesar_incapacidad.php" method="post">
            <label for="identificacion">Cedula:</label>
            <input type="text" id="identificacion" name="identificacion" required>

            <label for="nombre_completo">Nombre Completo:</label>
            <input type="text" id="nombre_completo" name="nombre_completo" required>

            <label for="fecha_inicio">Fecha de Incio:</label>
            <input type="date" id="fecha_inicio" name="fecha_inicio"></input>

            <label for="fecha_final">Fecha Final:</label>
            <input type="date" id="fecha_final" name="fecha_final"></input>

            

            <label for="cargo">Cargo:</label>
            <input type="cargo" id="cargo" name="cargo" required>

            <label for="soporte">Soporte:</label>
            <input type="file" id="soporte" name="soporte" required>

            <button type="submit">Enviar</button>
        </form>
    </div>

</body>
</html>