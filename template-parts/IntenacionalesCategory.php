
	<?php query_posts('category_name=Opiniones&posts_per_page=10' );	?>
	
	<?php 
	
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	
	<article class="article">
	
			<hgroup class="grupo_title">
				<h2 class="title_article">
					<a class="link" href="<?php the_permalink();?>"><?php the_title(); ?></a>
				</h2>
			</hgroup>
			
			<figure class="conainer-img">
				<a href="<?php the_permalink();?>">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
				</a>	
			</figure>
			
			<p class="text_articulo">
				<?php the_excerpt()	#extracto texto;?>
			</p>
		
	</article>	
	
		<?php 
			endwhile;
			else:    
		?>

	<article>
		<?php get_template_part( 'template-parts/content', 'none' );?>
	</article>

 <?php endif; ?>
 
