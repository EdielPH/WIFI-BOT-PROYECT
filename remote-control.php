
<?php
//$mysqli = new mysqli("localhost", "usuario", "contraseña", "basedatos");
//if ($mysqli->connect_errno) {
    //echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
//   }
//echo $mysqli->host_info . "\n";

//$mysqli = new mysqli("177.236.41.88", "usuario", "contraseña", "basedatos", 3306);
//if ($mysqli->connect_errno) {
    //echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
//}

//echo $mysqli->host_info . "\n";
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>WIFIBOTPROYECT</title>
	<link rel="icon" type="image/png" href="images/chip.png"/>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.php" class="navbar-brand">WiFi-Bots Proyect</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                         <li><a href="#home" class="smoothScroll">Inicio</a></li>
                         <li><a href="#feature" class="smoothScroll">Características</a></li>
                         <li><a href="#about" class="smoothScroll">Acerca de</a></li>
                         <li><a href="footer" class="smoothScroll">Comienza</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#"><span>MESHROBOTIX@GMAIL.COM</span></a></li>
                    </ul>
               </div>

          </div>
     </section>

    

     <!-- FEATURE -->

     
     <section id="home2" data-stellar-background-ratio="0.5">
          
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="home2-info">
                              <h3>MECH ROBOTIX</h3>
                              <h1>Controla tu Robot!
                              </h1>
                              
                         </div>
                    </div>

               </div>
          </div>
     </section>
    

    <section class="control">
     <div class="container">
          <div class="remote">

            <div class="col-sm">
               <div><img src="images/cuadro.png"></div>
               <div><img src="images/izquierda.png"></div>
               <div><img src="images/cuadro.png"></div>
            </div>

            <div class="col-sm">
              
               <div><img src="images/arriba.png"></div>
               
               <div><img src="images/centro.png"></div>
               
               <div><img src="images/abajo.png"></div>
               
            </div>

            <div class="col-sm">
               <div><img src="images/cuadro.png"></div>
               <div><img src="images/derecha.png"></div>
               <div><img src="images/cuadro.png"></div>
            </div>

          </div>
        </div>
     
    </section>

    

     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          
          <div class="container">
               <div class="row">
                   
                    
                    <div class="copyright-text col-md-12 col-sm-12">
                         <div class="col-md-6 col-sm-6">
                              <p>Copyright &copy; Todos los Derechos Están Reservados.</p>
                         </div>

                         <div class="col-md-6 col-sm-6">
                              <ul class="social-icon">
                                   <li><a href="https://www.facebook.com/Mech-Robotix-Academy-218692445372646/" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="https://www.facebook.com/profile.php?id=100022404935671" class="fa fa-facebook"></a></li>
                                   <li><a href="https://www.youtube.com/channel/UCyOQ4H6I5U16Nt7k_I8dwMA" class="fa fa-youtube-play"></a></li>
                              </ul>
                         </div>
                    </div>

               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>