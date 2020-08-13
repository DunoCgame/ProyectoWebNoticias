<?php


if ( ! function_exists( 'setup' ) ) :


function setup() {

	load_theme_textdomain( 'CoreWeb' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 *
	 *  @since Twenty Sixteen 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'menu' => __( 'menu', 'CoreWeb' ),
		'social'  => __( 'Social', 'CoreWeb' ),
		'menu2'  => __( 'menusidebar', 'CoreWeb' ),
	) );

#add .active class to link menu item
add_filter('nav_menu_link_attributes', 'clasemenu',10,30);


function clasemenu($atts,$item,$args){
	$class='link ';
	$atts['class'] = $class;
	return $atts;
}

#add .active class to active menu item
// add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
// function special_nav_class($classes, $item){
     // if( in_array('current-menu-item', $classes) ){
             // $classes['class'] = 'active ';
     // }
     // return $classes;
// }


	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
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

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', CoreWeb_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // CoreWeb_setup
add_action( 'after_setup_theme', 'setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Twenty Sixteen 1.0
 */
function CoreWeb_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'CoreWeb_content_width', 840 );
}
add_action( 'after_setup_theme', 'CoreWeb_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
 
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
/**
 * Register Google fonts for Twenty Sixteen.
 *
 * Create your own CoreWeb_fonts_url() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function CoreWeb_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'CoreWeb' ) ) {
		$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'CoreWeb' ) ) {
		$fonts[] = 'Montserrat:400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
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

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */
function CoreWeb_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'CoreWeb_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
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






// $dependencies1 = array('jquery');
// wp_enqueue_script('jquery', get_template_directory_uri().'/jquery/jquery-3.3.1.min.js', $dependencies1, '', true );	
	
	
// $dependencies1 = array('SlideShow');
// wp_enqueue_script('SlideShow', get_template_directory_uri().'asset/js/Slideshow.js', $dependencies1, '', true );	
		
// $dependencies2 = array('Scroollefect');
// wp_enqueue_script('Scroollefect', get_template_directory_uri().'asset/js/Scroollefect.js', $dependencies2, '', true );	
	








}
add_action( 'wp_enqueue_scripts', 'CoreWeb_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
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

/**
 * Converts a HEX value to RGB.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
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

 require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */require get_template_directory() . '/inc/customizer.php';

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

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function CoreWeb_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'CoreWeb_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 * @since Twenty Sixteen 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array A new modified arguments.
 */
function CoreWeb_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'CoreWeb_widget_tag_cloud_args' );





#activar solo cuando la pagina este en mantenimiento

#function wp_maintenance_mode(){
	#if(!current_user_can('edit_themes') || !is_user_logged_in()){
		#wp_die('Esta página se encuentra en mantenimiento, por favor, inténtelo de nuevo más tarde.', 'Esta página se encuentra en mantenimiento, por favor, inténtelo de nuevo más tarde.', array('response' => '503'));
	#}
#}

#add_action('get_header','wp_maintenance_mode');





