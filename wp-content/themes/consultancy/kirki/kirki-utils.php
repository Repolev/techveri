<?php
function consultancy_kirki_config() {
	return 'consultancy_kirki_config';
}

function consultancy_defaults( $key = '' ) {
	$defaults = array();

	# site identify
	$defaults['use-custom-logo'] = '1';
	$defaults['custom-logo'] = CONSULTANCY_THEME_URI.'/images/logo.png';
	$defaults['custom-dark-logo'] = CONSULTANCY_THEME_URI.'/images/light-logo.png';
	$defaults['site_icon'] = CONSULTANCY_THEME_URI.'/images/favicon.ico';

	# site layout
	$defaults['site-layout'] = 'wide';
	$defaults['body-bg-color']      = '#ffffff';
	$defaults['body-content-color'] = '#4d4d4d';
	$defaults['body-a-color']       = '#274584';
	$defaults['body-a-hover-color'] = '#888888';
	$defaults['custom-title'] = '#ffffff';

	# site skin
	$defaults['use-predefined-skin']      = '1';
	$defaults['predefined-skin']          = 'blue';
	$defaults['primary-color']            = '';
	$defaults['secondary-color']          = '';
	$defaults['tertiary-color']           = '';
	$defaults['quaternary-default-color'] = '';

	# site breadcrump
	$defaults['show-breadcrumb'] = '1';
	$defaults['breadcrumb-delimiter'] = 'fa fa-hand-o-right';
	$defaults['breadcrumb-style'] = 'default';
	$defaults['customize-breadcrumb-title-typo'] = '1';
	$defaults['breadcrumb-title-typo'] = array( 'font-family' => 'Raleway',
		'variant' => '600',
		'subsets' => array( 'latin-ext' ),
		'font-size' => '24px',
		'line-height' => '',
		'letter-spacing' => '0',
		'color' => '#ffffff',
		'text-transform' => 'none' );
	$defaults['customize-breadcrumb-typo'] = '1';
	$defaults['breadcrumb-typo'] = array( 'font-family' => 'Poppins',
		'variant' => 'regular',
		'subsets' => array( 'latin-ext' ),
		'font-size' => '',
		'line-height' => '',
		'letter-spacing' => '0',
		'color' => '#333333',
		'text-transform' => 'none' );

	# site header
	$defaults['header-type'] = 'fullwidth-header header-align-left fullwidth-menu-header';
	$defaults['enable-sticy-nav'] = '1';
	$defaults['header-position'] = 'on slider';
	$defaults['header-transparency'] = 'transparent-header';
	$defaults['enable-header-darkbg'] = '0';
	$defaults['menu-social-icons'] = '1';
	$defaults['menu-search-icon'] = '1';
	$defaults['search-box-type'] = 'type2';
	$defaults['menu-cart-icon'] = '1';
	$defaults['enable-top-bar-content'] = '1';
	$defaults['top-bar-content'] = '<div class="dt-sc-one-half column first"><p>Welcome to Consultancy  WordPress Theme</p></div><div class="alignright dt-sc-one-half column"><div class="text-with-icon"><span class="zmdi zmdi-home zmdi-hc-fw"> </span><a title="Stores" target="_blank" href="#">Stores</a></div><div class="text-with-icon"><span class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"> </span><a title="Shop" target="_blank" href="#">Shop</a></div><div class="text-with-icon"><span class="zmdi zmdi-smartphone-iphone zmdi-hc-fw"> </span><a title="Contact" target="_blank" href="#">Contact</a></div></div>';
	$defaults['enable-header-right-content'] = '1';
	$defaults['header-right-content'] = '[vc_row][vc_column width="1/2"][/vc_column][vc_column width="1/4" el_class="alignleft"][dt_sc_contact_info icon="zmdi zmdi-smartphone-ring zmdi-hc-fw"](226) 906-2721 [dt_sc_br br="1"]<a href="mailto:test@somemail.com">test@somemail.com</a>[/dt_sc_contact_info][/vc_column][vc_column width="1/4" el_class="alignleft"][dt_sc_contact_info icon="zmdi zmdi-time zmdi-hc-fw"]9 am to 8 pm [dt_sc_br br="1"]Monday - Saturday[/dt_sc_contact_info][/vc_column][/vc_row]';

	# site menu
	$defaults['menu-active-style'] =  'menu-with-splitter';
	$defaults['menu-hover-style'] =  '';

	# site footer
	$defaults['show-footer'] = '1';
	$defaults['footer-columns'] = '4';
	$defaults['enable-footer-darkbg'] = '1';
	$defaults['customize-footer-title-typo'] = '1';
	$defaults['footer-title-typo'] = array( 'font-family' => 'Raleway',
		'variant' => '700',
		'subsets' => array( 'latin-ext' ),
		'font-size' => '20px',
		'line-height' => '36px',
		'letter-spacing' => '0',
		'color' => '#2B2B2B',
		'text-align' => 'left',
		'text-transform' => 'none' );
	$defaults['customize-footer-content-typo'] = '1';
	$defaults['footer-content-typo'] = array( 'font-family' => 'Poppins',
		'variant' => 'regular',
		'subsets' => array( 'latin-ext' ),
		'font-size' => '14px',
		'line-height' => '28px',
		'letter-spacing' => '0',
		'color' => '#333333',
		'text-align' => 'left',
		'text-transform' => 'none' );

	# site copyright
	$defaults['show-copyright-text'] = '1';
	$defaults['copyright-text'] = '&copy; 2019 Consultancy. All rights reserved.';
	$defaults['enable-copyright-darkbg'] = '1';
	$defaults['copyright-next'] = '';
	$defaults['footer-sociables'] = array( 'facebook', 'google-plus', 'linkedin', 'pinterest' );
	$defaults['customize-footer-copyright-bg'] = '0';
	$defaults['customize-footer-copyright-text-typo'] = '0';
	$defaults['customize-footer-menu-typo'] = '0';

	# site social
	$defaults['social-facebook'] = '#';
	$defaults['social-twitter'] = '#';
	$defaults['social-google-plus'] = '#';
	$defaults['social-delicious'] = '#';

	# site typography
	$defaults['customize-body-h1-typo'] = '1';	
	$defaults['h1'] = array(
		'font-family' => 'Raleway',
		'variant' => '700',
		'font-size' => '50px',
		'line-height' => 'normal',
		'letter-spacing' => '0.75px',
		'color' => '#4d4d4d',
		'text-align' => 'initial',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h2-typo'] = '1';	
	$defaults['h2'] = array(
		'font-family' => 'Raleway',
		'variant' => '600',
		'font-size' => '40px',
		'line-height' => 'normal',
		'letter-spacing' => '0.75px',
		'color' => '#4d4d4d',
		'text-align' => 'initial',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h3-typo'] = '1';	
	$defaults['h3'] = array(
		'font-family' => 'Raleway',
		'variant' => '600',
		'font-size' => '30px',
		'line-height' => 'normal',
		'letter-spacing' => '0.75px',
		'color' => '#4d4d4d',
		'text-align' => 'initial',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h4-typo'] = '1';	
	$defaults['h4'] = array(
		'font-family' => 'Poppins',
		'variant' => 'regular',
		'font-size' => '24px',
		'line-height' => 'normal',
		'letter-spacing' => '0.75px',
		'color' => '#4d4d4d',
		'text-align' => 'initial',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h5-typo'] = '1';	
	$defaults['h5'] = array(
		'font-family' => 'Poppins',
		'variant' => 'regular',
		'font-size' => '20px',
		'line-height' => 'normal',
		'letter-spacing' => '0.75px',
		'color' => '#4d4d4d',
		'text-align' => 'initial',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h6-typo'] = '1';	
	$defaults['h6'] = array(
		'font-family' => 'Poppins',
		'variant' => 'regular',
		'font-size' => '16px',
		'line-height' => 'normal	',
		'letter-spacing' => '0.75px',
		'color' => '#4d4d4d',
		'text-align' => 'initial',
		'text-transform' => 'none'
	);
	$defaults['menu-typo'] = array(
		'font-family' => 'Poppins',
		'variant' => 'regular',
		'font-size' => '',
		'line-height' => '',
		'letter-spacing' => '',
		'color' => '#2f2f2f',
		'text-align' => 'initial',
		'text-transform' => 'none'
	);
	$defaults['customize-body-content-typo'] = '1';
	$defaults['body-content-typo'] = array(
		'font-family' => 'Poppins',
		'variant' => 'regular',
		'font-size' => '14px',
		'line-height' => '28px',
		'letter-spacing' => '0.5px',
		'color' => '#4d4d4d',
		'text-align' => 'initial',
		'text-transform' => 'none'
	);

	$defaults['customize-primary-content-typo'] = '1';
	$defaults['primary-content-typo'] = array(
		'font-family' => 'Poppins'
	);

	$defaults['customize-secondary-content-typo'] = '1';
	$defaults['secondary-content-typo'] = array(
		'font-family' => 'Raleway',
	);

	$defaults['footer-content-a-color'] = '';
	$defaults['footer-content-a-hover-color'] = '';
	

	if( !empty( $key ) && array_key_exists( $key, $defaults) ) {
		return $defaults[$key];
	}

	return '';
}

function consultancy_image_positions() {

	$positions = array( "top left" => esc_attr__('Top Left','consultancy'),
		"top center"    => esc_attr__('Top Center','consultancy'),
		"top right"     => esc_attr__('Top Right','consultancy'),
		"center left"   => esc_attr__('Center Left','consultancy'),
		"center center" => esc_attr__('Center Center','consultancy'),
		"center right"  => esc_attr__('Center Right','consultancy'),
		"bottom left"   => esc_attr__('Bottom Left','consultancy'),
		"bottom center" => esc_attr__('Bottom Center','consultancy'),
		"bottom right"  => esc_attr__('Bottom Right','consultancy'),
	);

	return $positions;
}

function consultancy_image_repeats() {

	$image_repeats = array( "repeat" => esc_attr__('Repeat','consultancy'),
		"repeat-x"  => esc_attr__('Repeat in X-axis','consultancy'),
		"repeat-y"  => esc_attr__('Repeat in Y-axis','consultancy'),
		"no-repeat" => esc_attr__('No Repeat','consultancy')
	);

	return $image_repeats;
}

function consultancy_border_styles() {

	$image_repeats = array(
		"dotted" => esc_attr__('Dotted','consultancy'),
		"dashed" => esc_attr__('Dashed','consultancy'),
		"solid"	 => esc_attr__('Solid','consultancy'),
		"double" => esc_attr__('Double','consultancy'),
		"groove" => esc_attr__('Groove','consultancy'),
		"ridge"	 => esc_attr__('Ridge','consultancy'),
	);

	return $image_repeats;
}

function consultancy_animations() {

	$animations = array(
		'' 					 => esc_html__('Default','consultancy'),	
		"bigEntrance"        =>  esc_attr__("bigEntrance",'consultancy'),
        "bounce"             =>  esc_attr__("bounce",'consultancy'),
        "bounceIn"           =>  esc_attr__("bounceIn",'consultancy'),
        "bounceInDown"       =>  esc_attr__("bounceInDown",'consultancy'),
        "bounceInLeft"       =>  esc_attr__("bounceInLeft",'consultancy'),
        "bounceInRight"      =>  esc_attr__("bounceInRight",'consultancy'),
        "bounceInUp"         =>  esc_attr__("bounceInUp",'consultancy'),
        "bounceOut"          =>  esc_attr__("bounceOut",'consultancy'),
        "bounceOutDown"      =>  esc_attr__("bounceOutDown",'consultancy'),
        "bounceOutLeft"      =>  esc_attr__("bounceOutLeft",'consultancy'),
        "bounceOutRight"     =>  esc_attr__("bounceOutRight",'consultancy'),
        "bounceOutUp"        =>  esc_attr__("bounceOutUp",'consultancy'),
        "expandOpen"         =>  esc_attr__("expandOpen",'consultancy'),
        "expandUp"           =>  esc_attr__("expandUp",'consultancy'),
        "fadeIn"             =>  esc_attr__("fadeIn",'consultancy'),
        "fadeInDown"         =>  esc_attr__("fadeInDown",'consultancy'),
        "fadeInDownBig"      =>  esc_attr__("fadeInDownBig",'consultancy'),
        "fadeInLeft"         =>  esc_attr__("fadeInLeft",'consultancy'),
        "fadeInLeftBig"      =>  esc_attr__("fadeInLeftBig",'consultancy'),
        "fadeInRight"        =>  esc_attr__("fadeInRight",'consultancy'),
        "fadeInRightBig"     =>  esc_attr__("fadeInRightBig",'consultancy'),
        "fadeInUp"           =>  esc_attr__("fadeInUp",'consultancy'),
        "fadeInUpBig"        =>  esc_attr__("fadeInUpBig",'consultancy'),
        "fadeOut"            =>  esc_attr__("fadeOut",'consultancy'),
        "fadeOutDownBig"     =>  esc_attr__("fadeOutDownBig",'consultancy'),
        "fadeOutLeft"        =>  esc_attr__("fadeOutLeft",'consultancy'),
        "fadeOutLeftBig"     =>  esc_attr__("fadeOutLeftBig",'consultancy'),
        "fadeOutRight"       =>  esc_attr__("fadeOutRight",'consultancy'),
        "fadeOutUp"          =>  esc_attr__("fadeOutUp",'consultancy'),
        "fadeOutUpBig"       =>  esc_attr__("fadeOutUpBig",'consultancy'),
        "flash"              =>  esc_attr__("flash",'consultancy'),
        "flip"               =>  esc_attr__("flip",'consultancy'),
        "flipInX"            =>  esc_attr__("flipInX",'consultancy'),
        "flipInY"            =>  esc_attr__("flipInY",'consultancy'),
        "flipOutX"           =>  esc_attr__("flipOutX",'consultancy'),
        "flipOutY"           =>  esc_attr__("flipOutY",'consultancy'),
        "floating"           =>  esc_attr__("floating",'consultancy'),
        "hatch"              =>  esc_attr__("hatch",'consultancy'),
        "hinge"              =>  esc_attr__("hinge",'consultancy'),
        "lightSpeedIn"       =>  esc_attr__("lightSpeedIn",'consultancy'),
        "lightSpeedOut"      =>  esc_attr__("lightSpeedOut",'consultancy'),
        "pullDown"           =>  esc_attr__("pullDown",'consultancy'),
        "pullUp"             =>  esc_attr__("pullUp",'consultancy'),
        "pulse"              =>  esc_attr__("pulse",'consultancy'),
        "rollIn"             =>  esc_attr__("rollIn",'consultancy'),
        "rollOut"            =>  esc_attr__("rollOut",'consultancy'),
        "rotateIn"           =>  esc_attr__("rotateIn",'consultancy'),
        "rotateInDownLeft"   =>  esc_attr__("rotateInDownLeft",'consultancy'),
        "rotateInDownRight"  =>  esc_attr__("rotateInDownRight",'consultancy'),
        "rotateInUpLeft"     =>  esc_attr__("rotateInUpLeft",'consultancy'),
        "rotateInUpRight"    =>  esc_attr__("rotateInUpRight",'consultancy'),
        "rotateOut"          =>  esc_attr__("rotateOut",'consultancy'),
        "rotateOutDownRight" =>  esc_attr__("rotateOutDownRight",'consultancy'),
        "rotateOutUpLeft"    =>  esc_attr__("rotateOutUpLeft",'consultancy'),
        "rotateOutUpRight"   =>  esc_attr__("rotateOutUpRight",'consultancy'),
        "shake"              =>  esc_attr__("shake",'consultancy'),
        "slideDown"          =>  esc_attr__("slideDown",'consultancy'),
        "slideExpandUp"      =>  esc_attr__("slideExpandUp",'consultancy'),
        "slideLeft"          =>  esc_attr__("slideLeft",'consultancy'),
        "slideRight"         =>  esc_attr__("slideRight",'consultancy'),
        "slideUp"            =>  esc_attr__("slideUp",'consultancy'),
        "stretchLeft"        =>  esc_attr__("stretchLeft",'consultancy'),
        "stretchRight"       =>  esc_attr__("stretchRight",'consultancy'),
        "swing"              =>  esc_attr__("swing",'consultancy'),
        "tada"               =>  esc_attr__("tada",'consultancy'),
        "tossing"            =>  esc_attr__("tossing",'consultancy'),
        "wobble"             =>  esc_attr__("wobble",'consultancy'),
        "fadeOutDown"        =>  esc_attr__("fadeOutDown",'consultancy'),
        "fadeOutRightBig"    =>  esc_attr__("fadeOutRightBig",'consultancy'),
        "rotateOutDownLeft"  =>  esc_attr__("rotateOutDownLeft",'consultancy')
    );

	return $animations;
}