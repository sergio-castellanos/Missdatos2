<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Miss Datos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
body { 
    background-color: #C693FF; 
    margin: 0; 
    padding: 0; 
    font-family: 'Open Sans', sans-serif;
}

.form-container{
    background: #ecf0f3;
    font-family: 'Nunito', sans-serif;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
    margin-top: 10px;
}
.form-container .form-icon{
    color: #ac40ab;
    font-size: 55px;
    text-align: center;
    line-height: 100px;
    width: 100px;
    height:100px;
    margin: 0 auto 15px;
    border-radius: 50px;
    box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px #fff;
}

.form-container .form-icon img {
    width: 100px; /* Tamaño deseado */
    height: 100px; /* Tamaño deseado */
    border-radius: 50%;
    /* Otros estilos según sea necesario */
}

.form-container .title{
    color: #ac40ab;
    font-size: 25px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-align: center;
    margin: 0 0 20px;
}
.form-container .form-horizontal .form-group{ margin: 0 0 25px 0; }
.form-container .form-horizontal .form-group label{
    font-size: 15px;
    font-weight: 600;
    text-transform: uppercase;
}
.form-container .form-horizontal .form-control{
    color: #333;
    background: #ecf0f3;
    font-size: 15px;
    height: 50px;
    padding: 20px;
    letter-spacing: 1px;
    border: none;
    border-radius: 50px;
    box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px #fff;
    display: inline-block;
    transition: all 0.3s ease 0s;
}
.form-container .form-horizontal .form-control:focus{
    box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px #fff;
    outline: none;
}
.form-container .form-horizontal .form-control::placeholder{
    color: #808080;
    font-size: 14px;
}
.form-container .form-horizontal .btn {
    color: #fff;
    background-color: #ac40ab;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    width: 100%;
    padding: 15px;
    border-radius: 30px;
    box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px #fff;
    border: none;
    transition: all 0.5s ease 0s;
}

.form-container .form-horizontal .btn:hover,
.form-container .form-horizontal .btn:focus{
    color: #fff;
    letter-spacing: 3px;
    box-shadow: none;
    outline: none;
}
</style>
</head>
<body>

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
</body>
</html>