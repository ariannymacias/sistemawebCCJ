<link href="status.css" rel="stylesheet" />

<?php
include("db.php");


if  (isset($_GET['id_bono'])) {
  $id_bono = $_GET['id_bono'];
  $query = "SELECT * FROM bonos WHERE id_bono = $id_bono";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    //$bono = $row['bono'];
    $status = $row['status'];
    $observacion_bono= $row['observacion_bono'];
   
  }
}

if (isset($_POST['update'])) {
  $id_bono = $_GET['id_bono'];
  //$bono= $_POST['bono'];
  $status = $_POST['status'];
  $observacion_bono	 = $_POST['observacion_bono'];
  

  $query = "UPDATE bonos set  status = '$status', observacion_bono = '$observacion_bono'  WHERE id_bono=$id_bono";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: lista_de_bonos.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editar_bonos.php?id_bono=<?php echo $_GET['id']; ?>" method="POST">
      <div class="mb-3">
    

                   
                            
                      
                        

                        <div class="mb-3">
    <label  class="form-label">Estatus</label>
    <select class="form-select mb-3" name="status" id="" required>
    <option value="" disable>--seleccione status --</option>  
    <div class= "status">  
    <option value="activo" class='activo'>activo</option>
        <option value="inactivo" class='inactivo'>inactivo</option>
        </div>
    </select>

                         
                          
                        </select> 

                        <br>

                        <label for="">Observacion</label>
                        <div class="form-group">

                        <textarea name="observacion_bono" id="" cols="15" rows="10" class="form-control" placeholder="observacion (opcional)" autofocus></textarea>

                            
                        </div>
                        <input type="submit" name="update" class="btn btn-info btn-block" value="Editar">
             <div class="text-center">

                <br>
           <a href="lista_de_bonos.php" class="btn btn-dark"> <i class="bi bi-arrow-left-circle"></i>Regresar</a>
               </div>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
