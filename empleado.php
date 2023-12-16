<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la Página</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<header>
    <h1>Miss Datos</h1>
    <!-- Puedes agregar más elementos al encabezado si es necesario -->
</header>


    <div class="container">
    <aside>
    <div class="sidebar-content">
        <h2>Empleado</h2>
        <ul>
            <li><a href="inicio.php">Mi perfil</a></li>
            
            <li><a href="incapacidades/incapacidades_e.php">Incapacidades</a></li>
            <li><a href="permisos/permiso_e.php">Permisos</a></li>
            <li><a href="vacaciones/vacaciones_e.php">Vacaciones</a></li>
            <li><a href="#">Notificaciones</a></li>
            <button><a class="btn btn-primary" href="login.php" role="button">Cerrar sesion</a></button>
        </ul>
    </div>
</aside>
<aside>
<div class="contenido">

        <main>
           <img src="imagenes/logo.png" alt="">
        </main>

        </div>
        </aside>
    </div>

    <footer>
    <p>Pie de Página &copy; <?php echo date("Y"); ?></p>
    <!-- Puedes agregar más elementos al pie de página si es necesario -->
</footer>


</body>
</html>