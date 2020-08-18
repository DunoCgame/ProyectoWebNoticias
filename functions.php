<?php


if ( ! function_exists( 'setup' ) ) :


function setup() {

load_theme_textdomain( 'CoreWeb' );

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails');

add_image_size( 'list_articles_thumbs', 550, 370, true );

/* Custom contenido */
add_theme_support('starter-content');

add_theme_support( 'customize-selective-refresh-widgets' );

add_theme_support( 'shorten_text' );

/* Custom header */
add_theme_support('custom-header-uploads');

/* Post Thumbnails */
add_theme_support('post-thumbnails');

/* Custom Post */
add_theme_support( 'post-formats');

/* Custom Background */
add_theme_support( 'custom-background' );

#Soportes se imagenes
// add_theme_support( 'post-thumbnails');
// add_image_size( 'slider_thumbs', 470, 300, true );
// add_image_size( 'list_articles_thumbs', 450, 370, true );
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1200, 9999 );
	
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );


	register_nav_menus( array(
		'menu' => __( 'menu', 'CoreWeb' ),
		'social'  => __( 'Social', 'CoreWeb' ),
		'menu2'  => __( 'menusidebar', 'CoreWeb' ),
	) );
	

#add .active class to link menu item
add_filter('nav_menu_link_attributes', 'clasemenu',10,30);


#logo
add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'tema', 'site-description' ),
) );


#formatos de publicaciion
 add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );


#Agrega class a los elementos a
function clasemenu($atts,$item,$args){
	$class='link ';
	$atts['class'] = $class;
	return $atts;
}


	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );


	add_editor_style( array( 'css/editor-style.css', CoreWeb_fonts_url() ) );

	
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;

add_action( 'after_setup_theme', 'setup' );





function CoreWeb_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'CoreWeb_content_width', 840 );
}
add_action( 'after_setup_theme', 'CoreWeb_content_width', 0 );



function wp_trim_all_excerpt($text) {
	global $post;
	   $raw_excerpt = $text;
	   if ( '' == $text ) {
		  $text = get_the_content('');
		  $text = strip_shortcodes( $text );
		  $text = apply_filters('the_content', $text);
		  $text = str_replace(']]>', ']]&gt;', $text);
	   }
 
	$text = strip_tags($text);
	$excerpt_length = apply_filters('excerpt_length', 30);
	$excerpt_more = apply_filters('excerpt_more', ' ' . ' [...]');
	$text = wp_trim_words( $text, $excerpt_length, $excerpt_more ); 
	 
	return apply_filters('wp_trim_excerpt', $text, $raw_excerpt); 
}
 
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wp_trim_all_excerpt');


 #agrear funcion de leer mas
 
 function resumen_con_leer_mas() {
       global $post;
       return '<a href="'. get_permalink($post->ID) . '"> Leer más...</a>';
}
add_filter('excerpt_more', 'resumen_con_leer_mas');
 




 
 
function Header_widgets_init(){
	  	  
	register_sidebar(array(
		'name'=>__('Header Buscador','Dreams Consulting'),
		'id'=>'search-1',
		'description'=>__('Widgets adicional de busqueda', ' dreams consulting' ),
		'before_Widgets'=>'<div id="%15s" class="headwidgets %25s">',
		'after_widget'=>'</div>',
	));
	
}

add_action('widgets_init','Header_widgets_init');

// dynamic_sidebar("search-1");

 
 
 
 
 
function CoreWeb_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'CoreWeb' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'CoreWeb' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar2', 'CoreWeb' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'CoreWeb' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar3', 'CoreWeb' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'CoreWeb' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	
	
	
}
add_action( 'widgets_init', 'CoreWeb_widgets_init' );






if ( ! function_exists( 'CoreWeb_fonts_url' ) ) :

function CoreWeb_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	
	if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'CoreWeb' ) ) {
		$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
	}

	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'CoreWeb' ) ) {
		$fonts[] = 'Montserrat:400,700';
	}

	
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'CoreWeb' ) ) {
		$fonts[] = 'Inconsolata:400';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;


 
function CoreWeb_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'CoreWeb_javascript_detection', 0 );



function CoreWeb_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'CoreWeb-fonts', CoreWeb_fonts_url(), array(), null );

	// Theme stylesheet.
	wp_enqueue_style( 'CoreWeb-style', get_stylesheet_uri() );
	
	wp_register_style('style_icono', get_template_directory_uri() . '/asset/css/style_icono.css' );
	$dependencies = array('style_icono');
	wp_enqueue_style( 'style_icono', get_stylesheet_uri() );

	wp_register_style('variables', get_template_directory_uri() . '/asset/css/variables.css' );
	$dependencies = array('variables');
	wp_enqueue_style( 'variables', get_stylesheet_uri() );	
	
	
	wp_register_style('style_Extra_Grande', get_template_directory_uri() . '/asset/css/style_Extra_Grande.css' );
	$dependencies = array('style_Extra_Grande');
	wp_enqueue_style( 'style_Extra_Grande', get_stylesheet_uri() );
	
	
	wp_register_style('style_Grande', get_template_directory_uri() . '/asset/css/style_Grande.css' );
	$dependencies = array('style_Grande');
	wp_enqueue_style( 'style_Grande', get_stylesheet_uri() );
	
	
	wp_register_style('style_Mediana', get_template_directory_uri() . '/asset/css/style_Mediana.css' );
	$dependencies = array('style_Mediana');
	wp_enqueue_style( 'style_Mediana', get_stylesheet_uri() );
	
	
	wp_register_style('style_Pequeno', get_template_directory_uri() . '/asset/css/style_Pequeno.css' );
	$dependencies = array('style_Pequeno');
	wp_enqueue_style( 'style_Pequeno', get_stylesheet_uri() );
	
	
	wp_register_style('grid', get_template_directory_uri() . '/asset/css/grid.css' );
	$dependencies = array('grid');
	wp_enqueue_style( 'grid', get_stylesheet_uri() );	
	
	
	wp_register_style('slideShow', get_template_directory_uri() . '/asset/css/slideShow.css' );
	$dependencies = array('slideShow');
	wp_enqueue_style( 'slideShow', get_stylesheet_uri() );
	
	
	wp_register_style('BusquedaStyle', get_template_directory_uri() . '/asset/css/style-Busqueda.css' );
	$dependencies = array('BusquedaStyle');
	wp_enqueue_style( 'BusquedaStyle', get_stylesheet_uri() );
	

	wp_register_style('Post_relacionados_Categoria_Style', get_template_directory_uri() . '/asset/css/style-post-relacionadosCategoria.css' );
	$dependencies = array('Post_relacionados_Categoria_Style');
	wp_enqueue_style( 'Post_relacionados_Categoria_Style', get_stylesheet_uri() );
	

