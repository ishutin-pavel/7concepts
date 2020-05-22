<?php

if ( ! function_exists( 'concepts_setup' ) ) :
	function concepts_setup() {
		load_theme_textdomain( 'concepts', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'concepts' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'concepts_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

	}
endif;
add_action( 'after_setup_theme', 'concepts_setup' );

function concepts_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'concepts_content_width', 640 );
}
add_action( 'after_setup_theme', 'concepts_content_width', 0 );

function concepts_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'concepts' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'concepts' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'concepts_widgets_init' );

function concepts_scripts() {
	wp_enqueue_style( 'raleway', get_template_directory_uri() . '/fonts/raleway/stylesheet.css' );
	wp_enqueue_style( 'roboto', get_template_directory_uri() . '/fonts/roboto/stylesheet.css' );
	wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/libs/OwlCarousel2/dist/assets/owl.carousel.css' );
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/libs/OwlCarousel2/dist/assets/owl.theme.default.css' );
	wp_enqueue_style( 'fancybox-css', get_template_directory_uri() . '/libs/fancybox/jquery.fancybox.css' );
	wp_enqueue_style( 'modal-css', get_template_directory_uri() . '/libs/jquery-modal/jquery.modal.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'concepts-style', get_stylesheet_uri() );


	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/libs/jQuery/jquery-3.3.1.min.js', array(), null, true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/libs/bootstrap/js/bootstrap.min.js', array(), null, true );
	wp_enqueue_script( 'pagescroll2id', get_template_directory_uri() . '/libs/pagescroll2id/jquery.malihu.PageScroll2id.js', array(), null, true );
	wp_enqueue_script( 'fancybox-js', get_template_directory_uri() . '/libs/fancybox/jquery.fancybox.js', array(), '20151215', true );
	wp_enqueue_script( 'mousewheel', get_template_directory_uri() . '/libs/jQuery/jquery.mousewheel-3.0.6.pack.js', array(), null, true );
	wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/libs/OwlCarousel2/dist/owl.carousel.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'modal-js', get_template_directory_uri() . '/libs/jquery-modal/jquery.modal.min.js', array(), null, true );
	wp_enqueue_script( 'maskedinput', get_template_directory_uri() . '/libs/maskedinput/jquery.maskedinput.min.js', array(), null, true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), null, true );


	wp_enqueue_script( 'concepts-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'concepts_scripts' );


require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Основные настройки',
		'menu_title'	=> 'Настройки темы',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

function add_additional_class_on_li($classes, $item, $args) {
    if($args->add_li_class) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="menu__link" ', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');
