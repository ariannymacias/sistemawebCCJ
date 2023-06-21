<?php
include("db.php");


if  (isset($_GET['id_s_to_v'])) {
  $id_s_to_v = $_GET['id_s_to_v'];
  $query = "SELECT * FROM servicio_to_vivienda WHERE id_s_to_v =$id_s_to_v";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    //$id_vivienda  = $row['id_vivienda'];
    $id_servicio= $row['id_servicio'];
    $status = $row['status'];
    $comentario = $row['comentario'];
   
  }
}

if (isset($_POST['update'])) {
  $id_s_to_v = $_GET['id_s_to_v'];
  //$id_vivienda = $_POST['id_vivienda'];
  $id_servicio = $_POST['id_servicio'];
  $status = $_POST['status'];
  $comentario = $_POST['comentario'];
  

  $query = "UPDATE servicio_to_vivienda set 
   id_servicio = '$id_servicio', comentario = '$comentario'   WHERE id_s_to_v =$id_s_to_v";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: servicios_vivienda.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editar_servicios_vivienda.php?id_s_to_v=<?php echo $_GET['id']; ?>" method="POST">
      <div class="form-group">
      

  


<label for="">Servicio</label>
  <select class="form-select mb-3" name="id_servicio" required>
  <option selected disable>--seleccionar id servicio--</option required>

  <?php 
  
  include("Conexiones.php");

  $sql = $conexion->query("SELECT * FROM servicios");
  while ($resultado = $sql->fetch_assoc()) {
    echo "<option value=".$resultado['id_servicio']."> ".$resultado['id_servicio']."
   ".$resultado['servicios']."  </option>";
  }
  
  ?>
   </div>
 
</select>


<div class="mb-3">
    <label  class="form-label">Estatus</label>
    <select class="form-select mb-3" name="status" id="" required>
    <option value="" disable>--seleccione status --</option>    
    <option value="activo">activo</option>
        <option value="inactivo">inactivo</option>
    </select>

  



  <div class="form-group">

    <textarea name="comentario" id="comentario" cols="15" rows="10" class="form-control" placeholder="observacion (opcional)" autofocus></textarea>
                            
</div>


<input type="submit" name="update" class="btn btn-info btn-block" value="Editar">
             <div class="text-center">

                <br>
           <a href="servicios_vivienda.php" class="btn btn-dark"> <i class="bi bi-arrow-left-circle"></i>Regresar</a>
               </div>
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
