<?php
$config = consultancy_kirki_config();

# Breadcrumb Settings
CONSULTANCY_Kirki::add_section( 'dt_site_breadcrumb_section', array(
	'title' => esc_html__( 'Breadcrumb', 'consultancy' ),
	'panel' => 'dt_site_breadcrumb_panel',
	'priority' => 1,	
) );

	# show-breadcrumb
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'show-breadcrumb',
		'label'    => esc_html__( 'Show Breadcrumb', 'consultancy' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => '1',
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'consultancy' ),
			'off' => esc_attr__( 'No', 'consultancy' )
		)
	));

	# breadcrumb-delimiter	
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'select',
		'settings' => 'breadcrumb-delimiter',
		'label'    => esc_html__( 'Breadcrumb Delimiter', 'consultancy' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => consultancy_defaults( 'breadcrumb-delimiter' ),
		'choices'  => array(
			"fa default" => esc_attr__('Default','consultancy'),
			"fa fa-angle-double-right" => esc_attr__('Double Angle Right','consultancy'),
			"fa fa-sort" => esc_attr__('Sort','consultancy'),
			"fa fa-arrow-circle-right" => esc_attr__('Arrow Circle Right','consultancy'),
			"fa fa-angle-right" => esc_attr__('Angle Right','consultancy'),
			"fa fa-caret-right" => esc_attr__('Caret Right','consultancy'),
			"fa fa-arrow-right" => esc_attr__('Arrow Right','consultancy'),
			"fa fa-chevron-right" => esc_attr__('Chevron Right','consultancy'),
			"fa fa-hand-o-right" => esc_attr__('Hand Right','consultancy'),
			"fa fa-plus" => esc_attr__('Plus','consultancy'),
			"fa fa-remove" => esc_attr__('Remove','consultancy'),
			"fa fa-glass" => esc_attr__('Glass','consultancy'),				
		),
		'active_callback' => array(
			array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' )
		)			
	));

	# breadcrumb-style	
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'select',
		'settings' => 'breadcrumb-style',
		'label'    => esc_html__( 'Breadcrumb Style', 'consultancy' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => consultancy_defaults( 'breadcrumb-style' ),
		'choices'  => array(
			"default"	=> esc_attr__('Default','consultancy'),
			"aligncenter"	=> esc_attr__('Align Center','consultancy'),
			"alignright"	=> esc_attr__('Align Right','consultancy'),
			"breadcrumb-left"	=> esc_attr__('Left Side Breadcrumb','consultancy'),
			"breadcrumb-right"	=> esc_attr__('Right Side Breadcrumb','consultancy'),
			"breadcrumb-top-right-title-center"	=> esc_attr__('Top Right Title Center','consultancy'),
			"breadcrumb-top-left-title-center"	=> esc_attr__('Top Left Title Center','consultancy'),				
		),
		'active_callback' => array(
			array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' )
		)			
	));

# Breadcrumb Background Settings
CONSULTANCY_Kirki::add_section( 'dt_site_breadcrumb_bg_section', array(
	'title' => esc_html__( 'Background', 'consultancy' ),
	'panel' => 'dt_site_breadcrumb_panel',
	'priority' => 2,	
) );
		# customize-breadcrumb-bg
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-breadcrumb-bg',
			'label'    => esc_html__( 'Customize Background ?', 'consultancy' ),
			'section'  => 'dt_site_breadcrumb_bg_section',
			'default'  => consultancy_defaults('customize-breadcrumb-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'consultancy' ),
				'off' => esc_attr__( 'No', 'consultancy' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' )
			)			
		));

		# breadcrumb-bg-color
		CONSULTANCY_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'breadcrumb-bg-color',
			'label'    => esc_html__( 'Background Color', 'consultancy' ),
			'section'  => 'dt_site_breadcrumb_bg_section',
			'output' => array(
				array( 'element' => '.main-title-section-wrapper:before' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# breadcrumb-bg-image
		CONSULTANCY_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'breadcrumb-bg-image',
			'label'    => esc_html__( 'Background Image', 'consultancy' ),
			'description'    => esc_html__( 'Add Background Image for breadcrumb', 'consultancy' ),
			'section'  => 'dt_site_breadcrumb_bg_section',
			'output' => array(
				array( 'element' => '.main-title-section-wrapper:before' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# breadcrumb-bg-position
		CONSULTANCY_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'breadcrumb-bg-position',
			'label'    => esc_html__( 'Background Image Position', 'consultancy' ),
			'section'  => 'dt_site_breadcrumb_bg_section',
			'output' => array(
				array( 'element' => '.main-title-section-wrapper:before' , 'property' => 'background-position' )				
			),
			'default' => 'center',
			'multiple' => 1,
			'choices' => consultancy_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'breadcrumb-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

		# breadcrumb-bg-repeat
		CONSULTANCY_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'breadcrumb-bg-repeat',
			'label'    => esc_html__( 'Background Image Repeat', 'consultancy' ),
			'section'  => 'dt_site_breadcrumb_bg_section',
			'output' => array(
				array( 'element' => '.main-title-section-wrapper:before' , 'property' => 'background-repeat' )				
			),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => consultancy_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'breadcrumb-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

# Breadcrumb Typography
	CONSULTANCY_Kirki::add_section( 'dt_site_breadcrumb_typo', array(
		'title'	=> esc_html__( 'Typography', 'consultancy' ),
		'panel' => 'dt_site_breadcrumb_panel',
		'priority' => 3,
	) );

		# customize-breadcrumb-title-typo
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-breadcrumb-title-typo',
			'label'    => esc_html__( 'Customize Title ?', 'consultancy' ),
			'section'  => 'dt_site_breadcrumb_typo',
			'default'  => consultancy_defaults('customize-breadcrumb-title-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'consultancy' ),
				'off' => esc_attr__( 'No', 'consultancy' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' )
			)			
		));

		# breadcrumb-title-typo
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'breadcrumb-title-typo',
			'label'    => esc_html__( 'Title Typography', 'consultancy' ),
			'section'  => 'dt_site_breadcrumb_typo',
			'output' => array(
				array( 'element' => '.main-title-section h1, h1.simple-title' )
			),
			'default' => consultancy_defaults( 'breadcrumb-title-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-title-typo', 'operator' => '==', 'value' => '1' )
			)		
		));		

		# customize-breadcrumb-typo
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-breadcrumb-typo',
			'label'    => esc_html__( 'Customize Link ?', 'consultancy' ),
			'section'  => 'dt_site_breadcrumb_typo',
			'default'  => consultancy_defaults('customize-breadcrumb-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'consultancy' ),
				'off' => esc_attr__( 'No', 'consultancy' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' )
			)			
		));

		# breadcrumb-typo
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'breadcrumb-typo',
			'label'    => esc_html__( 'Link Typography', 'consultancy' ),
			'section'  => 'dt_site_breadcrumb_typo',
			'output' => array(
				array( 'element' => 'div.breadcrumb a' )
			),
			'default' => consultancy_defaults( 'breadcrumb-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-typo', 'operator' => '==', 'value' => '1' )
			)		
		));										