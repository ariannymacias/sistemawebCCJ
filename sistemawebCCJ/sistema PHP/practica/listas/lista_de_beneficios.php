<?php
	
	session_start();
	
	if(!isset($_SESSION['nombre_usuario'])){
		header("Location: principal.php");
	}
	
	$nombre_usuario = $_SESSION['nombre_usuario'];
	$id_nivel = $_SESSION['id_nivel'];
	
	include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Usuarios</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
  
    
    
    </head>
    <body class="sb-nav-fixed bg-primary">
        <nav class="sb-topnav navbar navbar-expand navbar-primary   bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3 text-white " href="principal.php">Sistema web CCJ</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
          
            <ul class="navbar-nav ms-auto ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle bg-primary" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Configuración</a></li>
                        
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="loginyura.php">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            
                            <div class="sb-sidenav-menu-heading">Usuarios</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class='bx bx-user-circle' style='color:#11838c'></i></div>
                                Habitantes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" ></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <i class='bx bx-list-plus'style='color:#11838c ' width="40px"  heigth="40px"></i><a class="nav-link" href="registrar_habitante.php">Registrar Habitantes</a>
                                <i class='bx bx-id-card' style='color:#11838c' ></i><a class="nav-link" href='lista_de_habitante.php'>Lista de habitantes</a>
                                </nav>
                            </div>


							
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#benficios" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class='bx bx-user-circle' style='color:#11838c'></i></div>
                                Beneficios
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" ></i></div>
                            </a>
                            <div class="collapse" id="benficios" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <i class='bx bx-list-plus'style='color:#11838c ' width="40px"  heigth="40px"></i><a class="nav-link" href="registrar_beneficios.php">Registrar Beneficios</a>
                                <i class='bx bx-id-card' style='color:#11838c' ></i><a class="nav-link" href="lista_de_beneficios.php">Lista de Beneficios</a>
                                </nav>
                            </div>



							<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#bonos" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class='bx bx-user-circle' style='color:#11838c'></i></div>
                                Bonos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" ></i></div>
                            </a>
                            <div class="collapse" id="bonos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <i class='bx bx-list-plus'style='color:#11838c ' width="40px"  heigth="40px"></i><a class="nav-link" href="registrar_bonos.php">Registrar Bonos</a>
                                <i class='bx bx-id-card' style='color:#11838c' ></i><a class="nav-link" href="lista_de_bonos.php">Lista de Bonos</a>
                                </nav>
                            </div>



							<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Servicios" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class='bx bx-user-circle' style='color:#11838c'></i></div>
                                Servicios
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" ></i></div>
                            </a>
                            <div class="collapse" id="Servicios" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <i class='bx bx-list-plus'style='color:#11838c ' width="40px"  heigth="40px"></i><a class="nav-link" href="registrar_servicios.php">Registrar Servicios</a>
                                <i class='bx bx-id-card' style='color:#11838c' ></i><a class="nav-link" href="lista_de_servicios.php">Lista de Servicios</a>
                                </nav>
                            </div>


							<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#vivienda" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class='bx bx-user-circle' style='color:#11838c'></i></div>
                                Viviendas
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" ></i></div>
                            </a>
                            <div class="collapse" id="vivienda" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <i class='bx bx-list-plus'style='color:#11838c ' width="40px"  heigth="40px"></i><a class="nav-link" href="registrar_vivienda.php">Registrar Vivienda</a>
                                <i class='bx bx-id-card' style='color:#11838c' ></i><a class="nav-link" href="lista_de_vivienda.php">Lista de Viviendas</a>
                                </nav>
                            </div>



							<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#vulnerabilidad" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class='bx bx-user-circle' style='color:#11838c'></i></div>
                                Vulnerabilidad
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" ></i></div>
                            </a>
                            <div class="collapse" id="vulnerabilidad" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <i class='bx bx-list-plus'style='color:#11838c ' width="40px"  heigth="40px"></i><a class="nav-link" href="registrar_vulnerabilidad.php">Registrar Vulnerabilidad</a>
                                <i class='bx bx-id-card' style='color:#11838c' ></i><a class="nav-link" href="lista_de_vulnerabilidad.php">Lista de Vulnerabilidad</a>
                                </nav>
                            </div>

							<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#usuarios" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class='bx bx-user-circle' style='color:#11838c'></i></div>
                                Usuarios
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" ></i></div>
                            </a>
                            <div class="collapse" id="usuarios" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <i class='bx bx-list-plus'style='color:#11838c ' width="40px"  heigth="40px"></i><a class="nav-link" href="principal.php">Registrar Usuarios</a>
                                <i class='bx bx-id-card' style='color:#11838c' ></i><a class="nav-link" href="lista_de_usuarios.php">Lista de Usuarios</a>
                                </nav>
                            </div>
							




                            
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    
                                    
                                </nav>
                            </div>
                            
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Bienvenido</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Lista de Beneficios</li>
                        </ol>























                <main>
                    <!--Ejemplo tabla con DataTables-->
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table container-fluid table-bordered card-body table table-light table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                                    <tr>
                                        <th>id_beneficios</th>
                                        <th>nombre_beneficio</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $query = "SELECT * FROM beneficios";
                                    $result_tasks = mysqli_query($conn, $query);    

                                    while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                    <tr>
                                        <td><?php echo $row['id_beneficios']; ?></td>
                                        <td><?php echo $row['nombre_beneficio']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        
                                        <td>
                                        <a href="edit.php?id=<?php echo $row['id_beneficios']?>" class="btn btn-secondary">
                                            <i class="fas fa-marker"></i>
                                        </a>
                                        <a href="delete_task.php?id=<?php echo $row['id_beneficios']?>" class="btn btn-danger">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>   
                       </table>                  
                    </div>
                </div>
        </div>  
    </div>    
     
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="main.js"></script>  
    

                </main>
				<br>
				<hr>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>


