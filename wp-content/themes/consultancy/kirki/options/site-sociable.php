<?php
$config = consultancy_kirki_config();

CONSULTANCY_Kirki::add_section( 'dt_sociable_section', array(
	'title' => esc_html__( 'Site Sociable', 'consultancy' ),
	'priority' => 190
) );

	# Delicious
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-delicious',
		'label'	   => esc_html__( 'Delicious', 'consultancy' ),
		'section'  => 'dt_sociable_section',
	));

	# Deviantart 
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-deviantart',
		'label'	   => esc_html__( 'Deviantart', 'consultancy' ),
		'section'  => 'dt_sociable_section',
	));

	# Digg 
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-digg',
		'label'	   => esc_html__( 'Digg', 'consultancy' ),
		'section'  => 'dt_sociable_section',
	));

	# Dribbble
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-dribbble',
		'label'	   => esc_html__( 'Dribbble', 'consultancy' ),
		'section'  => 'dt_sociable_section',
	));

	# Envelope
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-envelope',
		'label'	   => esc_html__( 'Envelope', 'consultancy' ),
		'section'  => 'dt_sociable_section',
	));			

	# Facebook
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-facebook',
		'label'	   => esc_html__( 'Facebook', 'consultancy' ),
		'section'  => 'dt_sociable_section',
		'default'  => '#'
	));

	# Flickr
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-flickr',
		'label'    => esc_html__( 'Flickr', 'consultancy' ),
		'section'  => 'dt_sociable_section',
	));

	# Google Plus
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-google-plus',
		'label'	   => esc_html__( 'Google Plus', 'consultancy' ),
		'section'  => 'dt_sociable_section',
		'default'  => '#'
	));

	# GTalk
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-gtalk',
		'label'	   => esc_html__( 'GTalk', 'consultancy' ),
		'section'  => 'dt_sociable_section',
	));

	# Instagram
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-instagram',
		'label'	   => esc_html__( 'Instagram', 'consultancy' ),
		'section'  => 'dt_sociable_section',
	));

	# Lastfm
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-lastfm',
		'label'	   => esc_html__( 'Lastfm', 'consultancy' ),
		'section'  => 'dt_sociable_section',
	));

	# Linkedin
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-linkedin',
		'label'    => esc_html__( 'Linkedin', 'consultancy' ),
		'section'  => 'dt_sociable_section',
	));

	# Pinterest
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-pinterest',
		'label'	   => esc_html__( 'Pinterest', 'consultancy' ),
		'section'  => 'dt_sociable_section',
	));

	# Reddit
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-reddit',
		'label'	   => esc_html__( 'Reddit', 'consultancy' ),
		'section'  => 'dt_sociable_section',
	));

	# RSS
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-rss',
		'label'	   => esc_html__( 'RSS', 'consultancy' ),
		'section'  => 'dt_sociable_section',
	));

	# Skype
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-skype',
		'label'	   => esc_html__( 'Skype', 'consultancy' ),
		'section'  => 'dt_sociable_section',
	));

	# Stumbleupon 
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-stumbleupon',
		'label'	   => esc_html__( 'Stumbleupon', 'consultancy' ),
		'section'  => 'dt_sociable_section',
	));

	# Tumblr
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-tumblr',
		'label'	   => esc_html__( 'Tumblr', 'consultancy' ),
		'section'  => 'dt_sociable_section',
	));

	# Twitter 
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-twitter',
		'label'	   => esc_html__( 'Twitter', 'consultancy' ),
		'section'  => 'dt_sociable_section',
		'default'  => '#'
	));

	# Viadeo
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-viadeo',
		'label'	   => esc_html__( 'Viadeo', 'consultancy' ),
		'section'  => 'dt_sociable_section',
	));

	# Vimeo
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-vimeo',
		'label'	   => esc_html__( 'Vimeo', 'consultancy' ),
		'section'  => 'dt_sociable_section',
	));

	# Yahoo
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-yahoo',
		'label'	   => esc_html__( 'Yahoo', 'consultancy' ),
		'section'  => 'dt_sociable_section',
	));

	# Youtube
	CONSULTANCY_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-youtube',
		'label'	   => esc_html__( 'Youtube', 'consultancy' ),
		'section'  => 'dt_sociable_section',
	));