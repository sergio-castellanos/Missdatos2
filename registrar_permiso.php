<?php
session_start();
$usuario = $_SESSION['usuario'];
$rol = $_SESSION["rol"];

if(empty($usuario) || empty($rol)){
    header('Location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
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
                        <li><a class="dropdown-item" href="cerrar.php">Cerrar Sesion</a></li>
                     
                       
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
                            <a class="nav-link" >
                                <div class="sb-nav-link-icon "><i class="fas fa-tachometer-alt"></i></div>
                                Administrador
                            </a>


                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Empleados
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="inicio.php">Registrar Empleado</a>
                                    <a class="nav-link" href="ver_empleados.php">Ver Empleados</a>
                                </nav>
                            </div>

                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Usuarios
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="registrar_usuarios.php">Registrar Usuario</a>
                                    <a class="nav-link" href="ver_usuario.php">Ver Usuarios</a>
                                </nav>
                            </div>

                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages1" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Incapacidades
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages1" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="registrar_incapacidades.php">Registrar Incapacidad</a>
                                    
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages2" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Permisos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages2" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="registrar_permiso.php">Registrar permiso</a>
                                    
                                </nav>
                            </div>
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages3" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Vacaciones
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages3" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="registrar_incapacidades.php">Solicitar Vacaciones</a>
                                    
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Novedades</div>
                           
                            <a class="nav-link" href="ver_incapacidad.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Ver Incapacidades
                            </a>

                            <a class="nav-link" href="ver_permiso.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Ver Permisos
                            </a>

                            <a class="nav-link" href="ver_vacaciones.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Ver Vacaciones
                            </a>

                        </div>
                    </div>
                  
                </nav>
                </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Administrador</h1>

                        <div class="container-fluid row">
                        <script>
            function eliminar (){
                var respuesta=confirm("Estas seguro que deseas eliminar?");
                return respuesta
            }
        </script>
    
    
    <div class="container-fluid row">
    <div class="col-3 p-3 ">
    <form id="rempleados" class="needs-validation" method="POST" novalidate>
        <h3 class="text-center text-secundary ">Registro de Permiso</h3>
    
        <?php
        include "conexion.php";
        include "registro_p.php";
        ?> 


<div class="mb-3">
    <label for="ident" class="form-label">Identificación</label>
    <input type="text" class="form-control" id="id_per" pattern="[0-9]{1,10}" name="identificacion" value="" required>
    <div class="valid-feedback">Bien!</div>
    <div class="invalid-feedback">Prueba otra vez.</div>
</div>

<div class="mb-3">
    <label for="nombre" class="form-label">Nombre completo</label>
    <input type="text" class="form-control" id="name" pattern="^[a-zA-Z\s]+$" name="nombre_completo" required>
    <div class="valid-feedback">Bien!</div>
    <div class="invalid-feedback">Prueba otra vez.</div>
  </div>
  
  <div class=" mb-3">
    <label for="fechaini" class="form-label">Fecha de Inicio</label>
    <input type="date" class="form-control" id="fi" name="fecha_inicio" required>
    <div class="valid-feedback">Bien!</div>
    <div class="invalid-feedback">Prueba otra vez.</div>
  </div>
  <div class="mb-3">
    <label for="fechafin" class="form-label">Fecha de Terminación</label>
    <input type="date" class="form-control" id="ff"  name="fecha_final" required>
    <div class="valid-feedback">Bien!</div>
    <div class="invalid-feedback">Prueba otra vez.</div>
  </div>

 

  
  <div class="mb-3">
    <label for="motivo" class="form-label">cargo</label>
    <input type="text" class="form-control" id="cargo"  name="cargo" required>
    <div class="valid-feedback">Bien!</div>
  </div>

  <div class="mb-3">
    <label for="motivo" class="form-label">Motivo del Permiso</label>
    <input type="text" class="form-control" id="motivo"  name="motivo" required>
    <div class="valid-feedback">Bien!</div>
  </div>
  
  
  <button type="submit" class="btn btn-primary" name="btnregistrarp" value="ok">Registrar</button>
  <a class="btn btn-primary" href="empleado.php" role="button">Atrás</a>
  </form>
    
    </div>

<div class=" col-9 p-4">
<table  class="display nowrap" style="width:100%"  id="">
  <thead class="bg-info bg-info">
  <h1 class="text-center">Gestionar Permiso</h1>
    <tr>
      <th scope="col">Id permiso</th>
      <th scope="col">Identificacion</th>
      <th scope="col">Nombre Completo</th>
     
      <th scope="col">Fecha de inicio</th>
      <th scope="col">Fecha final</th>
      
      <th scope="col">Cargo</th>
      <th scope="col">Motivo</th>
      
      
      <th scope="col"></th>
      <th scope="col"></th>
     
     


      
      <?php
include "conexion.php";
include "eliminar_p.php";

?>
    </tr>
  </thead>
  <tbody>
    <?php
    include "conexion.php";
    $sql=$conexion->query(" select * from permiso ");
    while($datos = $sql->fetch_object()) { ?>
     
     
     
     <tr>
      <td><?=$datos->id_permiso?></td> 
      <td><?=$datos->identificacion?></td>
      <td><?=$datos->nombre_completo?></td>
      
      <td><?=$datos->fecha_inicio?></td>
      <td><?=$datos->fecha_final?></td>
      
      <td><?=$datos->cargo?></td>
      <td><?=$datos->motivo?></td>
      
      <td>

        <td><a onclick="return eliminar()" href="registrar_permiso.php?id_permiso=<?= $datos->id_permiso?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
        
        </td>
    </tr>  
    <?php }
    ?>
    
</tbody>
</table>
</div>
</div>
</main>
<footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
  
    <script src="js/scriptforms.js"></script>   
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="js/script_dt.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>


  </body>
</html>