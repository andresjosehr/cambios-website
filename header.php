<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <title><?php
      if (function_exists('is_tag') && is_tag()) {
         single_tag_title("Archive for tag &quot;"); echo '&quot; - '; }
      elseif (is_archive()) {
         wp_title(''); echo ' Archive - '; }
      elseif (is_search()) {
         echo 'Search &quot;'.wp_specialchars($s).'&quot; - '; }
      elseif (!(is_404()) && (is_single()) || ( !is_page('Homepage') )) {
         wp_title(''); echo ' - '; }
      elseif (is_404()) {
         echo '404 Not Found - '; }
      if (is_home() || is_page('Homepage') ) {
         bloginfo('name'); echo ' - '; bloginfo('description'); }
      else {
          bloginfo('name'); }
      if ($paged > 1) {
         echo ' - page '. $paged; }?></title>


  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

  


  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <meta name="owner" content=""/>
  <meta name="rating" content="General"/>

  <meta property="og:title" content="SwitchX Wallet | Vive la experiencia Wallet"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="https://switch.techlatam.la/"/>
  <meta property="og:image" content="<?= get_template_directory_uri() ?>/images/Imagen-OG-Tugo"/>
  <meta property="og:site_name" content="SwitchX Wallet | Vive al experiencia Wallet"/>
  <meta property="og:description" content="Vive la experiencia de tener la mejor billetera online"/>

  <!--[if IE]>
  	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie.css" media="screen"/>
  <![endif]-->

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all"/>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link href="<?php echo home_url(); ?>" rel="index" title="<?php bloginfo('name') ?> - <?php bloginfo('description'); ?>"/>

    <!-- Core Stylesheet agg by esthefa-->
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/template/style.css">
    <!-- C:\xampp\htdocs\Cambios\wp-content\themes\cambios-website -->
 

  <script src="<?= get_template_directory_uri() ?>/js/scripts.js"></script>
  <!-- jQuery-2.2.4 js -->
    <script src="<?= get_template_directory_uri() ?>/template/js/jquery/jquery-2.2.4.min.js"></script>



  <?php wp_head(); ?>

	

</head>

<body <?php body_class(); ?>>
  <!-- Header Section -->
<!--   <header class="header header_efect" style="display: block;">
    <div class="container full-height container-is-gapless-table">

      <div class="header-container full-height">
        <div class="header__logo flex-center" style="margin: 0px;">
         <a style="margin-right: auto;" href="<?php echo get_site_url(); ?>"><img class="img-prin" src="<?php bloginfo('template_directory'); ?>/images/logo_inver.png" alt=""></a>
        </div>
        <div class="header__menu">
          <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </div>
        <div class="flex-center">
          <div id="nav-icon3" onclick="openNav()">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      
    </div>
  </header> -->
    <!-- END Header Section -->


  <div class="header__separate"></div>
  <!-- END Header Section -->

  <!-- The overlay -->
<!--   <div id="myNav" class="overlay header_overlay_efect" style="overflow: hidden;">
    <div class="sub_overlay"></div>

    <a style="top: 0px;right: 40px;" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <style>
      .overlay-content{
        top: 20%;
      }

      @media (min-width: 769px) {
        .img_historia{
          top: 0;
        }
      }
    </style>

    <div class="overlay-content">
      <div class="overlay-content__logo">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo_inver.png" alt="">
      </div>
      <div class="overlay-content__menu">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
      </div>
      <div class="overlay-content__social">
        <a href="#" class="footer-new__social__brand"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="footer-new__social__brand"><i class="fab fa-instagram"></i></a>
        <a href="#" class="footer-new__social__brand"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
    <div class="foot" style="min-height: 107px;">
      <div align="center" class="foot-div" style="padding-top: 10px !important">
          <a href="https://www.instagram.com/inverinmobiliaria/" target="_blank" class="pl-3 pr-3">
            <i style="font-size: 30px; color: white" class="fab fa-instagram"></i>
          </a>
          <a href="https://www.facebook.com/grupoinverconsultorainmobiliaria/" target="_blank" class="pl-3 pr-3">
            <i style="font-size: 30px; color: white" class="fab fa-facebook"></i>
          </a>
          <a href="https://api.whatsapp.com/send?phone=5493512916132" target="_blank" class="pl-3 pr-3">
            <i style="font-size: 30px; color: white" class="fab fa-whatsapp"></i>
          </a>
          <div class="col-sm-12 copydiv">
          <h3 class="center-sm dere_rev" style='font-family: "Open Sans",sans-serif;font-size: 12px'>© Copyright 2019 Grupo INVER • Desarrollado por <a href="https://www.btob.com.ar/" target="_blank" style="text-decoration: none;color: white;font-weight: 600;"> <span style="color: #fb1515;font-size: 12px;position: relative;margin-right: 5px;">BtoB</span><span style="font-size: 11px">Soluciones </span></a> | Todos los derechos reservados</h3>
        </div>
      </div>
    </div>
  </div> -->














<!-- ##### Preloader  agg by esthefa ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>/template/img/core-img/logo.png" alt=""></a>
                            </div>
                            <div class="login-content">
                                <a href="#">Vote Lista 57</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu" style="transition: all .4s">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="">Inicio</a></li>
                                    <li><a href="">Nuestra Filosofía</a></li>
                                    <li><a href="#">Propuestas</a>
                                        <div class="megamenu row mx-0 py-4">
                                            <ul class="single-mega col-lg-4">
                                                <li><a href="#">Reforma Política</a></li>
                                                <li><a href="#">Modernización del Estado</a></li>
                                                <li><a href="#">Relaciones Exteriores</a></li>
                                                <li><a href="#">Libertad de Prensa</a></li>
                                                
                                            </ul>
                                            <ul class="single-mega col-lg-4">
                                                <li><a href="#">Defensa</a></li>
                                                <li><a href="#">Seguridad de las Personas</a></li>
                                                <li><a href="#">Política Económica</a></li>
                                                <li><a href="#">Relaciones Laborales</a></li>

                                            </ul>
                                            <ul class="single-mega col-lg-4">
                                                <li><a href="#">Educación</a></li>
                                                <li><a href="#">Cultura</a></li>
                                                <li><a href="#">Salud</a></li>
                                                <li><a href="#">Justicia</a></li>
                                                
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#">Contacto</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+654563325568889"><i class="icon-telephone-2"></i> <span>(+65) 456 332 5568 889</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->