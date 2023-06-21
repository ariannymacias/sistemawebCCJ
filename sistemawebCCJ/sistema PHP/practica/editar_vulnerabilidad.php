<?php
include("db.php");


if  (isset($_GET['id_vulnerabilidad'])) {
  $id_vulnerabilidad = $_GET['id_vulnerabilidad'];
  $query = "SELECT * FROM vulnerabilidad WHERE id_vulnerabilidad=$id_vulnerabilidad";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    //$vulnerabilidad = $row['vulnerabilidad'];
    $status = $row['status'];
    $observacion = $row['observacion'];
  }
}

if (isset($_POST['update'])) {
  $id_vulnerabilidad = $_GET['id_vulnerabilidad'];
  //$vulnerabilidad= $_POST['vulnerabilidad'];
  $status = $_POST['status'];
  $observacion = $_POST['observacion'];

  $query = "UPDATE vulnerabilidad set 
   
    observacion ='$observacion', status='$status'   WHERE id_vulnerabilidad=$id_vulnerabilidad";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: lista_de_vulnerabilidad.php');
}

?>
<?php include('includes/header.php'); ?>

      
      <form action="editar_vulnerabilidad.php?id_vulnerabilidad=<?php echo $_GET['id']; ?>" method="POST">
      
      <br>


      <br>
                            
                            <div class="card card-body container-fluid" style="max-width:390px;">
                                <form action="guardar_vulnerabilidad.php" method="POST">
                                <div class="mb-3">
    <label  class="form-label">Status</label>
    <select class="form-select mb-3" name="status" id="" required>
    <option value="" disable>--seleccione status --</option>    
    <option value="activo">activo</option>
        <option value="inactivo">inactivo</option>
    </select>
                           
                            <br>
    
    
    
    
                            <br>
    
                             <div class="form-group">
    
                            <textarea name="observacion" id="" cols="30" rows="10" class="form-control" placeholder="observacion" autofocus></textarea>
    
                                        
                             </div>
                             </div>
                                    <input type="submit" name="update" class="btn btn-info btn-block" value="Editar">
             <div class="text-center">

                <br>
           <a href="lista_de_vulnerabilidad.php" class="btn btn-dark"> <i class="bi bi-arrow-left-circle"></i>Regresar</a>
               </div>
      </form>
      </div>
  

<?php include('includes/footer.php'); ?>
