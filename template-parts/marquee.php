<div class="marquee-container">
			
			<div class="container-Etiqueta-News">
				<label class="Etiqueta-News">News</label>
			</div>
			
			
			<marquee  class="marquees" >
			
					<?php query_posts("paged=$paged");	?>
				
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
 
			</marquee>
				
</div>