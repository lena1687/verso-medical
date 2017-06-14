<?php
/**
 * verso-medical functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package verso-medical
 */
/*функция для проверки acf: включен ли он, если да - то выводит значение из админки*/

function acfcheck($name_field, $id) {
    $error = "Plagin deactive";
    if(function_exists("get_field")){
        return the_field($name_field, $id);
    } else {
        echo $error;
    }
}

/*удаляем странный margin 32px*/
add_action('get_header', 'remove_admin_login_header');

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

/*подключаем логотип*/

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 40,
        'width'       => 40,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );




if ( ! function_exists( 'verso_medical_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function verso_medical_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on verso-medical, use a find and replace
	 * to change 'verso-medical' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'verso-medical', get_template_directory() . '/languages' );

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
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'verso-medical' ),
	) );
/**
 * регистрация меню с гитхаб пример https://github.com/dupkey/bs4navwalker
 */
require get_template_directory() . '/inc/bs4navwalker/bs4navwalker.php';




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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'verso_medical_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'verso_medical_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function verso_medical_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'verso_medical_content_width', 640 );
}
add_action( 'after_setup_theme', 'verso_medical_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function verso_medical_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'verso-medical' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'verso-medical' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'verso_medical_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function my_scripts_method() { /**загружаемые скрипты**/
    wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js',array(), '3.2.1', true );
    wp_register_script( 'tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array( 'jquery' ), '3.3.7', true );
    wp_register_script( 'bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
    wp_register_script( 'jquery.fancybox.min', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array( 'jquery' ), false, true );
    wp_register_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'tether' );
    wp_enqueue_script( 'jquery.fancybox.min' );
    wp_enqueue_script( 'bootstrap.min' );
    wp_enqueue_script( 'script' );
   }

/**загружаемые стили**/
function theme_name_styles() {
    wp_register_style( 'bootstrap-style.min', get_template_directory_uri() . '/assets/css/bootstrap-style.min.css', NULL, '4.0.0', 'all' );
    wp_register_style( 'bootstrap-grid.min', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css', NULL, '4.0.0', 'all' );
    wp_register_style( 'jquery.fancybox.min', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', NULL, '4.0.0', 'all' );
    wp_enqueue_style( 'bootstrap-style.min' );
    wp_enqueue_style( 'bootstrap-grid.min' );
    wp_enqueue_style( 'jquery.fancybox.min' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

  }
  /**загружаем стили и скрипты**/
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
add_action( 'wp_enqueue_scripts','theme_name_styles' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';





?>