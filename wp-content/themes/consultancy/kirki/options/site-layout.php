<?php
$config = consultancy_kirki_config();

CONSULTANCY_Kirki::add_section( 'dt_site_layout_section', array(
	'title' => esc_html__( 'Site Layout', 'consultancy' ),
	'priority' => 20
) );

	# site-responsive
	#CONSULTANCY_Kirki::add_field( $config, array(
	#	'type'     => 'switch',
	#	'settings' => 'site-responsive',
	#	'label'    => esc_html__( 'Is Site Responsive?', 'consultancy' ),
	#	'section'  => 'dt_site_layout_section',
	#	'default'  => consultancy_defaults('site-responsive'),
	#	'choices'  => array(
	#		'on'  => esc_attr__( 'Yes', 'consultancy' ),
	#		'off' => esc_attr__( 'No', 'consultancy' )
	#	)
	#));

	# site-layout
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'radio-image',
		'settings' => 'site-layout',
		'label'    => esc_html__( 'Site Layout', 'consultancy' ),
		'section'  => 'dt_site_layout_section',
		'default'  => consultancy_defaults('site-layout'),
		'choices' => array(
			'boxed' =>  CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/boxed.png',
			'wide' => CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/wide.png',
		)
	));

	# site-boxed-layout
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'site-boxed-layout',
		'label'    => esc_html__( 'Customize Boxed Layout?', 'consultancy' ),
		'section'  => 'dt_site_layout_section',
		'default'  => '1',
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'consultancy' ),
			'off' => esc_attr__( 'No', 'consultancy' )
		),
		'active_callback' => array(
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
		)			
	));

	# body-bg-type
	CONSULTANCY_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-type',
		'label'    => esc_html__( 'Background Type', 'consultancy' ),
		'section'  => 'dt_site_layout_section',
		'multiple' => 1,
		'default'  => 'none',
		'choices'  => array(
			'pattern' => esc_attr__( 'Predefined Patterns', 'consultancy' ),
			'upload' => esc_attr__( 'Set Pattern', 'consultancy' ),
			'none' => esc_attr__( 'None', 'consultancy' ),
		),
		'active_callback' => array(
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-pattern
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'radio-image',
		'settings' => 'body-bg-pattern',
		'label'    => esc_html__( 'Predefined Patterns', 'consultancy' ),
		'description'    => esc_html__( 'Add Background for body', 'consultancy' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-image' )
		),
		'choices' => array(
			CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern1.jpg'=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern1.jpg',
			CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern2.jpg'=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern2.jpg',
			CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern3.jpg'=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern3.jpg',
			CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern4.jpg'=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern4.jpg',
			CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern5.jpg'=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern5.jpg',
			CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern6.jpg'=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern6.jpg',
			CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern7.jpg'=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern7.jpg',
			CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern8.jpg'=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern8.jpg',
			CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern9.jpg'=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern9.jpg',
			CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern10.jpg'=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern10.jpg',
			CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern11.jpg'=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern11.jpg',
			CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern12.jpg'=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern12.jpg',
			CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern13.jpg'=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern13.jpg',
			CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern14.jpg'=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern14.jpg',
			CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern15.jpg'=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-layout/pattern15.jpg',
		),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => '==', 'value' => 'pattern' ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)						
	));

	# body-bg-image
	CONSULTANCY_Kirki::add_field( $config, array(
		'type' => 'image',
		'settings' => 'body-bg-image',
		'label'    => esc_html__( 'Background Image', 'consultancy' ),
		'description'    => esc_html__( 'Add Background Image for body', 'consultancy' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-image' )
		),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => '==', 'value' => 'upload' ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-position
	CONSULTANCY_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-position',
		'label'    => esc_html__( 'Background Position', 'consultancy' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-position' )
		),
		'default' => 'center',
		'multiple' => 1,
		'choices' => consultancy_image_positions(),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => 'contains', 'value' => array( 'pattern', 'upload') ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-repeat
	CONSULTANCY_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-repeat',
		'label'    => esc_html__( 'Background Repeat', 'consultancy' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-repeat' )
		),
		'default' => 'repeat',
		'multiple' => 1,
		'choices' => consultancy_image_repeats(),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => 'contains', 'value' => array( 'pattern', 'upload' ) ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));	