
<?php wp_head();?>	


<?php

if ( is_home() ) :

	get_header();
	
elseif ( is_404() ) :

 get_header( '404' );
 
endif;

?>

<?php include("template-parts/Categorias/PostporCategoria.php");?>

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

<!--Internacionales--><!--Internacionales--><!--Internacionales--><!--Internacionales-->
<section id="ContenedorArticulos" class="section_article">
			
		<div class="section-divice">
			<div class="container-Etiqueta-Category">
				<h2 class="Etiqueta-Category">
					<a href="<?=get_permalink( get_page_by_title('Internacionales') );?>" class="link">Internacionales</a>
				</h2>
			</div>
		</div>
		
			<div class="Articulos-Container">
				
				<?php	
				
Post_por_Categoria("Internacionales");
					?>
	
			</div>
		
	</section>

<!--Internacionales--><!--Internacionales--><!--Internacionales--><!--Internacionales-->
<!-- politica --> <!-- politica --> <!-- politica --> <!-- politica --> 
	<section id="ContenedorArticulos" class="section_article">
			
		<div class="section-divice">
			<div class="container-Etiqueta-Category">
				<h2 class="Etiqueta-Category">
		<a href="<?=get_permalink( get_page_by_title('Politica') );?>" class="link">Politica</a>
				</h2>
			</div>
		</div>
		
			<div class="Articulos-Container">
				
				<?php	
					
					Post_por_Categoria("Politica");
					
					?>
	
			</div>
			
			
	</section>
<!-- politica --><!-- politica --><!-- politica --><!-- politica --><!-- politica -->
<!--Tecnologia--> 		<!--Tecnologia--> 		<!--Tecnologia-->
<section  class="section_article" id="ContenedorArticulos">
			
		<div class="section-divice">
			<div class="container-Etiqueta-Category">
				<h2 class="Etiqueta-Category">
			<a href="<?=get_permalink( get_page_by_title('Tecnologia') );?>" class="link">Tecnologia</a>
				</h2>
			</div>
		</div>
		
		<div class="Articulos-Container">
	<?php	
		
		Post_por_Categoria("Tecnologia");
					
		
		?>
		</div>

			
</section>
<!--Tecnologia--> 		<!--Tecnologia--> 		<!--Tecnologia-->
<!--Sucesos--><!--Sucesos--><!--Sucesos--><!--Sucesos-->
<section  class="section_article" id="ContenedorArticulos">
			
<div class="section-divice">
	<div class="container-Etiqueta-Category">
		<h2 class="Etiqueta-Category">
	<a href="<?=get_permalink( get_page_by_title('Sucesos') );?>" class="link">Sucesos</a>
		</h2>
	</div>
</div>
		
		<div class="Articulos-Container">
	<?php	
	
		Post_por_Categoria("Sucesos");
			
		
		?>
		</div>

			
</section>
<!--Sucesos--><!--Sucesos--><!--Sucesos--><!--Sucesos-->		
<!--Deportes--><!--Deportes--><!--Deportes-->
<section  class="section_article" id="ContenedorArticulos">
			
		<div class="section-divice">
			<div class="container-Etiqueta-Category">
				<h2 class="Etiqueta-Category">
					<a href="<?=get_permalink( get_page_by_title('Deportes') );?>"  class="link">Deportes</a>
				</h2>
			</div>
		</div>
		
		<div class="Articulos-Container">
	<?php	
		
		Post_por_Categoria("Deportes");
		
		
		?>
		</div>		
</section>
<!--Deportes--><!--Deportes--><!--Deportes-->
<!--Entretenimiento--><!--Entretenimiento--><!--Entretenimiento-->
<section  class="section_article" id="ContenedorArticulos">
			
		<div class="section-divice">
			<div class="container-Etiqueta-Category">
				<h2 class="Etiqueta-Category">
				<a href="<?=get_permalink( get_page_by_title('Entretenimiento') );?>" class="link">Entretenimiento</a>
				</h2>
			</div>
		</div>
		
		<div class="Articulos-Container">
	<?php	
		
		
		
			Post_por_Categoria("Entretenimiento");
		
		
		
		?>
		</div>		
</section>

<!--Entretenimiento--><!--Entretenimiento--><!--Entretenimiento-->
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</main>
	

<!--aside-->
	<?php get_sidebar(); ?>
<!--aside-->

<!--Footer-->
		<?php get_footer(); ?>
<!--Footer-->
	