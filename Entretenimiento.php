  
<?php
	/*
	Template Name:Entretenimiento
	*/
	
	
 
 ?>
 
 <?php wp_head();?>
 

 
 
 <?php  get_header(); ?>




<main class="main">
	
	
	
		
<!-----SECCION__ARTICULOS___CATGORIAS--->
		<!--Tecnologia--> 		<!--Tecnologia--> 		<!--Tecnologia-->
<section  class="section_article" id="ContenedorArticulos">
			
		<div class="section-divice">
			<div class="container-Etiqueta-Category">
				<h2 class="Etiqueta-Category">
					<a href="#Entretenimiento.php" class="link">Entretenimiento</a>
				</h2>
			</div>
		</div>
		
	
		<?php include("template-parts/content-page-static.php");?>

		<div class="Articulos-Container">

		<?php Post_por_Categoria($paged,"Entretenimiento"); ?>
			
		
		</div>
	
		<?php  pagination();	?>
			
</section>

		
</main>

<!--aside-->
	<?php get_sidebar(); ?>
<!--aside-->

<!--Footer-->
		<?php get_footer(); ?>
<!--Footer-->
	
	