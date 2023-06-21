<?php 
    include("connection.php");
    $con=connection();

    $id_usuario =$_GET['id_usuario'];

    $sql="SELECT * FROM usuarios WHERE id_usuario ='$id_usuario'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id_usuario" value="<?= $row['id_usuario']?>">
                <input type="text" name="nombre_usuario" placeholder="Nombre" value="<?= $row['nombre_usuario']?>">
                <input type="text" name="clave" placeholder="clave" value="<?= $row['clave']?>">
                <input type="text" name="email" placeholder="email" value="<?= $row['email']?>">
                

                <div class="mb-3">
                <label for="">Status</label>
                <select class="form-select mb-3" name="id_status" required>
                <option selected disable>--seleccionar status--</option required>

                <?php 
                
                include("connection.php");

                $sql = $conexion->query("SELECT * FROM status");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value=".$resultado['id_status'].">
                    ".$resultado['nombre_statu']."</option>";
                }
                
                ?>
                </div>
                
                </select>



                <label for="">Niveles</label>
                    <select class="form-select mb-3" name="id_nivel" required>
                    <option selected disable>--seleccionar nivel--</option required>

                    <?php 
                    
                    include("connection.php");

                    $sql = $conexion->query("SELECT * FROM niveles");
                    while ($resultado = $sql->fetch_assoc()) {
                        echo "<option value=".$resultado['id_nivel'].">
                        ".$resultado['nivel']."</option>";
                    }
                    
                    ?>
                    </div>
                    </select>
                
                <input type="text" name="observacion" placeholder="observacion" value="<?= $row['observacion']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>