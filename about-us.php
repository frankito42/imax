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
                            <li><i class="flaticon-back-in-time"></i>Lunes - Sabados 8.00 - 18.00. <br> Domingos CERRADO</li>
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
                                <li class="current dropdown">
                                    <span>PAGINAS</span>
                                    <ul>
                                        <li class="current"><a href="about-us.php">Sobre nosotros</a></li>
<!--                                         <li><a href="services.html">Services</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="pricing-table.html">Pricing Table</a></li>
                                        <li><a href="elements.html">UI Elements</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="error-page.html">Error 404</a></li>
                                        <li><a href="terms-and-condition.html">Terms and Condition</a></li> -->
                                    </ul>
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
                        <button class="search-btn mobile-search-btn"><i class="flaticon-magnifying-glass"></i></button>
                    </div>

                    <!-- Cart Btn -->
                    <button class="cart-btn"><i class="icon flaticon-shopping-cart"></i><span class="count">3</span></button>

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
                            <span class="sub-title">Nuestros medicos</span>
                            <h2>Estamos estableciendo estándares en investigación y, además, atención clínica..</h2>
                            <span class="divider"></span>
                            <p>Brindamos los servicios médicos más completos, por lo que cada persona podría tener la oportunidad de recibir ayuda médica de calidad..</p>
                            <p>Estamos entre los más calificados con más de 30 años de formación y experiencia en calidad.</p>
                        </div>
                        <div class="link-box">
                            <figure class="signature"><img src="images/resource/signature.png" alt=""></figure>
                            <a href="#" class="theme-btn btn-style-one"><span class="btn-title">More About</span></a>
                        </div>
                    </div>
                </div>

                <!-- Images Column -->
                <div class="images-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="video-link">
                            <a href="https://www.youtube.com/watch?v=4UvS3k8D4rs" class="play-btn lightbox-image" data-fancybox="images"><span class="flaticon-play-button-1"></span></a>
                        </div>
                        <figure class="image-1"><img src="images/resource/image-1.png" alt=""></figure>
                        <figure class="image-2"><img src="images/resource/image-2.png" alt=""></figure>
                        <figure class="image-3">
                            <span class="hex"></span>
                            <img src="images/resource/image-3.png" alt="">
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
                        <div class="text">Get Your Quote or Call: <strong>(0080) 123-453-789</strong></div>

                        <div class="timetable-info">
                            <h3>Horario de apertura</h3>
                            <ul class="timing-list">
                                <li>Lunes - Jueves <span>08:00 - 20:00</span></li>
                                <li>Viernes <span>09:00 - 19:00</span></li>
                                <li>Sabado - Jueves <span>09:00 - 18:00</span></li>
                                <li>Domingo - Jueves <span>09:00 - 18:00</span></li>
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

    <!-- Team Section Two -->
    <section class="team-section-two alternate">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">CONOZCA A NUESTRO EQUIPO EXPERIMENTADO</span>
                <h2>Nuestro equipo de médicos dedicados.</h2>
                <span class="divider"></span>
            </div>

            <div class="row">
                <!-- Team Block -->
                <div class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                           <figure class="image"><a href="doctor-detail.html"><img src="images/resource/m.jpg" alt=""></a></figure>
                            <ul class="social-links">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h5 class="name"><a href="doctor-detail.html">Emily Haden</a></h5>
                            <span class="designation">Dental Surgeon</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="image-box">
                           <figure class="image"><a href="doctor-detail.html"><img src="images/resource/derek.jpg" alt=""></a></figure>
                            <ul class="social-links">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h5 class="name"><a href="doctor-detail.html">Derek Hill</a></h5>
                            <span class="designation">Neurology Surgeon</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                           <figure class="image"><a href="doctor-detail.html"><img src="images/resource/drh.jpg" alt=""></a></figure>
                            <ul class="social-links">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h5 class="name"><a href="doctor-detail.html">Audrey Button</a></h5>
                            <span class="designation">Dental Surgeon</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sec-bottom-text">Don’t hesitate, contact us for better help and services. <a href="#">Explore all Dr. Team</a></div>
        </div>
    </section>
    <!--End Team Section -->

    <!-- Skill Section -->
    <section class="skill-section">
        <div class="outer-container clearfix">
            <div class="skill-column">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="sub-title">BEST OF THE BEST</span>
                        <h2>High End Equipments.</h2>
                        <span class="divider"></span>
                        <div class="text">Surgery of the respiratory tract is generally performed by specialists in cardiothoracic surgery (or thoracic surgery) though minor procedures may be performed by pulmonologists. Pulmonology is closely.</div>
                    </div>

                    <!--Skills-->
                    <div class="skills">
                        <!--Skill Item-->
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">CARDIO-ONCOLOGY</div>
                                <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="3000" data-stop="55">0</span>%</div></div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="55"></div></div>
                            </div>
                        </div>

                        <!--Skill Item-->
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">HEART ASSESSMENT</div>
                                <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="3000" data-stop="72">0</span>%</div></div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="72"></div></div>
                            </div>
                        </div>

                        <!--Skill Item-->
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Dental SURGERY</div>
                                <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="3000" data-stop="88">0</span>%</div></div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="88"></div></div>
                            </div>
                        </div>

                        <!--Skill Item-->
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">HEART ASSESSMENT</div>
                                <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="3000" data-stop="78">0</span>%</div></div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="78"></div></div>
                            </div>
                        </div>
                    </div>

                    <div class="btn-box"><a href="#" class="theme-btn btn-style-three"><span class="btn-title">Learn More</span></a></div>
                </div>
            </div>

            <div class="image-column" style="background-image: url(images/resource/image-7.jpg);">
                <div class="image-box">
                    <figure class="image"><img src="images/resource/image-7.jpg" alt=""></figure>
                </div>
            </div>
        </div>
    </section>
    <!--End Skill Section -->
    
    <!-- Testimonial Section -->
    <section class="testimonial-section-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title text-center">
                <span class="title">HAPPY Patient</span>
                <h2>What Says Our Patients</h2>
                <span class="divider"></span>
            </div>
            
            <div class="testimonial-outer">
                <!-- Product Thumbs Carousel -->
                <div class="client-thumb-outer">
                    <div class="client-thumbs-carousel owl-carousel owl-theme">
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/testi-thumb-1.jpg" alt=""></figure>
                            <div class="author-info">
                                <span class="icon fa fa-quote-left"></span>
                                <div class="author-name">Lara Croft</div>
                                <div class="designation">Restaurant Owner</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/testi-thumb-2.jpg" alt=""></figure>
                            <div class="author-info">
                                <span class="icon fa fa-quote-left"></span>
                                <div class="author-name">Lara Croft</div>
                                <div class="designation">Restaurant Owner</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/testi-thumb-3.jpg" alt=""></figure>
                            <div class="author-info">
                                <span class="icon fa fa-quote-left"></span>
                                <div class="author-name">Lara Croft</div>
                                <div class="designation">Restaurant Owner</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/testi-thumb-2.jpg" alt=""></figure>
                            <div class="author-info">
                                <span class="icon fa fa-quote-left"></span>
                                <div class="author-name">Lara Croft</div>
                                <div class="designation">Restaurant Owner</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/testi-thumb-3.jpg" alt=""></figure>
                            <div class="author-info">
                                <span class="icon fa fa-quote-left"></span>
                                <div class="author-name">Lara Croft</div>
                                <div class="designation">Restaurant Owner</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Client Testimonial Carousel -->
                <div class="client-testimonial-carousel default-dots owl-carousel owl-theme">
                
                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>
                    
                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>
                    
                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>
                    
                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call To Action -->
            <div class="call-to-action">
                <div class="inner-container">
                    <div class="content-column">
                        <h4>We Employ The Latest Technology</h4>
                        <h2>We Ensure Safe Dental Sergery </h2>
                        <a href="#" class="theme-btn btn-style-three"><span class="btn-title">Take Appointment</span></a>
                    </div>

                    <div class="video-column">
                        <div class="btn-box">
                            <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now" data-fancybox="gallery" data-caption=""><i class="icon flaticon-play-button" aria-hidden="true"></i><span class="ripple"></span></a>
                            <span class="title">Watch now</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Clients Section -->
    <section class="clients-section">
        <div class="auto-container">

            <!-- Sponsors Outer -->
            <div class="sponsors-outer">
                <!--clients carousel-->
                <ul class="clients-carousel owl-carousel owl-theme">
                    <li class="slide-item"> <a href="#"><img src="images/clients/1.png" alt=""></a> </li>
                    <li class="slide-item"> <a href="#"><img src="images/clients/2.png" alt=""></a> </li>
                    <li class="slide-item"> <a href="#"><img src="images/clients/3.png" alt=""></a> </li>
                    <li class="slide-item"> <a href="#"><img src="images/clients/4.png" alt=""></a> </li>
                    <li class="slide-item"> <a href="#"><img src="images/clients/5.png" alt=""></a> </li>
                </ul>
            </div>
        </div>
    </section>
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
                                        <p>Our Clinic has grown to provide a world class facility for the clinic advanced restorative. </p>
                                        <p>We are among the most qualified implant providers in the AUS with over 30 years of quality training and experience.</p>
                                    </div>
                                    <ul class="social-icon-three">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget">
                                    <h2 class="widget-title">Departments</h2>
                                    <ul class="user-links">
                                        <li><a href="#">Surgery & Radiology</a></li>
                                        <li><a href="#">Family Medicine</a></li>
                                        <li><a href="#">Women’s Health</a></li>
                                        <li><a href="#">Optician</a></li>
                                        <li><a href="#">Pediatrics</a></li>
                                        <li><a href="#">Dermatology</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget recent-posts">
                                    <h2 class="widget-title">Latest News</h2>
                                     <!--Footer Column-->
                                    <div class="widget-content">
                                        <div class="post">
                                            <div class="thumb"><a href="blog-post-image.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
                                            <h4><a href="blog-post-image.html">Integrative Medicine <Br>& Cancer Treatment.</a></h4>
                                            <span class="date">July 11, 2020</span>
                                        </div>

                                        <div class="post">
                                            <div class="thumb"><a href="blog-post-image.html"><img src="images/resource/post-thumb-2.jpg" alt=""></a></div>
                                            <h4><a href="blog-post-image.html">Achieving Better <br>Health Care Time.</a></h4>
                                            <span class="date">August 1, 2020</span>
                                        </div>

                                        <div class="post">
                                            <div class="thumb"><a href="blog-post-image.html"><img src="images/resource/post-thumb-3.jpg" alt=""></a></div>
                                            <h4><a href="blog-post-image.html">Great Health Care <br>For Patients.</a></h4>
                                            <span class="date">August 1, 2020</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Contact Us</h2>
                                     <!--Footer Column-->
                                    <div class="widget-content">
                                        <ul class="contact-list">
                                            <li>
                                                <span class="icon flaticon-placeholder"></span>
                                                <div class="text">2130 Fulton Street San Diego <Br>CA 94117-1080 USA</div>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-call-1"></span>
                                                <div class="text">Mon to Fri : 08:30 - 18:00</div>
                                                <a href="tel:+89868679575"><strong>+898 68679 575</strong></a>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-email"></span>
                                                <div class="text">Do you have a Question?<br>
                                                <a href="mailto:info@gmail.com"><strong>info@gmail.com</strong></a></div>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-back-in-time"></span>
                                                <div class="text">Mon - Sat 8.00 - 18.00<br>
                                                <strong>Sunday CLOSED</strong></div>
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
                           <li><a href="index.html">Privacy Policy</a></li> 
                           <li><a href="about-us.php">Contact</a></li> 
                           <li><a href="services.html">Supplier</a></li>  
                        </ul>
                    </div>
                    
                    <div class="copyright-text">
                        <p>Copyright © 2020 <a href="#">Bold Touch</a>All Rights Reserved.</p>
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
<script src="js/mixitup.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>


