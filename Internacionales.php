  
<?php
	/*
	Template Name:Internacionales
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
					<a href="#Internacionales.php" class="link">Internacionales</a>
				</h2>
			</div>
		</div>
		   <?php include("template-parts/content-page-static.php");?>

			
			

			<?php Post_por_Categoria($paged,"Internacionales"); 		 ?>
					
				
</section>

		
</main>

<!--aside-->
	<?php get_sidebar(); ?>
<!--aside-->

<!--Footer-->
		<?php get_footer(); ?>
<!--Footer-->
	
	