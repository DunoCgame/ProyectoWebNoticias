<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!--llamada del icon-->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/logo.png">
	<!--llamada de Stylos-->
	
<!--
	<link rel="stylesheet" href="asset/css/style_icono.css">
	<link rel="stylesheet" href="asset/css/variables.css">
	<link rel="stylesheet" href="asset/css/style_Extra_Grande.css"> 
	<link rel="stylesheet" href="asset/css/style_Grande.css"> 
	<link rel="stylesheet" href="asset/css/style_Mediana.css"> 
	<link rel="stylesheet" href="asset/css/style_Pequeno.css"> 
	<link rel="stylesheet" href="asset/css/grid.css">
	<link rel="stylesheet" href="asset/css/slideShow.css">
	-->

	<title><?php bloginfo( 'name' ); ?></title>

 <?php wp_head();?>
</head>

<div id="Container" class="ContainerClase">
		
		<header class="header">
		
			<div class="jumbotron">
			
			
				<div class="container-title-img">						
					<div class="conainer-text-titulo">
						<h1 style="text-aling:center;" class="title_web"><?php bloginfo( 'name' ); ?> </h1>
						<p class="sub-titulo"><?php echo bloginfo( 'description' ); ?></p>
					</div>
				</div>
				
			</div>	
		
		<nav class="navbar" id="NavbarScrooll">
			
			<img src="asset/img/Logo-s.png" class="icon-scroll" id="iconScroll">
			
		
		<button class="navbar-toggler icon-menu"  onclick="openNav()" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			</button>
	
			<div class="navbar-collapse"  id="Menu">
				<a href="javascript:void(0)" class="closebtn icon-cross" onclick="closeNav()"></a>
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
				<div class="NabarSocial">
					<ul class="MenuSocial" >
						<li class="item"><a href="#" class="link icon-twitter"></a></li>
						<li class="item"><a class="link icon-instagram" href="#"></a></li>
						<li class="item"><a class="link icon-facebook" href="#"></a></li>
						<li class="item"><a class="link icon-play" href="#"></a></li>	
						<li class="item"><a class="link icon-telegram" href="#"></a></li>
					</ul>
				</div>
			</div>
			
		
		<?php dynamic_sidebar("search-1"); ?>
		

		</nav>
		
		<!---Marquee---->
		<?php include('template-parts/marquee.php');?>
		<!---Marquee---->
		</header>
		
		
		<body class="body <?php body_class(); ?>">	
	