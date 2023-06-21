<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Users CRUD</title>
</head>

<body>
    <div class="users-form">
        <h1>Crear usuario</h1>
        <form action="insert_user.php" method="POST">
            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="lastname" placeholder="Apellidos">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="email" name="email" placeholder="Email">

            <input type="submit" value="Agregar">
        </form>
    </div>

    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

            <?php
    
    require ("connection.php");

    $sql = $con->mysqli_connect("SELECT * FROM usuarios 
    INNER JOIN niveles ON usuarios.id_nivel = niveles.id_nivel
    INNER JOIN status ON usuarios.id_status = status.id_status");

    while ($row = $sql-> fetch_assoc()){

        ?> 
    <tr>
      <td scope="row"><?php echo $row ['id_usuario']?></td>
      <td scope="row"><?php echo $row ['nombre_usuario']?></td>
      <td scope="row"><?php echo $row ['clave']?></td>
      <td scope="row"><?php echo $row ['email']?></td>
      <td scope="row"><?php echo $row ['nombre_statu']?></td>
      <td scope="row"><?php echo $row ['nivel']?></td>
      <td scope="row"><?php echo $row ['observacion']?></td>
      <td> 
        <a href="update.php?id=<?php echo $row['id_usuario']?>" class="btn btn-secondary">
            <i class="fas fa-marker"></i> 
        </a>
            </td>
      
    </tr>


        <?php
    }
    
    
    ?>
   



            </tbody>
        </table>
    </div>

</body>

</html>