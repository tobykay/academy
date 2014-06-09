<?php
/**
 * Modestas functions and definitions
 *
 * @package Modestas
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'modestas_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function modestas_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Modestas, use a find and replace
	 * to change 'modestas-' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'modestas-', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'modestas-' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'modestas_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // modestas_setup
add_action( 'after_setup_theme', 'modestas_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function modestas_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'modestas-' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'modestas_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function modestas_scripts() {
	
	/* styles */
	wp_enqueue_style( 'modestas--style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'modestas--main', get_template_directory_uri() . '/css/main.css' );
	
	wp_enqueue_style( 'modestas--media', get_template_directory_uri() . '/css/media.css' );
	
	wp_enqueue_style( 'modestas--fa', get_template_directory_uri() . '/css/font-awesome.css' );
	
	wp_enqueue_style( 'modestas--lightbox', get_template_directory_uri() . '/css/magnific-popup.css' );
	
	wp_enqueue_style( 'modestas--owl', get_template_directory_uri() . '/css/owl.carousel.css' );
	wp_enqueue_style( 'modestas--owl-stransitions', get_template_directory_uri() . '/css/owl.transitions.css' );
	
	/* scripts */

	wp_enqueue_script( 'slides', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'modestas--main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'modestas_scripts' );

/*
 * Enqueue Admin Scripts
 */
function admin_modestas_scripts() {
	wp_enqueue_script( 'admin-formats', get_template_directory_uri() . '/admin/js/admin-formats.js', array('jquery'), '1.0', true );
}
add_action( 'admin_enqueue_scripts', 'admin_modestas_scripts' );

/*
 * Enqueue Google Fonts
 */
function mytheme_fonts() {
    $protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'mytheme-opensans', "$protocol://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700" );
}
add_action( 'wp_enqueue_scripts', 'mytheme_fonts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Remove top wp admin bar
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Add option tree.
 */
add_filter( 'ot_theme_mode', '__return_true' );
/* This will hide/show the settings & documentation pages. */
add_filter( 'ot_show_pages', '__return_false' );
/* This will hide the "New Layout" section on the Theme Options page. */
add_filter( 'ot_show_new_layout', '__return_false' );
load_template( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
// auto import theme options
function mytheme_import_default_settings() {
	$theme_options_file = trailingslashit( get_template_directory() ) . 'option-tree/theme-options.php';
	if( isset( $_GET['activated'] ) && get_option( 'mytheme_was_installed', false ) == false && file_exists($theme_options_file)) {
		load_template( $theme_options_file );
	}
}
add_action( 'after_setup_theme', 'mytheme_import_default_settings' );

/**
 * Meta Boxes
 */
if ( is_admin() ) {
	
	load_template( trailingslashit( get_template_directory() ) . 'admin/admin-meta-boxes.php' );
	
}

/*
 * Ajax
 */
function your_function_name() {
	
	// embed the javascript file that makes the AJAX request
    wp_enqueue_script( 'modestas-ajax', get_template_directory_uri() . '/js/ajax.js', array('jquery'), '1.0', true );
	
	// declare the URL to the file that handles the AJAX request (wp-admin/admin-ajax.php)
    wp_localize_script( 'modestas-ajax', 'root', array( 'ajax' => admin_url( 'admin-ajax.php' ) ) );
	
}
add_action('template_redirect', 'your_function_name');

function get_my_option() {
	
	/*
	$args = array(
		'posts_per_page' => 6,
		'offset'=> 6 * (int)$_POST['page'],
	);
	*/
	
	$args = $_POST;
	$args['posts_per_page'] = 6;
	$args['offset'] = 6 * (int)$_POST['page'];
	$args['post_status'] = 'publish';
	$args['search'] = get_search_query();
	
    $posts = query_posts( $args );
	
	ob_start();
	while ( have_posts() ) : the_post();
		
		get_template_part( 'content', 'page' );
		
	endwhile;
	$content = ob_get_contents();
	ob_end_clean();
	
	echo json_encode(
		array(
			'html' => $content,
			'total' => count($posts)
		)
	);
    exit;
}

add_action("wp_ajax_nopriv_get_my_option", "get_my_option");
add_action("wp_ajax_get_my_option", "get_my_option");

/*
 * Google Analytic code
 */

add_action('wp_footer', 'add_googleanalytics');
function add_googleanalytics() {
	if(ot_get_option('google_id')) {
		echo "
			<script type='text/javascript'>

			  var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', '" . ot_get_option('google_id') . "']);
			  _gaq.push(['_trackPageview']);

			  (function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();

			</script>
		";
	}
}

add_action('wp_head', 'add_custom_css');
function add_custom_css() {
	if(ot_get_option('custom_css')) {
		echo '<style>';
		echo ot_get_option('custom_css');
		echo '</style>';
	}
}


/* Header options */
function bw_header_options() {
    require get_template_directory() . '/header-options.php';
}
add_action( 'wp_head', 'bw_header_options' );



function new_excerpt_more( $more ) {
	return ' <br><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/*
 * Human time
 */
function human_timing($time) {

    $time = time() - $time; // to get the time since that moment

    $tokens = array (
        31536000 => __( 'year', 'modestas-' ),
        2592000 => __( 'month', 'modestas-' ),
        604800 => __( 'week', 'modestas-' ),
        86400 => __( 'day', 'modestas-' ),
        3600 => __( 'hour', 'modestas-' ),
        60 => __( 'minute', 'modestas-' ),
        1 => __( 'second', 'modestas-' )
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
    }

}

/*
 * Get image size
 */
function custom_get_attachment_id( $guid ) {
	
	global $wpdb;

	/* nothing to find return false */
	if ( ! $guid ) {
		return false;
	}

	/* get the ID */
	$id = $wpdb->get_var(
		$wpdb->prepare(
			"
			SELECT  p.ID
			FROM    $wpdb->posts p
			WHERE   p.guid = %s
			AND p.post_type = %s
			",
			$guid,
			'attachment'
		)
	);

	/* the ID was not found, try getting it the expensive WordPress way */
	if ( $id == 0 )
	$id = url_to_postid( $guid );

	return $id;
}

/**
 * Theme image sizes
 */
require get_template_directory() . '/inc/theme-crop.php';

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

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
