<!---Articulos-previo-->
	<div class="container-Articulos-Previos">


<?php  $PostNumero=0; if ( have_posts() ) : while ( $PostNumero<3 ) : $PostNumero+=1; the_post(); ?>
	
	
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
				
						<?php  CoreWeb_entry_date(); 	?>
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
		
	</div>	
<!---Articulos-previo-->