<?php
include('conexion.php');

$tmp = array();
$res = array();



session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];
$id_empresa = $_SESSION['id_empresa'];



if ($id_empresa['id_empresa'] == 1) { //admin
  $sel = $con->query("SELECT per.id, per.title, per.description, per.url, emp.emp_nombre from apoyo per
   inner JOIN empresas emp 
  on per.id_empresa= emp.id_empresa");
  while ($row = $sel->fetch_assoc()) {
    $tmp = $row;
    array_push($res, $tmp);
  }
} else {

  $sel = $con->query("SELECT * FROM apoyo WHERE id_empresa = '$id_empresa'");
  while ($row = $sel->fetch_assoc()) {
    $tmp = $row;
    array_push($res, $tmp);
  }
}

if ($id_empresa['id_empresa'] == 1) { //admin
  $sel = $con->query("SELECT pe.id, pe.title, pe.description, pe.url, em.emp_nombre from apoyo pe
   inner JOIN empresas em 
  on pe.id_empresa= em.id_empresa");
  while ($row = $sel->fetch_assoc()) {
    $tmp = $row;
    array_push($res2, $tmp);
  }
} else {

  $sel = $con->query("SELECT * FROM apoyo WHERE id_empresa = '$id_empresa'");
  while ($row = $sel->fetch_assoc()) {
    $tmp = $row;
    array_push($res2, $tmp);
  }
}


if ($validar == null || $validar = '') {

  header("Location: ../../includes/login.php");
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
  <title>Proceso Apoyo</title>
  <link rel="icon" type="image/png" href="../../icono/icono.png" />
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="../../css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

<?php
include('../../includes/bar.php');
?>


  <!-- Iconos ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- Scrips para el bar -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="../../js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="../../assets/demo/chart-area-demo.js"></script>
  <script src="../../assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
  <script src="../../js/datatables-simple-demo.js"></script>
</body>
<style>
    #proceso1,
    #proceso2,
    #proceso3 {

      display: none;
      text-align: center;
      align-items: center;
    }

    .cnt-pro {
      
      
      display: inline-block;
      margin: 3px 50px;
      padding: 50px;
      width: 50%;
      height: 200px;
      
    }
  </style>
  <script>
    function mostrar1() {
      document.getElementById('proceso1').style.display = 'block';

    }

    function mostrar2() {
      document.getElementById('proceso2').style.display = 'block';

    }

    function mostrar3() {
      document.getElementById('proceso3').style.display = 'block';

    }


    function ocultar() {
      document.getElementById('proceso1').style.display = 'none';
    }

    function ocultar2() {
      document.getElementById('proceso2').style.display = 'none';
    }

    function ocultar3() {
      document.getElementById('proceso3').style.display = 'none';
    }
  </script>

</html>