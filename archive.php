<?php get_header(); ?>
<?php SubMenu(); ?>
<br><br>
	<main>
		<div class="wrapper">
			<article>
				<?php if (have_posts()) : ?>

<!-- 				<?php

				if (is_category()) { ?>
					<h1 class="has-sub-title">Categoria:</h1>
					<h2><?php echo single_cat_title(); ?></h2>
				<?php }

				elseif (is_tag()) { ?>
					<h1 class="has-sub-title">Archive for:</h1>
					<h2><?php echo single_tag_title(); ?></h2>
				<?php }

				elseif (is_month()) { ?>
					<h1 class="has-sub-title">Archive for:</h1>
					<h2><?php the_time('F, Y'); ?></h2>
				<?php }

				elseif (is_year()) { ?>
					<h1 class="has-sub-title">Archive for:</h1>
					<h2><?php the_time('Y'); ?></h2>
				<?php }

				elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

				<?php } ?>
 -->

				 <?php $query = new WP_Query( 'cat=-3,-8' ); ?>
						<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
							<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
								<img class="img-cab" src="http://localhost/canlove4/wp-content/uploads/2018/08/marvin-meyer-188676-unsplash-1.png" alt="">

								<div class="img-des">
									<br>
									<span class="img-1">Categoria:</span><br>
									<span class="img-2"><?php echo single_cat_title(); ?></span><br>
								</div>
					 		<?php
					  	break;
					  endwhile; 
					 	wp_reset_postdata();
					 endif; ?>

				<?php endif; ?>




<section class="blog-container">
	<?php $custom_query = new WP_Query('cat=-9'); 
	$k=0;
	 while (have_posts()) : the_post(); ?>
		<?php if ($k==0): ?>
			<div class="columns">
		<?php endif ?>
	  <div class="column is-6">
			<div class="card" >
			  <div class="card-image">
			    <figure  class="image is-3by1">
			    	<a href="<?php the_permalink(); ?>">
			      	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
							  <div class="div-img hidden" >
							    <img class="img" src="<?php echo $url ?>" title="Foto2" alt="Foto2">
							  </div>
			      </a>
			    </figure>
			  </div>
			  <div class="card-content">
			    <div class="media">
			      <div class="media-content">
			        <span class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
			      </div>
			    </div>
			    <div  <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			    	<p class="the-content-blog">
						    	<?php 
						    	$content = get_the_content() ;
									$array_content = str_word_count($content, 1);
										$i=0;
										foreach ($array_content as $palabra) {
											echo " ".$palabra;
											$i++;
												if ($i==50) {
													 echo "...";
													break;
												}
											}
						    	 ?>
			    	 </p>
			   			<br>
				      <div class="columns colasd" align="left">
				      	<div class="column inf">Escrito por: <?php the_author(); echo " | "; the_date() ?></div>
				      	<div class="column is-one-third" align="right">
				      		<a href="<?php the_permalink(); ?>" class="c-reading">Continuar&nbsp;leyendo</a>
				      </div>
				      </div>
				      <div class="colqwe" style="display: none" >
					      <div class="columns" align="center">
					      	<div class="column inf">Escrito por: <?php the_author(); echo " | "; the_date() ?></div>
					      </div>
					      <div class="columns" align="center">
					      	<div class="column" align="center">
					      		<a href="<?php the_permalink(); ?>" class="c-reading">Continuar&nbsp;leyendo</a>
					      </div>
				      </div>
				    </div> 	     
			    </div>
			  </div>
			</div>
	  </div>
			<?php $k++; if ($k==2): ?>
				</div>
			<?php $k=0; endif ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); // reset the query ?>
</section>



<style>
	.card, .archive {
    background-color: #ededed;
}
</style>



			</article>
		</div>
	</main>
		<?php FooterBlog(); ?>
	<?php Scripts(); ?>
<?php wp_footer(); ?>
