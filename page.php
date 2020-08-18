<?php wp_head();?>

<?php get_header(); ?>


<!--Se llama para las paginas no estaticas-->
<main class="main">
	
<section  class="section_article" id="ContenedorArticulos">
	
		<div class="Articulos-Container">


			<?php if ( have_posts() ) : ?> 

				<?php while ( have_posts() ) : the_post(); ?>
						
					
					<?php 	get_template_part( 'template-parts/content', 'page' ); ?>
					
					
				<?php 	endwhile; else:  	?>
							
				<article>
					<?php get_template_part( 'template-parts/content', 'none' );?>
				</article>

			<?php endif; ?>				

		</div>
		
			
</section>

		
</main>
	
	<!--aside-->
	<?php get_sidebar(); ?>
<!--aside-->

<!--Footer-->
		<?php get_footer(); ?>
<!--Footer-->
	