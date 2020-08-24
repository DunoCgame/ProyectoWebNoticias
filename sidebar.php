	<?php if ( is_active_sidebar( 'sidebar-1' ) ): ?>
	<aside class="sidebar">
						<nav class="navar-sidebar">
		
		<?php 
		
					 NavbarSecundario();
			 
			?>
					
			</nav>
					
					<ul class="navar-item-sidebar2">
						<li class="item"><a href="#" class="link">Anuciate</a></li>
						<li class="item"><a href="#" class="link">Contacto</a></li>
					</ul>
		
				
			
	
<div class="Social-buscador">
	

		<div class="ContainerSocial">

			<ul class="MenuSocial" >
			
				<li class="item">
					<a href="#" class="link icon-twitter"></a>
				</li>

				<li class="item">
					<a class="link icon-instagram" href="#"></a>
				</li>

				<li class="item">
					<a class="link icon-facebook" href="#"></a>
				</li>

				<li class="item">
					<a class="link icon-play" href="#"></a>
				</li>	
				
				<li class="item">
					<a class="link icon-telegram" href="#"></a>
				</li>
				
			</ul>

		</div>
		
		<!--Aside php-->
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<!--Aside php	-->

</div>
		</aside>
		
		<?php endif; ?>
	<?php get_sidebar(); ?>