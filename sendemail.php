<?php

// Define some constants
define( "RECIPIENT_NAME", "Rivher Tires" );
$addresses=array("isc.rgm@gmail.com","ventas@rivhertires.com.mx","hhernandez@rivhertires.com.mx");
//define( "RECIPIENT_EMAIL",  $addresses );

// Read the form values
$success = false;
$senderName = isset( $_POST['username'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['username'] ) : "";
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$phone = isset( $_POST['phone'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['phone'] ) : "";
$subject = isset( $_POST['subject'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['subject'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

// If all values exist, send the email
if ( $senderName && $senderEmail && $phone && $subject && $message) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "Mensaje de página web: " . $senderName . " <" . $senderEmail . ">";
  $msgBody = " TELÉFONO: " . $phone . " ASUNTO: " . $subject . " MENSAJE: " . $message . "";
  $success = mail( $to = implode(", ", $addresses), $headers, $msgBody );

  //Set Location After Successsfull Submission

  $mensaje ="Mensaje enviado, pronto nos comunicaremos contigo.";
  header( "refresh:5;url=contacto.php" );
}

else{
	//Set Location After Unsuccesssfull Submission
  $mensaje ="Mensaje fallido, intente nuevamente.";
  header( "refresh:5;url=contacto.php" );
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>RIVHER TIRES</title>

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header header-style-four">

        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                      <div class="top-left">
                          <ul class="clearfix">
                            <!--
                              <li></li>
                              <li><a href="appointment.php"> <i class="fa fa-long-arrow-alt-right"></i></a></li>
                            -->
                          </ul>
                      </div>
                      <div class="top-right clearfix">
                          <p><i class="fa fa-phone-volume"></i> Llámanos ahora: 5555817981 y 5555824171</p>
                      </div>
                  </div>
              </div>
          </div>
        <!-- End Header Top -->

        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">
               <div class="main-box clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.php"><img src="images/logo-3.png" alt=""></a></div>
                    </div>
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                              <ul class="navigation clearfix">
                                <li><a href="index.php">Inicio</a></li>
                                <li><a href="about.php">RIVHER</a></li>
                                <li class="dropdown"><a href="#">Servicios</a>
                                      <ul>
                                          <li><a href="service-detail.php">Alineación</a></li>
                                          <li><a href="service-detail-2.php">Balanceo</a></li>
                                          <li><a href="service-detail-3.php">Suspensión</a></li>
                                          <li><a href="service-detail-4.php">Revisión de Frenos</a></li>
                                          <li><a href="service-detail-5.php">Líquido de Frenos</a></li>
                                          <li><a href="service-detail-6.php">Limpieza y Ajuste de Frenos</a></li>
                                          <li><a href="service-detail-7.php">Mecánica General</a></li>
                                          <li><a href="service-detail-8.php">Escaneo</a></li>
                                          <li><a href="service-detail-9.php">Lavado de Motor</a></li>
                                          <li><a href="service-detail-10.php">Venta de Llantas</a></li>
                                          <li><a href="service-detail-11.php">Nitrógeno</a></li>
                                      </ul>
                                  </li>
                                  <li><a href="index.php#sucursales">Sucursales</a></li>
                                  <li><a href="contacto.php">Contacto</a></li>
                              </ul>
                            </div>

                        </nav>
                        <!-- Main Menu End-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Lower -->

        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
                <!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.php" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                          <ul class="navigation clearfix">
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="about.php">RIVHER</a></li>
                            <li class="dropdown"><a href="#">Servicios</a>
                                  <ul>
                                      <li><a href="service-detail.php">Alineación</a></li>
                                      <li><a href="service-detail-2.php">Balanceo</a></li>
                                      <li><a href="service-detail-3.php">Suspensión</a></li>
                                      <li><a href="service-detail-4.php">Revisión de Frenos</a></li>
                                      <li><a href="service-detail-5.php">Líquido de Frenos</a></li>
                                      <li><a href="service-detail-6.php">Limpieza y Ajuste de Frenos</a></li>
                                      <li><a href="service-detail-7.php">Mecánica General</a></li>
                                      <li><a href="service-detail-8.php">Escaneo</a></li>
                                      <li><a href="service-detail-9.php">Lavado de Motor</a></li>
                                      <li><a href="service-detail-10.php">Venta de Llantas</a></li>
                                      <li><a href="service-detail-11.php">Nitrógeno</a></li>
                                  </ul>
                              </li>
                              <li><a href="index.php#sucursales">Sucursales</a></li>
                              <li class="current"><a href="contacto.php">Contacto</a></li>
                          </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->
    </header>
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/8.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Contacto</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Inicio</a></li>
                    <li>Contacto</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Contáctanos</h2>
                <div class="separator"><span class="flaticon-settings-2"></span></div>
                <h1><?php echo $mensaje?></h1>
            </div>


            </div>
            <!--
            <div class="contact-info">
                <div class="row clearfix">
                    <div class="image-column col-md-7 col-sm-12 col-xs-12">
                        <figure><img src="images/resource/car-image-2.jpg" alt="" style="padding-top:100px;"></figure>
                    </div>

                    <div class="info-column col-md-5 col-sm-12 col-xs-12">
                        <h3>Información de Contacto</h3>
                        <ul>
                            <li>
                                <span class="icon flaticon-placeholder"></span>
                                <p><strong>Sucursal Matriz:</strong><br>
                                  Eje 3 Oriente 68 Bis, Local C, Iztapalapa, San Antonio Culhuacan, 09800 CDMX.
                                </p>
                                <p><strong>Sucursal Corporativo:</strong><br>
                                  Eje 3 Oriente 70 Bis, Iztapalapa, San Antonio Culhuacan, 09800 CDMX.
                                </p>
                            </li>

                            <li>
                                <span class="icon flaticon-phone"></span>
                                <p><strong>Teléfonos:</strong> 551734 1551</p>
                                <p><strong>WhatsApp:</strong> 5555805 56345</p>
                                <p><span>Email Matriz:</span><a href="#"> contacto@rivhertires.com.mx</a></p>
                                <p><span>Email Corporativo:</span><a href="#"> ventas7@rivhertires.com.mx</a></p>
                            </li>

                            <li>
                                <span class="icon flaticon-stopwatch"></span>
                                <p><strong>Horario de Servicio:</strong><br>  L-V 9:00 a 18:30 H. Sab. 9:00 a 16:00 H.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          -->
        </div>
    </section>

    <!--
    <section class="contact-map-section" style="padding:0px;">
      <div class="map-outer">
        <iframe src="https://www.https://www.google.com.mx/maps/place/19%C2%B020'36.3%22N+99%C2%B006'45.1%22W/@19.3433655,-99.1124738,19z/data=!4m4!3m3!8m2!3d19.343415!4d-99.112524?hl=es&entry=ttu&g_ep=EgoyMDI1MDYxNy4wIKXMDSoASAFQAw%3D%3D" width="" height="450" frameborder="0" style="border:0;width:100%;" allowfullscreen></iframe>
      </div>
    </div>
  -->

    <!-- Main Footer -->
    <footer class="main-footer" style="background-image: url(images/background/4.jpg);">

        <!--Footer Bottom-->
         <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright-text">
                    <p>Copyrights © 2018 All Rights Reserved. RIVHER TIRES</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
<script src="js/color-settings.js"></script>
</body>
</html>
