
 <?php wp_head();?>
 
 <?php get_header(); ?>

<main class="main-single">
	
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<?php
	// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );
	?>
	
	
	
		
			
	<?php endwhile; else:    ?>

	<article>
		<?php get_template_part( 'template-parts/content', 'none' );?>
	</article>



 <?php endif; ?>

</main>

<!--aside-->
	<?php get_sidebar(); ?>
<!--aside-->

<!--Footer-->
		<?php get_footer(); ?>
<!--Footer-->
	