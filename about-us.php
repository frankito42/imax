<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
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
                            <li><i class="flaticon-hospital-1"></i>Alberdi 455 <br>Clorinda, Formosa, Argentina</li>
                            <li><i class="flaticon-back-in-time"></i>Lunes - Viernes 8.00 - 12.00 y 16.00 - 20.00hs <br>Guardia las 24 hs</li>
                        </ul>
                    </div>
                    <div class="top-right">
                        <ul class="social-icon-one">
                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-skype"></span></a></li>
                            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
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
                                <li><a href="inicio.php">Inicio</a></li>

                                <!-- <li class="dropdown">
                                    <span>Inicio</span>
                                    <ul>
                                        <li><a href="index.html">Inicio</a></li>
                                        <li><a href="index-2.html">Home Clanic</a></li>
                                        <li><a href="index-3.html">Home Dental Care</a></li>
                                        <li><a href="index-4.html">Home Eye Care</a></li>
                                        <li><a href="index-5.html">Home Prenatal care</a></li>
                                    </ul>
                                </li>
 -->
                              
                                        <li class="current"><a href="about-us.php">Sobre nosotros</a></li>
<!--                                         <li><a href="services.html">Services</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="pricing-table.html">Pricing Table</a></li>
                                        <li><a href="elements.html">UI Elements</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="error-page.html">Error 404</a></li>
                                        <li><a href="terms-and-condition.html">Terms and Condition</a></li> -->
                                        <li class="dropdown">
                                    <span>Diagnostico por imagenes</span>
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
                                        <li><a id="elec" href="#">Electroencefalograma</a></li>
                                    </ul>
                                </li>
                                        <li class="dropdown">
                                    <a href="login.php">Inicia Sesíon</a>
                                </li>
                                <!-- <li class="dropdown">
                                    <span>Doctors</span>
                                    <ul>
                                        <li><a href="doctors.html">Doctors</a></li>
                                        <li><a href="doctor-detail.html">Doctor Detail</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li class="dropdown">
                                    <span>Departments</span>
                                    <ul>
                                        <li><a href="departments.html">Departments</a></li>
                                        <li><a href="department-detail.html">Cardiology</a></li>
                                        <li><a href="department-detail.html">Neurology</a></li>
                                        <li><a href="department-detail.html">Urology</a></li>
                                        <li><a href="department-detail.html">Gynecological</a></li>
                                        <li><a href="department-detail.html">Pediatrical</a></li>
                                        <li><a href="department-detail.html">Laboratory</a></li>
                                        <li><a href="department-detail.html">Department Detail</a></li>
                                    </ul>
                                </li> -->

                                <!-- <li class="dropdown">
                                    <span>Blog</span>
                                    <ul>
                                        <li><a href="blog-checkboard.html">Checkerboard</a></li>
                                        <li><a href="blog-masonry.html">Masonry</a></li>
                                        <li><a href="blog-two-col.html">Two Columns</a></li>
                                        <li><a href="blog-three-col.html">Three Colums</a></li>
                                        <li><a href="blog-four-col-wide.html">Four Colums</a></li>
                                        <li class="dropdown">
                                            <span>Post Types</span>
                                            <ul>
                                                <li><a href="blog-post-image.html">Image Post</a></li>
                                                <li><a href="blog-post-gallery.html">Gallery Post</a></li>
                                                <li><a href="blog-post-link.html">Link Post</a></li>
                                                <li><a href="blog-post-audio.html">Audio Post</a></li>
                                                <li><a href="blog-post-quote.html">Quote Post</a></li>
                                                <li><a href="blog-post-video.html">Video Post</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->
                                <!-- <li class="dropdown">
                                    <span>Shop</span>
                                    <ul>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-single.html">Shop Single</a></li>
                                        <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="login.html">Login</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="contact.php">Contacto</a></li>
                           <!--  </ul>
                            <ul style="position: absolute;right: 0%;" class="navigation">

                                <li class="dropdown">
                                                <span><?php echo $_SESSION['user']['user'];?></span>
                                                <ul>
                                                    <li><a href="phpLogin/logout.php">Cerrar Sesion</a></li>
                                                </ul>
                                            </li>
                            </ul> -->
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
                    <!-- Search Btn -->
                    <div class="search-box">
