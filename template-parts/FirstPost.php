<!---Articulos-previo-->
	<div class="container-Articulos-Previos">
	
		<?php query_posts("paged=$paged");	?>
	
	<?php  $PostNumero=0; if ( have_posts() ) : while ( $PostNumero<3 ) : $PostNumero+=1; the_post(); ?>
	
	
	<article class="Articulos-Previos">
					<figure class="conainer-img-prev">
						<a href="<?php the_permalink();?>">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
						</a>
					</figure>

				<div class="container-text-prev">

					<hgroup class="grupo_title-prev">
						<h2 class="titulo">
							<a class="title_article-prev" href="<?php the_permalink();?>"><?php the_title(); ?></a>
						</h2>
					</hgroup>
					
					<p class="text_articulo-prev">
						Lorem Ipsum es simplemente un texto ficticio de la industria de impresión.
					</p>
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