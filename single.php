<?php get_header(); ?>


<style>
	.single{
		background-position: cover;
		background-repeat: no-repeat; 
	}
</style>

<section class="single" style='background-image: url("<?php echo get_site_url().'/wp-content/uploads/2018/11/ima-art.png'; ?>");'>

</section>


<article class="art-single">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>

				<span class="sin-title"><?php the_title(); ?></span><br>
				<small class="sing-aut"><?php the_author(); ?> <?php the_date('Y'); ?> <?php the_date('Y'); ?></small>

					<main>
						<div class="wrapper">
							<article class="article-sin">
									<?php the_content(); ?>
								<?php break; endwhile; endif; ?>
							</article>
						</div>

					</main>
					<div class="the_tags" align="left">
			<?php the_tags( '<span>', '</span><span>', '</span>' ); ?>
			</div>

			<div class="aut-descrt">
				<div class="columns">
					<div class="column is-1 img-aut" align="left"><?php echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?><br></div>
					<div class="column is-7 des-aut2" align="left">
						<div class="auth-a">
							<span class="the-aut-tit"><?php the_author(); ?> <?php the_date('Y'); ?></span><br>
							<span class="the-aut-des"><?php the_author_meta('description'); ?></span>
						</div>
					</div>
					<div class="column is-4 social-ico" align="right">
						<i class="fab fa-facebook-f fa-2x soc-sin"></i>
						<i class="fab fa-instagram fa-2x soc-sin"></i>
						<i class="fab fa-twitter fa-2x soc-sin"></i>
					</div>
				</div>
			</div>
</article>


<section class="random-at">
	<div class="cant-intest">
		<span>Te puede interesar</span>
	</div>
	<div class="columns random-col">
	<?php  

$query = new WP_Query( array ( 'orderby' => 'rand', 'posts_per_page' => '3' ) );

        if( $query->have_posts() ):
                // Start the Loop.
                while ( $query->have_posts() ) : $query->the_post();

                    ?>
												<div class="column rand-col-2">
													<figure  class="image is-3by1">
											    	<a href="<?php the_permalink(); ?>">
											      	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
															 <div class="container">
															  <img src="<?php echo $url ?>" alt="Avatar" class="image" style="width:100%">
															  <div class="middle">
															    <?php echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?><br>
															    <p class="des-aut"><?php the_author(); ?> <?php the_date('Y'); ?></p>
															  </div>
															</div>
											      </a>
											    </figure>
											    <div class="blog-descript">
											   	<div class="media">
											      <div class="media-content">
											        <span class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span> <i class="fas fa-share-alt"></i>
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
																				if ($i==10) {
																					 echo "...";
																					break;
																				}
																			}
														    	 ?>
											    	 </p>
											   			<br>
												      <div class="columns colasd" align="left">
												      	<div class="column inf">
												      		<a href="<?php the_permalink(); ?>" class="c-reading">Leer articulo >></a>
												      	</div>
												     </div>	     
													</div>
													</div>
												</div>



                    <?php



                endwhile;

            else :
                // If no content, include the "No posts found" template.
                get_template_part( 'content', 'none' );

            endif;
        ?>
        </div>
</section>








				<?php Scripts(); ?>
				<?php get_footer(); ?>


