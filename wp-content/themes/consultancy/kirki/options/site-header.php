<?php
$config = consultancy_kirki_config();

# Header Settings
	CONSULTANCY_Kirki::add_section( 'dt_site_header_section', array(
		'title' => esc_html__( 'Header Style', 'consultancy' ),
		'panel' => 'dt_site_header_panel',
		'priority' => 1
	) );

		# header-type
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'radio-image',
			'settings' => 'header-type',
			'label'    => esc_html__( 'Site Header', 'consultancy' ),
			'section'  => 'dt_site_header_section',
			'default'  => consultancy_defaults('header-type'),
			'choices' => array(
				'fullwidth-header' 				=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-headers/fullwidth-header.jpg',
				'boxed-header' 					=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-headers/boxed-header.jpg',
				'split-header boxed-header' 	=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-headers/splitted-boxed-header.jpg',
				'split-header fullwidth-header' => CONSULTANCY_THEME_URI.'/kirki/assets/images/site-headers/splitted-fullwidth-header.jpg',
				'fullwidth-header header-align-center fullwidth-menu-header' 	=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-headers/fullwidth-menu-center.jpg',
				'two-color-header' 			=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-headers/two-color-header.jpg',			
				'fullwidth-header header-align-left fullwidth-menu-header' 		=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-headers/fullwidth-menu-left.jpg',
				'left-header' 				=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-headers/left-header.jpg',
				'left-header-boxed' 		=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-headers/left-header-boxed.jpg',			
				'creative-header' 			=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-headers/creative-header.jpg',
				'overlay-header' 			=> CONSULTANCY_THEME_URI.'/kirki/assets/images/site-headers/overlay-header.jpg',
			)
		));

		# enable-sticy-nav
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-sticy-nav',
			'label'    => esc_html__( 'Sticky Navigation ?', 'consultancy' ),
			'section'  => 'dt_site_header_section',
			'default'  => consultancy_defaults('enable-sticy-nav'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'consultancy' ),
				'off' => esc_attr__( 'No', 'consultancy' )
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
					'fullwidth-header',
					'boxed-header',
					'split-header boxed-header',
					'split-header fullwidth-header',
					'fullwidth-header header-align-center fullwidth-menu-header',
					'two-color-header',
					'fullwidth-header header-align-left fullwidth-menu-header'
				) ),
			)			
		));	

		# header-position
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'header-position',
			'label'    => esc_html__( 'Header Position', 'consultancy' ),
			'section'  => 'dt_site_header_section',
			'default'  => consultancy_defaults('header-position'),		
			'choices'  => array(
				'above slider' => esc_attr__( 'Above slider','consultancy'),
				'on slider' => esc_attr__( 'On slider','consultancy'),
				'below slider' => esc_attr__( 'Below slider','consultancy')				
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
					'fullwidth-header', 'boxed-header', 'split-header boxed-header',
					'split-header fullwidth-header',
					'fullwidth-header header-align-center fullwidth-menu-header',
					'two-color-header',
					'fullwidth-header header-align-left fullwidth-menu-header' ) ),
			)		
		));

		# header-transparency
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'header-transparency',
			'label'    => esc_html__( 'Header Transparency', 'consultancy' ),
			'section'  => 'dt_site_header_section',
			'default'  => consultancy_defaults('header-transparency'),		
			'choices'  => array(
				'default' => esc_attr__( 'Default','consultancy'),
				'semi-transparent-header' => esc_attr__( 'Semi Transparent','consultancy'),
				'transparent-header' => esc_attr__( 'Transparent','consultancy')				
			),	
		));

		# enable-header-darkbg
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-header-darkbg',
			'label'    => esc_html__( 'Enable Dark BG', 'consultancy' ),
			'section'  => 'dt_site_header_section',
			'default'  => consultancy_defaults('enable-header-darkbg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'consultancy' ),
				'off' => esc_attr__( 'No', 'consultancy' )
			)		
		));			

		# menu-social-icons
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'menu-social-icons',
			'label'    => esc_html__( 'Social Icons ?', 'consultancy' ),
			'section'  => 'dt_site_header_section',
			'default'  => consultancy_defaults('menu-social-icons'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'consultancy' ),
				'off' => esc_attr__( 'No', 'consultancy' )
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 'fullwidth-header', 'boxed-header', 'two-color-header', 'fullwidth-header header-align-left fullwidth-menu-header' ) ),
			)
		));

		# menu-search-icon
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'menu-search-icon',
			'label'    => esc_html__( 'Search Icon ?', 'consultancy' ),
			'section'  => 'dt_site_header_section',
			'default'  => consultancy_defaults('menu-search-icon'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'consultancy' ),
				'off' => esc_attr__( 'No', 'consultancy' )
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 'fullwidth-header', 'boxed-header', 'two-color-header', 'fullwidth-header header-align-left fullwidth-menu-header' ) ),
			)		
		));

		# search-box-type
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'search-box-type',
			'label'    => esc_html__( 'Search Box Style', 'consultancy' ),
			'section'  => 'dt_site_header_section',
			'default'  => consultancy_defaults('search-box-type'),
			'choices'  => array(
				'type1'   => esc_attr__( 'Default','consultancy'),
				'type2'   => esc_attr__( 'Full Screen','consultancy')
			),
			'active_callback' => array(
				array( 'setting' => 'menu-search-icon', 'operator' => '==', 'value' => '1' ),
			)
		));

		if( function_exists( 'is_woocommerce' ) ):
			# menu-cart-icon
			CONSULTANCY_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'menu-cart-icon',
				'label'    => esc_html__( 'Cart Icon ?', 'consultancy' ),
				'section'  => 'dt_site_header_section',
				'default'  => consultancy_defaults('menu-cart-icon'),
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'consultancy' ),
					'off' => esc_attr__( 'No', 'consultancy' )
				),
				'active_callback' => array(
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header',
						'boxed-header',
						'two-color-header',
						'fullwidth-header header-align-left fullwidth-menu-header') ),
				)
			));
		endif;	

		# Top bar Color

			# enable-top-bar-content
			CONSULTANCY_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'enable-top-bar-content',
				'label'    => esc_html__( 'Show Top Bar', 'consultancy' ),
				'section'  => 'dt_site_header_section',
				'default'  => consultancy_defaults('enable-top-bar-content'),
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'consultancy' ),
					'off' => esc_attr__( 'No', 'consultancy' )
				),
				/*'active_callback' => array(
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
						'fullwidth-header',					
						'fullwidth-header header-align-center fullwidth-menu-header',
						'two-color-header',
						'fullwidth-header header-align-left fullwidth-menu-header' ) ),
				)*/
			));

			# top-bar-content
			CONSULTANCY_Kirki::add_field( $config, array(
				'type'     => 'textarea',
				'settings' => 'top-bar-content',
				'label'    => esc_html__( 'Content', 'consultancy' ),
				'section'  => 'dt_site_header_section',
				'default'  => consultancy_defaults('top-bar-content'),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ),
				)
			) );

			# customize-top-bar		
			CONSULTANCY_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'customize-top-bar',
				'label'    => esc_html__( 'Customize Top Bar', 'consultancy' ),
				'section'  => 'dt_site_header_section',
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'consultancy' ),
					'off' => esc_attr__( 'No', 'consultancy' )
				),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
						'fullwidth-header',					
						'fullwidth-header header-align-center fullwidth-menu-header',
						'two-color-header',
						'fullwidth-header header-align-left fullwidth-menu-header' ) ),
				)
			));

			# top-bar-bg-color 			
			CONSULTANCY_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'top-bar-bg-color',
				'label'    => esc_html__( 'Top Bar BG Color', 'consultancy' ),
				'section'  => 'dt_site_header_section',
				'output' => array(
					array( 'element' => '.top-bar' , 'property' => 'background-color' )
				),
				'choices' => array( 'alpha' => true ),
				'default'  => consultancy_defaults('top-bar-bg-color'),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'customize-top-bar', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header', 'two-color-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'fullwidth-header header-align-left fullwidth-menu-header' )
					)
				)		
			));

			# top-bar-text-color 			
			CONSULTANCY_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'top-bar-text-color',
				'label'    => esc_html__( 'Top Bar Text Color', 'consultancy' ),
				'section'  => 'dt_site_header_section',
				'output' => array(
					array( 'element' => '.top-bar' , 'property' => 'color' )
				),
				'choices' => array( 'alpha' => true ),
				'default'  => consultancy_defaults('top-bar-text-color'),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'customize-top-bar', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header', 'two-color-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'fullwidth-header header-align-left fullwidth-menu-header' )
					)
				)		
			));

			# top-bar-a-color 			
			CONSULTANCY_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'top-bar-a-color',
				'label'    => esc_html__( 'Top Bar Anchor Color', 'consultancy' ),
				'section'  => 'dt_site_header_section',
				'output' => array(
					array( 'element' => '.top-bar a' , 'property' => 'color' )
				),
				'choices' => array( 'alpha' => true ),
				'default'  => consultancy_defaults('top-bar-a-color'),				
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'customize-top-bar', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header', 'two-color-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'fullwidth-header header-align-left fullwidth-menu-header' )
					)
				)
			));

			# top-bar-a-hover-color 			
			CONSULTANCY_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'top-bar-a-hover-color',
				'label'    => esc_html__( 'Top Bar Anchor Hover Color', 'consultancy' ),
				'section'  => 'dt_site_header_section',
				'output' => array(
					array( 'element' => '.top-bar a:hover' , 'property' => 'color' )
				),
				'choices' => array( 'alpha' => true ),
				'default'  => consultancy_defaults('top-bar-a-hover-color'),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'customize-top-bar', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header', 'two-color-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'fullwidth-header header-align-left fullwidth-menu-header' )
					)
				)		
			));

		# enable-header-left-content	
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-header-left-content',
			'label'    => esc_html__( 'Show Header Left', 'consultancy' ),
			'section'  => 'dt_site_header_section',
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'consultancy' ),
				'off' => esc_attr__( 'No', 'consultancy' )
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 'fullwidth-header header-align-center fullwidth-menu-header', 'left-header', 'left-header-boxed', 'creative-header' ) ),
			)				
		));

		# header-left-content
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'textarea',
			'settings' => 'header-left-content',
			'label'    => esc_html__( 'Left Content', 'consultancy' ),
			'section'  => 'dt_site_header_section',
			'active_callback' => array(
				array( 'setting' => 'enable-header-left-content', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 'fullwidth-header header-align-center fullwidth-menu-header', 'left-header', 'left-header-boxed', 'creative-header' ) ),
			)
		) );

		# enable-header-right-content	
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-header-right-content',
			'label'    => esc_html__( 'Show Header Right', 'consultancy' ),
			'section'  => 'dt_site_header_section',
			'default'  => consultancy_defaults('enable-header-right-content'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'consultancy' ),
				'off' => esc_attr__( 'No', 'consultancy' )
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
					'fullwidth-header header-align-center fullwidth-menu-header',
					'fullwidth-header header-align-left fullwidth-menu-header' ) ),
			)				
		));

		# header-right-content
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'textarea',
			'settings' => 'header-right-content',
			'label'    => esc_html__( 'Right Content', 'consultancy' ),
			'section'  => 'dt_site_header_section',
			'default'  => consultancy_defaults('header-right-content'),
			'active_callback' => array(
				array( 'setting' => 'enable-header-right-content', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 'fullwidth-header header-align-center fullwidth-menu-header', 'fullwidth-header header-align-left fullwidth-menu-header') ),
			)
		) );

