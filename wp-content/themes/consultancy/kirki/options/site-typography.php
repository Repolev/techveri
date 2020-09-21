<?php
$config = consultancy_kirki_config();

# Menu Typography
CONSULTANCY_Kirki::add_section( 'dt_menu_typo_section', array(
	'title' => esc_html__( 'Menu', 'consultancy' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 5
) );
	
	# customize-menu-typo
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-menu-typo',
		'label'    => esc_html__( 'Customize Menu Typo', 'consultancy' ),
		'section'  => 'dt_menu_typo_section',
		'default'  => consultancy_defaults( 'customize-menu-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'consultancy' ),
			'off' => esc_attr__( 'No', 'consultancy' )
		)
	));

	# menu-typo
	CONSULTANCY_Kirki::add_field( $config ,array(
		'type' => 'typography',
		'settings' => 'menu-typo',
		'label'    => esc_html__('Settings', 'consultancy'),
		'section'  => 'dt_menu_typo_section',
		'output' => array(
			array( 'element' => '#main-menu > ul.menu > li > a, #main-menu > ul.menu > li > .nolink-menu' )
		),
		'default' => consultancy_defaults('menu-typo'),
		'active_callback' => array(
			array( 'setting' => 'customize-menu-typo', 'operator' => '==', 'value' => '1' )
		)
	));