// $dependencies1 = array('jquery');
// wp_enqueue_script('jquery', get_template_directory_uri().'/jquery/jquery-3.3.1.min.js', $dependencies1, '', true );	
	
	
// $dependencies1 = array('SlideShow');
// wp_enqueue_script('SlideShow', get_template_directory_uri().'asset/js/Slideshow.js', $dependencies1, '', true );	
		
// $dependencies2 = array('Scroollefect');
// wp_enqueue_script('Scroollefect', get_template_directory_uri().'asset/js/Scroollefect.js', $dependencies2, '', true );	
	
}
add_action( 'wp_enqueue_scripts', 'CoreWeb_scripts' );




function CoreWeb_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'CoreWeb_body_classes' );



function CoreWeb_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

/**
 * Custom template tags for this theme.
 */

 require get_template_directory() .'/inc/template-tags.php';

/**
 * Customizer additions.
 */require get_template_directory() .'/inc/customizer.php';


 function CoreWeb_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

	if ( 'page' === get_post_type() ) {
		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'CoreWeb_content_image_sizes_attr', 10 , 2 );






function CoreWeb_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'CoreWeb_post_thumbnail_sizes_attr', 10 , 3 );






function CoreWeb_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'CoreWeb_widget_tag_cloud_args' );






#anclaje de previo y next PAGINACION SIMPLE


#paginacion avansada
function pagination($pages = '', $range = 2){
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class='pagination justify-content-center'>";
		 previous_posts_link('<<< previous');
		 
		 
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
          for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {

                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
next_posts_link('next >>>');
		 
		 echo "</div>\n";
     }
}


function related_after_content( $content ){
    
    if ( !is_singular('post') ) return $content;	
	
	$cad			= "";
	$template_li 	= '<li>
							<a class="thumb_rel" href="{url}">{thumb}</a>
							<a class="title_rel" href="{url}">{title}</a>
						</li>';
	$template_rel	= '<div class="rel_posts">
							<h3>Artículos Relacionados</h3>
							<ul>
								{list}
							</ul>
					   </div>';

    $terms = get_the_terms( get_the_ID(), 'category');
    $categ = array();
    
    if ( $terms )
    {
    	foreach ($terms as $term) 
    	{
    		$categ[] = $term->term_id;
    	}
    }
    else{
    	return $content;
    }

    $loop	= new WP_QUERY(array(
    				'category__in'		=> $categ,
    				'posts_per_page'	=> 4,
    				'post__not_in'		=>array(get_the_ID()),
    				'orderby'			=>'rand'
    				));

    if ( $loop->have_posts() )
    {

    	while ( $loop->have_posts() )
    	{
    		$loop->the_post();

    		$search	 = Array('{url}','{thumb}','{title}');
	  		$replace = Array(get_permalink(),get_the_post_thumbnail(),get_the_title());
    	
    		$cad .= str_replace($search,$replace, $template_li);
    	}

    	if ( $cad ) 
    	{
		  	$content .= str_replace('{list}', $cad, $template_rel);
    	}

    }
   	wp_reset_query();

    return $content;
}

add_filter( 'the_content', 'related_after_content'); 	



#Agregar puntos al final del extracto
function custom_excerpt_more($more) {
    return '........';
}
add_filter('excerpt_more', 'custom_excerpt_more');








#Eliminar basura del área head
	// remove_action('wp_head', 'rsd_link');
	// remove_action('wp_head', 'wp_generator');
	// remove_action('wp_head', 'feed_links', 2);
	// remove_action('wp_head', 'index_rel_link');
	// remove_action('wp_head', 'wlwmanifest_link');
	// remove_action('wp_head', 'feed_links_extra', 3);
	// remove_action('wp_head', 'start_post_rel_link', 10, 0);
	// remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	// remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);



#activar solo cuando la pagina este en mantenimiento

#function wp_maintenance_mode(){
	#if(!current_user_can('edit_themes') || !is_user_logged_in()){
		#wp_die('Esta página se encuentra en mantenimiento, por favor, inténtelo de nuevo más tarde.', 'Esta página se encuentra en mantenimiento, por favor, inténtelo de nuevo más tarde.', array('response' => '503'));
	#}
#}

#add_action('get_header','wp_maintenance_mode');



?>


<?php

function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            width: auto !important;
            background-image: url("<?php echo get_stylesheet_directory_uri();?>/images/logo.png") !important;
            background-size: auto !important;
        }
    </style>
<?php 
}
add_action( 'login_enqueue_scripts', 'my_login_logo' );

?>
