<?php

	/*
	 * Template name: Blog
	 *
	*/

get_header();

?>

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
	<!-- END The overlay -->


<section class="faq zoom-in" style='background-image: url("<?php echo get_site_url().'/wp-content/themes/tugo-2018-website-master/images/bg_header_2.png'; ?>");'>
	<div class="container">
  <div class="columns">
    <div class="column" align="center">
      <div class="faq-hed">
        <span class="faq-tit">Blog</span><br><br>
        <span class="faq-sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam dolor fugit amet, deleniti ad</span>
      </div>
    </div>
  </div>
  </div>
</section>

<br><br>

<section class="blog-container">
	<?php $custom_query = new WP_Query('cat=-9'); 
	$k=0;
	while($custom_query->have_posts()) : $custom_query->the_post(); ?>
		<?php if ($k==0): ?>
			<div class="columns">
		<?php endif ?>
	  <div class="column is-4">
			    <figure class="image is-3by1 wow fadeInUp">
			    	<a href="<?php the_permalink(); ?>">
			      	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
							 <div class="container nul-cont">
							  <img src="<?php echo $url ?>" alt="Avatar" class="image image-blog">
							  <div class="middle">
							    <?php echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?><br>
							    <p class="des-aut"><?php the_author(); ?> <?php the_date('Y'); ?></p>
							  </div>
							</div>
			      </a>
			    </figure>
			    <div class="blog-descript">
				    <div class="media">
				      <div class="media-content wow fadeInUp">
				        <span class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span> <i class="fas fa-share-alt"></i>
				      </div>
				    </div>
				    <div  <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				    	<p class="the-content-blog wow fadeInUp">
							    	<?php 
							    	$content = get_the_content() ;
										$array_content = str_word_count($content, 1);
											$i=0;
											foreach ($array_content as $palabra) {
												echo " ".$palabra;
												$i++;
													if ($i==10) {
														 echo "...";
														break;
													}
												}
							    	 ?>
				    	 </p>
				   			<br>
					      <div class="columns colasd" align="left">
					      	<div class="column inf wow fadeInUp">
					      		<span class="des-fue pasosanf-accion"><a class="des-den como-hacer com com-unic" href="<?php the_permalink(); ?>">Leer articulo >></a></span>
					      	</div>
					     </div>	     
						</div>
			</div>
	  </div>
			<?php $k++; if ($k==3): ?>
				</div>
			<?php $j=$k; $k=0; endif ?>
		<?php endwhile; ?>

			<?php $k++; if ($j==1 || $j==3): ?>
				</div>
			<?php endif ?>
		<?php wp_reset_postdata(); // reset the query ?>
		<div class="columns ver-mas">
			<div class="column is-12 wow fadeInUp" align="center">
				<span class="btn-blog button8 sim-button button8blog">
					<a class="btn-blog-text" href="#">
						Ver más
					</a>
				</span>
			</div>
		</div>
</section>



<?php Scripts(); ?>
<?php get_footer(); ?>