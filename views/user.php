<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];
$id_empresa = $_SESSION['id_empresa'];



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
    <title>ADMINISTRADOR</title>
    <link rel="icon" type="image/png" href="../icono/icono.png" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark" style="  background: #323232;">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="user.php"><ion-icon name="person-circle-outline"></ion-icon> Admin <?php echo $_SESSION['nombre']; ?></a>
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
                                <a class="nav-link " style="color:#323232" href="user.php">Usuarios</a>
                                <a class="nav-link " style="color:#323232" href="empresas.php">Empresa</a>
                            </nav>
                        </div>

                    </div>



                    <div class="nav">

                        <?php

                        if ($id_empresa['id_empresa'] <> 1) {    ?>
                            <div class="sb-sidenav-menu-heading" style="color:#FFFF">Empresa</div>
            <a class="nav-link fw-bold" style="color:#323232" href="../Interpretaciones/introduccion.php">
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
                     Ineterpretacion ISO 9001
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#000000"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" style="color:#323232" href="Interpretaciones/interpretacion_1.php">Sesion 1</a>
                    <a class="nav-link" style="color:#323232" href="Interpretaciones/interpretacion_2.php">Sesion 2</a>
                    <a class="nav-link" style="color:#323232" href="Interpretaciones/interpretacion_3.php">Sesion 3</a>
                    <a class="nav-link" style="color:#323232" href="Interpretaciones/interpretacion_4.php">Sesion 4</a>
                  </nav>
                </div>
                
                <a class="nav-link collapsed fw-bold"  style="color:#323232"href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth1" aria-expanded="false" aria-controls="pagesCollapseAuth1">
                  Mapeo de Procesos
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#000000"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseAuth1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" style="color:#323232" href="Mapeo/mapeo1.php">Sesion 1</a>
                    <a class="nav-link" style="color:#323232" href="Mapeo/mapeo2.php">Sesion 2</a>
                    <a class="nav-link" style="color:#323232" href="Mapeo/mapeo3.php">Sesion 3</a>
                    <a class="nav-link" style="color:#323232" href="Mapeo/mapeo4.php">Sesion 4</a>
                  </nav>
                </div>
                
                <a class="nav-link collapsed fw-bold"  style="color:#323232"href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth3" aria-expanded="false" aria-controls="pagesCollapseAuth3">
                  Auditores Internos ISO 19011
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#000000"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseAuth3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" style="color:#323232" href="Auditores/auditores1.php">Sesion 1</a>
                    <a class="nav-link" style="color:#323232" href="Auditores/auditores2.php">Sesion 2</a>
                    <a class="nav-link" style="color:#323232" href="Auditores/auditores3.php">Sesion 3</a>
                    <a class="nav-link" style="color:#323232" href="Auditores/auditores4.php">Sesion 4</a>
                  </nav>
                </div>
                
                
            </div>
                        <?php
                           }    ?>


                        <div class="sb-sidenav-menu-heading" style="color:#FFFF">Mapas</div>





                        <a class="nav-link collapsed fw-bold" style="color:#323232" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOrganisacion" aria-expanded="false" aria-controls="collapseOrganisacion">
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
                                        <a class="nav-link " style="color:#323232" href="Objetivo/index.php">Objetivos</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed fw-bold " style="color:#323232" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Contexto de la organización
                                    <div class="sb-sidenav-collapse-arrow" style="color:#323232"><i class="fas fa-angle-down" style="color:#000000"></i></div>
                                </a>
                                <div class="collapse" style="color:#323232" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link " style="color:#323232" href="Pestel/index.php">Pestel</a>
                                        <a class="nav-link " style="color:#323232" href="Foda/index.php">Foda</a>
                                        <a class="nav-link " style="color:#323232" href="Partes_Interesadas/index.php">Partes Interesadas</a>
                                    </nav>
                                </div>
                                <a class="nav-link fw-bold" style="color:#323232" href="Comunicacion/index.php">
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
                    <a class="nav-link" style="color:#323232" href="Tortuga/index.php">Diagrama de Tortuga</a>
                    <a class="nav-link" style="color:#323232" href="SIPOC/index.php">Diagrama Sipoc</a>
                    </nav>
                </div>
            
            
            <a class="nav-link collapsed fw-bold"  style="color:#323232"href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth1" aria-expanded="false" aria-controls="pagesCollapseAuth1">
                  Diagrama General
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#000000"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseAuth1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" style="color:#323232" href="Diagrama_General.html">Diagrama General</a>
                    <a class="nav-link" style="color:#323232" href="Estrategico/index.php">Estrategico</a>
                    <a class="nav-link" style="color:#323232" href="Operativo/index.php">Operativos</a>
                    <a class="nav-link" style="color:#323232" href="Apoyo/index.php">Apoyo</a>
                  </nav>
                </div>
            </div>



                        <a class="nav-link fw-bold" style="color:#323232" href="Riesgos_Oportunidades/index.php">
                            <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="shield-half" style="color:#000000"></ion-icon></div>Riesgos&Oportunidades
                        </a>

                        <a class="nav-link collapsed fw-bold" style="color:#323232" href="#" data-bs-toggle="collapse" data-bs-target="#collapseRecursos" aria-expanded="false" aria-controls="collapseRecursoss">
                            <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="cube" style="color:#000000"></ion-icon></div>
                            Recursos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#000000"></i></div>
                        </a>
                        <div class="collapse" style="color:#323232" id="collapseRecursos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link " style="color:#323232" href="CrudPersonal/index.php">Personal</a>
                                <a class="nav-link" style="color:#323232" href="Infraestructura/index.php">Infrestuctura</a>
                                <a class="nav-link " style="color:#323232" href="Documentada/index.php">Info.Documental</a>
                            </nav>
                        </div>

                        <a class="nav-link fw-bold" style="color:#323232" href="CrudArchivos/index.php">
                            <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="keypad" style="color:#000000"></ion-icon></div>
                            Operación
                        </a>

                        <a class="nav-link fw-bold" style="color:#323232" href="Proveedores/index.php">
                            <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="people-circle" style="color:#000000"></ion-icon></div>
                            Provedores
                        </a>

                        <a class="nav-link fw-bold" style="color:#323232" href="Desempeño/index.php">
                            <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="cog" style="color:#000000"></ion-icon></div>
                            Desempeño
                        </a>

                        <a class="nav-link fw-bold" style="color:#323232" href="Mejora/index.php">
                            <div class="sb-nav-link-icon fw-bold" style="color:#323232"><ion-icon name="star-half" style="color:#000000"></ion-icon></div>
                            Mejora
                        </a>

                    </div>
                </div>
                <div class="sb-sidenav-footer fw-bold" style=" background: #323232; color:#FFFFFF">
                    <div class="small fw-bold" style="color:#FFFFFF">SECAAC</div>
                    Transforma
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>


                <div class="container is-fluid">
                    <div class="col-xs-12">
                        <center>
                            <h1>Administardor de Usuarios</h1>
                        </center><br>

                        <div>
                            <a class="btn btn-primary" href="../index.php">Nuevo usuario
                                <i class="fa fa-plus"></i> </a>
                            <a class="btn btn-success" href="../includes/excel.php">Reporte Excel
                                <i class="fa fa-table" aria-hidden="true"></i>
                            </a>

                        </div>
                        <br>
                        </form>



                        <table class="table table-striped " id="table_id">


                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Password</th>
                                    <th>Fecha de Registro</th>
                                    <th>Empresa</th>
                                    <th>Rol</th>
                                    <th>Acciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                <!-- consulta -->
                                <!-- SELECT r.id_relacion, e.emp_nombre, fo.f, fo.o, fo.d, fo.a FROM relacion r 
                            INNER JOIN empresas e on r.id_empresa = e.id_empresa 
                            INNER JOIN foda fo on r.id_foda = fo.id_foda; -->
                                <?php
                        $conexion = mysqli_connect('localhost', 'root', '', 'id20534214_r_user');

                                if ($id_empresa['id_empresa'] == 1) { //admin

                                    $SQL = "SELECT u.id,u.nombre, u.correo, u.telefono, u.password, u.fecha, r.rol, emp.emp_nombre from user u 
                                inner JOIN permisos r on u.rol= r.id 
                                inner JOIN empresas emp on u.id_empresa= emp.id_empresa";
                                    $dato = mysqli_query($conexion, $SQL);
                                } else {

                                    $SQL = "SELECT u.id, u.nombre, u.correo, u.telefono, u.password, u.fecha, u.id_empresa, r.rol, emp.emp_nombre from user u 
                                    inner JOIN permisos r on u.rol= r.id 
                                    inner JOIN empresas emp on u.id_empresa= emp.id_empresa 
                                    WHERE u.id_empresa='$id_empresa'
                                    AND u.rol BETWEEN 2 AND 3";
                                    $dato = mysqli_query($conexion, $SQL);
                                }


                                if ($dato->num_rows > 0) {
                                    while ($fila = mysqli_fetch_array($dato)) {

                                ?>
                                        <tr>
                                            <td><?php echo $fila['nombre']; ?></td>
                                            <td><?php echo $fila['correo']; ?></td>
                                            <td><?php echo $fila['telefono']; ?></td>
                                            <td><?php echo $fila['password']; ?></td>
                                            <td><?php echo $fila['fecha']; ?></td>
                                            <td><?php echo $fila['emp_nombre']; ?></td>
                                            <td><?php echo $fila['rol']; ?></td>



                                            <td>


                                                <a class="btn btn-warning" href="editar_user.php?id=<?php echo $fila['id'] ?> ">
                                                    <i class="fa fa-edit"></i> </a>

                                                <a class="btn btn-danger" href="eliminar_user.php?id=<?php echo $fila['id'] ?>">
                                                    <i class="fa fa-trash"></i></a>

                                            </td>
                                        </tr>


                                    <?php
                                    }
                                } else {

                                    ?>
                                    <tr class="text-center">
                                        <td colspan="16">No existen registros</td>
                                    </tr>


                                <?php

                                }

                                ?>


</body>
</table>
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
<script src="../js/scripts.js"></script>
<script src="../js/user.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="../js/datatables-simple-demo.js"></script>
</body>

</html>