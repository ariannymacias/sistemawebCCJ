<?php
include("db.php");


if  (isset($_GET['id_vivienda'])) {
  $id_vivienda = $_GET['id_vivienda'];
  $query = "SELECT * FROM vivienda WHERE id_vivienda =$id_vivienda";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    //$numero_casa  = $row['numero_casa'];
    $ubicacion = $row['ubicacion'];
    $color_casa = $row['color_casa'];
   $habitaciones = $row['habitaciones'];
    $baños = $row['baños'];
    $observacion = $row['observacion'];
  }
}

if (isset($_POST['update'])) {
  $id_vivienda = $_GET['id_vivienda'];
  //$numero_casa= $_POST['numero_casa'];
  $ubicacion = $_POST['ubicacion'];
  $color_casa = $_POST['color_casa'];
  $habitaciones = $_POST['habitaciones'];
  $baños = $_POST['baños'];
  $observacion = $_POST['observacion'];

  $query = "UPDATE vivienda set 
   ubicacion = '$ubicacion', color_casa = '$color_casa',  habitaciones= '$habitaciones', baños ='$baños',
    observacion ='$observacion'   WHERE id_vivienda =$id_vivienda";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: lista_de_vivienda.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editar_vivienda.php?id_vivienda=<?php echo $_GET['id']; ?>" method="POST">
      <div class="form-group">
                                        
                                        <br>
                                        <label for="">Ubicacion</label>
                                     <div class="form-group">
                                        <input type="text" name="ubicacion" class="form-control" placeholder="ubicacion" autofocus required>
                                    </div>
                                    <br>

                                    <label for="">Color de casa</label>
                                    <div class="form-group">

                                    <input type="text" name="color_casa" class="form-control" placeholder="color_casa" autofocus required>
                                    </div>
                                    <br>

                                    <label for="">N° de habitaciones</label>
                                    <div class="form-group">

                                    <input type="number" name="habitaciones" class="form-control" placeholder="habitaciones" autofocus required>
                                    </div>
                                    <br>
                                    
                                  <label for="">N° de baños</label>
                                <div class="form-group">

                                    <input type="number" name="baños" class="form-control" placeholder="baños" max="99999999"autofocus required>
                                    </div>
                                    <br>

                                    <label for="">Observacion</label>
                                <div class="form-group">

                                <textarea name="observacion" id="" cols="30" rows="10" class="form-control" placeholder="observacion" autofocus></textarea>

                                    
                                    </div>
                                    <input type="submit" name="update" class="btn btn-info btn-block" value="Editar">
             <div class="text-center">

                <br>
           <a href="lista_de_vivienda.php" class="btn btn-dark"> <i class="bi bi-arrow-left-circle"></i>Regresar</a>
               </div>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