# Body Content
CONSULTANCY_Kirki::add_section( 'dt_body_content_typo_section', array(
	'title' => esc_html__( 'Body', 'consultancy' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 10
) );
	
	# customize-body-content-typo
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-body-content-typo',
		'label'    => esc_html__( 'Customize Content Typo', 'consultancy' ),
		'section'  => 'dt_body_content_typo_section',
		'default'  => consultancy_defaults( 'customize-body-content-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'consultancy' ),
			'off' => esc_attr__( 'No', 'consultancy' )
		)
	));

	# body-content-typo
	CONSULTANCY_Kirki::add_field( $config ,array(
		'type' => 'typography',
		'settings' => 'body-content-typo',
		'label'    => esc_html__('Settings', 'consultancy'),
		'section'  => 'dt_body_content_typo_section',
		'output' => array( 
			array( 'element' => 'body' ),
			array( 
				'element' => '.editor-styles-wrapper > *',
				'context' => array ('editor')
			)
		),
		'default' => consultancy_defaults('body-content-typo'),
		'active_callback' => array(
			array( 'setting' => 'customize-body-content-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# customize-primary-content-typo
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-primary-content-typo',
		'label'    => esc_html__( 'Customize Primary Content Typo', 'consultancy' ),
		'section'  => 'dt_body_content_typo_section',
		'default'  => consultancy_defaults( 'customize-primary-content-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'consultancy' ),
			'off' => esc_attr__( 'No', 'consultancy' )
		)
	));

	# primary-content-typo
	CONSULTANCY_Kirki::add_field( $config ,array(
		'type' => 'typography',
		'settings' => 'primary-content-typo',
		'label'    => esc_html__('Settings', 'consultancy'),
		'section'  => 'dt_body_content_typo_section',
		'output' => array( 
			array( 'element' => 'input[type="text"], input[type="password"], input[type="email"], input[type="url"], input[type="tel"], input[type="number"], input[type="range"], input[type="date"], textarea, input.text, input[type="search"], select, textarea, #main-menu ul.menu > li > a, .dt-sc-counter.type1 .dt-sc-counter-number, .dt-sc-portfolio-sorting a, .dt-sc-testimonial.type1 blockquote, .entry-meta, .dt-sc-testimonial .dt-sc-testimonial-author cite, .dt-sc-pr-tb-col.minimal .dt-sc-price p, .dt-sc-pr-tb-col.minimal .dt-sc-price h6 span, .dt-sc-testimonial.special-testimonial-carousel blockquote, .dt-sc-pr-tb-col .dt-sc-tb-title, .dt-sc-pr-tb-col .dt-sc-tb-content, .dt-sc-button, .dt-sc-bar-text, input[type="submit"], input[type="reset"], blockquote.type1, .dt-sc-testimonial.type5 .dt-sc-testimonial-quote blockquote, .dt-sc-testimonial.type5 .dt-sc-testimonial-author cite:before, .dt-sc-testimonial.type1 q:before, .dt-sc-testimonial.type1 q:after, .dt-sc-title.script-with-sub-title h4, .dt-sc-title.script-with-sub-title h5, .dt-sc-title.script-with-sub-title h6, .type2.heading-with-button h5.dt-sc-toggle-accordion:before, .type2.heading-with-button h5.dt-sc-toggle:before, .dt-sc-toggle-frame-set .dt-sc-toggle-accordion a strong, h5.dt-sc-toggle a strong, .dt-sc-image-caption.type5 p, .custom-request-form .ipt-uif-custom-material-custom .input-field label, .custom-request-form .ipt-uif-custom-material-custom .ui-button .ui-button-text, .custom-request-form .ipt-uif-custom-material-custom .ipt_uif_message .ui-widget-content p,	.custom-request-form .ipt-uif-custom-material-custom .ipt_fsqm_form_message_success .ui-widget-content p, .custom-request-form .ipt-uif-custom-material-custom .ipt_fsqm_form_message_error .ui-widget-content p, .custom-request-form .ipt-uif-custom-material-custom .ipt_fsqm_form_validation_error .ui-widget-content p, .custom-request-form .ipt-uif-custom-material-custom .ipt_fsqm_form_message_restore .ui-widget-content p, 	.custom-request-form .ipt-uif-custom-material-custom .eform-styled-widget .ui-widget-content p, .custom-request-form .ipt-uif-custom-material-custom a' )
		),
		'default' => consultancy_defaults('primary-content-typo'),
		'active_callback' => array(
			array( 'setting' => 'customize-primary-content-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# customize-secondary-content-typo
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-secondary-content-typo',
		'label'    => esc_html__( 'Customize Secondary Content Typo', 'consultancy' ),
		'section'  => 'dt_body_content_typo_section',
		'default'  => consultancy_defaults( 'customize-secondary-content-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'consultancy' ),
			'off' => esc_attr__( 'No', 'consultancy' )
		)
	));

	# secondary-content-typo
	CONSULTANCY_Kirki::add_field( $config ,array(
		'type' => 'typography',
		'settings' => 'secondary-content-typo',
		'label'    => esc_html__('Settings', 'consultancy'),
		'section'  => 'dt_body_content_typo_section',
		'output' => array( 
			array( 'element' => '.dt-sc-tabs-horizontal-frame-container.type3 ul.dt-sc-tabs-horizontal-frame > li > a, .dt-sc-icon-box.type2 .icon-content h4, .dt-sc-team.simple-rounded .dt-sc-team-details h4, .type2 h5.dt-sc-toggle-accordion, .type2 h5.dt-sc-toggle, .dt-sc-counter.type2 .dt-sc-counter-number, .dt-sc-icon-box.type8 .icon-content h4, h5.dt-sc-donutchart-title, .donutchart-text, .dt-sc-progress-wrapper .dt-sc-bar-title, .dt-sc-team.without-bg .dt-sc-team-details h4, .dt-sc-team.without-bg .dt-sc-team-details h5, .dt-sc-icon-box.type5.bordered .icon-content h4, h5.dt-sc-toggle-accordion, h5.dt-sc-toggle, ul.dt-sc-tabs-horizontal > li > a, ul.dt-sc-tabs-vertical > li > a, ul.dt-sc-tabs-horizontal-frame > li > a, ul.dt-sc-tabs-horizontal-frame, ul.dt-sc-tabs-vertical-frame > li > a, .dt-sc-image-caption.type5 h3, .dt-sc-image-caption.type5 h6, .dt-sc-counter.type1.decorated .dt-sc-counter-number, .dt-sc-icon-box.type1 .icon-content h4, .dt-sc-newsletter-section.type7 .dt-sc-subscribe-frm input[type="submit"], .dt-sc-map-form-holder, .dt-sc-pr-tb-col, .dt-sc-pr-tb-col .dt-sc-price h6, .dt-sc-team h1, .dt-sc-team h2, .dt-sc-team h3, .dt-sc-team h4, .dt-sc-team h5, .dt-sc-team h6, .dt-sc-colored-big-buttons, .custom-request-form .ipt-uif-custom-material-custom *, .custom-request-form .ipt-uif-custom-material-custom select, .custom-request-form .ipt-uif-custom-material-custom option, .dt-sc-testimonial-wrapper .dt-sc-testimonial.type1.masonry .dt-sc-testimonial-author cite, #toTop, ul.side-nav li a, .under-construction.type2 p, .under-construction.type2 .downcount .dt-sc-counter-wrapper:first-child h3, body div.pp_default .pp_description, .blog-entry.single  .entry-title h4, .post-nav-container .post-next-link a, .post-nav-container .post-prev-link a' )
		),
		'default' => consultancy_defaults('secondary-content-typo'),
		'active_callback' => array(
			array( 'setting' => 'customize-secondary-content-typo', 'operator' => '==', 'value' => '1' )
		)
	));


CONSULTANCY_Kirki::add_section( 'dt_headings_typo_section', array(
	'title' => esc_html__( 'Headings', 'consultancy' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 1
) );
	# Heading Tags
	for( $i=1; $i<=6; $i++ ) {

		$output = array(
			array( 'element' => 'h'.$i ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h'.$i,
				'context' => array ('editor')
			),
		);		

		if( $i == 1 ) {

			$output = array(
				array( 'element' => 'h1' ),
				array( 
					'element' => '.editor-post-title__block .editor-post-title__input, .editor-styles-wrapper .wp-block h1, body#tinymce.wp-editor.content h1',
					'context' => array ('editor')
				),
			);
		}


		# customize-body-heading-typo
		CONSULTANCY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-body-h'.$i.'-typo',
			'label'    => esc_html__( 'Customize H', 'consultancy' ). $i.__(' Tag', 'consultancy'),
			'section'  => 'dt_headings_typo_section',
			'default'  => consultancy_defaults( 'customize-body-h'.$i.'-typo' ),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'consultancy' ),
				'off' => esc_attr__( 'No', 'consultancy' )
			)
		));

		# heading tag typography	
		CONSULTANCY_Kirki::add_field( $config ,array(
			'type'            => 'typography',
			'settings'        => 'h'.$i,
			'label'           => esc_html__( 'H', 'consultancy' ).$i. ' '.__('Tag Settings', 'consultancy'),
			'section'         => 'dt_headings_typo_section',
			'output'          => $output,
			'default'         => consultancy_defaults('h'.$i),
			'active_callback' => array(
				array( 'setting' => 'customize-body-h'.$i.'-typo', 'operator' => '==', 'value' => '1' )
			)
		));		

		# Divider
		CONSULTANCY_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'customize-body-h'.$i.'-typo-divider',
			'section'  => 'dt_headings_typo_section',
			'default'  => '<div class="customize-control-divider"></div>'
		));		
	}