<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Miss Datos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/login.css">

</head>
<body>
    <header class ="text-center"> 
        <h1>Login</h1><br><br>
    </header>
<main>
<div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="form-container">
                    <div class="form-icon">
                    <img src="imagenes/fotolog.png" alt="user">
                    </div>
                    <h3 class="title">MISS DATOS</h3>
                    <form class="form-horizontal" method="post" action="procesar_login.php">
                        <div class="form-group">
                            <label>Usuario</label>
                            <input class="form-control" type="text" id="usuario" name="usuario" placeholder="usuario" required>
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input class="form-control" type="password" id="contrasena" name="contrasena" placeholder="contraseña" required>
                        </div>
                        <button type="submit" name="btninlogin" class="btn">Iniciar sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main> <br><br>
<footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; Miss Datos Colombia 2023. Todos los Derechos Reservados.</div>
                    <a href="#!">Privacidad</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">Términos</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">PQR</a>
                </div>
            </div>
        </footer>
</body>
</html>