<!--sildeShow-->
			<div class="slideshow-container">
			
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
	<div class="mySlides fade">
					  
					  
						
		<?php CoreWeb_post_thumbnail(); ?>
				
				
			
			
		<hgroup class="group-titulos text">
			<h2 class="titulo">
				<a class="link" href="<?php the_permalink();?>"><?php the_title(); ?></a>
			</h2>
		</hgroup>
				
	</div>
			
		<?php endwhile; else: ?>
				<h1>No se encontraron articulos</h1>
				<?php endif; ?>

				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>		
			
			</div>

	<!--sildeShow-->