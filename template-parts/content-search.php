
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<?php CoreWeb_post_thumbnail(); ?>

					<?php 
					
					$excerpt = get_the_excerpt();
					 
					$excerpt = substr($excerpt, 0, 100);
					$result = substr($excerpt, 0, strrpos($excerpt, ' '));
					echo $result;

						
						?>						
<center>
	<a  class="botonLeermas" href="<?php echo esc_url( get_permalink() );?>">Leer Mas </a>
</center>
			<?php	CoreWeb_entry_taxonomies();				?>

</article><!-- #post-## -->

<script>

	document.getElementById("marquee").style.display="none";


</script>