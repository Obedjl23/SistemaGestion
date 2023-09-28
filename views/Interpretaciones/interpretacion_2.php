<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if ($validar == null || $validar = '') {

  header("Location: ../includes/login.php");
  die();
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
  <title>SECIÓN 2</title>
  <link rel="icon" type="image/png" href="../../icono/icono.png" />
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="../../css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="user.php"><ion-icon name="person-circle-outline"></ion-icon> Usuario <?php echo $_SESSION['nombre']; ?></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4" >
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#!">Perfil</a></li>

          <li>
            <hr class="dropdown-divider" />
          </li>
          <li><a class="dropdown-item" href="../includes/_sesion/cerrarSesion.php">Cerrar Sesion</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark  " style="background: #008590; 
        background: linear-gradient( #04C5D5,  #008590, #008590 );" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
        <div class="nav">
                        <div class="sb-sidenav-menu-heading" style="color:#FFFF">Administrador</div>


                        <a class="nav-link collapsed fw-bold" style="color:#323232" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAdmin" aria-expanded="false" aria-controls="collapseRecursoss" style="color: #0000;">
                          <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="shield-checkmark"></ion-icon></div>
                          Administración
                          <div class="sb-sidenav-collapse-arrow"><ion-icon name="key" style="color:#000000"></ion-icon></div>
                        </a>
                        <div class="collapse" style="color:#323232" id="collapseAdmin" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                          <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" style="color:#323232" href="../user.php">Usuarios</a>
                            <a class="nav-link" style="color:#323232" href="../empresas.php">Empresa</a>
                          </nav>
                        </div>

                      </div>

            <div class="nav">
              <div class="sb-sidenav-menu-heading" style="color:#FFFF">Empresa</div>

              <a class="nav-link fw-bold" style="color:#323232" href="../Interpretaciones/introduccion2.php">
                <div class="sb-nav-link-icon"><ion-icon name="clipboard" style="color:#000000"></ion-icon></div>
                Introducción
              </a>
  
            <a class="nav-link collapsed fw-bold" style="color:#323232" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCapacitacion" aria-expanded="false" aria-controls="collapseCapacitacion">
              <div class="sb-nav-link-icon"><ion-icon name="easel" style="color:#000000"></ion-icon></i></div>
              Capacitación
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#000000"></i></div>
            </a>
            <div class="collapse" id="collapseCapacitacion" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                <a class="nav-link collapsed fw-bold"  style="color:#323232"href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                  Interpretación ISO 9001
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#000000"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" style="color:#323232" href="interpretacion_1.php">Sesion 1</a>
                    <a class="nav-link" style="color:#323232" href="interpretacion_2.php">Sesion 2</a>
                    <a class="nav-link" style="color:#323232" href="interpretacion_3.php">Sesion 3</a>
                    <a class="nav-link" style="color:#323232" href="interpretacion_4.php">Sesion 4</a>
                  </nav>
                </div>
                
                <a class="nav-link collapsed fw-bold"  style="color:#323232"href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth1" aria-expanded="false" aria-controls="pagesCollapseAuth1">
                  Mapeo de Procesos
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#000000"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseAuth1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" style="color:#323232" href="../Mapeo/mapeo1.php">Sesion 1</a>
                    <a class="nav-link" style="color:#323232" href="../Mapeo/mapeo2.php">Sesion 2</a>
                    <a class="nav-link" style="color:#323232" href="../Mapeo/mapeo3.php">Sesion 3</a>
                    <a class="nav-link" style="color:#323232" href="../Mapeo/mapeo4.php">Sesion 4</a>
                  </nav>
                </div>
                
                <a class="nav-link collapsed fw-bold"  style="color:#323232"href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth3" aria-expanded="false" aria-controls="pagesCollapseAuth3">
                  Auditores Internos ISO 19011
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#000000"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseAuth3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" style="color:#323232" href="../Auditores/auditores1.php">Sesion 1</a>
                    <a class="nav-link" style="color:#323232" href="../Auditores/auditores2.php">Sesion 2</a>
                    <a class="nav-link" style="color:#323232" href="../Auditores/auditores3.php">Sesion 3</a>
                    <a class="nav-link" style="color:#323232" href="../Auditores/auditores4.php">Sesion 4</a>
                  </nav>
                </div>
                
                
            </div>

              <div class="sb-sidenav-menu-heading" style="color:#FFFF">Mapas</div>
               
                    <a class="nav-link collapsed fw-bold" style="color:#323232"href="#" data-bs-toggle="collapse" data-bs-target="#collapseOrganisacion" aria-expanded="false" aria-controls="collapseOrganisacion">
                        <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="library" style="color:#000000"></ion-icon></div>
                        Organización
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#000000"></i></div>
                    </a>
                    <div class="collapse" style="color:#323232" id="collapseOrganisacion" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed fw-bold" style="color:#323232" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Liderazgo
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#000000"></i></div>
                            </a>
                            <div class="collapse" style="color:#323232" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link " style="color:#323232" href="../Objetivo/index.php">Objetivos</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed fw-bold " style="color:#323232" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                Contexto de la organización
                                <div class="sb-sidenav-collapse-arrow" style="color:#323232"><i class="fas fa-angle-down" style="color:#000000"></i></div>
                            </a>
                            <div class="collapse" style="color:#323232" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" style="color:#323232" href="../Pestel/index.php">Pestel</a>
                                    <a class="nav-link" style="color:#323232" href="../Foda/index.php">Foda</a>
                                    <a class="nav-link" style="color:#323232" href="../Partes_Interesadas/index.php">Partes Interesadas</a>
                                </nav>
                            </div>
                            <a class="nav-link fw-bold" style="color:#323232" href="../Comunicacion/index.html">
                        <div class="sb-nav-link-icon" style="color:#323232"></div>
                    Comunicación
                    </a>
                        </nav>
                    </div>



            <a class="nav-link collapsed fw-bold" style="color:#323232" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProceso" aria-expanded="false" aria-controls="collapseProceso">
              <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="bar-chart" style="color:#000000"></ion-icon></div>
              Proceso
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#000000"></i></div>
            </a>
            <div class="collapse" style="color:#323232" id="collapseProceso" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                <a class="nav-link collapsed fw-bold" style="color:#323232" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                  Mapeo
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#000000"></i></div>
                </a>
                <div class="collapse" style="color:#323232" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" style="color:#323232" href="../Tortuga/index.php">Diagrama de Tortuga</a>
                    <a class="nav-link" style="color:#323232" href="../SIPOC/index.php">Diagrama Sipoc</a>
                    </nav>
                </div>
            
            
            <a class="nav-link collapsed fw-bold"  style="color:#323232"href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth1" aria-expanded="false" aria-controls="pagesCollapseAuth1">
                  Diagrama General
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#000000"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseAuth1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" style="color:#323232" href="../Diagrama_General.html">Diagrama General</a>
                    <a class="nav-link" style="color:#323232" href="../Estrategico/index.php">Estrategico</a>
                    <a class="nav-link" style="color:#323232" href="../Operativo/index.php">Operativos</a>
                    <a class="nav-link" style="color:#323232" href="../Apoyo/index.php">Apoyo</a>
                  </nav>
                </div>
            </div>
            
                   
                    
                    <a class="nav-link fw-bold" style="color:#323232" href="../Riesgos_Oportunidades/index.php">
                        <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="shield-half" style="color:#000000"></ion-icon></div>Riesgos&Oportunidades
                    </a>

                    <a class="nav-link collapsed fw-bold" style="color:#323232" href="#" data-bs-toggle="collapse" data-bs-target="#collapseRecursos" aria-expanded="false" aria-controls="collapseRecursoss">
                        <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="cube" style="color:#000000"></ion-icon></div>
                        Recursos
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#000000"></i></div>
                    </a>
                    <div class="collapse" style="color:#323232" id="collapseRecursos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link fw-bold" style="color:#323232" href="../CrudPersonal/index.php">Personal</a>
                            <a class="nav-link fw-bold" style="color:#323232" href="../Infraestructura/index.php">Infrestuctura</a>
                            <a class="nav-link fw-bold" style="color:#323232" href="../Documentada/index.php">Info.Documental</a>
                        </nav>
                    </div>

                    <a class="nav-link fw-bold" style="color:#323232" href="../CrudArchivos/index.php">
                        <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="keypad" style="color:#000000"></ion-icon></div>
                    Operación
                    </a>

                    <a class="nav-link fw-bold" style="color:#323232" href="../Proveedores/index.php">
                        <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="people-circle" style="color:#000000"></ion-icon></div>
                        Provedores
                    </a>

                    <a class="nav-link fw-bold" style="color:#323232" href="../Desempeño/index.php">
                        <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="cog" style="color:#000000"></ion-icon></div>
                        Desempeño                            </a>

                    <a class="nav-link fw-bold" style="color:#323232" href="../Mejora/index.php">
                        <div class="sb-nav-link-icon fw-bold" style="color:#323232"><ion-icon name="star-half" style="color:#000000"></ion-icon></div>
                        Mejora
                    </a>

                    </div>
        </div>
        <div class="sb-sidenav-footer fw-bold" style=" background: #323232; color:#FFFFFF" >
          <div class="small fw-bold" style="color:#FFFFFF" >SECAAC</div>
          Transforma
      </div>
    </nav>
    </div>
    <div id="layoutSidenav_content">
      <main>
    <div class="title">

        <h1>Interpretación de los Requisitos de la Norma  ISO 9001:2015 S2</h1>
        
        
        </div>
        
        
        
        <iframe width="560" height="315" src="https://www.youtube.com/embed/QJ8RoiRxxDA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>        
        <div class="container-fluid d-flex flex-row-reverse bd-highlight my-1 px-3">
          <a href="./documentos/Interpretacion.html" style="margin: 30px;" type="button" class="btn btn-outline-dark fw-bold">PRESENTACIÓN CURSO - INTERPRETACIÓN NORMA ISO 9001:2015</a>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
      <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
          <div class="text-muted">Copyright &copy; Your Website 2022</div>
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
    <!-- Iconos ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <!-- Scrips para el bar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../../js/scripts.js"></script>
    <script src="../../js/user.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../../js/datatables-simple-demo.js"></script>
    </body>
    
    </html>
    
<script>
    setTimeout(() => {
        const player = new Plyr('#player');
    }, 100);
</script>


<style>
 

h1{

color: #0e828c;;
font-family:Arial, Helvetica, sans-serif;
font-size: 30px;
margin: 10px;
text-align: center;
}
.boton{

display: block;
width: 120px;
font-family: Arial, Helvetica, sans-serif;
font-weight: 700;
background-color: #ffffff;
padding:10px;
border-radius: 10px;
margin: 50px  50px;
color: #4b4b4b;
text-align: center;
margin-left: 750px;
text-decoration: none;
border-style:dashed;
box-shadow: 5px 5px 25px rgb(52, 92, 224);
border-color: #000000;



}
.title{
background-color:transparent;
border-style:dashed;
border-radius: 80px;
border-color: #000000;
text-align: center;
width: 900px;
margin: 40px 100px;
box-shadow: 15px 15px 20px rgb(108, 139, 238);


}

body{

    background-image: url(../../IMAGES/img/f1.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
   
}

iframe{

width: 1000px;
height: 500px;
margin: auto;
display: block;
box-shadow: 5px 5px 25px rgb(65, 64, 64);
}



</style> 