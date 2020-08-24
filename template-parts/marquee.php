<div class="marquee-container" id="marquee">
			
			<div class="container-Etiqueta-News">
				<label class="Etiqueta-News">Ultima Hora</label>
			</div>
			
			
			<marquee  class="marquees" >
			
				<?php query_posts("paged=$paged&posts_per_page=6");	?>
					
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<article class="contaner-text-marquee">		
									<h2 class="marquee-text">
										<a class="link" href="<?php the_permalink();?>"><?php the_title(); ?></a>
									</h2>
							</article>
							
							<?php 
								endwhile; 
								else:  
							?>

							<article>
								<?php get_template_part( 'template-parts/content', 'none' );?>
							</article>

						<?php endif; ?>
					
				<?php wp_reset_query(); ?>
			</marquee>
				
</div>