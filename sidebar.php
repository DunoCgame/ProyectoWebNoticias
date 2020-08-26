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
		<!--	-->
				
			
	
<div class="Social-buscador">
	

		<div class="ContainerSocial">

			<ul class="MenuSocial" >
			
				<li class="item">
					<a href="https://mobile.twitter.com/The_worldtime/media" class="link icon-twitter"></a>
				</li>

				<li class="item">
					<a class="link icon-instagram" href="https://instagram.com/theworldtimenews?igshid=gv3i08nasueq"></a>
				</li>

				<li class="item">
					<a class="link icon-facebook" href="https://www.facebook.com/The-World-Time-News-132200781687422/?ref=bookmarks"></a>
				</li>

				<li class="item">
					<a class="link icon-play" href="https://m.youtube.com/channel/UCWbF-Q_iQfLUmQ3eJUn2ZRA?disable_polymer=true&app=m&persist_app=1"></a>
				</li>	
				
				<li class="item">
					<a class="link icon-telegram" href="https://t.me/theworldtimenews"></a>
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