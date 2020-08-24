<?php

function NavbarPrincial(){
	 wp_nav_menu(
					array(
					'container'=>false,
					'menu_class' => 'navbar-item',
					'menu_id'    => 'Menu_Action',			
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'=>'<ul  id="%1$s" class="%2$s" >%3$s</ul>',
					'theme_locaton'=>'menu1',

                ));


}

function NavbarSecundario(){
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

	
}



?>
<?php  

function NavbarTersario(){
		 wp_nav_menu(
					array(
					'container'=>false,
					'menu_class' => 'navbar-item-sidebar2',
					'menu_id'    => 'navbar2',			
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'=>'<ul  id="%1$s" class="%2$s" >%3$s</ul>',
					'theme_locaton'=>'menu3',

                ));

	
}





?>