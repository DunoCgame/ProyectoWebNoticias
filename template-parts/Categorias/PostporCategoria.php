<?php function Post_por_Categoria($Cat){  ?>

	
<?php  query_posts('category_name='.$Cat.'&posts_per_page=5' );	  	?>


	
	
	<?php 	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		
		<article class="article">

				<hgroup class="grupo_title">
						<?php the_title( sprintf( '<h2 class="title_article"><a class="link"  href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				</hgroup>
			

				
				<figure class="conainer-img">
						
				
						<?php CoreWeb_post_thumbnail(); ?>
							<?php	 CoreWeb_entry_date(); 			 ?>
				</figure>
				<?php 

							$excerpt = get_the_excerpt();
							 
							$excerpt = substr($excerpt, 0, 100);
							$result = substr($excerpt, 0, strrpos($excerpt, ' '));
							echo $result;

						
							?>
			
			
			
			
<center>
<a  class="botonLeermas" href="<?php echo esc_url( get_permalink() );?>">Leer Mas
</a>
</center>
			<?php	CoreWeb_entry_taxonomies();				?>

		</article>	
		
	<?php 	endwhile; 			else:    		?>




	<article>
		<?php get_template_part( 'template-parts/content', 'none' );?>
	</article>


<?php endif; ?>
	
	

	<?php wp_reset_query(); ?>
	
	



 
 
 
 
 
<?php    } ?>
 
