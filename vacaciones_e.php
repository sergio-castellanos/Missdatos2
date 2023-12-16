<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de vacaciones</title>
    <link rel="stylesheet" href="vacaciones.css">
</head>
<body>

    <div class="container">
        <h1>Formulario de Vacaciones</h1>
        <form action="procesar_incapacidad.php" method="post">
            <label for="identificacion">Identificacion:</label>
            <input type="text" id="identificacion" name="identificacion" required>

            <label for="nombre_completo">Nombre Completo:</label>
            <input type="text" id="nombre_completo" name="nombre_completo" required>

            <label for="fecha_inicio">Fecha de Inicio:</label>
            <input type="date" id="fecha_inicio" name="fecha_inicio" required>

            <label for="fecha_final">Fecha de Fin:</label>
            <input type="date" id="fecha_final" name="fecha_final" required>

			<label for="cargo">Cargo:</label>
            <input type="text" id="cargo" name="cargo" required>

            <button type="submit">Enviar</button>
			
			<button><a class="btn btn-primary" href="../empleado.php" role="button">Volver</a></button>
        </form>
    </div>

</body>
</html>
