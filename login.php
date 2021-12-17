<?php
session_start();
if(isset($_SESSION['user'])){
    header('location: inicio.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Imax - Centro de Servicios Médicos</title>

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

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
    <header class="main-header header-style-two">

        <!-- Header top -->
        <div class="header-top-two">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="top-left">
                        <ul class="contact-list clearfix">
                            <li><i class="flaticon-hospital-1"></i>Alberdi 455 <br> Clorinda, Formosa, Argentina </li>
                            <li><i class="flaticon-back-in-time"></i>Lunes - Viernes 8.00 - 12.00 y 16.00 - 20.00hs <br>Guardia las 24 hs</li>
                        </ul>
                    </div>
                    <div class="top-right">
                        <ul class="social-icon-one">
                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        </ul>
                    
                        <div class="btn-box">
                            <a href="appointment.html" id="appointment-btn" class="theme-btn btn-style-three"><span class="btn-title">Turnos</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->
 
           
        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">    
                <!-- Main box -->
                <div class="main-box">
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer">
                        <nav class="nav main-menu">
                            <ul class="navigation" id="navbar">
                                <li><a href="index.html">Inicio</a></li>

                             
                                        <li><a href="about-us.php">Sobre Nosotros</a></li>
                                    <!--     <li><a href="#">Términos y condiciones</a></li> -->
                                   
                                </li>

                                <li class="dropdown">
                                    <span>Diacnostico por imagenes</span>
                                    <ul>
                                        <li><a href="#">Tomografía Axial Computarizada</a></li>
                                        <li><a href="#">Densitometría ósea</a></li>
                                        <li><a href="#">Mamografía</a></li>
                                        <li><a href="#">Ortopantomografía (panorámicas dentales)</a></li>
                                        <li><a href="#">Ecografía</a></li>
                                        <li><a href="#">Ecocardiografía</a></li>
                                        <li><a href="#">Holter ECG (24 hs)</a></li>
                                        <li><a href="#">Ergometría</a></li>
                                        <li><a href="#">Espirometría</a></li>
                                        <li><a href="#">Test de caminata</a></li>
                                        <li><a href="#">Electroencefalograma</a></li>
                                    </ul>
                                </li>

                                <li class="current">
                                    <a  href="login.php">Inicia Sesíon</a>
                                </li>
                                <li><a href="contact.php">Contacto</a></li>
                            </ul>
                        </nav>
                        <!-- Main Menu End-->

                    </div>
                </div>
            </div>
        </div>

 
 
        
        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">            
                <div class="main-box">
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
                    </div>

                    <!--Keep This Empty / Menu will come through Javascript-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Header -->
        <div class="mobile-header">
            <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">

                <div class="outer-box">

                    <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="fa fa-bars"></span></a>
                </div>
            </div>
        </div>

        <!-- Mobile Nav -->
        <div id="nav-mobile"></div>

        <!-- Header Search -->
        <div class="search-popup">
            <span class="search-back-drop"></span>
            <button class="close-search"><span class="fa fa-times"></span></button>
            
            <div class="search-inner">
                <form method="post" action="blog-showcase.html">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="Search..." required="">
                        <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Header Search -->


    </header>
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image: url(images/background/8.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1>Iniciar Sesión</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Inicio</a></li>
                    <li>Iniciar Sesión</li>
                </ul> 
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Login Section-->
    <section class="login-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <!-- Login Form -->
                    <div class="login-form">
                        <h2>Iniciar Sesión</h2>
                        <!--Login Form-->
                        <form id="formLogin" method="POST">
                            <div class="form-group">
                                <label>Nombre de usuario o Correo electrónico</label>
                                <input id="email" type="text" name="email" placeholder="Nombre de usuario o Correo electrónico " required>
                            </div>
                            
                            <div class="form-group">
                                <label>Ingresa tu contraseña</label>
                                <input id="pass" type="password" name="password" placeholder="Contraseña" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="checkbox" name="shipping-option" id="account-option-1">&nbsp; <label for="account-option-1">Recuérdame</label>
                            </div>

                            <div class="form-group">
                                <button class="theme-btn btn-style-one" type="submit" id="btnSubmitLogin" name="submit-form"><span class="btn-title">Iniciar Sesión</span></button>
                            </div>

                            <div class="form-group pass">
                                <a href="#" class="psw">¿Olvidaste tu contraseña?</a>
                            </div>
                        </form>
                    </div>
                    <!--End Login Form -->
                </div>
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    
                    <!-- Register Form -->
                    <div class="login-form register-form">
                        <h2>Registrarse</h2>
                        <!--Login Form-->
                        <form id="fromRegister" method="post">
                            <div class="form-group">
                                <label>Nombre Completo</label>
                                <input id="nombreCompleto" type="text" name="" placeholder="Nombre Completo" required>
                            </div>
                            <div class="form-group">
                                <div class="row">

                                    <div class="col">
                                        <label>Usuario</label>
                                        <input id="usuarioR" type="text" name="username" placeholder="Usuario" required>
                                    </div>
                                    <div class="col">
                                        <label>Contraseña</label>
                                        <input id="passR" type="password" name="username" placeholder="Contraseña" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Correo Electrónico</label>
                                <input id="emailR" type="email" name="email" placeholder="tucorreo@mail.com">
                            </div>
                            
                            <div class="form-group">
                                <div class="row">

                                    <div class="col">
                                        <label>Domicilio</label>
                                        <input id="domicilio" type="text" name="" placeholder="Domicilio">
                                    </div>
                                    <div class="col">
                                        <label>DNI</label>
                                        <input id="dni" type="text" name="username" placeholder="DNI" autocomplete="off" required>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="form-group text-right">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Registrarme</span></button>
                            </div>
                        </form>      
                    </div>
                    <!--End Register Form -->
                </div>
                 
                
               
            </div>
        </div>
    </section>
    <!--End Login Section-->

    
    <!-- Main Footer -->
    <footer class="main-footer">

        
        <!--Footer Bottom-->
        <div class="footer-bottom">
            <!-- Scroll To Top -->
            <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
            
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="footer-nav">
                        <ul class="clearfix">
                           <li><a href="#">Politica y privacidad</a></li> 
                           <li><a href="#">Contacto</a></li> 
                           <li><a href="#">Servicios</a></li>  
                        </ul>
                    </div>
                    
                    <div class="copyright-text">
                        <p>Copyright © 2021 <a href="#">Imax </a>All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Main Footer -->

</div><!-- End Page Wrapper -->


<script src="js/jquery.js"></script>  
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.modal.min.js"></script>
<script src="js/mmenu.polyfills.js"></script>
<script src="js/mmenu.js"></script>
<script src="js/appear.js"></script>
<script src="js/jquery.bootstrap-touchspin.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<script src="jsLogin/js.js"></script>
</body>
</html>


