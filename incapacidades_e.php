<?php
session_start();
$usuario = $_SESSION['usuario'];
$rol = $_SESSION["rol"];

if(empty($usuario) || empty($rol)){
    header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Miss Datos - Empleado</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="css/styles1.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
            <!-- Navbar Brand-->
        
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">  
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="cerrar.php">Cerrar sesión</a></li> 
                        <li><hr class="dropdown-divider" /></li>   
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark bg-primary" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading "></div>
                            <a class="nav-link" href="empleado.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Empleado
                            </a>
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Solicitudes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="permiso_e.php">Permisos</a>
                                    <a class="nav-link" href="vacaciones_e.php">Vacaciones</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Novedades
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="incapacidades_e.php">Incapacidades</a>
                                </nav>
                            </div>
                            
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            </div>
                            <div class="sb-sidenav-menu-heading">Gestionar</div>
                            <a class="nav-link" href="miperfil_e.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Mi Perfil
                            </a>
                            <a class="nav-link" href="notificaciones.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Notificaciones
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
<h1 class="mt-4">Incapacidades</h1><br><br>
<div>
<form id="miincapacidad" class="needs-validation" method="post" novalidate>
<div class="form-row">  
<div class="col-md-6 mb-3">
    <label for="ident" class="form-label">Identificación</label>
    <input type="text" class="form-control" id="id" pattern="[0-9]{1,10}" name="id" value="" required>
    <div class="valid-feedback">Bien!</div>
    <div class="invalid-feedback">Prueba otra vez.</div>
</div>
  <div class="col-md-6 mb-3">
    <label for="nombre" class="form-label">Nombre completo</label>
    <input type="text" class="form-control" id="name" pattern="^[a-zA-Z\s]+$" name="nombre" required>
    <div class="valid-feedback">Bien!</div>
    <div class="invalid-feedback">Prueba otra vez.</div>
  </div>
  <div class="col-md-6 mb-3">
    <label for="eps" class="form-label">EPS</label>
    <input type="text" class="form-control" id="salud" pattern="^[a-zA-Z\s]+$" name="eps" required>
    <div class="valid-feedback">Bien!</div>
    <div class="invalid-feedback">Prueba otra vez.</div>
  </div>
  <div class="col-md-6 mb-3">
    <label for="area" class="form-label">Área</label>
      <input type="text" class="form-control" id="location" pattern="^[a-zA-Z\s]+$" name="area" required>
      <div class="valid-feedback">Bien!</div>
    <div class="invalid-feedback">Prueba otra vez.</div>
    </div>
  <div class="col-md-6 mb-3">
    <label for="fechaini" class="form-label">Fecha de Inicio</label>
    <input type="date" class="form-control" id="fi" name="finicio" required>
    <div class="valid-feedback">Bien!</div>
    <div class="invalid-feedback">Prueba otra vez.</div>
  </div>
  <div class="col-md-6 mb-3">
    <label for="fechafin" class="form-label">Fecha de Terminación</label>
    <input type="date" class="form-control" id="ff"  name="ffin" required>
    <div class="valid-feedback">Bien!</div>
    <div class="invalid-feedback">Prueba otra vez.</div>
  </div>
  <div class="col-md-6 mb-3">
    <input type="file" class="form-control" aria-label="file example" required>
    <div class="invalid-feedback">Adjunta tu incapacidad</div>
  </div>
  <div class="col-6">
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>
</div>
</form>
</main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-tems-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Miss Datos Colombia 2023</div>
                            <div>
                                <a href="#">Politicas de Privacidad</a>
                                &middot;
                                <a href="#">Términos &amp; Condiciones</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="js/scripts.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/scriptforms.js"></script>
    </body>
</html>