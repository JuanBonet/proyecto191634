<?php
	
	session_start();
	
	if(!isset($_SESSION['id'])){
		header("Location: index.php");
	}
	
	$nombre = $_SESSION['nombre'];
	$tipo_usuario = $_SESSION['tipo_usuario'];
	
    
	
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PRINCIPAL</title>

        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="javaScript/alertifyjs/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="javaScript/alertifyjs/css/alertify.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="javaScript/jquery-3.2.1.min.js"></script>
<script src="javaScript/alertifyjs/alertify.js"></script>   
<link rel="stylesheet" type="text/css" href="css/style_index.css">
<style type="text/css">
    /*#tarjeta1,#tarjeta2{
display: inline-block;
    }
    #tar{
        display: flex;
    }
    #navbarSupportedContent{
        justify-content: center;
        text-align: center;
        float: right;
        margin-left: 100px;
    }
    #myTab{
        margin-right: 100px;
    }
    #buscar{
        float: right;
        text-align: right;
        align-content: right;
        right: 0px;
    }*/

</style>





        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
	</head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="principal.php">LatínCompras</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
			><!-- Navbar Search-->
            <!--<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
				<input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
				<div class="input-group-append">
				<button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
				</div>
                </div>
			</form>-->
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nombre; ?><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Configuración</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php">Salir</a>
					</div>
				</li>
			</ul>
		</nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="principal.php"
							><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               INICIO</a>
							
							
							<a class="nav-link" href="productos.php"
							>
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                        PRODUCTOS</a>
								<a class="nav-link" href="tabla.php"
								><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
									ADMINISTRADORES</a>

							</div>
					</div>
                    
				</nav>
			</div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">BIENVENIDOS A LATÍNCOMPRAS</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">NOVEDADES</li>
						</ol>
                        














                         <div  id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" id="img" src="imagen/carrousel1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" id="img" src="imagen/carrousel2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" id="img" src="imagen/carrousel3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
 <div class="container col-12">
   <div class="row">
    <div class="listado col-12">
      <h1 id="list">Listado de productos</h1>
    </div>
    <br>
    <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center"><img id="img_obs" src="imagen/alcanciabuena.png"></h5>
        <p class="card-text"><label id="desayuno">Alcancía de puerquito</label><br>
         PRECIO: $10.000</p>
        <p class="collapse" id="collapseExample">

            Hecho de porcelana resistente al calor y frío, gran material de calidad.
    
    
  </p>
        <p class="card-text text-right">
        <a data-toggle="modal" data-target="#exampleModal3"  href="#" class="btn btn-primary">Añadir al Carrito</a>
        <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn bt-success">Más >></a>
      </p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center"><img id="img_obs" src="imagen/cine.jpg"></h5>
        <p class="card-text"><label id="desayuno">Combo para cine</label><br>
        PRECIO: $50.000</p>
        <p class="collapse" id="collapseExample2">
    Ideal para alguna cita especial u entretenimiento.
  </p>
        <p class="card-text text-right">
        <a data-toggle="modal" data-target="#exampleModal3"  href="#" class="btn btn-primary">Añadir al Carrito</a>
        <a data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample"   href="#" class="btn bt-success">Más >></a>
      </p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center"><img id="img_obs" src="imagen/cereales.jpg"></h5>
        <p class="card-text"><label id="desayuno">Cereal integral</label><br>
        PRECIO: $12.000</p>
        <p class="collapse" id="collapseExample3">
    El mejor cereal con ingredientes 100% naturales. 
  </p>
        <p class="card-text text-right">
        <a data-toggle="modal" data-target="#exampleModal3"  href="#" class="btn btn-primary">Añadir al Carrito</a>
        <a data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn bt-success">Más >></a>
      </p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card ">
      <div class="card-body">
        <h5 class="card-title text-center"><img id="img_obs" src="imagen/polar.png"></h5>
        <p class="card-text"><label id="desayuno">Peluche de oso polar</label><br>
        PRECIO: $25.000</p>
       <p class="collapse" id="collapseExample4">
    Súper suave y perfecto para adornar tu casa o tu alcoba.
  </p>
        <p class="card-text text-right">
        <a data-toggle="modal" data-target="#exampleModal3"  href="#" class="btn btn-primary">Añadir al Carrito</a>
        <a data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn bt-success">Más >></a>
      </p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center"><img id="img_obs" src="imagen/manicure.png"></h5>
        <p class="card-text"><label id="desayuno">Set de manicure</label><br>
        PRECIO: $20.000</p>
   <p class="collapse" id="collapseExample5">
    Set De Manicure, Con Cremallera De 5Pzs, Mediano, Negro, Color negro.
  </p>
        <p class="card-text text-right">
        <a data-toggle="modal" data-target="#exampleModal3"  href="#" class="btn btn-primary">Añadir al Carrito</a>
        <a data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn bt-success">Más >></a>
      </p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center"><img id="img_obs" src="imagen/tapabocas.png"></h5>
        <p class="card-text"><label id="desayuno">Tapabocas de tela para niños, pequeño</label><br>
        PRECIO: $9.000</p>
        <p class="collapse" id="collapseExample6">
    Elaborado con tela antifluido, que reduce el riesgo de exposicióna partículas suspendidas en el aire y fluidos corporales, gran cobertura facial que va desde el tabique hasta la barbilla, y con diseño ergonómico que se ajusta a la parte retroauricular demanera fácil y cómoda.
  </p>
        <p class="card-text text-right">
        <a data-toggle="modal" data-target="#exampleModal3"  href="#" class="btn btn-primary">Añadir al Carrito</a>
        <a data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn bt-success">Más >></a>
      </p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center"><img id="img_obs" src="imagen/mug.png"></h5>
        <p class="card-text"><label id="desayuno">mug sesame street 350ml, mediano</label><br>
        PRECIO: $10.000</p>
        <p class="collapse" id="collapseExample7">
    Úsala para beber tus bebidas favoritas. Capacidad de 350 ml. | Color blanco. | Con diseño de los personajes de la serie. | Pertenece a la colección de productos de la serie animada Sesame Street. | Hecha de cerámica. Úsala para beber tus bebidas favoritas.
  </p>
        <p class="card-text text-right">
        <a data-toggle="modal" data-target="#exampleModal3"  href="#" class="btn btn-primary">Añadir al Carrito</a>
        <a data-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn bt-success">Más >></a>
      </p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card ">
      <div class="card-body">
        <h5 class="card-title text-center"><img id="img_obs" src="imagen/cable.png"></h5>
        <p class="card-text"><label id="desayuno">Cable de datos, android</label><br>
        PRECIO: $15.000</p>
        <p class="collapse" id="collapseExample8">
    ¿Andas fuera de casa y te quedaste sin batería en tu celular? No te preocupes tenemos el accesorio perfecto para ti, conoce el Cable De Datos USB a USB-C TPE Flexible Negro 1 m. | Con 1 metro de largo. | Hecho de FTP flexible. | Compatible con muchos dispositivos. | Va de USB a USB-C
  </p>
        <p class="card-text text-right">
        <a data-toggle="modal" data-target="#exampleModal3"  href="#" class="btn btn-primary">Añadir al Carrito</a>
        <a data-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn bt-success">Más >></a>
      </p>
      </div>
    </div>
  </div>
   </div>
 </div>


                       
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                           
						</div>
					</div>
				</footer>
			</div>
		</div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>




</body>
</html>
