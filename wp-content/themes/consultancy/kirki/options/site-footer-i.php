<?php
$config = consultancy_kirki_config();

# Footer I Layout
	CONSULTANCY_Kirki::add_section( 'dt_footer_layout', array(
		'title'	=> esc_html__( 'Layout', 'consultancy' ),
		'description' => esc_html__('Footer Column Layout Settings','consultancy'),
		'panel' => 'dt_site_footer_i_panel',
		'priority' => 1	
	) );
	
		# show-footer
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'show-footer',
			'label'    => esc_html__( 'Show Footer Columns ?', 'consultancy' ),
			'section'  => 'dt_footer_layout',
			'default'  => consultancy_defaults('show-footer'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'consultancy' ),
				'off' => esc_attr__( 'No', 'consultancy' )
			)
		));

		# footer-columns
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'radio-image',
			'settings' => 'footer-columns',
			'label'    => esc_html__( 'Footer Columns Layout ?', 'consultancy' ),
			'section'  => 'dt_footer_layout',
			'transport' => 'refresh',
			'default'  => consultancy_defaults('footer-columns'),
			'choices' => array(
				'1' => CONSULTANCY_THEME_URI.'/kirki/assets/images/columns/one-column.png',
				'2' => CONSULTANCY_THEME_URI.'/kirki/assets/images/columns/one-half-column.png',
				'3' => CONSULTANCY_THEME_URI.'/kirki/assets/images/columns/one-third-column.png',
				'4' => CONSULTANCY_THEME_URI.'/kirki/assets/images/columns/one-fourth-column.png',
				'5' => CONSULTANCY_THEME_URI.'/kirki/assets/images/columns/one-fifth-column.png',
				'6' => CONSULTANCY_THEME_URI.'/kirki/assets/images/columns/one-sixth-column.png',

				'12' => CONSULTANCY_THEME_URI.'/kirki/assets/images/columns/onefourth-onefourth-onehalf-column.png',
				'13' => CONSULTANCY_THEME_URI.'/kirki/assets/images/columns/onehalf-onefourth-onefourth-column.png',
				'11' => CONSULTANCY_THEME_URI.'/kirki/assets/images/columns/onefourth-onehalf-onefourth-column.png',

				'7' => CONSULTANCY_THEME_URI.'/kirki/assets/images/columns/onefourth-threefourth-column.png',
				'8' => CONSULTANCY_THEME_URI.'/kirki/assets/images/columns/threefourth-onefourth-column.png',

				'9' => CONSULTANCY_THEME_URI.'/kirki/assets/images/columns/onethird-twothird-column.png',
				'10' => CONSULTANCY_THEME_URI.'/kirki/assets/images/columns/twothird-onethird-column.png',
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-darkbg
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-footer-darkbg',
			'label'    => esc_html__( 'Enable Footer Dark BG', 'consultancy' ),
			'section'  => 'dt_footer_layout',
			'default'  => consultancy_defaults('enable-footer-darkbg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'consultancy' ),
				'off' => esc_attr__( 'No', 'consultancy' )
			)
		));		


# Footer 1 Background		
	CONSULTANCY_Kirki::add_section( 'dt_footer_bg', array(
		'title'	=> esc_html__( 'Background', 'consultancy' ),
		'panel' => 'dt_site_footer_i_panel',
		'priority' => 2,
	) );

		# customize-footer-bg
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-bg',
			'label'    => esc_html__( 'Customize Background ?', 'consultancy' ),
			'section'  => 'dt_footer_bg',
			'default'  => consultancy_defaults('customize-footer-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'consultancy' ),
				'off' => esc_attr__( 'No', 'consultancy' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-bg-color
		CONSULTANCY_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'footer-bg-color',
			'label'    => esc_html__( 'Background Color', 'consultancy' ),
			'section'  => 'dt_footer_bg',
			'output' => array(
				array( 'element' => 'div.footer-widgets' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-bg-image
		CONSULTANCY_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'footer-bg-image',
			'label'    => esc_html__( 'Background Image', 'consultancy' ),
			'description'    => esc_html__( 'Add Background Image for footer', 'consultancy' ),
			'section'  => 'dt_footer_bg',
			'output' => array(
				array( 'element' => 'div.footer-widgets' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-bg-position
		CONSULTANCY_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-bg-position',
			'label'    => esc_html__( 'Background Image Position', 'consultancy' ),
			'section'  => 'dt_footer_bg',
			'output' => array(
				array( 'element' => 'div.footer-widgets' , 'property' => 'background-position' )
			),
			'default' => 'center',
			'multiple' => 1,
			'choices' => consultancy_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'footer-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

		# footer-bg-repeat
		CONSULTANCY_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-bg-repeat',
			'label'    => esc_html__( 'Background Image Repeat', 'consultancy' ),
			'section'  => 'dt_footer_bg',
			'output' => array(
				array( 'element' => 'div.footer-widgets' , 'property' => 'background-repeat' )				
			),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => consultancy_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'footer-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

# Footer I Typography
	CONSULTANCY_Kirki::add_section( 'dt_footer_typo', array(
		'title'	=> esc_html__( 'Typography', 'consultancy' ),
		'panel' => 'dt_site_footer_i_panel',
		'priority' => 3,
	) );

		# customize-footer-title-typo
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-title-typo',
			'label'    => esc_html__( 'Customize Title ?', 'consultancy' ),
			'section'  => 'dt_footer_typo',
			'default'  => consultancy_defaults('customize-footer-title-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'consultancy' ),
				'off' => esc_attr__( 'No', 'consultancy' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-title-typo
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-title-typo',
			'label'    => esc_html__( 'Title Typography', 'consultancy' ),
			'section'  => 'dt_footer_typo',
			'output' => array(
				array( 'element' => 'div.footer-widgets h3.widgettitle' )
			),
			'default' => consultancy_defaults( 'footer-title-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-title-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# Divider
		CONSULTANCY_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'footer-title-typo-divider',
			'section'  => 'dt_footer_typo',
			'default'  => '<div class="customize-control-divider"></div>',
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-title-typo', 'operator' => '==', 'value' => '1' )
			)			
		));

		# customize-footer-content-typo
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-content-typo',
			'label'    => esc_html__( 'Customize Content ?', 'consultancy' ),
			'section'  => 'dt_footer_typo',
			'default'  => consultancy_defaults('customize-footer-content-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'consultancy' ),
				'off' => esc_attr__( 'No', 'consultancy' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-content-typo
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-content-typo',
			'label'    => esc_html__( 'Content Typography', 'consultancy' ),
			'section'  => 'dt_footer_typo',
			'output' => array(
				array( 'element' => 'div.footer-widgets .widget' )
			),
			'default' => consultancy_defaults( 'footer-content-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# footer-content-a-color		
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'color',
			'settings' => 'footer-content-a-color',
			'label'    => esc_html__( 'Anchor Color', 'consultancy' ),
			'section'  => 'dt_footer_typo',
			'choices' => array( 'alpha' => true ),
			'output' => array(
				array( 'element' => '' )
			),
			'default' => consultancy_defaults( 'footer-content-a-color' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# footer-content-a-hover-color
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'color',
			'settings' => 'footer-content-a-hover-color',
			'label'    => esc_html__( 'Anchor Hover Color', 'consultancy' ),
			'section'  => 'dt_footer_typo',
			'choices' => array( 'alpha' => true ),			
			'output' => array(
				array( 'element' => '' )
			),
			'default' => consultancy_defaults( 'footer-content-a-hover-color' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));