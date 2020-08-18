	<?php if ( is_active_sidebar( 'sidebar-1' ) ): ?>
	<aside class="sidebar">
						<nav class="navar-sidebar">
		
		<?php 
			 wp_nav_menu(
					array(
					'container'=>false,
					'menu_class' => 'navar-item-sidebar1',
					'menu_id'    => 'Menu_Action',			
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'=>'<ul  id="%1$s" class="%2$s" >%3$s</ul>',
					'theme_locaton'=>'menu2',

                 )
				  );
			?>
					
			
					
					<ul class="navar-item-sidebar2">
						<li class="item"><a href="#" class="link">Anuciate</a></li>
						<li class="item"><a href="#" class="link">Contacto</a></li>
					</ul>
				
				
				</nav>	
	
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