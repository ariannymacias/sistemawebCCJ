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
        <title>Lista de Beneficios</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />

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
                    <li><a class="dropdown-item" href="recuperar2.php">Cambiar Clave</a></li>
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="loginyura.php">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark"  id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            
                        <div class="sb-sidenav-menu-heading">Usuarios</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="bi bi-people"></i></div>
                                Habitantes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" ></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link " href='lista_de_habitante.php' >
                                <div class="sb-nav-link-icon">></div>
                                Lista de habitantes
                                <div class="sb-sidenav-collapse-arrow"></div>                               
                                
                               

                                <a class="nav-link " href="lista_de_patria.php" >
                                <div class="sb-nav-link-icon">></div>
                                Habitantes registrados en Sistema Patria
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>


                            <a class="nav-link " href="habitantes_beneficios.php" >
                                <div class="sb-nav-link-icon">></div>
                                Habitantes registrados con beneficios
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>


                            <a class="nav-link " href="lista_habitantes_bonos.php" >
                                <div class="sb-nav-link-icon">></div>
                                Habitantes registrados con bonos
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>

                            <a class="nav-link " href="lista_habitantes_vul.php" >
                                <div class="sb-nav-link-icon">></div>
                                Habitantes registrados con Vulnerabilidad
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>


                            
    
                            </nav>
                            </div>


							
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#benficios" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="bi bi-suit-heart-fill"></i></div>
                                Beneficios
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" ></i></div>
                            </a>
                            <div class="collapse" id="benficios" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="registrar_beneficios.php">> Registrar Beneficios</a>
                                <a class="nav-link" href="lista_de_beneficios.php">> Lista de Beneficios</a>
                                </nav>
                            </div>



							<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#bonos" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="bi bi-cash-coin"></i></div>
                                Bonos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" ></i></div>
                            </a>
                            <div class="collapse" id="bonos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="registrar_bonos.php">> Registrar Bonos</a>
                                <a class="nav-link" href="lista_de_bonos.php">> Lista de Bonos</a>
                                </nav>
                            </div>



							<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Servicios" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="bi bi-droplet-half"></i></div>
                                Servicios
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" ></i></div>
                            </a>
                            <div class="collapse" id="Servicios" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="registrar_servicios.php">> Registrar Servicios</a>
                                <a class="nav-link" href="lista_de_servicios.php">> Lista de Servicios</a>
                                </nav>
                            </div>


							<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#vivienda" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="bi bi-house-add-fill"></i></div>
                                Viviendas
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" ></i></div>
                            </a>
                            <div class="collapse" id="vivienda" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link " href="servicios_vivienda.php" >
                                <div class="sb-nav-link-icon">></div>
                                Viviendas con servicios
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                                <a class="nav-link" href="registrar_vivienda.php">> Registrar Vivienda</a>
                                </i><a class="nav-link" href="lista_de_vivienda.php">> Lista de Viviendas</a>
                                </nav>
                            </div>



							<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#vulnerabilidad" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="bi bi-activity"></i></div>
                                Vulnerabilidad
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" ></i></div>
                            </a>
                            <div class="collapse" id="vulnerabilidad" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="registrar_vulnerabilidad.php">> Registrar Vulnerabilidad</a>
                                <a class="nav-link" href="lista_de_vulnerabilidad.php">> Lista de Vulnerabilidad</a>
                                </nav>
                            </div>

							<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#usuarios" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="bi bi-person-circle"></i></div>
                                Usuarios
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" ></i></div>
                            </a>
                            <div class="collapse" id="usuarios" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="principal.php">> Registrar Usuarios</a>
                                <a class="nav-link" href="lista_de_usuarios.php">> Lista de Usuarios</a>
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
                        <h1 class="mt-4">Comunidad Japon II <i class="bi bi-brightness-alt-high-fill"></i></h1>
                            <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Lista de Habitantes con Beneficios</li>
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
                                        
                                        <th>Habitante</th>
                                        <th>Beneficio</th>
                                        <th>Vivienda N°</th>
                                        
                                        <th>Estatus</th>
                                        <th>Fecha_entrega</th>
                                        <th>Observacion</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
    
    require ("Conexiones.php");

    $sql = $conexion->query("SELECT * FROM habitantes_to_beneficios 
    INNER JOIN habitantes ON habitantes_to_beneficios.id_habitante = habitantes.id_habitantes
    INNER JOIN beneficios ON habitantes_to_beneficios.id_beneficio = beneficios.id_beneficios
    INNER JOIN vivienda ON habitantes_to_beneficios.id_vivienda  = vivienda.id_vivienda
    ");

    while ($resultado = $sql-> fetch_assoc()){

        ?> 
    <tr>
      
      <td scope="row"><?php echo $resultado ['primer_nombre']?></td>
      <td scope="row"><?php echo $resultado ['nombre_beneficio']?></td>
      <td scope="row"><?php echo $resultado ['numero_casa']?></td>
     
      <td scope="row"><?php echo $resultado ['status']?></td>
      <td scope="row"><?php echo $resultado ['fecha_entrega']?></td>
      <td scope="row"><?php echo $resultado ['observacio']?></td>
      <td>
      <div class="text-center">  
      <a href="editar_h_b.php?id=<?php echo $resultado['id_h_to_v']?>" class="btn btn-secondary">
            <i class="fas fa-marker"></i> 
            </a>
            </div>
            </td>
      
    </tr>


        <?php
    }
    
    
    ?>
   
   
  </tbody>   
                       </table>  
                       
                       <div class="text-center">
    
  
                            <a href="registrar_habitantes_beneficios.php" class="btn btn-success"> Registrar nuevo habitante con beneficios</a>
                        </div>
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


