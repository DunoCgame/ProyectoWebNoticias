<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

	<div id="primary" class="content-area">
		
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				
				<header class="page-header">

					<h1 class="text-error">ERROR 404</h1>
					<h2 class="text-error"><?php esc_html_e( 'the page or entry you are looking for cannot be found' ); ?></h3>

				</header>
				
				<div class="page-content">
						<p><?php _e( '¿Maybe try a search?', 'CoreWeb' ); ?></p>

						<?php get_search_form(); ?>
				</div>

			</section>

		</main>

		<?php get_sidebar( 'content-bottom' ); ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
