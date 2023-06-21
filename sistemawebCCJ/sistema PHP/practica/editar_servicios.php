<?php
include("db.php");


if  (isset($_GET['id_servicio'])) {
  $id_servicio = $_GET['id_servicio'];
  $query = "SELECT * FROM servicios WHERE id_servicio=$id_servicio";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    
    $status = $row['status'];
    $observacion = $row['observacion'];
  }
}

if (isset($_POST['update'])) {
  $id_servicio = $_GET['id_servicio'];
  //$servicios= $_POST['servicios'];
  $status = $_POST['status'];
  $observacion = $_POST['observacion'];

  $query = "UPDATE servicios set 
   status = '$status', 
    observacion ='$observacion'   WHERE id_servicio=$id_servicio";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: lista_de_servicios.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editar_servicios.php?id_servicio=<?php echo $_GET['id']; ?>" method="POST">
      <div class="mb-3">
      
                               
                   
                            
                            <div class="mb-3">
    <label  class="form-label">Estatus</label>
    <select class="form-select mb-3" name="status" id="" required>
    <option value="" disable>--seleccione status --</option>    
    <option value="activo">activo</option>
        <option value="inactivo">inactivo</option>
    </select>




                        <br>

                        <label for="">Observacion</label>
                         <div class="form-group">

                        <textarea name="observacion" id="" cols="30" rows="10" class="form-control" placeholder="observacion (opcional)" autofocus></textarea>
                        </div>

                        <input type="submit" name="update" class="btn btn-info btn-block" value="Editar">
             <div class="text-center">

                <br>
           <a href="lista_de_servicios.php" class="btn btn-dark"> <i class="bi bi-arrow-left-circle"></i>Regresar</a>
               </div>
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
