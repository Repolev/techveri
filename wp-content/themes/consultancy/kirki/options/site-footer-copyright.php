<?php
$config = consultancy_kirki_config();

# Footer Copyright
	CONSULTANCY_Kirki::add_section( 'dt_footer_copyright', array(
		'title'	=> esc_html__( 'Copyright', 'consultancy' ),
		'description' => esc_html__('Footer Copyright Settings','consultancy'),
		'panel' 		 => 'dt_footer_copyright_panel',
		'priority' => 1
	) );

		# show-copyright-text
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'show-copyright-text',
			'label'    => esc_html__( 'Show Copyright Text ?', 'consultancy' ),
			'section'  => 'dt_footer_copyright',
			'default'  =>  consultancy_defaults('show-copyright-text'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'consultancy' ),
				'off' => esc_attr__( 'No', 'consultancy' )
			)
		) );

		# copyright-text
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'textarea',
			'settings' => 'copyright-text',
			'label'    => esc_html__( 'Add Content', 'consultancy' ),
			'section'  => 'dt_footer_copyright',
			'default'  =>  consultancy_defaults('copyright-text'),
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' )
			)
		) );

		# enable-copyright-darkbg
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-copyright-darkbg',
			'label'    => esc_html__( 'Enable Copyright Dark BG ?', 'consultancy' ),
			'section'  => 'dt_footer_copyright',
			'default'  =>  consultancy_defaults('enable-copyright-darkbg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'consultancy' ),
				'off' => esc_attr__( 'No', 'consultancy' )
			)
		) );		

		# copyright-next
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'copyright-next',
			'label'    => esc_html__( 'Show Sociable / menu ?', 'consultancy' ),
			'description'    => esc_html__( 'Add description here.', 'consultancy' ),
			'section'  => 'dt_footer_copyright',
			'default'  => consultancy_defaults('copyright-next'),
			'choices'  => array(
				'hidden'  => esc_attr__( 'Hide', 'consultancy' ),
				'disable'  => esc_attr__( 'Disable', 'consultancy' ),
				'sociable' => esc_attr__( 'Show sociable', 'consultancy' ),
				'footer-menu' => esc_attr__( 'Show menu', 'consultancy' ),
			)
		) );

# Footer Social
	CONSULTANCY_Kirki::add_section( 'dt_footer_social', array(
		'title'	=> esc_html__( 'Social', 'consultancy' ),
		'description' => esc_html__('Footer Social Icons Settings','consultancy'),
		'panel' 		 => 'dt_footer_copyright_panel',
		'priority' => 2
	) );

		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'sortable',
			'settings' => 'footer-sociables',
			'label'    => esc_html__( 'Social Icons Order', 'consultancy' ),
			'section'  => 'dt_footer_social',
			'default'  => consultancy_defaults('footer-sociables'),
			'choices'  => array(
				"delicious"		=>	esc_attr__( 'Delicious', 'consultancy' ),
				"deviantart"	=>	esc_attr__( 'Deviantart', 'consultancy' ),
				"digg"			=>	esc_attr__( 'Digg', 'consultancy' ),
				"dribbble"		=>	esc_attr__( 'Dribbble', 'consultancy' ),
				"envelope-open"	=>	esc_attr__( 'Envelope', 'consultancy' ),
				"facebook"		=>	esc_attr__( 'Facebook', 'consultancy' ),
				"flickr"		=>	esc_attr__( 'Flickr', 'consultancy' ),
				"google-plus"	=>	esc_attr__( 'Google Plus', 'consultancy' ),
				"comment"		=>	esc_attr__( 'GTalk', 'consultancy' ),
				"instagram"		=>	esc_attr__( 'Instagram', 'consultancy' ),
				"lastfm"		=>	esc_attr__( 'Lastfm', 'consultancy' ),
				"linkedin"		=>	esc_attr__( 'Linkedin', 'consultancy' ),
				"pinterest"		=>	esc_attr__( 'Pinterest', 'consultancy' ),
				"reddit"		=>	esc_attr__( 'Reddit', 'consultancy' ),
				"rss"			=>	esc_attr__( 'RSS', 'consultancy' ),
				"skype"			=>	esc_attr__( 'Skype', 'consultancy' ),
				"stumbleupon"	=>	esc_attr__( 'Stumbleupon', 'consultancy' ),
				"tumblr"		=>	esc_attr__( 'Tumblr', 'consultancy' ),
				"twitter"		=>	esc_attr__( 'Twitter', 'consultancy' ),
				"viadeo"		=>	esc_attr__( 'Viadeo', 'consultancy' ),
				"vimeo"			=>	esc_attr__( 'Vimeo', 'consultancy' ),
				"yahoo"			=>	esc_attr__( 'Yahoo', 'consultancy' ),
				"youtube"		=>	esc_attr__( 'Youtube', 'consultancy' ),
			),
			'active_callback' => array(
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'sociable' ),
			)
		) );

