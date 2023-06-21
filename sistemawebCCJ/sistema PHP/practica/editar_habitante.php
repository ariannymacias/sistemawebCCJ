<?php
include("db.php");


if  (isset($_GET['id_habitantes'])) {
  $id_habitantes  = $_GET['id_habitantes'];
  $query = "SELECT * FROM habitantes WHERE id_habitantes=$id_habitantes";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $primer_nombre = $row['primer_nombre'];
    $segundo_nombre = $row['segundo_nombre'];
    $primer_apellido = $row['primer_apellido'];
   $segundo_apellido = $row['segundo_apellido'];
    //$nacionalidad = $row['nacionalidad'];
    $fecha_nacimiento = $row['fecha_nacimiento'];
    $sexo = $row['sexo'];
    $correo = $row['correo'];
    $codigo_telefono = $row['codigo_telefono'];
    $telefono = $row['telefono'];
    $observacion = $row['observacion'];
  }
}

if (isset($_POST['update'])) {
  $id_habitantes = $_GET['id_habitantes'];
  $primer_nombre = $_POST['primer_nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $primer_apellido = $_POST['primer_apellido'];
   $segundo_apellido = $_POST['segundo_apellido'];
    //$nacionalidad = $_POST['nacionalidad'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $sexo = $_POST['sexo'];
    $correo = $_POST['correo'];
    $codigo_telefono = $_POST['codigo_telefono'];
    $telefono = $_POST['telefono'];
    $observacion = $_POST['observacion'];

  $query = "UPDATE habitantes set primer_nombre = '$primer_nombre',
   segundo_nombre = '$segundo_nombre', primer_apellido = '$primer_apellido', 
   segundo_apellido= '$segundo_apellido',  fecha_nacimiento ='$fecha_nacimiento',
   sexo= '$sexo', correo ='$correo', codigo_telefono= '$codigo_telefono', telefono ='$telefono',
    observacion ='$observacion'   WHERE id_habitantes=$id_habitantes";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: lista_de_habitante.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editar_habitante.php?id_habitantes=<?php echo $_GET['id']; ?>" method="POST">
      <div class="form-group">
                                        <label for="">Primer Nombre</label>
                                        <input type="text" name="primer_nombre" class="form-control" placeholder="primer_nombre" autofocus required>
                                    </div>
                                        <br>
                                     <div class="form-group">
                                        <label for="">Segundo Nombre</label>
                                        <input type="text" name="segundo_nombre" class="form-control" placeholder="segundo_nombre" autofocus required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                    <label for="">Primer Apellido</label>
                                    <input type="text" name="primer_apellido" class="form-control" placeholder="primer_apellido" autofocus required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                    <label for="">Segundo Apellido</label>
                                    <input type="text" name="segundo_apellido" class="form-control" placeholder="segundo_apellido" autofocus required>
                                    </div>
                                    <br>
                                
                                    <br>

                                    <div class="form-group">

                                    
                                    <label>Fecha de Nacimiento: </label>
                                    <input type="date" name="fecha_nacimiento" class="form-control" max="" placeholder="fecha_nacimiento" autofocus required>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="correo" class="form-control" placeholder="correo" autofocus required>
                                    </div>
                                    <br>
                                    
                                    

                                    <label for="codigo_telefono">Telefono: </label>
                                <select id="codigo_telefono" name="codigo_telefono" required>
                                 <option>0424</option>
                                <option>0414</option>
                                 <option>0426</option>
                                 <option>0416</option>
                                 <option>0412</option>
                                 <option>0251</option>
                                </select>
                                


                                <div class="form-group">

                                    <input type="number" name="telefono" class="form-control"  placeholder="telefono" autofocus required>
                                    </div>
                                    <br>

                                 

                                     <br>

                                         <div class="form-group">

                                    <label for="sexo">sexo: </label>
                                <select id="sexo" name="sexo" required>
                                 <option value="M">M</option>
                                <option value="F">F</option>
                                 
                                
                                </select>
                                </div>

                                

                                <br>


                                <div class="form-group">
                                <label for="">Observacion</label>
                                <textarea name="observacion" id="" cols="30" rows="10" class="form-control" placeholder="observacion (opcional)" autofocus></textarea>

                                    
                                    </div>

                                    <input type="submit" name="update" class="btn btn-info btn-block" value="Editar">
             <div class="text-center">

                <br>
           <a href="lista_de_habitante.php" class="btn btn-dark"> <i class="bi bi-arrow-left-circle"></i>Regresar</a>
               </div>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
