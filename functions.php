<?php
/**
 * Panda functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Panda
 */

if ( ! function_exists( 'panda_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function panda_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Panda, use a find and replace
		 * to change 'panda' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'panda', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'panda' ),
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
		add_theme_support( 'custom-background', apply_filters( 'panda_custom_background_args', array(
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
add_action( 'after_setup_theme', 'panda_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function panda_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'panda_content_width', 640 );
}
add_action( 'after_setup_theme', 'panda_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function panda_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'panda' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'panda' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'panda_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function panda_scripts() {

	wp_enqueue_style( 'space-mono', 'https://fonts.googleapis.com/css?family=Space+Mono:400,400i,700,700i', false ); // google font Space Mono

	wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:600,700,800', false ); // google font Space Mono

	wp_enqueue_style( 'bootstrap-styles', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' ); //bootstrap css

	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', true ); //bootstrap js

	wp_enqueue_style( 'fontawesome-styles', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' ); //fontawesome 5

	wp_enqueue_style( 'panda-style', get_stylesheet_uri() ); // custom css

	wp_enqueue_script( 'panda-js', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0.0', true );

	wp_enqueue_script( 'panda-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'panda-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'panda_scripts' );

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

// CUSTOM META BOX SCRIPTS FOR OTW PORTFOLIO

// initialize meta box
function OTW_thumbnail() {
    	add_meta_box(
    		'OTW_Thumbnail', // $id
    		'OTW thumbnail', // $title
    		'show_otw_thumbnail', // $callback
    		'otw-portfolio', // $screen
    		'normal', // $context
    		'high' // $priority
    	);
    }
    add_action( 'add_meta_boxes', 'OTW_thumbnail' );

// to display custom fields
function show_otw_thumbnail() {
    	global $post;
    		$meta = get_post_meta( $post->ID, 'OTW_Thumbnail_meta', true ); ?>

    	<input type="hidden" name="otw_meta_box" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

	<!-- image upload field -->
       <p>
    	<label for="OTW_Thumbnail_meta[image]">Image Upload</label><br>
    	<input type="text" name="OTW_Thumbnail_meta[image]" id="OTW_Thumbnail_meta[image]" class="meta-image regular-text" value="<?php echo $meta['image']; ?>">
    	<input type="button" class="button image-upload" value="Browse">
    </p>
    <div class="image-preview"><img src="<?php echo $meta['image']; ?>" style="max-width: 250px;"></div>
    <!-- end image upload field -->


	<script>
    jQuery(document).ready(function ($) {
      // Instantiates the variable that holds the media library frame.
      var meta_image_frame;
      // Runs when the image button is clicked.
      $('.image-upload').click(function (e) {
        // Get preview pane
        var meta_image_preview = $(this).parent().parent().children('.image-preview');
        // Prevents the default action from occuring.
        e.preventDefault();
        var meta_image = $(this).parent().children('.meta-image');
        // If the frame already exists, re-open it.
        if (meta_image_frame) {
          meta_image_frame.open();
          return;
        }
        // Sets up the media library frame
        meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
          title: meta_image.title,
          button: {
            text: meta_image.button
          }
        });
        // Runs when an image is selected.
        meta_image_frame.on('select', function () {
          // Grabs the attachment selection and creates a JSON representation of the model.
          var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
          // Sends the attachment URL to our custom image input field.
          meta_image.val(media_attachment.url);
          meta_image_preview.children('img').attr('src', media_attachment.url);
        });
        // Opens the media library frame.
        meta_image_frame.open();
      });
    });
  </script>

    	<?php }

// save meta box settings to database

 function save_your_fields_meta( $post_id ) {
    	// verify nonce
    	if ( !wp_verify_nonce( $_POST['otw_meta_box'], basename(__FILE__) ) ) {
    		return $post_id;
    	}
    	// check autosave
    	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    		return $post_id;
    	}
    	// check permissions
    	if ( 'page' === $_POST['post_type'] ) {
    		if ( !current_user_can( 'edit_page', $post_id ) ) {
    			return $post_id;
    		} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
    			return $post_id;
    		}
    	}

    	$old = get_post_meta( $post_id, 'OTW_Thumbnail_meta', true );
    	$new = $_POST['OTW_Thumbnail_meta'];

    	if ( $new && $new !== $old ) {
    		update_post_meta( $post_id, 'OTW_Thumbnail_meta', $new );
    	} elseif ( '' === $new && $old ) {
    		delete_post_meta( $post_id, 'OTW_Thumbnail_meta', $old );
    	}
    }

    add_action( 'save_post', 'save_your_fields_meta' );