<!--                         <button class="search-btn mobile-search-btn"><i class="flaticon-magnifying-glass"></i></button>
 -->                    </div>

                    <!-- Cart Btn -->
<!--                     <button class="cart-btn"><i class="icon flaticon-shopping-cart"></i><span class="count">3</span></button>
 -->
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

        <!-- Sidebar Cart  -->
        <div class="sidebar-cart">
            <span class="cart-back-drop"></span>
            <div class="shopping-cart">
                <div class="cart-header">
                    <div class="title">Shopping Cart <span>(3)</span></div>
                    <button class="close-cart"><span class="flaticon-add"></span></button>
                </div>
                <ul class="shopping-cart-items">
                    <li class="cart-item">
                        <img src="images/resource/products/product-thumb-1.jpg" alt="#" class="thumb" />
                        <span class="item-name">First Aid Kit</span>
                        <span class="item-quantity">1 x <span class="item-amount">$50.00</span></span>
                        <a href="shop-single.html" class="product-detail"></a>
                        <button class="remove">Remove</button>
                    </li>

                    <li class="cart-item">
                        <img src="images/resource/products/product-thumb-2.jpg" alt="#" class="thumb"  />
                        <span class="item-name">Vitamin Tablet</span>
                        <span class="item-quantity">1 x <span class="item-amount">$25.00</span></span>
                        <a href="shop-single.html" class="product-detail"></a>
                        <button class="remove">Remove</button>
                    </li>

                    <li class="cart-item">
                        <img src="images/resource/products/product-thumb-3.jpg" alt="#" class="thumb"  />
                        <span class="item-name">Zinc Tablet</span>
                        <span class="item-quantity">1 x <span class="item-amount">$15.00</span></span>
                        <a href="shop-single.html" class="product-detail"></a>
                        <button class="remove">Remove</button>
                    </li>
                </ul>

                <div class="cart-footer">
                    <div class="shopping-cart-total"><strong>Subtotal:</strong> $90.00</div>
                    <a href="shopping-cart.html" class="theme-btn btn-style-three"><span class="btn-title">View Cart</span></a>
                    <a href="checkout.html" class="theme-btn btn-style-one"><span class="btn-title">Checkout</span></a>
                </div>
            </div> <!-- End shopping-cart -->
        </div>
        <!-- End Sidebar Cart  -->
    </header>
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image: url(images/background/8.jpg);">
        <div class="auto-container">
            <div class="title-outer">            
                <h1>Sobre nosotros</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">inicio</a></li>
                    <li>sobre sonotros</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

     <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Gracias a nuestra política de constante innovacion  continuaremos incorporando progresivamente nuevos estudios.</h2>
                            <span class="divider"></span>
                            <p>Imax es un Centro de Estudios y Servicios Medicos, que abre sus puertas en Clorinda luego de muchos años de inversion y desarrollo, con el objetivo de brindar a los habitantes de toda  la zona, la posibilidad de acceder a servicios de diagnostico de alta calidad, sin tener que trasladarse hasta grandes urbes como ha sido hasta ahora.</p>
                        </div>
                        <div class="link-box">
                            <figure class="signature"><img src="images/resource/imax5.jpg" alt=""></figure>
