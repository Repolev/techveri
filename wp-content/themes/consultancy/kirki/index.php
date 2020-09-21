<?php

require_once get_template_directory() . '/kirki/kirki-utils.php';
require_once get_template_directory() . '/kirki/include-kirki.php';
require_once get_template_directory() . '/kirki/kirki.php';

$config = consultancy_kirki_config();

add_action('customize_register', 'consultancy_customize_register');
function consultancy_customize_register( $wp_customize ) {

	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'static_front_page' );

	$wp_customize->remove_section('themes');
	$wp_customize->get_section('title_tagline')->priority = 10;
}

add_action( 'customize_controls_print_styles', 'consultancy_enqueue_customizer_stylesheet' );
function consultancy_enqueue_customizer_stylesheet() {
	wp_register_style( 'consultancy-customizer-css', CONSULTANCY_THEME_URI.'/kirki/assets/css/customizer.css', NULL, NULL, 'all' );
	wp_enqueue_style( 'consultancy-customizer-css' );	
}

add_action( 'customize_controls_print_footer_scripts', 'consultancy_enqueue_customizer_script' );
function consultancy_enqueue_customizer_script() {
	wp_register_script( 'consultancy-customizer-js', CONSULTANCY_THEME_URI.'/kirki/assets/js/customizer.js', array('jquery', 'customize-controls' ), false, true );
	wp_enqueue_script( 'consultancy-customizer-js' );
}

# Theme Customizer Begins
CONSULTANCY_Kirki::add_config( $config , array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

	# Site Identity	
		# use-custom-logo
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'use-custom-logo',
			'label'    => esc_html__( 'Logo ?', 'consultancy' ),
			'section'  => 'title_tagline',
			'priority' => 1,
			'default'  => consultancy_defaults('use-custom-logo'),
			'description' => esc_html__('Switch to Site title or Logo','consultancy'),
			'choices'  => array(
				'on'  => esc_attr__( 'Logo', 'consultancy' ),
				'off' => esc_attr__( 'Site Title', 'consultancy' )
			)			
		) );

		# custom-logo
		CONSULTANCY_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'custom-logo',
			'label'    => esc_html__( 'Logo', 'consultancy' ),
			'section'  => 'title_tagline',
			'priority' => 2,
			'default' => consultancy_defaults( 'custom-logo' ),
			'active_callback' => array(
				array( 'setting' => 'use-custom-logo', 'operator' => '==', 'value' => '1' )
			)
		));

		# custom-dark-logo
		CONSULTANCY_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'custom-dark-logo',
			'label'    => esc_html__( 'Dark Logo', 'consultancy' ),
			'section'  => 'title_tagline',
			'priority' => 3,
			'default' => consultancy_defaults( 'custom-dark-logo' ),
			'active_callback' => array(
				array( 'setting' => 'use-custom-logo', 'operator' => '==', 'value' => '1' )
			)
		));		

		# site-loader
		CONSULTANCY_Kirki::add_field( $config, array(
			'type' => 'switch',
			'settings' => 'use-site-loader',
			'label'    => esc_html__( 'Use Site Loader?', 'consultancy' ),
			'section'  => 'title_tagline',
			'priority' => 100,
			'default' => consultancy_defaults( 'use-site-loader' )
		));

		# site-title-color
		CONSULTANCY_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'custom-title',
			'label'    => esc_html__( 'Site Title Color', 'consultancy' ),
			'section'  => 'title_tagline',
			'priority' => 4,
			'active_callback' => array(
				array( 'setting' => 'use-custom-logo', 'operator' => '!=', 'value' => '1' )
			),
			'output' => array(
				array( 'element' => '#logo .logo-title > h1 a, #logo .logo-title h2' , 'property' => 'color' )
			),
			'choices' => array( 'alpha' => true ),
		));
        

	# Site Layout
	require_once get_template_directory() . '/kirki/options/site-layout.php';

	# Site Skin
	require_once get_template_directory() . '/kirki/options/site-skin.php';

	# Site Breadcrumb
	CONSULTANCY_Kirki::add_panel( 'dt_site_breadcrumb_panel', array(
		'title' => esc_html__( 'Site Breadcrumb', 'consultancy' ),
		'description' => esc_html__('Site Breadcrumb','consultancy'),
		'priority' => 25
	) );
	require_once get_template_directory() . '/kirki/options/site-breadcrumb.php';
	
	# Site Header
	CONSULTANCY_Kirki::add_panel( 'dt_site_header_panel', array(
		'title' => esc_html__( 'Site Header', 'consultancy' ),
		'description' => esc_html__('Site Header','consultancy'),
		'priority' => 30
	) );
	require_once get_template_directory() . '/kirki/options/site-header.php';

	# Site Menu
	CONSULTANCY_Kirki::add_panel( 'dt_site_menu_panel', array(
		'title' => esc_html__( 'Site Menu', 'consultancy' ),
		'description' => esc_html__('Site Menu','consultancy'),
		'priority' => 35
	) );
	require_once get_template_directory() . '/kirki/options/site-menu/navigation.php';		

	# Site Footer I
		CONSULTANCY_Kirki::add_panel( 'dt_site_footer_i_panel', array(
			'title' => esc_html__( 'Site Footer I', 'consultancy' ),
			'priority' => 40
		) );
		require_once get_template_directory() . '/kirki/options/site-footer-i.php';

	# Site Footer II
	CONSULTANCY_Kirki::add_panel( 'dt_site_footer_ii_panel', array(
		'title' => esc_html__( 'Site Footer II', 'consultancy' ),
		'priority' => 45
	) );
	#require_once get_template_directory() . '/kirki/options/site-footer-ii.php';

	# Site Footer Copyright
	CONSULTANCY_Kirki::add_panel( 'dt_footer_copyright_panel', array(
		'title' => esc_html__( 'Site Copyright', 'consultancy' ),
		'priority' => 50
	) );
	require_once get_template_directory() . '/kirki/options/site-footer-copyright.php';

	# Site Sociable
	require_once get_template_directory() . '/kirki/options/site-sociable.php';

	# Additional JS
	require_once get_template_directory() . '/kirki/options/custom-js.php';

	# Typography
	CONSULTANCY_Kirki::add_panel( 'dt_site_typography_panel', array(
		'title' => esc_html__( 'Typography', 'consultancy' ),
		'description' => esc_html__('Typography Settings','consultancy'),
		'priority' => 220
	) );	
	require_once get_template_directory() . '/kirki/options/site-typography.php';	
# Theme Customizer Ends