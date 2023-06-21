<?php
include("db.php");


if  (isset($_GET['id_h_to_v'])) {
  $id_h_to_v  = $_GET['id_h_to_v'];
  $query = "SELECT * FROM habitantes_to_beneficios WHERE id_h_to_v =$id_h_to_v";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    //$id_habitante  = $row['id_habitante'];
    $id_beneficio = $row['id_beneficio'];
    $id_vivienda  = $row['id_vivienda'];
   
    $status = $row['status'];
    $fecha_entrega = $row['fecha_entrega'];
    $observacio = $row['observacio'];
  }
}

if (isset($_POST['update'])) {
  $id_h_to_v  = $_GET['id_h_to_v'];
  //$id_habitante  = $_POST['id_habitante'];
  $id_beneficio = $_POST['id_beneficio'];
  $id_vivienda  = $_POST['id_vivienda'];
 
  $status = $_POST['status'];
  $fecha_entrega = $_POST['fecha_entrega'];
  $observacio = $_POST['observacio'];

  $query = "UPDATE habitantes_to_beneficios set 
   id_beneficio = '$id_beneficio', id_vivienda = '$id_vivienda',  
    status ='$status',
   fecha_entrega ='$fecha_entrega' , observacio='$observacio'   WHERE id_h_to_v =$id_h_to_v";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: habitantes_beneficios.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editar_h_b.php?id_h_to_v=<?php echo $_GET['id']; ?>" method="POST">
      <div class="mb-3">
      
 
</select>


<label for="">Nombre de Beneficio</label>
  <select class="form-select mb-3" name="id_beneficio" required>
  <option selected disable>--seleccionar id beneficio--</option required>

  <?php 
  
  include("Conexiones.php");

  $sql = $conexion->query("SELECT * FROM beneficios");
  while ($resultado = $sql->fetch_assoc()) {
    echo "<option value=".$resultado['id_beneficios']."> ".$resultado['id_beneficios']."
   ".$resultado['nombre_beneficio']."  </option>";
  }
  
  ?>
   </div>
 
</select>




<label for="">Vivienda </label>
  <select class="form-select mb-3" name="id_vivienda" required>
  <option selected disable>--seleccionar vivienda --</option required>

  <?php 
  
  include("Conexiones.php");

  $sql = $conexion->query("SELECT * FROM vivienda");
  while ($resultado = $sql->fetch_assoc()) {
    echo "<option value=".$resultado['id_vivienda']."> ".$resultado['id_vivienda']."
   numero de casa:".$resultado['numero_casa']." </option>";
  }
  
  ?>
   </div>
 
</select>





<div class="form-group">

                                    
  <label>Fecha de Entrega: </label>
    <input type="date" name="fecha_entrega" class="form-control" max="" placeholder="fecha_entrega" autofocus required>
       </div>
 


 

   

  <div class="mb-3">
    <label  class="form-label">Estatus</label>
    <select class="form-select mb-3" name="status" id="" required>
    <option value="" disable>--seleccione status --</option>    
    <option value="activo">activo</option>
        <option value="inactivo">inactivo</option>
    </select>


<label for="">Observacion</label>
  <div class="form-group">

    <textarea name="observacio" id="" cols="15" rows="10" class="form-control" placeholder="observacion (opcional)" autofocus></textarea>
    </div>                    
</div>


<input type="submit" name="update" class="btn btn-info btn-block" value="Editar">
             <div class="text-center">

                <br>
           <a href="habitantes_beneficios.php" class="btn btn-dark"> <i class="bi bi-arrow-left-circle"></i>Regresar</a>
               </div>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