<!--                             <a href="#" class="theme-btn btn-style-one"><span class="btn-title">More About</span></a>
 -->                        </div>
                    </div>
                </div>

                <!-- Images Column -->
                <div class="images-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!--<div class="video-link">
                            <a href="https://www.youtube.com/watch?v=4UvS3k8D4rs" class="play-btn lightbox-image" data-fancybox="images"><span class="flaticon-play-button-1"></span></a>
                        </div> -->
                        <figure class="image-1"><img src="images/resource/imax1.jpg" alt=""></figure>
                        <figure class="image-2"><img src="images/resource/imax2.jpg" alt=""></figure>
                        <figure class="image-3">
                            <span class="hex"></span>
                            <img src="images/resource/imax3.jpg" style="width: 225px;height: 291px;" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->
    
    <!-- Fun Fact Section Two-->
    <section class="fun-fact-section-two">
        <div class="auto-container">
            <div class="row">
                <!--Column-->
                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="count-box">
                        <div class="icon-box"><span class="icon flaticon-user-experience"></span></div>
                        <h4 class="counter-title">Years of Experience</h4>
                        <span class="count-text" data-speed="3000" data-stop="25">0</span>
                    </div>
                </div>

                <!--Column-->
                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="count-box">
                        <div class="icon-box"><span class="icon flaticon-team"></span></div>
                        <h4 class="counter-title">Medical Spesialities</h4>
                        <span class="count-text" data-speed="3000" data-stop="470">0</span>
                    </div>
                </div>

                <!--Column-->
                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="count-box">
                        <div class="icon-box"><span class="icon flaticon-hospital"></span></div>
                        <h4 class="counter-title">Medical Spesialities</h4>
                        <span class="count-text" data-speed="3000" data-stop="689">0</span>
                    </div>
                </div>

                <!--Column-->
                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="count-box">
                        <div class="icon-box"><span class="icon flaticon-add-friend"></span></div>
                        <h4 class="counter-title">Happy Patients</h4>
                        <span class="count-text" data-speed="3000" data-stop="9036">0</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fun Fact Section Two -->

    <!-- Appointment Section Three -->
    <section class="appointment-section-three" style="background-image: url(images/background/2.jpg);">
        <div class="auto-container">
            <div class="row">

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <span class="title">¿Necesita un médico para un chequeo?</span>
                        <h3>Solo haz una cita <br> ¡y estas listo!</h3>
                        <div class="text">Telefono: <strong>(3718) 54-22-91</strong></div>

                        <div class="timetable-info">
                            <h3>Horario de apertura</h3>
                            <ul class="timing-list">
                                <li>Lunes - Viernes <span>08:00 - 20:00</span></li>
                                <li>Viernes - Domingo<span>08:00 - 20:00</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="appointment-form default-form">
                            <!--Comment Form-->
                            <form action="#" method="post" id="email-form">
                                <div class="form-group">
                                    <div class="response"></div>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="username" placeholder="Your Name">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Email *">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Your Phone">
                                </div>
                                
                                <div class="form-group">
                                    <textarea name="contact_message" placeholder="Tell us about Pasent"></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <button class="theme-btn btn-style-one" type="button" name="submit-form"><span class="btn-title">Submit Query</span></button>
                                </div>
                            </form>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!--End Appointment Section Three -->

   

    
    
    
    <!-- End Testimonial Section -->

    <!-- Clients Section -->

    <!--End Clients Section -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!--Widgets Section-->
        <div class="widgets-section" style="background-image: url(images/background/7.jpg);">
            <div class="auto-container">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <div class="logo">
                                        <a href="index.html"><img src="images/logo-2.png" alt="" /></a>
                                    </div>
                                    <div class="text">
                                        <p>Visítenos y disfrute de tener al fin todos los estudios medicos que Ud. necesita, a un paso de su casa. </p>                             
                                    </div>
                                    <ul class="social-icon-three">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Contacto</h2>
                                     <!--Footer Column-->
                                    <div class="widget-content">
                                        <ul class="contact-list">
                                            <li>
                                                <span class="icon flaticon-placeholder"></span>
                                                <div class="text">Alberdi 455 <Br>Clorinda - Formosa - Argentina</div>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-call-1"></span>
                                                <a href="tel:+543718542291"><strong>+543718542291</strong></a>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-email"></span>
                                                <div class="text">¿Tienes alguna pregunta?<br>
                                                <a href="mailto:imax@gmail.com"><strong>imax@gmail.com</strong></a></div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <!-- Scroll To Top -->
            <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
            
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="footer-nav">
                        <ul class="clearfix">
                           <li><a href="#">Política y privacidad</a></li> 
                           <li><a href="#">Contacto</a></li> 
                           <li><a href="#">Especialidades Médicas</a></li>  
                        </ul>
                    </div>
                    
                    <div class="copyright-text">
                        <p>Copyright © 2021 <a href="#">Imax </a>All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div><!-- End Page Wrapper -->


<script src="js/jquery.js"></script>  
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.modal.min.js"></script>
<script src="js/mmenu.polyfills.js"></script>
<script src="js/mmenu.js"></script>
<script src="js/appear.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>


