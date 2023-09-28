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
  <title>INTRODUCCIÓN</title>
  <link rel="icon" type="image/png" href="../../icono/icono.png" />
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="../../css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="user.php"><ion-icon name="person-circle-outline"></ion-icon> Admin <?php echo $_SESSION['nombre']; ?></a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#!">Perfil</a></li>

          <li>
            <hr class="dropdown-divider" />
          </li>
          <li><a class="dropdown-item" href="../../includes/_sesion/cerrarSesion.php">Cerrar Sesion</a></li>
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


                  <a class="nav-link collapsed fw-bold" style="color:#323232" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAdmin" aria-expanded="false" aria-controls="collapseRecursoss" style="color: #000;">
                      <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="shield-checkmark"></ion-icon></div>
                      Administración
                      <div class="sb-sidenav-collapse-arrow"><ion-icon name="key" style="color:#000000"></ion-icon></div>
                  </a>
                  <div class="collapse" style="color:#323232" id="collapseAdmin" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                      <nav class="sb-sidenav-menu-nested nav">
                          <a class="nav-link fw-bold" style="color:#323232" href="../user.php">Usuarios</a>
                          <a class="nav-link fw-bold" style="color:#323232" href="../empresas.php">Empresa</a>
                      </nav>
                  </div>

              </div>
              <div class="nav">

              <div class="sb-sidenav-menu-heading" style="color:#FFFF">Empresa</div>

                  <a class="nav-link fw-bold" style="color:#323232" href="./introduccio.php">
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
                                      <a class="nav-link" style="color:#323232" href="../Objetivo/index.php">Objetivos</a>
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
                              <a class="nav-link" style="color:#323232" href="../CrudPersonal/index.php">Personal</a>
                              <a class="nav-link" style="color:#323232" href="../Infraestructura/index.php">Infrestuctura</a>
                              <a class="nav-link" style="color:#323232" href="../Documentada/index.php">Info.Documental</a>
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
      <main class>

<!-- 
        <div class="title">
            <h1>INTRODUCCIÓN</h1>
          </div> -->
          <div class="title">     
            <h1>INTRODUCCIÓN</h1>
            
          <div class="continer-silder"> 

          <div class="slider" id="slider">
            <div class="slider-section">
              <img src="img/banuno.png" alt="" class="slider-img">
            </div>
            <div class="slider-section">
              <img src="img/bandos.png" alt="" class="slider-img">
            </div>
            <div class="slider-section">
              <img src="img/bantres.png" alt="" class="slider-img">
            </div>
            <div class="slider-section">
              <img src="img/bancuatro.png" alt="" class="slider-img">
            </div>
            <div class="slider-section">
              <img src="img/bancinco.png" alt="" class="slider-img">
            </div>
            <div class="slider-section">
              <img src="img/banseis.png" alt="" class="slider-img">
            </div>
            <div class="slider-section">
              <img src="img/bansiete.png" alt="" class="slider-img">
            </div>
            <div class="slider-section">
              <img src="img/banocho.png" alt="" class="slider-img">
            </div>
            <div class="slider-section">
              <img src="img/bannueve.png" alt="" class="slider-img">
            </div>
          </div>

          <div class="slider-btn slider-btn-I" id="btn-I"> <ion-icon name="caret-back-outline"></ion-icon></div>
          <div class="slider-btn slider-btn-D" id="btn-D"><ion-icon name="caret-forward-outline"></ion-icon></div>
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
  const slider = document.querySelector("#slider");
  let sliderSection = document.querySelectorAll(".slider-section");
  let sliderSectionLast = sliderSection[sliderSection.length - 1];

  const btnI = document.querySelector("#btn-I");
  const btnD = document.querySelector("#btn-D");



  slider.insertAdjacentElement('afterBegin', sliderSectionLast);

  function Next() {

    let sliderSectionFirst = document.querySelectorAll(".slider-section")[0];
    slider.style.marginLeft = "-200%";
    slider.style.transition = "all 0.5s";

    setTimeout(function() {
      slider.style.transition = "none";
      slider.insertAdjacentElement('beforeEnd', sliderSectionFirst);
      slider.style.marginLeft = "-100%";



    }, 500);


  }

  function Prev() {

    let sliderSection = document.querySelectorAll(".slider-section");
    let sliderSectionLast = sliderSection[sliderSection.length - 1];
    slider.style.marginLeft = "0";
    slider.style.transition = "all 0.5s";

    setTimeout(function() {
      slider.style.transition = "none";
      slider.insertAdjacentElement('afterBegin', sliderSectionLast);
      slider.style.marginLeft = "-100%";



    }, 500);


  }


  btnD.addEventListener('click', function() {
    Next();


  })
  btnI.addEventListener('click', function() {
    Prev();


  })


  // Slide automatico
  setInterval(function() {

    Next();

  }, 5000);
</script>

<style>
h1{
    color: #0e828c;
    font-family: OpenSans, bold;
    font-size: 60px;
    text-align: center;
  margin-bottom: 50px;}

  * {

    box-sizing: border-box;
  }

  main {

    min-height: 75vh;
    display: flex;
    align-items: center;
    justify-content: center;

  }


  .continer-silder {

    width: 200%;
    max-width: 900px;
    margin: auto;
    overflow: hidden;
    box-shadow: 0 0 0 10px rgb(221, 215, 215),
      0 15px 50px;
    position: relative;


  }

  .slider {

    display: flex;
    width: 900%;
    height: 28rem;
    margin-left: -100%;

  }

  .slider-section {

    width: 100%;


  }

  .slider-img {

    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;


  }

  .slider-btn {

    position: absolute;
    width: 40px;
    height: 40px;
    background: rgb(225, 255, 255, 0.7);
    top: 50%;
    transform: translateY(-50%);
    font-size: 25px;
    font-weight: bold;
    font-family: monospace;
    text-align: center;
    border-radius: 50%;
    cursor: pointer;

  }


  .slider-btn:hover {

    color: #fff;

  }




  .slider-btn-I {
    left: 10px;



  }

  .slider-btn-D {
    right: 10px;


  }
</style>