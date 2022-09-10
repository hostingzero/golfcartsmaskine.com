<?php
/**
 * Sayara Automotive: Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function sayara_automotive_custom_controls() {

	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-control.php' );
}

add_action( 'customize_register', 'sayara_automotive_custom_controls' );

function sayara_automotive_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	$wp_customize->add_panel( 'sayara_automotive_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'sayara-automotive' ),
	    'description' => __( 'Description of what this panel does.', 'sayara-automotive' ),
	) );

	// font array
	$sayara_automotive_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );
    
	//Color / Fonts Settings
	$wp_customize->add_section( 'sayara_automotive_typography', array(
    	'title'      => __( 'Color / Fonts Settings', 'sayara-automotive' ),
		'panel' => 'sayara_automotive_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'sayara_automotive_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_paragraph_color', array(
		'label' => __('Paragraph Color', 'sayara-automotive'),
		'section' => 'sayara_automotive_typography',
		'settings' => 'sayara_automotive_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('sayara_automotive_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sayara_automotive_paragraph_font_family', array(
	    'section'  => 'sayara_automotive_typography',
	    'label'    => __( 'Paragraph Fonts','sayara-automotive'),
	    'type'     => 'select',
	    'choices'  => $sayara_automotive_font_array,
	));

	$wp_customize->add_setting('sayara_automotive_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','sayara-automotive'),
		'section'	=> 'sayara_automotive_typography',
		'setting'	=> 'sayara_automotive_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'sayara_automotive_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_atag_color', array(
		'label' => __('"a" Tag Color', 'sayara-automotive'),
		'section' => 'sayara_automotive_typography',
		'settings' => 'sayara_automotive_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('sayara_automotive_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sayara_automotive_atag_font_family', array(
	    'section'  => 'sayara_automotive_typography',
	    'label'    => __( '"a" Tag Fonts','sayara-automotive'),
	    'type'     => 'select',
	    'choices'  => $sayara_automotive_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'sayara_automotive_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_li_color', array(
		'label' => __('"li" Tag Color', 'sayara-automotive'),
		'section' => 'sayara_automotive_typography',
		'settings' => 'sayara_automotive_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('sayara_automotive_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sayara_automotive_li_font_family', array(
	    'section'  => 'sayara_automotive_typography',
	    'label'    => __( '"li" Tag Fonts','sayara-automotive'),
	    'type'     => 'select',
	    'choices'  => $sayara_automotive_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'sayara_automotive_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_h1_color', array(
		'label' => __('H1 Color', 'sayara-automotive'),
		'section' => 'sayara_automotive_typography',
		'settings' => 'sayara_automotive_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('sayara_automotive_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sayara_automotive_h1_font_family', array(
	    'section'  => 'sayara_automotive_typography',
	    'label'    => __( 'H1 Fonts','sayara-automotive'),
	    'type'     => 'select',
	    'choices'  => $sayara_automotive_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('sayara_automotive_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_h1_font_size',array(
		'label'	=> __('H1 Font Size','sayara-automotive'),
		'section'	=> 'sayara_automotive_typography',
		'setting'	=> 'sayara_automotive_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'sayara_automotive_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_h2_color', array(
		'label' => __('h2 Color', 'sayara-automotive'),
		'section' => 'sayara_automotive_typography',
		'settings' => 'sayara_automotive_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('sayara_automotive_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sayara_automotive_h2_font_family', array(
	    'section'  => 'sayara_automotive_typography',
	    'label'    => __( 'h2 Fonts','sayara-automotive'),
	    'type'     => 'select',
	    'choices'  => $sayara_automotive_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('sayara_automotive_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_h2_font_size',array(
		'label'	=> __('h2 Font Size','sayara-automotive'),
		'section'	=> 'sayara_automotive_typography',
		'setting'	=> 'sayara_automotive_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'sayara_automotive_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_h3_color', array(
		'label' => __('h3 Color', 'sayara-automotive'),
		'section' => 'sayara_automotive_typography',
		'settings' => 'sayara_automotive_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('sayara_automotive_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sayara_automotive_h3_font_family', array(
	    'section'  => 'sayara_automotive_typography',
	    'label'    => __( 'h3 Fonts','sayara-automotive'),
	    'type'     => 'select',
	    'choices'  => $sayara_automotive_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('sayara_automotive_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_h3_font_size',array(
		'label'	=> __('h3 Font Size','sayara-automotive'),
		'section'	=> 'sayara_automotive_typography',
		'setting'	=> 'sayara_automotive_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'sayara_automotive_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_h4_color', array(
		'label' => __('h4 Color', 'sayara-automotive'),
		'section' => 'sayara_automotive_typography',
		'settings' => 'sayara_automotive_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('sayara_automotive_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sayara_automotive_h4_font_family', array(
	    'section'  => 'sayara_automotive_typography',
	    'label'    => __( 'h4 Fonts','sayara-automotive'),
	    'type'     => 'select',
	    'choices'  => $sayara_automotive_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('sayara_automotive_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_h4_font_size',array(
		'label'	=> __('h4 Font Size','sayara-automotive'),
		'section'	=> 'sayara_automotive_typography',
		'setting'	=> 'sayara_automotive_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'sayara_automotive_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_h5_color', array(
		'label' => __('h5 Color', 'sayara-automotive'),
		'section' => 'sayara_automotive_typography',
		'settings' => 'sayara_automotive_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('sayara_automotive_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sayara_automotive_h5_font_family', array(
	    'section'  => 'sayara_automotive_typography',
	    'label'    => __( 'h5 Fonts','sayara-automotive'),
	    'type'     => 'select',
	    'choices'  => $sayara_automotive_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('sayara_automotive_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_h5_font_size',array(
		'label'	=> __('h5 Font Size','sayara-automotive'),
		'section'	=> 'sayara_automotive_typography',
		'setting'	=> 'sayara_automotive_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'sayara_automotive_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_h6_color', array(
		'label' => __('h6 Color', 'sayara-automotive'),
		'section' => 'sayara_automotive_typography',
		'settings' => 'sayara_automotive_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('sayara_automotive_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sayara_automotive_h6_font_family', array(
	    'section'  => 'sayara_automotive_typography',
	    'label'    => __( 'h6 Fonts','sayara-automotive'),
	    'type'     => 'select',
	    'choices'  => $sayara_automotive_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('sayara_automotive_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_h6_font_size',array(
		'label'	=> __('h6 Font Size','sayara-automotive'),
		'section'	=> 'sayara_automotive_typography',
		'setting'	=> 'sayara_automotive_h6_font_size',
		'type'	=> 'text'
	));

	// background skin mode
	$wp_customize->add_setting('sayara_automotive_background_image_type',array(
        'default' => 'Transparent',
        'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control('sayara_automotive_background_image_type',array(
        'type' => 'radio',
        'label' => __('Background Skin Mode','sayara-automotive'),
        'section' => 'background_image',
        'choices' => array(
            'Transparent' => __('Transparent','sayara-automotive'),
            'Background' => __('Background','sayara-automotive'),
        ),
	) );
	
	// Add the Theme Color Option section.
	$wp_customize->add_section( 'sayara_automotive_theme_color_option', array( 
		'panel' => 'sayara_automotive_panel_id',
		'title' => esc_html__( 'Theme Color Option', 'sayara-automotive' )
	));

  	$wp_customize->add_setting( 'sayara_automotive_theme_color_first', array(
	    'default' => '#dd0004',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_theme_color_first', array(
  		'label' => __( 'First Color Option', 'sayara-automotive' ),
	    'description' => __('One can change complete theme color on just one click.', 'sayara-automotive'),
	    'section' => 'sayara_automotive_theme_color_option',
	    'settings' => 'sayara_automotive_theme_color_first',
  	)));

  	$wp_customize->add_setting( 'sayara_automotive_theme_color_second', array(
	    'default' => '#153655',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_theme_color_second', array(
  		'label' => __( 'Second Color Option', 'sayara-automotive' ),
	    'description' => __('One can change complete theme color on just one click.', 'sayara-automotive'),
	    'section' => 'sayara_automotive_theme_color_option',
	    'settings' => 'sayara_automotive_theme_color_second',
  	)));

  	// woocommerce Options
	$wp_customize->add_section( 'sayara_automotive_shop_page_options', array(
    	'title'      => __( 'Shop Page Settings', 'sayara-automotive' ),
		'panel' => 'sayara_automotive_panel_id'
	) );

	$wp_customize->add_setting('sayara_automotive_display_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_display_related_products',array(
       'type' => 'checkbox',
       'label' => __('Related Product','sayara-automotive'),
       'section' => 'sayara_automotive_shop_page_options',
    ));

    $wp_customize->add_setting('sayara_automotive_shop_products_border',array(
       'default' => true,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_shop_products_border',array(
       'type' => 'checkbox',
       'label' => __('Product Border','sayara-automotive'),
       'section' => 'sayara_automotive_shop_page_options',
    ));

    $wp_customize->add_setting('sayara_automotive_shop_page_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_shop_page_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Shop Page Sidebar','sayara-automotive'),
       'section' => 'sayara_automotive_shop_page_options',
    ));

    $wp_customize->add_setting('sayara_automotive_single_product_sidebar',array(
        'default' => true,
        'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
	));
	$wp_customize->add_control('sayara_automotive_single_product_sidebar',array(
     	'type' => 'checkbox',
      	'label' => __('Enable / Disable Single Product Sidebar','sayara-automotive'),
      	'section' => 'sayara_automotive_shop_page_options',
	));

	$wp_customize->add_setting( 'sayara_automotive_woocommerce_product_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'sayara_automotive_sanitize_choices',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sayara_automotive_woocommerce_product_per_columns', array(
		'label'    => __( 'Total Products Per Columns', 'sayara-automotive' ),
		'section'  => 'sayara_automotive_shop_page_options',
		'type'     => 'radio',
		'choices'  => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
		),
	) ) );

	$wp_customize->add_setting('sayara_automotive_woocommerce_product_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	));	
	$wp_customize->add_control('sayara_automotive_woocommerce_product_per_page',array(
		'label'	=> __('Total Products Per Page','sayara-automotive'),
		'section'	=> 'sayara_automotive_shop_page_options',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'sayara_automotive_shop_page_top_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	));
	$wp_customize->add_control( 'sayara_automotive_shop_page_top_padding',	array(
		'label' => esc_html__( 'Product Padding (Top Bottom)','sayara-automotive' ),
		'section' => 'sayara_automotive_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'sayara_automotive_shop_page_left_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	));
	$wp_customize->add_control( 'sayara_automotive_shop_page_left_padding',	array(
		'label' => esc_html__( 'Product Padding (Right Left)','sayara-automotive' ),
		'section' => 'sayara_automotive_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'sayara_automotive_shop_page_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	));
	$wp_customize->add_control('sayara_automotive_shop_page_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','sayara-automotive' ),
		'section' => 'sayara_automotive_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'sayara_automotive_shop_page_box_shadow',array(
		'default' => 0,
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	));
	$wp_customize->add_control('sayara_automotive_shop_page_box_shadow',array(
		'label' => esc_html__( 'Product Shadow','sayara-automotive' ),
		'section' => 'sayara_automotive_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'sayara_automotive_shop_button_padding_top',array(
		'default' => 9,
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	));
	$wp_customize->add_control('sayara_automotive_shop_button_padding_top',	array(
		'label' => esc_html__( 'Button Padding (Top Bottom)','sayara-automotive' ),
		'section' => 'sayara_automotive_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'sayara_automotive_shop_button_padding_left',array(
		'default' => 16,
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	));
	$wp_customize->add_control('sayara_automotive_shop_button_padding_left',array(
		'label' => esc_html__( 'Button Padding (Right Left)','sayara-automotive' ),
		'section' => 'sayara_automotive_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'sayara_automotive_shop_button_border_radius',array(
		'default' => 3,
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	));
	$wp_customize->add_control('sayara_automotive_shop_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius','sayara-automotive' ),
		'section' => 'sayara_automotive_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('sayara_automotive_position_product_sale',array(
        'default' => 'Right',
        'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control('sayara_automotive_position_product_sale',array(
        'type' => 'radio',
        'label' => __('Product Sale Position','sayara-automotive'),
        'section' => 'sayara_automotive_shop_page_options',
        'choices' => array(
            'Right' => __('Right','sayara-automotive'),
            'Left' => __('Left','sayara-automotive'),
        ),
	) );

	$wp_customize->add_setting( 'sayara_automotive_border_radius_product_sale_text',array(
		'default' => 50,
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	));
	$wp_customize->add_control('sayara_automotive_border_radius_product_sale_text', array(
        'label'  => __('Product Sale Border Radius','sayara-automotive'),
        'section'  => 'sayara_automotive_shop_page_options',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    ) );

    $wp_customize->add_setting('sayara_automotive_top_bottom_product_sale_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	));
	$wp_customize->add_control('sayara_automotive_top_bottom_product_sale_padding',array(
		'label'	=> __('Top / Bottom Product Sale Padding ','sayara-automotive'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'sayara_automotive_shop_page_options',
		'type'=> 'number'
	));

	$wp_customize->add_setting('sayara_automotive_left_right_product_sale_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	));
	$wp_customize->add_control('sayara_automotive_left_right_product_sale_padding',array(
		'label'	=> __('Left / Right Product Sale Padding','sayara-automotive'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'sayara_automotive_shop_page_options',
		'type'=> 'number'
	));

	$wp_customize->add_setting('sayara_automotive_product_sale_text_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float'
	));
	$wp_customize->add_control('sayara_automotive_product_sale_text_size',array(
		'label'	=> __('Product Sale Text Size','sayara-automotive'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'sayara_automotive_shop_page_options',
		'type'=> 'number'
	));

	$wp_customize->add_setting('sayara_automotive_shop_products_navigation',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'sayara_automotive_sanitize_choices'
    ));
    $wp_customize->add_control('sayara_automotive_shop_products_navigation',array(
       'type' => 'radio',
       'label' => __('Woocommerce Products Navigation','sayara-automotive'),
       'choices' => array(
            'Yes' => __('Yes','sayara-automotive'),
            'No' => __('No','sayara-automotive'),
        ),
       'section' => 'sayara_automotive_shop_page_options',
    ));

  	//Layout Settings
	$wp_customize->add_section( 'sayara_automotive_width_layout', array(
    	'title'      => __( 'Layout Settings', 'sayara-automotive' ),
		'panel' => 'sayara_automotive_panel_id'
	) );

	//Show /Hide search
	$wp_customize->add_setting( 'sayara_automotive_show_hide_search',array(
		'default' => true,
      	'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ) );
    $wp_customize->add_control('sayara_automotive_show_hide_search',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Search','sayara-automotive' ),
        'section' => 'sayara_automotive_width_layout'
    ));

    $wp_customize->add_setting('sayara_automotive_search_icon_changer',array(
		'default'	=> 'fas fa-search',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new sayara_automotive_Icon_Changer(
        $wp_customize,'sayara_automotive_search_icon_changer',array(
		'label'	=> __('Search Icon','sayara-automotive'),
		'transport' => 'refresh',
		'section'	=> 'sayara_automotive_width_layout',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'sayara_automotive_fixed_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ) );
    $wp_customize->add_control('sayara_automotive_fixed_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Enable / Disable Fixed Header','sayara-automotive' ),
        'section' => 'sayara_automotive_width_layout'
    ));

    $wp_customize->add_setting( 'sayara_automotive_fixed_header_padding_option', array(
		'default'=> '',
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	) );
	$wp_customize->add_control( 'sayara_automotive_fixed_header_padding_option', array(
		'label'       => esc_html__( 'Fixed Header Padding','sayara-automotive' ),
		'section'     => 'sayara_automotive_width_layout',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('sayara_automotive_loader_setting',array(
       'default' => false,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_loader_setting',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','sayara-automotive'),
       'section' => 'sayara_automotive_width_layout'
    ));

    $wp_customize->add_setting('sayara_automotive_preloader_types',array(
        'default' => 'Default',
        'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control('sayara_automotive_preloader_types',array(
        'type' => 'radio',
        'label' => __('Preloader Option','sayara-automotive'),
        'section' => 'sayara_automotive_width_layout',
        'choices' => array(
            'Default' => __('Default','sayara-automotive'),
            'Circle' => __('Circle','sayara-automotive'),
            'Two Circle' => __('Two Circle','sayara-automotive')
        ),
	) );

    $wp_customize->add_setting( 'sayara_automotive_loader_color_setting', array(
	    'default' => '#fff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_loader_color_setting', array(
  		'label' => __('Preloader Color Option', 'sayara-automotive'),
	    'section' => 'sayara_automotive_width_layout',
	    'settings' => 'sayara_automotive_loader_color_setting',
  	)));

  	$wp_customize->add_setting( 'sayara_automotive_loader_background_color', array(
	    'default' => '#000',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_loader_background_color', array(
  		'label' => __('Preloader Background Color Option', 'sayara-automotive'),
	    'section' => 'sayara_automotive_width_layout',
	    'settings' => 'sayara_automotive_loader_background_color',
  	)));

	$wp_customize->add_setting('sayara_automotive_theme_options',array(
    'default' => 'Default',
        'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control('sayara_automotive_theme_options',array(
        'type' => 'select',
        'label' => __('Container Box','sayara-automotive'),
        'description' => __('Here you can change the Width layout. ','sayara-automotive'),
        'section' => 'sayara_automotive_width_layout',
        'choices' => array(
            'Default' => __('Default','sayara-automotive'),
            'Wide Layout' => __('Wide Layout','sayara-automotive'),
            'Box Layout' => __('Box Layout','sayara-automotive'),
        ),
	) );

	$wp_customize->add_setting( 'sayara_automotive_post_image_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	) );
	$wp_customize->add_control( 'sayara_automotive_post_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','sayara-automotive' ),
		'section'     => 'sayara_automotive_width_layout',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'sayara_automotive_featured_image_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'sayara_automotive_sanitize_number_range',
	));
	$wp_customize->add_control('sayara_automotive_featured_image_box_shadow',array(
		'label' => esc_html__( 'Featured Image Shadow','sayara-automotive' ),
		'section' => 'sayara_automotive_width_layout',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'range'
	));

	// Button Settings
	$wp_customize->add_section( 'sayara_automotive_button_option', array(
		'title' => __('Button','sayara-automotive'),
		'panel' => 'sayara_automotive_panel_id',
	));

	$wp_customize->add_setting('sayara_automotive_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	));
	$wp_customize->add_control('sayara_automotive_top_bottom_padding',array(
		'label'	=> __('Top and Bottom Padding ','sayara-automotive'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'sayara_automotive_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting('sayara_automotive_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	));
	$wp_customize->add_control('sayara_automotive_left_right_padding',array(
		'label'	=> __('Left and Right Padding','sayara-automotive'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'sayara_automotive_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'sayara_automotive_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	) );
	$wp_customize->add_control( 'sayara_automotive_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','sayara-automotive' ),
		'section'     => 'sayara_automotive_button_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_section( 'sayara_automotive_general_option', array(
    	'title'      => __( 'Sidebar Settings', 'sayara-automotive' ),
		'panel' => 'sayara_automotive_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('sayara_automotive_layout_settings',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control('sayara_automotive_layout_settings',array(
        'type' => 'radio',
        'label' => __('Post Sidebar Layout','sayara-automotive'),
        'section' => 'sayara_automotive_general_option',
        'description' => __('This option work for blog page, blog single page, archive page and search page.','sayara-automotive'),
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','sayara-automotive'),
            'Right Sidebar' => __('Right Sidebar','sayara-automotive'),
            'One Column' => __('Full Column','sayara-automotive'),
            'Grid Layout' => __('Grid Layout','sayara-automotive')
        ),
	) );

	$wp_customize->add_setting('sayara_automotive_page_sidebar_option',array(
        'default' => 'One Column',
        'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control('sayara_automotive_page_sidebar_option',array(
        'type' => 'radio',
        'label' => __('Page Sidebar Layout','sayara-automotive'),
        'section' => 'sayara_automotive_general_option',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','sayara-automotive'),
            'Right Sidebar' => __('Right Sidebar','sayara-automotive'),
            'One Column' => __('Full Column','sayara-automotive')
        ),
	) );

	//Contact Details section
	$wp_customize->add_section('sayara_automotive_contact_details',array(
		'title'	=> __('Contact Details Section','sayara-automotive'),
		'description'	=> __('Add Header Content here','sayara-automotive'),
		'priority'	=> null,
		'panel' => 'sayara_automotive_panel_id',
	));

	//Show /Hide Topbar
	$wp_customize->add_setting( 'sayara_automotive_show_hide_topbar',array(
		'default' => false,
      	'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ) );
    $wp_customize->add_control('sayara_automotive_show_hide_topbar',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Top Header','sayara-automotive' ),
        'section' => 'sayara_automotive_contact_details'
    ));

	$wp_customize->add_setting('sayara_automotive_location_head',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_location_head',array(
		'label'	=> __('Add Location Text','sayara-automotive'),
		'section'	=> 'sayara_automotive_contact_details',
		'setting'	=> 'sayara_automotive_location_head',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('sayara_automotive_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('sayara_automotive_address',array(
		'label'	=> __('Add Location','sayara-automotive'),
		'section'	=> 'sayara_automotive_contact_details',
		'setting'	=> 'sayara_automotive_address',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('sayara_automotive_location_icon_changer',array(
		'default'	=> 'fas fa-map-marker-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new sayara_automotive_Icon_Changer(
        $wp_customize,'sayara_automotive_location_icon_changer',array(
		'label'	=> __('Location Icon','sayara-automotive'),
		'transport' => 'refresh',
		'section'	=> 'sayara_automotive_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('sayara_automotive_contact_head',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_contact_head',array(
		'label'	=> __('Add Contact Text','sayara-automotive'),
		'section'	=> 'sayara_automotive_contact_details',
		'setting'	=> 'sayara_automotive_contact_head',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('sayara_automotive_contact_no',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sayara_automotive_sanitize_phone_number'
	));	
	$wp_customize->add_control('sayara_automotive_contact_no',array(
		'label'	=> __('Add Contact no.','sayara-automotive'),
		'section'	=> 'sayara_automotive_contact_details',
		'setting'	=> 'sayara_automotive_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('sayara_automotive_mail_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));	
	$wp_customize->add_control('sayara_automotive_mail_address',array(
		'label'	=> __('Add Mail Address','sayara-automotive'),
		'section'	=> 'sayara_automotive_contact_details',
		'setting'	=> 'sayara_automotive_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('sayara_automotive_contact_icon_changer',array(
		'default'	=> 'fa fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new sayara_automotive_Icon_Changer(
        $wp_customize,'sayara_automotive_contact_icon_changer',array(
		'label'	=> __('Contact Icon','sayara-automotive'),
		'transport' => 'refresh',
		'section'	=> 'sayara_automotive_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('sayara_automotive_time_head',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_time_head',array(
		'label'	=> __('Add Time Text','sayara-automotive'),
		'section'	=> 'sayara_automotive_contact_details',
		'setting'	=> 'sayara_automotive_time_head',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('sayara_automotive_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('sayara_automotive_time',array(
		'label'	=> __('Add Time','sayara-automotive'),
		'section'	=> 'sayara_automotive_contact_details',
		'setting'	=> 'sayara_automotive_time',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('sayara_automotive_time_icon_changer',array(
		'default'	=> 'far fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new sayara_automotive_Icon_Changer(
        $wp_customize,'sayara_automotive_time_icon_changer',array(
		'label'	=> __('Time Icon','sayara-automotive'),
		'transport' => 'refresh',
		'section'	=> 'sayara_automotive_contact_details',
		'type'		=> 'icon'
	)));

	//Social Icons
	$wp_customize->add_section( 'sayara_automotive_social_icon' , array(
    	'title'      => __( 'Social Icons', 'sayara-automotive' ),
		'priority'   => null,
		'panel' => 'sayara_automotive_panel_id'
	) );

	$wp_customize->add_setting('sayara_automotive_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('sayara_automotive_facebook_url',array(
		'label'	=> __('Add Facebook link','sayara-automotive'),
		'section'	=> 'sayara_automotive_social_icon',
		'setting'	=> 'sayara_automotive_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('sayara_automotive_facebook_icon_changer',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new sayara_automotive_Icon_Changer(
        $wp_customize,'sayara_automotive_facebook_icon_changer',array(
		'label'	=> __('Facebook Icon','sayara-automotive'),
		'transport' => 'refresh',
		'section'	=> 'sayara_automotive_social_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('sayara_automotive_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('sayara_automotive_twitter_url',array(
		'label'	=> __('Add Twitter link','sayara-automotive'),
		'section'	=> 'sayara_automotive_social_icon',
		'setting'	=> 'sayara_automotive_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('sayara_automotive_twitter_icon_changer',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new sayara_automotive_Icon_Changer(
        $wp_customize,'sayara_automotive_twitter_icon_changer',array(
		'label'	=> __('Twitter Icon','sayara-automotive'),
		'transport' => 'refresh',
		'section'	=> 'sayara_automotive_social_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('sayara_automotive_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('sayara_automotive_insta_url',array(
		'label'	=> __('Add Instagram link','sayara-automotive'),
		'section'	=> 'sayara_automotive_social_icon',
		'setting'	=> 'sayara_automotive_insta_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('sayara_automotive_insta_icon_changer',array(
		'default'	=> 'fab fa-instagram',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new sayara_automotive_Icon_Changer(
        $wp_customize,'sayara_automotive_insta_icon_changer',array(
		'label'	=> __('Instagram Icon','sayara-automotive'),
		'transport' => 'refresh',
		'section'	=> 'sayara_automotive_social_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('sayara_automotive_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('sayara_automotive_youtube_url',array(
		'label'	=> __('Add Youtube link','sayara-automotive'),
		'section'	=> 'sayara_automotive_social_icon',
		'setting'	=> 'sayara_automotive_youtube_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('sayara_automotive_youtube_icon_changer',array(
		'default'	=> 'fab fa-youtube',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new sayara_automotive_Icon_Changer(
        $wp_customize,'sayara_automotive_youtube_icon_changer',array(
		'label'	=> __('Youtube Icon','sayara-automotive'),
		'transport' => 'refresh',
		'section'	=> 'sayara_automotive_social_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('sayara_automotive_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('sayara_automotive_linkedin_url',array(
		'label'	=> __('Add Linkedin link','sayara-automotive'),
		'section'	=> 'sayara_automotive_social_icon',
		'setting'	=> 'sayara_automotive_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('sayara_automotive_linkedin_icon_changer',array(
		'default'	=> 'fab fa-linkedin-in',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new sayara_automotive_Icon_Changer(
        $wp_customize,'sayara_automotive_linkedin_icon_changer',array(
		'label'	=> __('Linkedin Icon','sayara-automotive'),
		'transport' => 'refresh',
		'section'	=> 'sayara_automotive_social_icon',
		'type'		=> 'icon'
	)));
 
	// navigation menu 
	$wp_customize->add_section( 'sayara_automotive_navigation_menu' , array(
    	'title'      => __( 'Navigation Menus Settings', 'sayara-automotive' ),
		'priority'   => null,
		'panel' => 'sayara_automotive_panel_id'
	) );

	$wp_customize->add_setting('sayara_automotive_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	));
	$wp_customize->add_control('sayara_automotive_navigation_menu_font_size',array(
		'label'	=> __('Navigation Menus Font Size ','sayara-automotive'),
		'section'=> 'sayara_automotive_navigation_menu',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('sayara_automotive_menu_text_tranform',array(
        'default' => 'Default',
        'sanitize_callback' => 'sayara_automotive_sanitize_choices'
    ));
    $wp_customize->add_control('sayara_automotive_menu_text_tranform',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Text Transform','sayara-automotive'),
        'section' => 'sayara_automotive_navigation_menu',
        'choices' => array(
            'Default' => __('Default','sayara-automotive'),
            'Uppercase' => __('Uppercase','sayara-automotive'),
        ),
	) );

	$wp_customize->add_setting('sayara_automotive_menu_font_weight',array(
        'default' => 'Default',
        'sanitize_callback' => 'sayara_automotive_sanitize_choices'
    ));
    $wp_customize->add_control('sayara_automotive_menu_font_weight',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Font Weight','sayara-automotive'),
        'section' => 'sayara_automotive_navigation_menu',
        'choices' => array(
            'Default' => __('Default','sayara-automotive'),
            'Normal' => __('Normal','sayara-automotive'),
        ),
	) );

	//home page slider
	$wp_customize->add_section( 'sayara_automotive_slider' , array(
    	'title'      => __( 'Slider Settings', 'sayara-automotive' ),
		'priority'   => null,
		'panel' => 'sayara_automotive_panel_id'
	) );

	$wp_customize->add_setting('sayara_automotive_slider_arrows',array(
        'default' => false,
        'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
	));
	$wp_customize->add_control('sayara_automotive_slider_arrows',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide slider','sayara-automotive'),
      	'section' => 'sayara_automotive_slider',
	));

	$wp_customize->add_setting('sayara_automotive_slider_title',array(
       'default' => true,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_slider_title',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','sayara-automotive'),
       'section' => 'sayara_automotive_slider'
    ));

    $wp_customize->add_setting('sayara_automotive_slider_content',array(
       'default' => true,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_slider_content',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','sayara-automotive'),
       'section' => 'sayara_automotive_slider'
    ));

    $wp_customize->add_setting('sayara_automotive_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Button','sayara-automotive'),
       'section' => 'sayara_automotive_slider'
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'sayara_automotive_slide_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'sayara_automotive_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'sayara_automotive_slide_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'sayara-automotive' ),
			'section'  => 'sayara_automotive_slider',
			'type'     => 'dropdown-pages'
		) );

	}

	$wp_customize->add_setting( 'sayara_automotive_slider_speed',array(
		'default' => 3000,
		'sanitize_callback'    => 'sayara_automotive_sanitize_number_range',
	));
	$wp_customize->add_control( 'sayara_automotive_slider_speed',array(
		'label' => esc_html__( 'Slider Speed','sayara-automotive' ),
		'section' => 'sayara_automotive_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('sayara_automotive_slider_height_option',array(
		'default'=> 600,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_slider_height_option',array(
		'label'	=> __('Slider Height Option','sayara-automotive'),
		'section'=> 'sayara_automotive_slider',
		'type'=> 'number'
	));

    $wp_customize->add_setting('sayara_automotive_slider_content_option',array(
    'default' => 'Left',
        'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control('sayara_automotive_slider_content_option',array(
        'type' => 'select',
        'label' => __('Slider Content Layout','sayara-automotive'),
        'section' => 'sayara_automotive_slider',
        'choices' => array(
            'Center' => __('Center','sayara-automotive'),
            'Left' => __('Left','sayara-automotive'),
            'Right' => __('Right','sayara-automotive'),
        ),
	) );

	$wp_customize->add_setting('sayara_automotive_slider_button_text',array(
		'default'=> __('READ MORE','sayara-automotive'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_slider_button_text',array(
		'label'	=> __('Slider Button Text','sayara-automotive'),
		'section'=> 'sayara_automotive_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'sayara_automotive_slider_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'    => 'sayara_automotive_sanitize_number_range',
	) );
	$wp_customize->add_control( 'sayara_automotive_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','sayara-automotive' ),
		'section'     => 'sayara_automotive_slider',
		'type'        => 'range',
		'settings'    => 'sayara_automotive_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('sayara_automotive_slider_opacity_color',array(
      'default'              => 0.3,
      'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control( 'sayara_automotive_slider_opacity_color', array(
	'label'       => esc_html__( 'Slider Image Opacity','sayara-automotive' ),
	'section'     => 'sayara_automotive_slider',
	'type'        => 'select',
	'settings'    => 'sayara_automotive_slider_opacity_color',
	'choices' => array(
      '0' =>  esc_attr('0','sayara-automotive'),
      '0.1' =>  esc_attr('0.1','sayara-automotive'),
      '0.2' =>  esc_attr('0.2','sayara-automotive'),
      '0.3' =>  esc_attr('0.3','sayara-automotive'),
      '0.4' =>  esc_attr('0.4','sayara-automotive'),
      '0.5' =>  esc_attr('0.5','sayara-automotive'),
      '0.6' =>  esc_attr('0.6','sayara-automotive'),
      '0.7' =>  esc_attr('0.7','sayara-automotive'),
      '0.8' =>  esc_attr('0.8','sayara-automotive'),
      '0.9' =>  esc_attr('0.9','sayara-automotive')
	),
	));

	$wp_customize->add_setting('sayara_automotive_padding_top_bottom_slider_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	));
	$wp_customize->add_control('sayara_automotive_padding_top_bottom_slider_content',array(
		'label'	=> __('Top Bottom Slider Content Padding','sayara-automotive'),
		'section'=> 'sayara_automotive_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('sayara_automotive_padding_left_right_slider_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	));
	$wp_customize->add_control('sayara_automotive_padding_left_right_slider_content',array(
		'label'	=> __('Left Right Slider Content Padding','sayara-automotive'),
		'section'=> 'sayara_automotive_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('sayara_automotive_show_slider_image_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_show_slider_image_overlay',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Image Overlay Slider','sayara-automotive'),
       'section' => 'sayara_automotive_slider'
    ));

    $wp_customize->add_setting('sayara_automotive_color_slider_image_overlay', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sayara_automotive_color_slider_image_overlay', array(
		'label'    => __('Image Overlay Slider Color', 'sayara-automotive'),
		'section'  => 'sayara_automotive_slider',
		'settings' => 'sayara_automotive_color_slider_image_overlay',
	)));

	// About Us
	$wp_customize->add_section('sayara_automotive_about',array(
		'title'	=> __('About Us','sayara-automotive'),
		'description'	=> __('Add About Us Section below.','sayara-automotive'),
		'panel' => 'sayara_automotive_panel_id',
	));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$i = 0;
	$pst[]='Select';  
	foreach($post_list as $post){
		$pst[$post->post_title] = $post->post_title;
	}

	for ( $count = 1; $count < 4; $count++ ) {

		$wp_customize->add_setting( 'sayara_automotive_tab_pages' . $count, array(
			'sanitize_callback' => 'sayara_automotive_sanitize_choices'
		));
		$wp_customize->add_control( 'sayara_automotive_tab_pages' . $count, array(
			'label'    => __( 'Select Post', 'sayara-automotive' ),
			'section'  => 'sayara_automotive_about',
			'type'    => 'select',
			'choices' => $pst,
		));
	}

	//no Result Setting
	$wp_customize->add_section('sayara_automotive_no_result_setting',array(
		'title'	=> __('No Results Settings','sayara-automotive'),
		'panel' => 'sayara_automotive_panel_id',
	));	

	$wp_customize->add_setting('sayara_automotive_no_search_result_title',array(
		'default'=> __('Nothing Found','sayara-automotive'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_no_search_result_title',array(
		'label'	=> __('No Search Results Title','sayara-automotive'),
		'section'=> 'sayara_automotive_no_result_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('sayara_automotive_no_search_result_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','sayara-automotive'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_no_search_result_content',array(
		'label'	=> __('No Search Results Content','sayara-automotive'),
		'section'=> 'sayara_automotive_no_result_setting',
		'type'=> 'text'
	));

	//404 Page Setting
	$wp_customize->add_section('sayara_automotive_page_not_found_setting',array(
		'title'	=> __('Page Not Found Settings','sayara-automotive'),
		'panel' => 'sayara_automotive_panel_id',
	));	

	$wp_customize->add_setting('sayara_automotive_page_not_found_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_page_not_found_title',array(
		'label'	=> __('Page Not Found Title','sayara-automotive'),
		'section'=> 'sayara_automotive_page_not_found_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('sayara_automotive_page_not_found_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_page_not_found_content',array(
		'label'	=> __('Page Not Found Content','sayara-automotive'),
		'section'=> 'sayara_automotive_page_not_found_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('sayara_automotive_mobile_media',array(
		'title'	=> __('Mobile Media Settings','sayara-automotive'),
		'panel' => 'sayara_automotive_panel_id',
	));

	$wp_customize->add_setting('sayara_automotive_enable_disable_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_enable_disable_preloader',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','sayara-automotive'),
       'section' => 'sayara_automotive_mobile_media'
    ));

	$wp_customize->add_setting('sayara_automotive_enable_disable_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_enable_disable_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Sidebar','sayara-automotive'),
       'section' => 'sayara_automotive_mobile_media'
    ));

	$wp_customize->add_setting('sayara_automotive_enable_disable_topbar',array(
       'default' => false,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_enable_disable_topbar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Top Header','sayara-automotive'),
       'section' => 'sayara_automotive_mobile_media'
    ));

    $wp_customize->add_setting('sayara_automotive_enable_disable_fixed_header',array(
       'default' => false,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_enable_disable_fixed_header',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Fixed Header','sayara-automotive'),
       'section' => 'sayara_automotive_mobile_media'
    ));

    $wp_customize->add_setting('sayara_automotive_enable_disable_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_enable_disable_slider',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider','sayara-automotive'),
       'section' => 'sayara_automotive_mobile_media'
    ));

    $wp_customize->add_setting('sayara_automotive_show_hide_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_show_hide_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider Button','sayara-automotive'),
       'section' => 'sayara_automotive_mobile_media'
    ));

    $wp_customize->add_setting('sayara_automotive_enable_disable_scrolltop',array(
       'default' => false,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_enable_disable_scrolltop',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Scroll To Top','sayara-automotive'),
       'section' => 'sayara_automotive_mobile_media'
    ));

	//Blog Post
	$wp_customize->add_section('sayara_automotive_blog_post',array(
		'title'	=> __('Post Settings','sayara-automotive'),
		'panel' => 'sayara_automotive_panel_id',
	));	

	$wp_customize->add_setting('sayara_automotive_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','sayara-automotive'),
       'section' => 'sayara_automotive_blog_post'
    ));

    $wp_customize->add_setting('sayara_automotive_post_date_icon_changer',array(
		'default'	=> 'fa fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new sayara_automotive_Icon_Changer(
        $wp_customize,'sayara_automotive_post_date_icon_changer',array(
		'label'	=> __('Post Date Icon','sayara-automotive'),
		'transport' => 'refresh',
		'section'	=> 'sayara_automotive_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('sayara_automotive_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Author','sayara-automotive'),
       'section' => 'sayara_automotive_blog_post'
    ));

    $wp_customize->add_setting('sayara_automotive_post_author_icon_changer',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new sayara_automotive_Icon_Changer(
        $wp_customize,'sayara_automotive_post_author_icon_changer',array(
		'label'	=> __('Post Author Icon','sayara-automotive'),
		'transport' => 'refresh',
		'section'	=> 'sayara_automotive_blog_post',
		'type'		=> 'icon'
	)));

     $wp_customize->add_setting('sayara_automotive_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Comments','sayara-automotive'),
       'section' => 'sayara_automotive_blog_post'
    ));

    $wp_customize->add_setting('sayara_automotive_post_comment_icon_changer',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new sayara_automotive_Icon_Changer(
        $wp_customize,'sayara_automotive_post_comment_icon_changer',array(
		'label'	=> __('Post Comments Icon','sayara-automotive'),
		'transport' => 'refresh',
		'section'	=> 'sayara_automotive_blog_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('sayara_automotive_post_time_show',array(
       'default' => false,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_post_time_show',array(
       'type' => 'checkbox',
       'label' => __('Time','sayara-automotive'),
       'section' => 'sayara_automotive_blog_post'
    ));

    $wp_customize->add_setting( 'sayara_automotive_blog_post_metabox_seperator', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'sayara_automotive_blog_post_metabox_seperator', array(
		'label'       => esc_html__( 'Blog Post Meta Box Seperator','sayara-automotive' ),
		'section'     => 'sayara_automotive_blog_post',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','sayara-automotive'),
		'type'        => 'text',
		'settings'    => 'sayara_automotive_blog_post_metabox_seperator',
	) );

    $wp_customize->add_setting('sayara_automotive_blog_post_layout',array(
        'default' => 'Default',
        'sanitize_callback' => 'sayara_automotive_sanitize_choices'
    ));
    $wp_customize->add_control('sayara_automotive_blog_post_layout',array(
        'type' => 'radio',
        'label' => __('Post Layout Option','sayara-automotive'),
        'section' => 'sayara_automotive_blog_post',
        'choices' => array(
            'Default' => __('Default','sayara-automotive'),
            'Center' => __('Center','sayara-automotive'),
            'Image and Content' => __('Image and Content','sayara-automotive'),
        ),
	) );

	$wp_customize->add_setting('sayara_automotive_post_break_block_setting',array(
        'default' => 'Into Blocks',
        'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control('sayara_automotive_post_break_block_setting',array(
        'type' => 'radio',
        'label' => __('Display Blog Page posts','sayara-automotive'),
        'section' => 'sayara_automotive_blog_post',
        'choices' => array(
            'Into Blocks' => __('Into Blocks','sayara-automotive'),
            'Without Blocks' => __('Without Blocks','sayara-automotive'),
        ),
	) );

	$wp_customize->add_setting('sayara_automotive_blog_description',array(
    	'default'   => 'Post Excerpt',
        'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control('sayara_automotive_blog_description',array(
        'type' => 'select',
        'label' => __('Post Description','sayara-automotive'),
        'section' => 'sayara_automotive_blog_post',
        'choices' => array(
            'None' => __('None','sayara-automotive'),
            'Post Excerpt' => __('Post Excerpt','sayara-automotive'),
            'Post Content' => __('Post Content','sayara-automotive'),
        ),
	) );

    $wp_customize->add_setting( 'sayara_automotive_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	) );
	$wp_customize->add_control( 'sayara_automotive_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','sayara-automotive' ),
		'section'     => 'sayara_automotive_blog_post',
		'type'        => 'number',
		'settings'    => 'sayara_automotive_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'sayara_automotive_post_excerpt_suffix', array(
		'default'   => __('{...}','sayara-automotive'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'sayara_automotive_post_excerpt_suffix', array(
		'label'       => esc_html__( 'Excerpt Indicator','sayara-automotive' ),
		'section'     => 'sayara_automotive_blog_post',
		'type'        => 'text',
		'settings'    => 'sayara_automotive_post_excerpt_suffix',
	) );

	$wp_customize->add_setting('sayara_automotive_button_text',array(
		'default'=> __('READ MORE','sayara-automotive'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_button_text',array(
		'label'	=> __('Add Button Text','sayara-automotive'),
		'section'=> 'sayara_automotive_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting('sayara_automotive_show_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_show_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Post Pagination','sayara-automotive'),
       'section' => 'sayara_automotive_blog_post'
    ));

	$wp_customize->add_setting( 'sayara_automotive_pagination_option', array(
        'default'			=> 'Default',
        'sanitize_callback'	=> 'sayara_automotive_sanitize_choices'
    ));
    $wp_customize->add_control( 'sayara_automotive_pagination_option', array(
        'section' => 'sayara_automotive_blog_post',
        'type' => 'radio',
        'label' => __( 'Post Pagination', 'sayara-automotive' ),
        'choices'		=> array(
            'Default'  => __( 'Default', 'sayara-automotive' ),
            'next-prev' => __( 'Next / Previous', 'sayara-automotive' ),
    )));

	// Single post setting
    $wp_customize->add_section('sayara_automotive_single_post_section',array(
		'title'	=> __('Single Post Settings','sayara-automotive'),
		'panel' => 'sayara_automotive_panel_id',
	));	

	$wp_customize->add_setting('sayara_automotive_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','sayara-automotive'),
       'section' => 'sayara_automotive_single_post_section'
    ));

    $wp_customize->add_setting('sayara_automotive_single_post_image',array(
       'default' => true,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_single_post_image',array(
       'type' => 'checkbox',
       'label' => __('Single Post Featured Image','sayara-automotive'),
       'section' => 'sayara_automotive_single_post_section'
    ));

    $wp_customize->add_setting('sayara_automotive_single_post_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_single_post_date',array(
       'type' => 'checkbox',
       'label' => __('Single Post Date','sayara-automotive'),
       'section' => 'sayara_automotive_single_post_section'
    ));

    $wp_customize->add_setting('sayara_automotive_single_post_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_single_post_author',array(
       'type' => 'checkbox',
       'label' => __('Single Post Author','sayara-automotive'),
       'section' => 'sayara_automotive_single_post_section'
    ));

    $wp_customize->add_setting('sayara_automotive_single_post_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_single_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Single Post Comments','sayara-automotive'),
       'section' => 'sayara_automotive_single_post_section'
    ));

    $wp_customize->add_setting('sayara_automotive_show_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_show_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Single Post Pagination','sayara-automotive'),
       'section' => 'sayara_automotive_single_post_section'
    ));

    $wp_customize->add_setting( 'sayara_automotive_seperator_metabox', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'sayara_automotive_seperator_metabox', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','sayara-automotive' ),
		'section'     => 'sayara_automotive_single_post_section',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','sayara-automotive'),
		'type'        => 'text',
		'settings'    => 'sayara_automotive_seperator_metabox',
	) );

	$wp_customize->add_setting('sayara_automotive_comment_form_heading',array(
       'default' => __('Leave a Reply','sayara-automotive'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('sayara_automotive_comment_form_heading',array(
       'type' => 'text',
       'label' => __('Comment Form Heading','sayara-automotive'),
       'section' => 'sayara_automotive_single_post_section'
    ));

    $wp_customize->add_setting('sayara_automotive_comment_button_text',array(
       'default' => __('Post Comment','sayara-automotive'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('sayara_automotive_comment_button_text',array(
       'type' => 'text',
       'label' => __('Comment Submit Button Text','sayara-automotive'),
       'section' => 'sayara_automotive_single_post_section'
    ));

    $wp_customize->add_setting( 'sayara_automotive_comment_form_size',array(
		'default' => 100,
		'sanitize_callback'    => 'sayara_automotive_sanitize_number_range',
	));
	$wp_customize->add_control('sayara_automotive_comment_form_size',	array(
		'label' => esc_html__( 'Comment Form Size','sayara-automotive' ),
		'section' => 'sayara_automotive_single_post_section',
		'type' => 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	));

    // related post setting
    $wp_customize->add_section('sayara_automotive_related_post_section',array(
		'title'	=> __('Related Post Settings','sayara-automotive'),
		'panel' => 'sayara_automotive_panel_id',
	));	

	$wp_customize->add_setting('sayara_automotive_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
    ));
    $wp_customize->add_control('sayara_automotive_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Related Post','sayara-automotive'),
       'section' => 'sayara_automotive_related_post_section',
    ));

	$wp_customize->add_setting( 'sayara_automotive_show_related_post', array(
        'default' => 'By Categories',
        'sanitize_callback'	=> 'sayara_automotive_sanitize_choices'
    ));
    $wp_customize->add_control( 'sayara_automotive_show_related_post', array(
        'section' => 'sayara_automotive_related_post_section',
        'type' => 'radio',
        'label' => __( 'Show Related Posts', 'sayara-automotive' ),
        'choices' => array(
            'categories'  => __('By Categories', 'sayara-automotive'),
            'tags' => __( 'By Tags', 'sayara-automotive' ),
    )));

    $wp_customize->add_setting('sayara_automotive_change_related_post_title',array(
		'default'=> __('Related Posts','sayara-automotive'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_change_related_post_title',array(
		'label'	=> __('Change Related Post Title','sayara-automotive'),
		'section'=> 'sayara_automotive_related_post_section',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('sayara_automotive_change_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	));
	$wp_customize->add_control('sayara_automotive_change_related_posts_number',array(
		'label'	=> __('Change Related Post Number','sayara-automotive'),
		'section'=> 'sayara_automotive_related_post_section',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	//Footer
	$wp_customize->add_section( 'sayara_automotive_footer' , array(
    	'title'  => __( 'Footer Section', 'sayara-automotive' ),
		'priority'   => null,
		'panel' => 'sayara_automotive_panel_id'
	) );

	$wp_customize->add_setting('sayara_automotive_footer_widget',array(
        'default'           => 4,
        'sanitize_callback' => 'sayara_automotive_sanitize_choices',
    ));
    $wp_customize->add_control('sayara_automotive_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer widget area', 'sayara-automotive'),
        'section'     => 'sayara_automotive_footer',
        'description' => __('Select the number of footer widget areas and after that, go to Appearance > Widgets and add your widgets in the footer.', 'sayara-automotive'),
        'choices' => array(
            '1'     => __('One', 'sayara-automotive'),
            '2'     => __('Two', 'sayara-automotive'),
            '3'     => __('Three', 'sayara-automotive'),
            '4'     => __('Four', 'sayara-automotive')
        ),
    )); 

    $wp_customize->add_setting( 'sayara_automotive_footer_widget_background', array(
	    'default' => '#153655',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_footer_widget_background', array(
  		'label' => __('Footer Widget Background','sayara-automotive'),
	    'section' => 'sayara_automotive_footer',
  	)));

  	$wp_customize->add_setting('sayara_automotive_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'sayara_automotive_footer_widget_image',array(
        'label' => __('Footer Widget Background Image','sayara-automotive'),
        'section' => 'sayara_automotive_footer'
	)));

	$wp_customize->add_setting('sayara_automotive_hide_show_scroll',array(
        'default' => false,
        'sanitize_callback'	=> 'sayara_automotive_sanitize_checkbox'
	));
	$wp_customize->add_control('sayara_automotive_hide_show_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll To Top','sayara-automotive'),
      	'section' => 'sayara_automotive_footer',
	));

	$wp_customize->add_setting('sayara_automotive_scroll_icon_changer',array(
		'default'	=> 'fas fa-long-arrow-alt-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new sayara_automotive_Icon_Changer(
        $wp_customize,'sayara_automotive_scroll_icon_changer',array(
		'label'	=> __('Scroll To Top Icon','sayara-automotive'),
		'transport' => 'refresh',
		'section'	=> 'sayara_automotive_footer',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('sayara_automotive_footer_options',array(
        'default' => 'Right align',
        'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control('sayara_automotive_footer_options',array(
        'type' => 'select',
        'label' => __('Scroll To Top','sayara-automotive'),
        'description' => __('Here you can change the Footer layout. ','sayara-automotive'),
        'section' => 'sayara_automotive_footer',
        'choices' => array(
            'Left align' => __('Left align','sayara-automotive'),
            'Right align' => __('Right align','sayara-automotive'),
            'Center align' => __('Center align','sayara-automotive'),
        ),
	) );

	$wp_customize->add_setting('sayara_automotive_scroll_top_fontsize',array(
		'default'=> '',
		'sanitize_callback'    => 'sayara_automotive_sanitize_number_range',
	));
	$wp_customize->add_control('sayara_automotive_scroll_top_fontsize',array(
		'label'	=> __('Scroll To Top Font Size','sayara-automotive'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'sayara_automotive_footer',
		'type'=> 'range'
	));

	$wp_customize->add_setting('sayara_automotive_scroll_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	));
	$wp_customize->add_control('sayara_automotive_scroll_top_bottom_padding',array(
		'label'	=> __('Scroll Top Bottom Padding ','sayara-automotive'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'sayara_automotive_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('sayara_automotive_scroll_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	));
	$wp_customize->add_control('sayara_automotive_scroll_left_right_padding',array(
		'label'	=> __('Scroll Left Right Padding','sayara-automotive'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'sayara_automotive_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'sayara_automotive_scroll_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	) );
	$wp_customize->add_control( 'sayara_automotive_scroll_border_radius', array(
		'label'       => esc_html__( 'Scroll To Top Border Radius','sayara-automotive' ),
		'section'     => 'sayara_automotive_footer',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('sayara_automotive_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('sayara_automotive_footer_text',array(
		'label'	=> __('Add Copyright Text','sayara-automotive'),
		'section'	=> 'sayara_automotive_footer',
		'setting'	=> 'sayara_automotive_footer_text',
		'type'		=> 'text'
	));

    $wp_customize->add_setting('sayara_automotive_copyright_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sayara_automotive_sanitize_float',
	));
	$wp_customize->add_control('sayara_automotive_copyright_top_bottom_padding',array(
		'label'	=> __('Copyright Top and Bottom Padding','sayara-automotive'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'sayara_automotive_footer',
		'type'=> 'number'
	));

	 $wp_customize->add_setting('sayara_automotive_copyright_background_color', array(
		'default'           => '#dd0004',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sayara_automotive_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'sayara-automotive'),
		'section'  => 'sayara_automotive_footer',
	)));

	$wp_customize->add_setting('sayara_automotive_footer_text_font_size',array(
		'default'=> 16,
		'sanitize_callback'    => 'sayara_automotive_sanitize_float',
	));
	$wp_customize->add_control('sayara_automotive_footer_text_font_size',array(
		'label'	=> __('Footer Text Font Size','sayara-automotive'),
		'section'=> 'sayara_automotive_footer',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'sayara_automotive_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'sayara_automotive_customize_partial_blogdescription',
	) );
	
}
add_action( 'customize_register', 'sayara_automotive_customize_register' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Sayara Automotive 1.0
 * @see sayara-automotive_customize_register()
 *
 * @return void
 */
function sayara_automotive_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Sayara Automotive 1.0
 * @see sayara-automotive_customize_register()
 *
 * @return void
 */
function sayara_automotive_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function sayara_automotive_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'footer-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Sayara_Automotive_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Sayara_Automotive_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Sayara_Automotive_Customize_Section_Pro(
				$manager,
				'sayara_automotive_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Sayara Automotive Pro', 'sayara-automotive' ),
					'pro_text' => esc_html__( 'Go Pro', 'sayara-automotive' ),
					'pro_url'  => esc_url('https://www.themeseye.com/wordpress/automotive-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'sayara-automotive-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'sayara-automotive-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Sayara_Automotive_Customize::get_instance();