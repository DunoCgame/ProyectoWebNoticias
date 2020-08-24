<?php function Post_Relacionados($paged){  


 // if ( !is_singular('post') ){  
 
 $categories = get_the_category();
 
 echo $categories[0];
 
// if (!empty($categories)) {
    // foreach ($categories as $category) {
        // echo esc_html( $category->name );
    // }
// }
 
 
 query_posts('category_name='.$Cat.'&posts_per_page=4'.'&'.'category_name='.$Cat ); 	
 
 
 
 ?>


	
	
	<?php 	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
<div class="containner-post-reacionados"> 
		<article class="article">

				<hgroup class="grupo_title">
						<?php the_title( sprintf( '<h2 class="title_article"><a class="link"  href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				</hgroup>
			

				
				<figure class="conainer-img">
						<?php #CoreWeb_excerpt(); ?>
				
						<?php CoreWeb_post_thumbnail(); ?>
							<?php	 CoreWeb_entry_date(); 			 ?>
				</figure>
				
			
			
			

			<?php	  		the_excerpt(); 			 ?>

			<?php	CoreWeb_entry_taxonomies();				?>

		</article>	
		
	<?php 	endwhile; 			else:    		?>




	<article>
		<?php get_template_part( 'template-parts/content', 'none' );?>
	</article>


<?php endif; ?>
	
	

	<?php wp_reset_query(); ?>
	
</div>	

 
 
<?php   # } ?>

<?php    } ?>
 
