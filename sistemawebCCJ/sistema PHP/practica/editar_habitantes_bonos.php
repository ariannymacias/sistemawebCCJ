<?php
include("db.php");


if  (isset($_GET['id_h_to_b'])) {
  $id_h_to_b  = $_GET['id_h_to_b'];
  $query = "SELECT * FROM habitantes_to_bonos WHERE id_h_to_b =$id_h_to_b ";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    //$id_habitante = $row['id_habitante'];
    $id_bono= $row['id_bono'];
    
   
    $status = $row['status'];
    $obse = $row['obse'];
  }
}

if (isset($_POST['update'])) {
  $id_h_to_b  = $_GET['id_h_to_b'];
  //$id_habitante = $_POST['id_habitante'];
    $id_bono= $_POST['id_bono'];
    $status = $_POST['status'];
    $obse = $_POST['obse'];

  $query = "UPDATE habitantes_to_bonos set 
   id_bono = '$id_bono',  status= '$status', 
   obse='$obse'   WHERE id_h_to_b=$id_h_to_b";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: lista_habitantes_bonos.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editar_habitantes_bonos.php?id_h_to_b=<?php echo $_GET['id']; ?>" method="POST">
      
      
  
 


<label for="">id_bono</label>
  <select class="form-select mb-3" name="id_bono" required>
  <option selected disable>--seleccionar id beneficio--</option required>

  <?php 
  
  include("Conexiones.php");

  $sql = $conexion->query("SELECT * FROM bonos");
  while ($resultado = $sql->fetch_assoc()) {
    echo "<option value=".$resultado['id_bono']."> ".$resultado['id_bono']."
   ".$resultado['bono']."  </option>";
  }
  
  ?>
   </div>
 
</select>






 

   

  <div class="mb-3">
    <label  class="form-label">status</label>
    <select class="form-select mb-3" name="status" id="" required>
    <option value="" disable>--seleccione status --</option>    
    <option value="activo">activo</option>
        <option value="inactivo">inactivo</option>
    </select>



  <div class="form-group">
  <label for="">Observacion </label>
    <textarea name="obse" id="obse" cols="15" rows="10" class="form-control" placeholder="observacion (opcional)" autofocus></textarea>
                            
</div>
<input type="submit" name="update" class="btn btn-info btn-block" value="Editar">
             <div class="text-center">

                <br>
           <a href="lista_habitantes_bonos.php" class="btn btn-dark"> <i class="bi bi-arrow-left-circle"></i>Regresar</a>
               </div>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
