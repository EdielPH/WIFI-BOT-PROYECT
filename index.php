
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
                    <a href="index.html" class="navbar-brand">WiFi-Bots Proyect</a>
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
     <section id="home" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="home-info">
                              <h3>MECH ROBOTIX</h3>
                              <h1>Desarrolla habilidades tecnológicas!</h1>
                              
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- FEATURE -->
     <section id="feature" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h1>Características</h1>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <ul class="nav nav-tabs" role="tablist">
                              <li class="active"><a href="#tab01" aria-controls="tab01" role="tab" data-toggle="tab">Descripción</a></li>

                              <li><a href="#tab02" aria-controls="tab02" role="tab" data-toggle="tab">Especificaciónes</a></li>

                              <li><a href="#tab03" aria-controls="tab03" role="tab" data-toggle="tab">Soporte</a></li>
                         </ul>

                         <div class="tab-content">
                              <div class="tab-pane active" id="tab01" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Arduino WeMos D1 WiFi UNO ESP8266 IOT IDE Compatible Board</h2>
                                        <p>Placa de desarrollo WiFi ESP8266 WEMOS D1. WEMOS D1 es una placa de desarrollo WIFI basada en ESP8266 12E. El funcionamiento es similar al de NODEMCU, excepto que el hardware está construido de forma similar a Arduino UNO. La placa D1 se puede configurar para trabajar en el entorno Arduino utilizando BOARDS MANAGER.</p>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h2>PROGRESS</h2>
                                        <p>MORE INFORMATION ABOUT!</p>
                                   </div>
                              </div>


                              <div class="tab-pane" id="tab02" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h4>Microcontroller: ESP-8266EX</h4>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h4>Operating Voltage: 3.3V</h4>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h4>Digital I/O Pins: 11</h4>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h4>Analog Input Pins: 1</h4>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h4>Clock Speed: 80MHz/160MHz</h4>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h4>Flash: 4M bytes</h4>
                                   </div>
                              </div>

                              <div class="tab-pane" id="tab03" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Soporte rapido</h2>
                                        <p>Hay una variante de esta misma placa con muchos menos pines pero las mismas posibilidades y de mucho menor tamaño ideal para pequeños proyectos que requieran poco tamaño y WIFI, que se llama WeMos D1 mini.</p>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h2>A tomar en cuenta</h2>
                                        <p>Aunque seguro que habrá cosas que fallarán, son unas placas de lo más curiosas y recomendables si queréis pelearos con los WIFI baratos y los ESP8266, os recomiendo que empecéis por aquí y os olvidéis inicialmente de ESP01 y demás. Ya tendréis tiempo de usar chips cuando estáis diseñando una placa integrada.</p>
                                   </div>
                              </div>
                         </div>

                    </div>

                    <div class="col-md-6 col-sm-6">
                         <div class="feature-image">
                              <img src="images/D1.jpg" class="img-responsive" alt="Thin Laptop">                             
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="section-title">
                              <h1> ESP8266 </h1>
                         </div>
                    </div>
                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="image">
                              <img src="images/progress.jpg" class="img-responsive" alt="Coming Soon">                          
                         </div>
                    </div>
          </div>
     </section>
     


     <!-- TESTIMONIAL -->
     <section id="testimonial" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="testimonial-image"></div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="testimonial-info">
                              
                              <!--<div class="section-title">
                                   <h1>MECH ROBOTIX</h1>
                              </div>-->

                              <div class="owl-carousel owl-theme">
                                   <div class="item">
                                        <h1>
                                             Talleres de robótica
                                        </h1>
                                        <h3>
                                             Aprenderás electrónica, programación, construirás tu propio robot que te llevas a tu casa.
                                        </h3>
                                        <div class="testimonial-item">
                                             <img src="images/robot2.png" class="img-responsive" alt="Robot">
                                             <h4></h4>
                                        </div>
                                   </div>

                                   <div class="item">
                                        <h1>
                                             Nuestros Alumnos
                                        </h1>
                                        <h3>
                                             Contamos con alumnos ganadores a nivel Nacional y representantes de México en CONCURSOS INTERNACIONALES.
                                        </h3>
                                        <div class="testimonial-item">
                                             <img src="images/estudiar2.png" class="img-responsive" alt="Estudiantes">
                                             <h4></h4>
                                        </div>
                                   </div>

                                   <div class="item">
                                        <h1>
                                             Horarios Flexibles
                                        </h1>
                                        <h3>Contamos con diferentes horarios de clases y talleres durante toda la semana para que todos puedan aprender.</h3>
                                        <div class="testimonial-item">
                                             <img src="images/calendario2.png" class="img-responsive" alt="Horarios">
                                             <h4></h4>
                                        </div>
                                   </div>
                              </div>

                         </div>
                    </div>
                    
               </div>
          </div>
     </section>

  


     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-1 col-md-10 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h1>Mech Robotix Academia de Robótica y Tecnologías</h1>
                              </div>
                              <div>
                                   <button type="button" class="btn btn-success">Success</button>
                              </div>

                          
                         </form>
                    </div>

               </div>
          </div>
     </section>       
     <div>
          <hr color="green" size=1 width="1300">
     </div>

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
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
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