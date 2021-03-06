<?php
/**
 * The template used for displaying page content

 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php CoreWeb_post_thumbnail(); ?>

	<div class="entry-content page-content">
			<?php

				the_content();

						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'CoreWeb' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'CoreWeb' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) );
			?>
	</div><!-- .entry-content -->

<?php
#Muestra el link de edicion

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'CoreWeb' ),
			get_the_title()
		),
		'<footer class="entry-footer"><span class="edit-link">',
		'</span></footer><!-- .entry-footer -->'
	);
	
?>

</article><!-- #post-## -->
