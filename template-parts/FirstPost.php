<!---Articulos-previo-->
	<div class="container-Articulos-Previos">


		<?php query_posts("paged=$paged&posts_per_page=3");	?>
	
	<?php 
	
	if ( have_posts() ) :
	while ( have_posts() ) : the_post();
	?>
	
	
	<article class="Articulos-Previos">
					<figure class="conainer-img-prev">
							<?php CoreWeb_post_thumbnail(); ?>
					</figure>

				<div class="container-text-prev">

					<hgroup class="grupo_title-prev">
						<h2 class="titulo">
									<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						</h2>
					</hgroup>
				
						<?php 

							$excerpt = get_the_excerpt();
							 
							$excerpt = substr($excerpt, 0, 40);
							$result = substr($excerpt, 0, strrpos($excerpt, ' '));
							echo $result;

					
					

							?>
						
						
						
						
						<br>
						<?php  CoreWeb_entry_taxonomies();	?>
				
				</div>
			<!--------------->	
		</article>	
	
			<?php endwhile; 	else:    ?>

		<article>
			<?php get_template_part( 'template-parts/content', 'none' );?>
		</article>


<?php endif; ?>
		
			<?php wp_reset_query(); ?>
	</div>	
<!---Articulos-previo-->