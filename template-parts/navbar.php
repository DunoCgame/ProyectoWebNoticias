<?php

	 wp_nav_menu(
					array(
					'container'=>false,
					'menu_class' => 'navbar-item',
					'menu_id'    => 'Menu_Action',			
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'=>'<ul  id="%1$s" class="%2$s" >%3$s</ul>',
					'theme_locaton'=>'menu',

                ));




?>