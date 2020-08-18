<?php function Post_por_Categoria($Cat){  ?>

	
<?php  query_posts('category_name='.$Cat.'&posts_per_page=5' );	  	?>


	
	
	<?php 	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		
		<article class="article">

				<hgroup class="grupo_title">
						<?php the_title( sprintf( '<h2 class="title_article"><a class="link"  href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				</hgroup>
			


				<figure class="conainer-img">
						<?php #CoreWeb_excerpt(); ?>
				
						<?php CoreWeb_post_thumbnail(); ?>
				
				</figure>
			
			
			<?php	  		CoreWeb_entry_date(); 			 ?>

			<?php	  		the_excerpt(); 			 ?>

			<?php	CoreWeb_entry_taxonomies();				?>

		</article>	
		
	<?php 	endwhile; 			else:    		?>




	<article>
		<?php get_template_part( 'template-parts/content', 'none' );?>
	</article>


<?php endif; ?>
	
	

	<?php wp_reset_query(); ?>
	
	



 
 
 
 
 
<?php    } ?>
 
