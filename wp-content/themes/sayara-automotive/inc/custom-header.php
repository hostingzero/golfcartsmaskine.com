<?php
/**
 * Custom header implementation
 */

function sayara_automotive_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'sayara_automotive_custom_header_args', array(

		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1355,
		'height'                 => 135,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'sayara_automotive_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'sayara_automotive_custom_header_setup' );

if ( ! function_exists( 'sayara_automotive_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see sayara_automotive_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'sayara_automotive_header_style' );
function sayara_automotive_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$sayara_automotive_custom_css = "
        #masthead .main-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'sayara-automotive-basic-style', $sayara_automotive_custom_css );
	endif;
}
endif; // sayara_automotive_header_style