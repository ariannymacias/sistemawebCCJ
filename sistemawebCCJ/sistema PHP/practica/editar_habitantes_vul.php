<?php
include("db.php");


if  (isset($_GET['id_h_to_v'])) {
  $id_h_to_v  = $_GET['id_h_to_v'];
  $query = "SELECT * FROM habitantes_vul WHERE id_h_to_v =$id_h_to_v ";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    //$id_habitantes = $row['id_habitantes'];
    $id_vulnerabilidad= $row['id_vulnerabilidad'];
    
    $observaciones = $row['observaciones'];
  }
}

if (isset($_POST['update'])) {
  $id_h_to_v  = $_GET['id_h_to_v'];
  //$id_habitantes = $_POST['id_habitantes'];
    $id_vulnerabilidad= $_POST['id_vulnerabilidad'];
    
    $observaciones = $_POST['observaciones'];

  $query = "UPDATE habitantes_vul set 
   id_vulnerabilidad = '$id_vulnerabilidad',  
   observaciones='$observaciones'   WHERE id_h_to_v=$id_h_to_v";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: lista_habitantes_vul.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editar_habitantes_vul.php?id_h_to_v=<?php echo $_GET['id']; ?>" method="POST">
      <div class="mb-3">
      <div class="card card-body container-fluid" style="max-width:390px;">
                        <form action="guardar_habitantes_vul.php" method="POST">
  
                        


<label for="">Tipo de vulnerabilidad</label>
  <select class="form-select mb-3" name="id_vulnerabilidad" required>
  <option selected disable>--seleccionar vulnerabilidad--</option required>

  <?php 
  
  include("Conexiones.php");

  $sql = $conexion->query("SELECT * FROM vulnerabilidad");
  while ($resultado = $sql->fetch_assoc()) {
    echo "<option value=".$resultado['id_vulnerabilidad']."> ".$resultado['id_vulnerabilidad']."
   ".$resultado['vulnerabilidad']."  </option>";
  }
  
  ?>
   
 
</select>
<label for="">Observacion</label>
  <div class="form-group">

    <textarea name="observaciones" id="observaciones" cols="15" rows="10" class="form-control" placeholder="observacion (opcional)" autofocus></textarea>
                            
</div>

                        

        
     
        <input type="submit" name="update" class="btn btn-info btn-block" value="Editar">
             <div class="text-center">

                <br>
           <a href="lista_habitantes_vul.php" class="btn btn-dark"> <i class="bi bi-arrow-left-circle"></i>Regresar</a>
               </div>

    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
