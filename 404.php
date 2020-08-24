<?php
/**
 * The template for displaying 404 pages (not found)
 */

// get_header(); 

?>


 <link href="<?php bloginfo('template_url')?>/asset/css/404.css" rel="stylesheet">
<!---->

	<div id="primary" class="content-area ">
		
		<main id="main" class="site-main-404" role="main">

			<section class="error-404 not-found">
				
				<header class="page-header">

					<h1 class="text-error-404">ERROR 404</h1>
					<h2 class="text-error"><?php esc_html_e( 'the page or entry you are looking for cannot be found' ); ?></h3>

				</header>
						
		<div class="page-content">
		
		<p><?php _e( '¿Maybe try a search?', 'CoreWeb' ); ?></p>
	
		<form role="search" method="get" class="search-form" action="http://localhost/wordpress/">
			<label>
				<input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
			</label>
			<button type="submit" class="search-submit"><span class="screen-reader-text"></span>Buscar</button>
		</form>
		
		<a href="<?php echo site_url() ?>/" class="bottonVolver btn-lg"> 
			<?php esc_html_e( 'Volver a la pagina de inicio', 'TheWorldRimeNews' ); ?>
		</a>
		
		</div>
						
			</section>

		</main>

		<?php #get_sidebar( 'content-bottom' ); ?>

	</div>

<?php #get_sidebar(); ?>
<?php #get_footer(); ?>
