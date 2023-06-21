<?php
include("db.php");


if  (isset($_GET['id_h_to_sp'])) {
  $id_h_to_sp = $_GET['id_h_to_sp'];
  $query = "SELECT * FROM habitantes_to_sistema_patrias WHERE id_h_to_sp=$id_h_to_sp";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    //$id_habitantes = $row['id_habitantes'];
    $carnets = $row['carnets'];
   // $codigo= $row['codigo'];
   //$serial = $row['serial'];
    $status = $row['status'];
    $observ = $row['observ'];
  }
}

if (isset($_POST['update'])) {
  $id_h_to_sp = $_GET['id_h_to_sp'];
 // $id_habitantes= $_POST['id_habitantes'];
  //$carnets = $_POST['carnets'];
  //$codigo = $_POST['codigo'];
  $serial = $_POST['serial'];
  $status = $_POST['status'];
  $observ = $_POST['observ'];

  $query = "UPDATE habitantes_to_sistema_patrias set 
   carnets = '$carnets',  status= '$status', serial ='$serial',
   observ='$observ'   WHERE id_h_to_sp=$id_h_to_sp";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: lista_de_patria.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editar_patria.php?id_h_to_sp=<?php echo $_GET['id']; ?>" method="POST">
      <div class="mb-3">
    
 
</select>


 <div class="mb-3">
    <label  class="form-label">Carnet</label>
    <select class="form-select mb-3" name="carnets" id="" required>
    <option value="" disable>--seleccione status carnet--</option>    
    <option value="posee">posee</option>
        <option value="no posee">no posee</option>
    </select>
 
</select>



 
  
  
  
  
   

 
    

   

  <div class="mb-3">
    <label  class="form-label">Estatus</label>
    <select class="form-select mb-3" name="status" id="" required>
    <option value="" disable>--seleccione status --</option>    
    <option value="activo">activo</option>
        <option value="inactivo">inactivo</option>
    </select>


<label for="">Observacion</label>
  <div class="form-group">

    <textarea name="observ" id="" cols="15" rows="10" class="form-control" placeholder="observacion (opcional)" autofocus></textarea>
                            
</div>



<input type="submit" name="update" class="btn btn-info btn-block" value="Editar">
             <div class="text-center">

                <br>
           <a href="lista_de_patria.php" class="btn btn-dark"> <i class="bi bi-arrow-left-circle"></i>Regresar</a>
               </div>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
