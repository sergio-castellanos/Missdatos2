<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Conoce Miss Datos</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/index.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="#page-top">MISS DATOS COLOMBIA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="conocenos.php">Conócenos</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="objetivos.php">Objetivos</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="contactenos.php">Contáctanos</a></li>
                    </ul>
                    <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" id="login" name="login" onclick="redirigirAotraPagina()">Ingresar</button>
                </div>
            </div>
        </nav>
        <!-- Mashead header-->
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">La plataforma para una gestión del trabajo más inteligente</h1>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid" src="imagenes/logo_transparent.png" alt="Logo Grande" />
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="bg-light">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5">
                        <h2 class="display-4 lh-1 mb-4">Un poco acerca de nuestra historia ...</h2>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0"> Debido al crecimiento empresarial a lo largo del país, se evidenciaron falencias en los procesos de control de personal nuevo y antiguo, ya que no se están realizando los debidos procedimientos internos y por ende no hay información completamente veráz dentro de sus sistemas de bases de datos.<br><br>Aquí nace nuestra idea, con el fin de implementar nuestro software de gestión de personal en una empresa, éste se justifica con su capacidad para mejorar la eficiencia operativa, garantizando la precisión de los datos, cumplir con las regulaciones laborales, centralizar
                            la información, mejorar la comunicación interna y facilitar la toma de decisiones basados en esta información.<br><br>Estas justificaciones respaldan la inversión en esta herramienta, ya que contribuye al éxito y crecimiento de la empresa al optimizar la gestión de su talento humano.</p>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="imagenes/logo.png" alt="..." /></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-light">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5">
                        <h2 class="display-4 lh-1 mb-4">¿Por qué utilizar Miss Datos?</h2>
                        <ul>  
                            <li><p class="lead fw-normal text-muted mb-5 mb-lg-0">Agiliza y simplifica tus tareas.</p></li><br>
                            <li><p class="lead fw-normal text-muted mb-5 mb-lg-0">Mejora cómo gestionas a tu equipo, reduce costos y ayuda en la toma de mejores decisiones.</p></li><br>
                            <li><p class="lead fw-normal text-muted mb-5 mb-lg-0">Da a tus empleados acceso a toda su información, documentos y muchas cosas más a través de sus perfiles.</p></li><br>
                            <li><p class="lead fw-normal text-muted mb-5 mb-lg-0">Ahorra tiempo, dinero y preocupaciones con nuestro sistema de información.</p></li><br>
                        </ul>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="imagenes/logo_transparent.png" alt="..." /></div>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- Footer-->
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
        <script>
    function redirigirAotraPagina() {
        window.location.href = "login.php";
    }
    </script>
</body>
</html>