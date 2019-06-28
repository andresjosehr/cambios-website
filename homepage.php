<?php

	/*
	 * Template name: Homepage
	 *
	*/

	get_header();



?>


<style>
    .owl-prev, .owl-next{
        margin-top: 120px !important;
    }
    .is-sticky{
        transition: all 2s;
    }
</style>

  <!-- The overlay -->
<div id="myNav" class="overlay">
   <!-- Button to close the overlay navigation -->
   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   <!-- Overlay content -->
   <div class="overlay-content">
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
   </div>
</div>




<!-- ##### Hero Area Start agg by esthefa ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(<?= get_template_directory_uri() ?>/template/img/bg-img/bg-1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms">Nuevas Ideas</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Mas Compromiso</h2>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(<?= get_template_directory_uri() ?>/template/img/bg-img/bg-2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms">Nuevas Ideas</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Más Compromiso</h2>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Top Feature Area Start ##### -->
    <div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-content">
                        <div class="row no-gutters">
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-agenda-1"></i>
                                    <h5>Lorem Ipsum</h5>
                                </div>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-assistance"></i>
                                    <h5>Lorem Ipsum</h5>
                                </div>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-telephone-3"></i>
                                    <h5>Lorem Ipsum</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Feature Area End ##### -->

   <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="academy-blog-posts">
                        <div class="row">

                            <!-- Single Blog Start -->
                            <div class="col-12">
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                                   
                                    <!-- Post Title -->
                                    <a href="#" class="post-title">Lorem Ipsum Dolor Sit Amet Consectetur</a>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        
                                    </div>
                                    <!-- Post Excerpt -->
                                    <p tex align="justify">Lorem ipsum dolor sit amet, <b>consectetur adipiscing elit. Suspendisse non nulla aliquam, pretium massa pellentesque, varius leo. Etiam malesuada tincidunt elit quis molestie. In elit ipsum, aliquet nec libero vel</b>, rutrum consectetur purus. Vestibulum ut nisi quis ante euismod malesuada. Quisque scelerisque quam non congue fermentum. Aenean feugiat convallis diam. 
                                    <br>

                                    Phasellus viverra finibus turpis, in fermentum dui molestie eget. Suspendisse eget orci enim. <b>Aliquam eleifend nunc ac quam elementum, ut eleifend nulla scelerisque.</b> In suscipit nibh non aliquet egestas. Vivamus vel dui sed augue varius consectetur.</p>


                                      <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                        <img src="https://dummyimage.com/600x300/000/fff" alt="">
                                    </div>

                                     <!-- Post Excerpt -->
                                    <p tex align="justify">Lorem ipsum dolor sit amet, <b>consectetur adipiscing elit. Suspendisse non nulla aliquam, pretium massa pellentesque, varius leo. Etiam malesuada tincidunt elit quis molestie. In elit ipsum, aliquet nec libero vel</b>, rutrum consectetur purus. Vestibulum ut nisi quis ante euismod malesuada. Quisque scelerisque quam non congue fermentum. Aenean feugiat convallis diam. 
                                    <br></p>

                                     <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                        <img src="https://dummyimage.com/600x300/000/fff" alt="">
                                    </div>

                                     <!-- Post Excerpt -->
                                    <p tex align="justify">Lorem ipsum dolor sit amet, <b>consectetur adipiscing elit. Suspendisse non nulla aliquam, pretium massa pellentesque, varius leo. Etiam malesuada tincidunt elit quis molestie. In elit ipsum, aliquet nec libero vel</b> 
                                    <br></p>

                                     <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                        <img src="https://dummyimage.com/600x300/000/fff" alt="">
                                    </div>

                                     <!-- Post Excerpt -->
                                    <p tex align="justify">Lorem ipsum dolor sit amet, <b>consectetur adipiscing elit. Etiam malesuada tincidunt elit quis molestie. In elit ipsum, aliquet nec libero vel</b> 
                                    <br></p>
                                    <!-- Read More btn -->
                                    <div style="width: 100%" align="center">
                                        <a href="#"  class="btn academy-btn btn-sm mt-15">CONTÁCTENOS</a>
                                    </div>
                                   
                                </div>
                            </div>

                            
                        </div>
                    </div>
                   
                </div>

                <div class="col-12 col-md-4">
                    <div class="academy-blog-sidebar">
                        <!-- Blog Post Widget -->
                        

                        <!-- Blog Post Catagories -->
                        <div class="blog-post-categories mb-30">
                            <h5 class="btn academy-btn btn-sm mt-15" style="    margin-top: -46px !important;">Contacto</h5>
                            <ul class="pl-0 mt-4">
                                 <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <p>4127/ 5B-C Mislane Road,<br> Gibraltar, UK</p>
                                    </div>
                                 <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-telephone-1"></i>
                                        </div>
                                        <p>Main: 203-808-8613 <br> Office: 203-808-8648</p>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-contract"></i>
                                        </div>
                                        <p>office@tucambio.com</p>
                                    </div>
                            </ul>
                        </div>

                        <style>
                            .latest-blog-posts ul li a{
                                font-size: 12px;
                                text-decoration: inherit;
                                color: #68bc61;
                            }
                            .latest-blog-posts ul li{
                                list-style: initial;
                            }
                        </style>

                        <!-- Latest Blog Posts Area -->
                        <div class="latest-blog-posts mb-30">
                            <h5 class="btn academy-btn btn-sm mt-15" style="    margin-top: -46px !important;">Propuestas</h5>
                            <!-- Single Latest Blog Post -->
                           <ul class="pl-4">                               
                               <li><a href="#">Nuestra Plataforma</a></li>
                               <li><a href="#">La Reforma Política</a></li>
                               <li><a href="#">La Modernización del Estado</a></li>
                               <li><a href="#">Las Relaciones Internacionales</a></li>
                               <li><a href="#">Libertad de Prensa y Expresión</a></li>
                               <li><a href="#">Educación</a></li>
                               <li><a href="#">Cultura</a></li>
                               <li><a href="#">Salud</a></li>
                               <li><a href="#">Justicia</a></li>
                              
                               <li><a href="#">Educación</a></li>
                               <li><a href="#">Cultura</a></li>
                               <li><a href="#">Salud</a></li>
                               <li><a href="#">Justicia</a></li>
                               <li><a href="#">Defensa</a></li>
                               <li><a href="#">La seguridad de las personas</a></li>
                               <li><a href="#">La política económica</a></li>
                               <li><a href="#">Las relaciones laborales</a></li>
                           </ul>
                        </div>

                        <!-- Add Widget -->
                        <div class="add-widget">
                            <a href="#"><img src="img/blog-img/add.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php get_footer(); ?>


