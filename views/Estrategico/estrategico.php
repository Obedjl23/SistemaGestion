<?php

include('conexion.php');

$tmp = array();
$res = array();



session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];
$id_empresa = $_SESSION['id_empresa'];

if ($id_empresa['id_empresa'] == 1) { //admin
  $sql = $con->query("SELECT per.id, per.title, per.description, per.url, emp.emp_nombre from estrategico per
   inner JOIN empresas emp 
  on per.id_empresa= emp.id_empresa");
  while ($row = $sql->fetch_assoc()) {
    $tmp = $row;
    array_push($res, $tmp);
  }
} else {

  $sql = $con->query("SELECT * FROM estrategico WHERE id_empresa = '$id_empresa'");
  while ($row = $sql->fetch_assoc()) {
    $tmp = $row;
    array_push($res, $tmp);
  }
}

include('index.php');


?>

  
      <main class="container p-4">

  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="../../css/styles.css" rel="stylesheet" />
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-auto">
              <h1 <i class="fa fa-align-center fw-bold" aria-hidden="true">DIAGRAMA GENERAL</i></h1>
              <h5 <i class="fa fa-align-center" aria-hidden="true">Subir Archivos</i></h5>
            </div>
          </div>
          <div class="row justify-content-md-center">
            <div class="col-8">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Nuevo
              </button>

              <table class="table mt-2">
                <thead>
                  <tr>
                 <?php if ($id_empresa['id_empresa'] == 1) { ?>
                    <th scope="col">Empresa</th>
                 <?php } ?>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($res as $val) { ?>
                    <tr>
                    <?php if ($id_empresa['id_empresa'] == 1) { ?>
                      <td><?php echo $val['emp_nombre'] ?></td>
                 <?php } ?>
                      <td><?php echo $val['title'] ?></td>
                      <td><?php echo $val['description'] ?></td>
                      <td>
                        <a class="btn btn-primary" target="_black" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/views/General/' . $val['url']; ?>">Ver Archivo pagina</a>
                        <a class='btn btn-danger' href="./acciones/eliminar.php?id=<?php echo $val['id'] ?>">Eliminar</a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo archivo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form enctype="multipart/form-data" id="form2">
                  <div class="form-group">
                    <label for="title">Titulo</label>
                    <input type="text" class="form-control" id="title" name="title">
                  </div>
                  <div class="form-group">
                    <label for="description">Descripción</label>
                    <input type="text" class="form-control" id="description" name="description">
                  </div>
                  <div class="form-group">
                    <label for="description">Archivo</label>
                    <input type="file" class="form-control" id="file" name="file">
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="onSubmitForm()">Guardar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="modalPdf" tabindex="-1" aria-labelledby="modalPdf" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ver archivo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <iframe id="iframePDF" frameborder="0" scrolling="no" width="100%" height="500px"></iframe>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

              </div>
            </div>
          </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script>
          function onSubmitForm() {
            var frm = document.getElementById('form2');
            var data = new FormData(frm);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState == 4) {
                var msg = xhttp.responseText;
                if (msg == 'success') {
                  alert(msg);
                  $('#exampleModal').modal('hide')
                } else {
                  alert(msg);
                }

              }
            };
            xhttp.open("POST", "upload.php", true);
            xhttp.send(data);
            $('#form2').trigger('reset');
          }

          function openModelPDF(url) {
            $('#modalPdf').modal('show');
            $('#iframePDF').attr('src', '<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/uploadfile/'; ?>' + url);
          }
        </script>

      </main>



</html>