# Header Background Settings
	CONSULTANCY_Kirki::add_section( 'dt_site_header_bg_section', array(
		'title' => esc_html__( 'Header Background', 'consultancy' ),
		'panel' => 'dt_site_header_panel',
		'priority' => 2
	) );

		# customize-header-bg
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-header-bg',
			'label'    => esc_html__( 'Customize Background ?', 'consultancy' ),
			'section'  => 'dt_site_header_bg_section',
			'default'  => consultancy_defaults('customize-header-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'consultancy' ),
				'off' => esc_attr__( 'No', 'consultancy' )
			)						
		));

		# header-bg-color
		CONSULTANCY_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'header-bg-color',
			'label'    => esc_html__( 'Background Color', 'consultancy' ),
			'section'  => 'dt_site_header_bg_section',
			'output' => array(
				array( 'element' => '.main-header-wrapper, .is-sticky .main-header-wrapper, .fullwidth-header .main-header-wrapper, .boxed-header .main-header, .boxed-header .is-sticky .main-header-wrapper, .header-align-left.fullwidth-menu-header .is-sticky .menu-wrapper, .header-align-center.fullwidth-menu-header .is-sticky .menu-wrapper, .standard-header .is-sticky .main-header-wrapper, .two-color-header .main-header-wrapper:before, .header-on-slider .is-sticky .main-header-wrapper, .left-header .main-header-wrapper, .left-header .main-header, .overlay-header .overlay, .dt-menu-toggle' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'customize-header-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# header-bg-image
		CONSULTANCY_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'header-bg-image',
			'label'    => esc_html__( 'Background Image', 'consultancy' ),
			'description'    => esc_html__( 'Add Background Image for breadcrumb', 'consultancy' ),
			'section'  => 'dt_site_header_bg_section',
			'output' => array(
				array( 'element' => '#main-header-wrapper' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'customize-header-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# header-bg-position
		CONSULTANCY_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'header-bg-position',
			'label'    => esc_html__( 'Background Image Position', 'consultancy' ),
			'section'  => 'dt_site_header_bg_section',
			'output' => array(
				array( 'element' => '#main-header-wrapper' , 'property' => 'background-position' )				
			),
			'default' => 'center',
			'multiple' => 1,
			'choices' => consultancy_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'customize-header-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'header-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

		# header-bg-repeat
		CONSULTANCY_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'header-bg-repeat',
			'label'    => esc_html__( 'Background Image Repeat', 'consultancy' ),
			'section'  => 'dt_site_header_bg_section',
			'output' => array(
				array( 'element' => '#main-header-wrapper' , 'property' => 'background-repeat' )				
			),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => consultancy_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'customize-header-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'header-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));		