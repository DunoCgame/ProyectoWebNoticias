<?php function Post_por_Categoria($paged, $Cat){  ?>
	



<div class="Articulos-Container page-static">	

<?php query_posts("paged=".$paged.'&'.'category_name='.$Cat);	?>

	<?php 	if ( have_posts() ) : ?> 
	
		<?php  while ( have_posts() ) : the_post(); ?>
	

		<article class="article">
		
				<hgroup class="grupo_title">
					<h2 class="title_article">
						<?php the_title( sprintf( '<h2 class="title_article"><a class="link"  href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					</h2>
				</hgroup>
				
			<figure class="conainer-img">
						<?php #CoreWeb_excerpt(); ?>
				
						<?php CoreWeb_post_thumbnail(); ?>
							<?php	 CoreWeb_entry_date(); 			 ?>
				</figure>
				
				
			
			
				<?php	  			the_excerpt(); 			 ?>
<center>
<a  class="botonLeermas" href="<?php echo esc_url( get_permalink() );?>">Leer Mas
</a>
</center>	
				<?php	CoreWeb_entry_taxonomies();				?>

		</article>	
	
	<?php endwhile; else: ?>


	<article>
		<?php get_template_part( 'template-parts/content', 'none' );?>
	</article>

 <?php endif; ?>
 
</div>
	
	
<?php  pagination();	?>	

 
 <?php wp_reset_query(); ?>
  
<?php } ?>