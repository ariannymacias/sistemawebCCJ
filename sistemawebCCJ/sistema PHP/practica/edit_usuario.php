<?php
include("db.php");


if  (isset($_GET['id_usuario'])) {
  $id_usuario = $_GET['id_usuario'];
  $query = "SELECT * FROM usuarios WHERE id_usuario=$id_usuario";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    //$nombre_usuario = $row['nombre_usuario'];
    //$clave = $row['clave'];
    //$email = $row['email'];
   $status = $row['status'];
    $id_nivel = $row['id_nivel'];
    $observacion = $row['observacion'];
  }
}

if (isset($_POST['update'])) {
  $id_usuario = $_GET['id_usuario'];
  //$nombre_usuario= $_POST['nombre_usuario'];
  //$clave = md5($_POST['clave']);
  //$email = $_POST['email'];
  $status = $_POST['status'];
  $id_nivel = $_POST['id_nivel'];
  $observacion = $_POST['observacion'];

  $query = "UPDATE usuarios set 
      id_nivel= '$id_nivel', status ='$status',
    observacion ='$observacion'   WHERE id_usuario=$id_usuario";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: lista_de_usuarios.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_usuario.php?id_usuario=<?php echo $_GET['id']; ?>" method="POST">
      <div class="mb-3">
    
  </div>

  




  <div class="mb-3">

   <label for="">Niveles</label>
  <select class="form-select mb-3" name="id_nivel" required>
  <option selected disable>--seleccionar nivel--</option required>

  <?php 
  
  include("Conexiones.php");

  $sql = $conexion->query("SELECT * FROM niveles");
  while ($resultado = $sql->fetch_assoc()) {
    echo "<option value=".$resultado['id_nivel'].">
    ".$resultado['nivel']."</option>";
  }
  
  ?>
   </div>
 
</select>

  <div class="mb-3">
  <label for="">Status</label>
  <select class="form-select mb-3" name="status" required>
  <option selected disable>--seleccionar status--</option required>
  <option value="activo">activo</option>
  <option value="inactivo">inactivo</option>

 
   </div>
 
</select>
   </div>
 

   
  <div class="form-group">

<textarea name="observacion" id="" cols="15" rows="10" class="form-control" placeholder="observacion (opcional)" autofocus></textarea>
</div>
<input type="submit" name="update" class="btn btn-info btn-block" value="Editar">
             <div class="text-center">

                <br>
           <a href="lista_de_usuarios.php" class="btn btn-dark"> <i class="bi bi-arrow-left-circle"></i>Regresar</a>
               </div>
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
