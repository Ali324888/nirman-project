<?php
/**
 * Creation functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Creation
 */

if ( ! function_exists( 'creation_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function creation_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Creation, use a find and replace
		 * to change 'creation' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'creation', get_template_directory() . '/languages' );

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
			'primary-menu' => __( 'Primary-menu' ),
			'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
            
		) );

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
		add_theme_support( 'custom-background', apply_filters( 'creation_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'creation_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function creation_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'creation_content_width', 640 );
}
add_action( 'after_setup_theme', 'creation_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function creation_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'creation' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'creation' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
		'name'          => esc_html__( 'header top bar', 'creation' ),
		'id'            => 'header-1',
		'description'   => esc_html__( 'Add widgets here.', 'creation' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'creation_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function creation_scripts() {
	wp_enqueue_style( 'creation-style', get_template_directory_uri() .'/assets/css/style.css' );
	wp_enqueue_style( 'creation-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' , array() , '3.3.7' );
	wp_enqueue_style( 'creation-owl carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css' );
	wp_enqueue_style( 'creation-animate', get_template_directory_uri() . '/assets/css/animate.min.css' );
	wp_enqueue_style( 'creation-responsive', get_template_directory_uri() .'/assets/css/responsive.css' ,false);
	
	wp_enqueue_style( 'creation-font', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'creation-skin', get_template_directory_uri() . '/assets/css/skins/skin-1.css' );
	wp_enqueue_script( 'creation-jquery-min', get_template_directory_uri() . '/assets/js/jquery.min.js', false );
	wp_enqueue_script( 'creation-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', false );
	wp_enqueue_script( 'creation-custom', get_template_directory_uri() . '/assets/js/custom.js', false);
	wp_enqueue_script( 'creation-owlcarousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', false );
	wp_enqueue_script( 'creation-waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', false);
	wp_enqueue_script( 'creation-counter-up', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', false );
	wp_enqueue_script( 'creation-jquery-isotops', get_template_directory_uri() . '/assets/js/jquery.isotope.min.js', false );
	wp_enqueue_script( 'creation-custom-isotops', get_template_directory_uri() . '/assets/js/custom-isotop.js', false );
	wp_enqueue_script( 'creation-free-quote-form', get_template_directory_uri() . '/assets/js/free-quote-form.js', false );
	wp_enqueue_script( 'creation-style-switcher', get_template_directory_uri() . '/assets/js/style-switcher.js', false );

	
	




	wp_enqueue_script( 'creation-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'creation_scripts' );

// Custom settings
/*function creation_custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'creation_custom_settings_add_menu' );*/

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




// Register and load the widget
function creation_load_widget() {
    register_widget( 'creation_widget' );
}
add_action( 'widgets_init', 'creation_load_widget' );
 
// Creating the widget 
class creation_widget extends WP_Widget {
	 
	function __construct() {
		parent::__construct(
		 
		// Base ID of your widget
		'creation_widget', 
		 
		// Widget name will appear in UI
		__('social-links Widget', 'creation_widget_domain'), 
		 
		// Widget description
		array( 'description' => __( 'Social media links widget', 'creation_widget_domain' ), ) 
		);
	}
	 
	// Creating widget front-end
	 
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		 
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];
		 
		// This is where you run the code and display the output
		echo __( 'Hello, World!', 'creation_widget_domain' );
		?>
          
          	<div class="col-md-6 col-sm-6">
                <div class="top-bar-right">
	                <div class="social-links">
	                    <ul>
	                        <li><a href="#" ><i class="fa fa-facebook"></i></a></li>
	                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
	                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
	                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
	                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
	                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
	                    </ul>
	                </div> 
	            </div>
	        </div>

		<?php
		echo $args['after_widget'];
	}
       
	// Widget Backend 
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
		$title = $instance[ 'title' ];
		}
		else {
		$title = __( 'New title', 'creation_widget_domain' );
		}
		// Widget admin form
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'facebook_url' ); ?>"><?php _e( 'Facebook Url:' ); ?></label>
		<input type="checkbox" id="<?php echo $this->get_field_id( 'is_facebook_on' ); ?>" name="<?php echo $this->get_field_name( 'is_facebook_on' ); ?>" value="<?php echo esc_attr( $is_facebook_on ); ?>" >
		<input class="widefat" id="<?php echo $this->get_field_id( 'facebook_url' ); ?>" name="<?php echo $this->get_field_name( 'facebook_url' ); ?>" type="text" value="<?php echo esc_attr( $facebook_url ); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'twitter_url' ); ?>"><?php _e( 'Twitter Url:' ); ?></label>
		<input type="checkbox" id="<?php echo $this->get_field_id( 'is_twitter_on' ); ?>" name="<?php echo $this->get_field_name( 'is_twitter_on' ); ?>" value="<?php echo esc_attr( $is_twitter_on ); ?>" >
		<input class="widefat" id="<?php echo $this->get_field_id( 'twitter_url' ); ?>" name="<?php echo $this->get_field_name( 'twitter_url' ); ?>" type="text" value="<?php echo esc_attr( $twitter_url ); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'linkedin_url' ); ?>"><?php _e( 'LinkedIn Url:' ); ?></label>
		<input type="checkbox" id="<?php echo $this->get_field_id( 'is_linkedin_on' ); ?>" name="<?php echo $this->get_field_name( 'is_linkedin_on' ); ?>" value="<?php echo esc_attr( $is_linkedin_on ); ?>" >
		<input class="widefat" id="<?php echo $this->get_field_id( 'linkedin_url' ); ?>" name="<?php echo $this->get_field_name( 'linkedin_url' ); ?>" type="text" value="<?php echo esc_attr( $linkedin_url ); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'googleplus_url' ); ?>"><?php _e( 'Google-plus Url:' ); ?></label>
		<input type="checkbox" id="<?php echo $this->get_field_id( 'is_googleplus_on' ); ?>" name="<?php echo $this->get_field_name( 'is_googleplus_on' ); ?>" value="<?php echo esc_attr( $is_googleplus_on ); ?>" >
		<input class="widefat" id="<?php echo $this->get_field_id( 'googleplus_url' ); ?>" name="<?php echo $this->get_field_name( 'googleplus_url' ); ?>" type="text" value="<?php echo esc_attr( $googleplus_url ); ?>" />
		</p>
        <p>
		<label for="<?php echo $this->get_field_id( 'pinterest_url' ); ?>"><?php _e( 'Pinterest Url:' ); ?></label>
		<input type="checkbox" id="<?php echo $this->get_field_id( 'is_pinterest_on' ); ?>" name="<?php echo $this->get_field_name( 'is_pinterest_on' ); ?>" value="<?php echo esc_attr( $is_pinterest_on ); ?>" >
		<input class="widefat" id="<?php echo $this->get_field_id( 'pinterest_url' ); ?>" name="<?php echo $this->get_field_name( 'pinterest_url' ); ?>" type="text" value="<?php echo esc_attr( $pinterest_url ); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'instagram_url' ); ?>"><?php _e( 'Instagram Url:' ); ?></label>
		<input type="checkbox" id="<?php echo $this->get_field_id( 'is_instagram_on' ); ?>" name="<?php echo $this->get_field_name( 'is_instagram_on' ); ?>" value="<?php echo esc_attr( $is_instagram_on ); ?>" >
		<input class="widefat" id="<?php echo $this->get_field_id( 'instagram_url' ); ?>" name="<?php echo $this->get_field_name( 'instagram_url' ); ?>" type="text" value="<?php echo esc_attr( $instagram_url ); ?>"/>
		</p>
         <p>
		<label for="<?php echo $this->get_field_id( 'dribbble_url' ); ?>"><?php _e( 'Dribbble Url:' ); ?></label>
		<input type="checkbox" id="<?php echo $this->get_field_id( 'is_dribbble_on' ); ?>" name="<?php echo $this->get_field_name( 'is_dribbble_on' ); ?>" value="<?php echo esc_attr( $is_dribbble_on ); ?>" >
		<input class="widefat" id="<?php echo $this->get_field_id( 'dribbble_url' ); ?>" name="<?php echo $this->get_field_name( 'dribbble_url' ); ?>" type="text" value="<?php echo esc_attr( $dribbble_url ); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'youtube_url' ); ?>"><?php _e( 'YouTube Url:' ); ?></label>
		<input type="checkbox" id="<?php echo $this->get_field_id( 'is_youtube_on' ); ?>" name="<?php echo $this->get_field_name( 'is_youtube_on' ); ?>" value="<?php echo esc_attr( $is_youtube_on ); ?>" >
		<input class="widefat" id="<?php echo $this->get_field_id( 'youtube_url' ); ?>" name="<?php echo $this->get_field_name( 'youtube_url' ); ?>" type="text" value="<?php echo esc_attr( $youtube_url ); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'tumblr_url' ); ?>"><?php _e( 'Tumblr Url:' ); ?></label>
		<input type="checkbox" id="<?php echo $this->get_field_id( 'is_tumblr_on' ); ?>" name="<?php echo $this->get_field_name( 'is_tumblr_on' ); ?>" value="<?php echo esc_attr( $is_tumblr_on ); ?>" >
		<input class="widefat" id="<?php echo $this->get_field_id( 'tumblr_url' ); ?>" name="<?php echo $this->get_field_name( 'tumblr_url' ); ?>" type="text" value="<?php echo esc_attr( $tumblr_url ); ?>" />
		</p>

		<?php 
	}
	     
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		//$instance['is_fb_on'] = (!empty( $new_instance['is_fb_on'])) ? strip_tags($new_instance['is_fb_on']) : '';
		$instance['facebook_url'] = ( ! empty( $new_instance['facebook_url'] ) ) ? strip_tags( $new_instance['facebook_url'] ) : '';
		return $instance;
	}
} // Class creation_widget ends here
