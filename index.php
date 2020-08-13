
<?php wp_head();?>	


<?php

if ( is_home() ) :

	get_header();
	
elseif ( is_404() ) :

 get_header( '404' );
 
endif;

?>



	<main class="main">
	
	<section class="section-primeraVista" >
	<!--sildeShow-->
	<?php include('template-parts/slideshow.php'); ?>
	
	<!--sildeShow-->
	
	<!---Articulos-previo-->
	
		<?php include('template-parts/FirstPost.php'); ?>
				
		
	<!---Articulos-previo-->
	</section>
		
<!-----SECCION__ARTICULOS___CATGORIAS--->
		<!--Tecnologia--> 		<!--Tecnologia--> 		<!--Tecnologia-->
<section  class="section_article" id="ContenedorArticulos">
			
		<div class="section-divice">
			<div class="container-Etiqueta-Category">
				<h2 class="Etiqueta-Category">
					<a href="single.html" class="link">Tecnologia</a>
				</h2>
			</div>
		</div>
		
		<div class="Articulos-Container">
	<?php	
		include('template-parts/TecnologiaCategory.php');
		?>
		</div>

			
	</section>
<!-- politicapoliticapolitica --> <!-- politicapoliticapolitica --> <!-- politicapoliticapolitica --> <!-- politicapoliticapolitica -->
	<section id="ContenedorArticulos" class="section_article">
			
		<div class="section-divice">
			<div class="container-Etiqueta-Category">
				<h2 class="Etiqueta-Category">
					<a href="single.html" class="link">Politica</a>
				</h2>
			</div>
		</div>
		
			<div class="Articulos-Container">
				
				<?php	
					include('template-parts/PoliticaCategory.php');
					?>
	
			</div>
			
			
	</section>
		
	</main>
	

<!--aside-->
	<?php get_sidebar(); ?>
<!--aside-->

<!--Footer-->
		<?php get_footer(); ?>
<!--Footer-->
	