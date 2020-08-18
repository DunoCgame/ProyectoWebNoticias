  
<?php
	/*
	Template Name:Sucesos
	*/
	
	
 
 ?>
 
 <?php wp_head();?>
 

 
 
 <?php  get_header(); ?>




<main class="main">
	
	
	
<section  class="section_article" id="ContenedorArticulos">
			
		<div class="section-divice">
			<div class="container-Etiqueta-Category">
				<h2 class="Etiqueta-Category">
					<a href="single.html" class="link">Sucesos</a>
				</h2>
			</div>
		</div>
		
		<div class="Articulos-Container">

	
	<article class="article">
	
			<?php if ( function_exists( 'wpsp_display' ) ) wpsp_display( 132 ); ?>
	
	</article>
	
			
		
		</div>
		
			
	</section>

		
</main>

<!--aside-->
	<?php get_sidebar(); ?>
<!--aside-->

<!--Footer-->
		<?php get_footer(); ?>
<!--Footer-->
	
	