		<footer class="footer">

			<p class="text-foooter">
			<?php 

			printf( esc_html__( 'Copyright &copy; %1$s %2$s. All Rights Reserved.', 'Core-Tema-Wordpress' ), date( 'Y' ), get_bloginfo( 'name' ) );

			?>
			</p>
		</footer>
<?php wp_footer();?>

	</div>
	
	<script src="<?php bloginfo('template_url')?>/asset/js/Slideshow.js"></script>
	<script src="<?php bloginfo('template_url')?>/asset/js/ArticuloImpart.js"></script>
	
	
	<script src="<?php bloginfo('template_url')?>/asset/js/Scroollefect.js"></script>
	<!------>
	<!-- <script>  -->
	<!-- alert("La resolución de tu pantalla es: " + screen.width + " x " + screen.height)  -->
	<!-- </script> -->



</body>


</html>