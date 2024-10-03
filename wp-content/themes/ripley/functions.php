<?php
/****************************
*
* Ripley v1.0.1 - A Bravada Child Theme
* (c) 2024 Cryout Creations
* www.cryoutcreations.eu
*
*****************************/

/**
 * Load additional theme files
 */
require_once( get_stylesheet_directory() . '/includes/admin.php' );
require_once( get_stylesheet_directory() . '/includes/options.php' );
require_once( get_stylesheet_directory() . '/includes/notices.php' );
require_once( get_stylesheet_directory() . "/includes/custom-styles.php" );

/**
 * Enqueue parent styling
 */
function ripley_child_styling(){
	wp_enqueue_style( 'bravada-main', get_template_directory_uri() . '/style.css', array(), _CRYOUT_THEME_VERSION );  // restore correct parent stylesheet
	wp_enqueue_style( 'ripley', get_stylesheet_directory_uri() . '/style.css', array( 'bravada-main' ), _CRYOUT_THEME_VERSION  ); 		// enqueue child stylesheet
}
add_action( 'wp_enqueue_scripts', 'ripley_child_styling' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function ripley_setup() {

	// Add support for flexible headers
	add_theme_support( 'custom-header', array(
		'default-image'	=> get_stylesheet_directory_uri() . '/resources/images/headers/ripley.jpg',
	));

	// Default custom headers packaged with the theme.
	register_default_headers( array(
		'ripley' => array(
			'url' => '%2$s/resources/images/headers/ripley.jpg',
			'thumbnail_url' => '%2$s/resources/images/headers/ripley.jpg',
			'description' => __( 'Ripley', 'ripley' )
		),
	) );

	// Filters
	add_filter( 'bravada_custom_styles', 'ripley_custom_styles' );
	add_filter( 'cryout_theme_description', 'ripley_custom_description' );
	add_filter( 'cryout_admin_version', 'ripley_admin_version_output' );

	// Initialize first time notice
	new Cryout_Notice( array(
		'slug' => 'ripley',
		'strings' => array(
			// translators: %1 is theme name, %2 is next string
			1 => esc_html__( 'It appears that you might have already configured %1$s. For best results it is recommended to %2$s upon child theme activation.', 'ripley' ),
			2 => esc_html__( 'reset the theme settings', 'ripley' ),
			3 => esc_html__( 'If you have already reset the options it is safe to dismiss this message.', 'ripley' ),
			4 => esc_html__( 'Do not display again', 'ripley' ),
		),
	) );

} // ripley_setup()
add_action( 'after_setup_theme', 'ripley_setup' );


/* FIN */