# Footer Copyright Background		
	CONSULTANCY_Kirki::add_section( 'dt_footer_copyright_bg', array(
		'title'	=> esc_html__( 'Background', 'consultancy' ),
		'panel' => 'dt_footer_copyright_panel',
		'priority' => 3,
	) );

		# customize-footer-copyright-bg
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-copyright-bg',
			'label'    => esc_html__( 'Customize Background ?', 'consultancy' ),
			'section'  => 'dt_footer_copyright_bg',
			'default'  => consultancy_defaults('customize-footer-copyright-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'consultancy' ),
				'off' => esc_attr__( 'No', 'consultancy' )
			),
			'active_callback' => array(
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )
				)
			)
		));

		# footer-copyright-bg-color
		CONSULTANCY_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'footer-copyright-bg-color',
			'label'    => esc_html__( 'Background Color', 'consultancy' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(
				array( 'element' => '.footer-copyright' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )				
				)
			)
		));

		# footer-copyright-bg-image
		CONSULTANCY_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'footer-copyright-bg-image',
			'label'    => esc_html__( 'Background Image', 'consultancy' ),
			'description'    => esc_html__( 'Add Background Image for footer', 'consultancy' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(
				array( 'element' => '.footer-copyright' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )		
				)
			)
		));

		# footer-copyright-bg-position
		CONSULTANCY_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-copyright-bg-position',
			'label'    => esc_html__( 'Background Image Position', 'consultancy' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(),
			'default' => 'center',
			'multiple' => 1,
			'choices' => consultancy_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )		
				),
				array( 'setting' => 'footer-copyright-bg-image', 'operator' => '!=', 'value' => '' )				
			)			
		));

		# footer-copyright-bg-repeat
		CONSULTANCY_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-copyright-bg-repeat',
			'label'    => esc_html__( 'Background Image Repeat', 'consultancy' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => consultancy_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )		
				),
				array( 'setting' => 'footer-copyright-bg-image', 'operator' => '!=', 'value' => '' )
			)			
		));

# Footer Copyright Typography
	CONSULTANCY_Kirki::add_section( 'dt_footer_copyright_typo', array(
		'title'	=> esc_html__( 'Typography', 'consultancy' ),
		'panel' => 'dt_footer_copyright_panel',
		'priority' => 4,
	) );

		# customize-footer-copyright-text-typo
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-copyright-text-typo',
			'label'    => esc_html__( 'Customize Copyright Text ?', 'consultancy' ),
			'section'  => 'dt_footer_copyright_typo',
			'default'  => consultancy_defaults('customize-footer-copyright-text-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'consultancy' ),
				'off' => esc_attr__( 'No', 'consultancy' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-copyright-text-typo
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-copyright-text-typo',
			'label'    => esc_html__( 'Text Typography', 'consultancy' ),
			'section'  => 'dt_footer_copyright_typo',
			'output' => array(
				array( 'element' => '.footer-copyright' )
			),
			'default' => consultancy_defaults( 'footer-copyright-text-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-copyright-text-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# Divider
		CONSULTANCY_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'footer-copyright-text-typo-divider',
			'section'  => 'dt_footer_copyright_typo',
			'default'  => '<div class="customize-control-divider"></div>',
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'footer-menu' )
			)			
		));		

		# customize-footer-menu-typo
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-menu-typo',
			'label'    => esc_html__( 'Customize Footer Menu ?', 'consultancy' ),
			'section'  => 'dt_footer_copyright_typo',
			'default'  => consultancy_defaults('customize-footer-menu-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'consultancy' ),
				'off' => esc_attr__( 'No', 'consultancy' )
			),
			'active_callback' => array(
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'footer-menu' )
			)			
		));

		# footer-menu-typo
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-menu-typo',
			'label'    => esc_html__( 'Menu Typography', 'consultancy' ),
			'section'  => 'dt_footer_copyright_typo',
			'output' => array(
				array( 'element' => '' )
			),
			'default' => consultancy_defaults( 'footer-menu-typo' ),
			'active_callback' => array(
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'footer-menu' ),
				array( 'setting' => 'customize-footer-menu-typo', 'operator' => '==', 'value' => '1' )
			)		
		));		