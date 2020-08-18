<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!--llamada del icon-->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/asset/img/favicon.ico">
	<!--llamada de Stylos-->
	<title><?php bloginfo( 'name' ); ?></title>


<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
 <?php wp_head();?>
</head>

<div id="Container" class="ContainerClase">
		
		<header class="header">
		
			<div class="jumbotron">
			
			
				<div class="container-title-img">						
					<div class="conainer-text-titulo">
						<h1 style="text-aling:center;" class="title_web"> <a href="<?php echo site_url() ?>/"><?php bloginfo( 'name' ); ?></a> </h1>
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
<
		
		<!---Marquee---->
		<?php include('template-parts/navbar.php');?>
		<!---Marquee---->
				
		
			
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
	