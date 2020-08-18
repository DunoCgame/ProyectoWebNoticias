<?php
/**
 * The template part for displaying single posts
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>   class="article-single">

	<hgroup class="grupo_title">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</hgroup><!-- .entry-header -->

<figure class="conainer-img ">
	<?php CoreWeb_excerpt(); ?>

	<?php CoreWeb_post_thumbnail(); ?>

</figure>

	<div class="entry-content">
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

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
	</div>

</article><!-- #post-## -->
