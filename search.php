<?php

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>

<header class="page-header">
	<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'CoreWeb' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
</header>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'search' );

			// End the loop.
			endwhile;

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		
		?>

		</main>
	</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
