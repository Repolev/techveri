<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => constant('CONSULTANCY_THEME_NAME').' '.esc_html__('Options', 'consultancy'),
  'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'framework_title' => esc_html__('Designthemes Framework by Designthemes', 'consultancy'),
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

$options[]      = array(
  'name'        => 'general',
  'title'       => esc_html__('General', 'consultancy'),
  'icon'        => 'fa fa-gears',

  'fields'      => array(

	array(
	  'type'    => 'subheading',
	  'content' => esc_html__( 'General Options', 'consultancy' ),
	),

	array(
	  'id'  	 => 'show-pagecomments',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Globally Show Page Comments', 'consultancy'),
	  'info'	 => esc_html__('YES! to show comments on all the pages. This will globally override your "Allow comments" option under your page "Discussion" settings.', 'consultancy')
	),

	array(
	  'id'  	 => 'showall-pagination',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Show all pages in Pagination', 'consultancy'),
	  'info'	 => esc_html__('YES! to show all the pages instead of dots near the current page.', 'consultancy')
	),

	array(
	  'id'  	 => 'enable-stylepicker',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Style Picker', 'consultancy'),
	  'info'	 => esc_html__('YES! to show the style picker.', 'consultancy')
	),

	array(
	  'id'      => 'google-map-key',
	  'type'    => 'text',
	  'title'   => esc_html__('Google Map API Key', 'consultancy'),
	  'after' 	=> '<p class="cs-text-info">'.esc_html__('Put a valid google account api key here', 'consultancy').'</p>',
	),

	array(
	  'id'      => 'mailchimp-key',
	  'type'    => 'text',
	  'title'   => esc_html__('Mailchimp API Key', 'consultancy'),
	  'after' 	=> '<p class="cs-text-info">'.esc_html__('Put a valid mailchimp account api key here', 'consultancy').'</p>',
	),

  ),
);

$options[]      = array(
  'name'        => 'allpage_options',
  'title'       => esc_html__('All Page Options', 'consultancy'),
  'icon'        => 'fa fa-files-o',
  'sections' => array(

	// -----------------------------------------
	// Post Options
	// -----------------------------------------
	array(
	  'name'      => 'post_options',
	  'title'     => esc_html__('Post Options', 'consultancy'),
	  'icon'      => 'fa fa-file',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Single Post Options", 'consultancy' ),
		  ),
		
		  array(
			'id'  		 => 'single-post-authorbox',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Single Author Box', 'consultancy'),
			'info'		 => esc_html__('YES! to display author box in single blog posts.', 'consultancy')
		  ),

		  array(
			'id'  		 => 'single-post-related',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Single Related Posts', 'consultancy'),
			'info'		 => esc_html__('YES! to display related blog posts in single posts.', 'consultancy')
		  ),

		  array(
			'id'  		 => 'single-post-comments',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Posts Comments', 'consultancy'),
			'info'		 => esc_html__('YES! to display single blog post comments.', 'consultancy'),
			'default' 	 => true,
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Post Archives Page Layout", 'consultancy' ),
		  ),

		  array(
			'id'      	 => 'post-archives-page-layout',
			'type'       => 'image_select',
			'title'      => esc_html__('Page Layout', 'consultancy'),
			'options'    => array(
			  'content-full-width'   => CONSULTANCY_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => CONSULTANCY_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => CONSULTANCY_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => CONSULTANCY_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'post-archives-page-layout',
			),
		  ),

		  array(
			'id'  		 => 'show-standard-left-sidebar-for-post-archives',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Left Sidebar', 'consultancy'),
			'dependency' => array( 'post-archives-page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  		 => 'show-standard-right-sidebar-for-post-archives',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Right Sidebar', 'consultancy'),
			'dependency' => array( 'post-archives-page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Post Archives Post Layout", 'consultancy' ),
		  ),

		  array(
			'id'      	   => 'post-archives-post-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Post Layout', 'consultancy'),
			'options'      => array(
			  'one-column' 		  => CONSULTANCY_THEME_URI . '/cs-framework-override/images/one-column.png',
			  'one-half-column'   => CONSULTANCY_THEME_URI . '/cs-framework-override/images/one-half-column.png',
			  'one-third-column'  => CONSULTANCY_THEME_URI . '/cs-framework-override/images/one-third-column.png',
			),
			'default'      => 'one-half-column',
		  ),

		  array(
			'id'  		 => 'post-archives-enable-excerpt',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Allow Excerpt', 'consultancy'),
			'info'		 => esc_html__('YES! to allow excerpt', 'consultancy'),
			'default'    => true,
		  ),

		  array(
			'id'  		 => 'post-archives-excerpt',
			'type'  	 => 'number',
			'title' 	 => esc_html__('Excerpt Length', 'consultancy'),
			'after'		 => '<span class="cs-text-desc">&nbsp;'.esc_html__('Put Excerpt Length', 'consultancy').'</span>',
			'default' 	 => 40,
		  ),

		  array(
			'id'  		 => 'post-archives-enable-readmore',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Read More', 'consultancy'),
			'info'		 => esc_html__('YES! to enable read more button', 'consultancy'),
			'default'	 => true,
		  ),

		  array(
			'id'  		 => 'post-archives-readmore',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Read More Shortcode', 'consultancy'),
			'info'		 => esc_html__('Paste any button shortcode here', 'consultancy'),
			'default'	 => '[dt_sc_button iconclass="fa fa-long-arrow-right" iconalign="icon-right with-icon" class="no-border-bg" title="Read More" icon_type="fontawesome" target="_blank" /]',
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Single Post & Post Archive options", 'consultancy' ),
		  ),

		  array(
			'id'           => 'post-style',
			'type'         => 'select',
			'title'        => esc_html__('Post Style', 'consultancy'),
			'options'      => array(
			  'blog-default-style' 		=> esc_html__('Default', 'consultancy'),
			  'entry-date-left'      	=> esc_html__('Date Left', 'consultancy'),
			  'entry-date-author-left'  => esc_html__('Date and Author Left', 'consultancy'),
			  'blog-medium-style'       => esc_html__('Medium', 'consultancy'),
			  'blog-medium-style dt-blog-medium-highlight'     					 => esc_html__('Medium Hightlight', 'consultancy'),
			  'blog-medium-style dt-blog-medium-highlight dt-sc-skin-highlight'  => esc_html__('Medium Skin Highlight', 'consultancy'),
			),
			'class'        => 'chosen',
			'default'      => 'blog-default-style',
			'info'         => esc_html__('Choose post style to display single blog posts and archives.', 'consultancy'),
		  ),
		  
		  array(
			'id'      => 'post-format-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Post Format Meta', 'consultancy' ),
			'info'	  => esc_html__('YES! to show post format meta information', 'consultancy'),
			'default' => false
		  ),

		  array(
			'id'      => 'post-author-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Author Meta', 'consultancy' ),
			'info'	  => esc_html__('YES! to show post author meta information', 'consultancy'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-date-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Date Meta', 'consultancy' ),
			'info'	  => esc_html__('YES! to show post date meta information', 'consultancy'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-comment-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Comment Meta', 'consultancy' ),
			'info'	  => esc_html__('YES! to show post comment meta information', 'consultancy'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-category-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Category Meta', 'consultancy' ),
			'info'	  => esc_html__('YES! to show post category information', 'consultancy'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-tag-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Tag Meta', 'consultancy' ),
			'info'	  => esc_html__('YES! to show post tag information', 'consultancy'),
			'default' => true
		  ),

		),
	),

	// -----------------------------------------
	// 404 Options
	// -----------------------------------------
	array(
	  'name'      => '404_options',
	  'title'     => esc_html__('404 Options', 'consultancy'),
	  'icon'      => 'fa fa-warning',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "404 Message", 'consultancy' ),
		  ),
		  
		  array(
			'id'      => 'enable-404message',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Message', 'consultancy' ),
			'info'	  => esc_html__('YES! to enable not-found page message.', 'consultancy'),
			'default' => true
		  ),

		  array(
			'id'           => 'notfound-style',
			'type'         => 'select',
			'title'        => esc_html__('Template Style', 'consultancy'),
			'options'      => array(
			  'type1' 	   => esc_html__('Modern', 'consultancy'),
			  'type2'      => esc_html__('Classic', 'consultancy'),
			  'type4'  	   => esc_html__('Diamond', 'consultancy'),
			  'type5'      => esc_html__('Shadow', 'consultancy'),
			  'type6'      => esc_html__('Diamond Alt', 'consultancy'),
			  'type7'  	   => esc_html__('Stack', 'consultancy'),
			  'type8'  	   => esc_html__('Minimal', 'consultancy'),
			),
			'class'        => 'chosen',
			'default'      => 'type2',
			'info'         => esc_html__('Choose the style of not-found template page.', 'consultancy')
		  ),

		  array(
			'id'      => 'notfound-darkbg',
			'type'    => 'switcher',
			'title'   => esc_html__('404 Dark BG', 'consultancy' ),
			'info'	  => esc_html__('YES! to use dark bg notfound page for this site.', 'consultancy')
		  ),

		  array(
			'id'           => 'notfound-pageid',
			'type'         => 'select',
			'title'        => esc_html__('Custom Page', 'consultancy'),
			'options'      => 'pages',
			'class'        => 'chosen',
			'default_option' => esc_html__('Choose the page', 'consultancy'),
			'info'       	 => esc_html__('Choose the page for not-found content.', 'consultancy')
		  ),
		  
		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Background Options", 'consultancy' ),
		  ),

		  array(
			'id'    => 'notfound_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'consultancy')
		  ),

		  array(
			'id'  		 => 'notfound-bg-style',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Custom Styles', 'consultancy'),
			'info'		 => esc_html__('Paste custom CSS styles for not found page.', 'consultancy')
		  ),

		),
	),

	// -----------------------------------------
	// Underconstruction Options
	// -----------------------------------------
	array(
	  'name'      => 'comingsoon_options',
	  'title'     => esc_html__('Under Construction Options', 'consultancy'),
	  'icon'      => 'fa fa-thumbs-down',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Under Construction", 'consultancy' ),
		  ),
	
		  array(
			'id'      => 'enable-comingsoon',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Coming Soon', 'consultancy' ),
			'info'	  => esc_html__('YES! to check under construction page of your website.', 'consultancy')
		  ),
	
		  array(
			'id'           => 'comingsoon-style',
			'type'         => 'select',
			'title'        => esc_html__('Template Style', 'consultancy'),
			'options'      => array(
			  'type1' 	   => esc_html__('Diamond', 'consultancy'),
			  'type2'      => esc_html__('Teaser', 'consultancy'),
			  'type3'  	   => esc_html__('Minimal', 'consultancy'),
			  'type4'      => esc_html__('Counter Only', 'consultancy'),
			  'type5'      => esc_html__('Belt', 'consultancy'),
			  'type6'  	   => esc_html__('Classic', 'consultancy'),
			  'type7'  	   => esc_html__('Boxed', 'consultancy')
			),
			'class'        => 'chosen',
			'default'      => 'type2',
			'info'         => esc_html__('Choose the style of coming soon template.', 'consultancy'),
		  ),

		  array(
			'id'      => 'uc-darkbg',
			'type'    => 'switcher',
			'title'   => esc_html__('Coming Soon Dark BG', 'consultancy' ),
			'info'	  => esc_html__('YES! to use dark bg coming soon page for this site.', 'consultancy')
		  ),

		  array(
			'id'           => 'comingsoon-pageid',
			'type'         => 'select',
			'title'        => esc_html__('Custom Page', 'consultancy'),
			'options'      => 'pages',
			'class'        => 'chosen',
			'default_option' => esc_html__('Choose the page', 'consultancy'),
			'info'       	 => esc_html__('Choose the page for comingsoon content.', 'consultancy')
		  ),

		  array(
			'id'      => 'show-launchdate',
			'type'    => 'switcher',
			'title'   => esc_html__('Show Launch Date', 'consultancy' ),
			'info'	  => esc_html__('YES! to show launch date text.', 'consultancy'),
		  ),

		  array(
			'id'      => 'comingsoon-launchdate',
			'type'    => 'text',
			'title'   => esc_html__('Launch Date', 'consultancy'),
			'attributes' => array( 
			  'placeholder' => '10/30/2016 12:00:00'
			),
			'after' 	=> '<p class="cs-text-info">'.esc_html__('Put Format: 12/30/2016 12:00:00 month/day/year hour:minute:second', 'consultancy').'</p>',
		  ),

		  array(
			'id'           => 'comingsoon-timezone',
			'type'         => 'select',
			'title'        => esc_html__('UTC Timezone', 'consultancy'),
			'options'      => array(
			  '-12' => '-12', '-11' => '-11', '-10' => '-10', '-9' => '-9', '-8' => '-8', '-7' => '-7', '-6' => '-6', '-5' => '-5', 
			  '-4' => '-4', '-3' => '-3', '-2' => '-2', '-1' => '-1', '0' => '0', '+1' => '+1', '+2' => '+2', '+3' => '+3', '+4' => '+4',
			  '+5' => '+5', '+6' => '+6', '+7' => '+7', '+8' => '+8', '+9' => '+9', '+10' => '+10', '+11' => '+11', '+12' => '+12'
			),
			'class'        => 'chosen',
			'default'      => '0',
			'info'         => esc_html__('Choose utc timezone, by default UTC:00:00', 'consultancy'),
		  ),

		  array(
			'id'    => 'comingsoon_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'consultancy')
		  ),

		  array(
			'id'  		 => 'comingsoon-bg-style',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Custom Styles', 'consultancy'),
			'info'		 => esc_html__('Paste custom CSS styles for under construction page.', 'consultancy'),
		  ),

		),
	),

  ),
);

// -----------------------------------------
// Widget area Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'widgetarea_options',
  'title'       => esc_html__('Widget Area', 'consultancy'),
  'icon'        => 'fa fa-trello',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Custom Widget Area for Sidebar", 'consultancy' ),
	  ),

	  array(
		'id'           => 'wtitle-style',
		'type'         => 'select',
		'title'        => esc_html__('Sidebar widget Title Style', 'consultancy'),
		'options'      => array(
		  'default' => esc_html__('Choose any type', 'consultancy'),
		  'type1' 	   => esc_html__('Double Border', 'consultancy'),
		  'type2'      => esc_html__('Tooltip', 'consultancy'),
		  'type3'  	   => esc_html__('Title Top Border', 'consultancy'),
		  'type4'      => esc_html__('Left Border & Pattren', 'consultancy'),
		  'type5'      => esc_html__('Bottom Border', 'consultancy'),
		  'type6'  	   => esc_html__('Tooltip Border', 'consultancy'),
		  'type7'  	   => esc_html__('Boxed Modern', 'consultancy'),
		  'type8'  	   => esc_html__('Elegant Border', 'consultancy'),
		  'type9' 	   => esc_html__('Needle', 'consultancy'),
		  'type10' 	   => esc_html__('Ribbon', 'consultancy'),
		  'type11' 	   => esc_html__('Content Background', 'consultancy'),
		  'type12' 	   => esc_html__('Classic BG', 'consultancy'),
		  'type13' 	   => esc_html__('Tiny Boders', 'consultancy'),
		  'type14' 	   => esc_html__('BG & Border', 'consultancy'),
		  'type15' 	   => esc_html__('Classic BG Alt', 'consultancy'),
		  'type16' 	   => esc_html__('Left Border & BG', 'consultancy'),
		  'type17' 	   => esc_html__('Basic', 'consultancy'),
		  'type18' 	   => esc_html__('BG & Pattern', 'consultancy'),
		),
		'class'          => 'chosen',
		'default' 		 => 'default',
		'info'           => esc_html__('Choose the style of sidebar widget title.', 'consultancy')
	  ),

	  array(
		'id'              => 'widgetarea-custom',
		'type'            => 'group',
		'title'           => esc_html__('Custom Widget Area', 'consultancy'),
		'button_title'    => esc_html__('Add New', 'consultancy'),
		'accordion_title' => esc_html__('Add New Widget Area', 'consultancy'),
		'fields'          => array(

		  array(
			'id'          => 'widgetarea-custom-name',
			'type'        => 'text',
			'title'       => esc_html__('Name', 'consultancy'),
		  ),

		)
	  ),

	),
);

// -----------------------------------------
// Woocommerce Options
// -----------------------------------------
if( function_exists( 'is_woocommerce' ) ){

	$options[]      = array(
	  'name'        => 'woocommerce_options',
	  'title'       => esc_html__('Woocommerce', 'consultancy'),
	  'icon'        => 'fa fa-shopping-cart',

	  'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Woocommerce Shop Page Options", 'consultancy' ),
		  ),

		  array(
			'id'  		 => 'shop-product-per-page',
			'type'  	 => 'number',
			'title' 	 => esc_html__('Products Per Page', 'consultancy'),
			'after'		 => '<span class="cs-text-desc">&nbsp;'.esc_html__('Number of products to show in catalog / shop page', 'consultancy').'</span>',
			'default' 	 => 12,
		  ),

		  array(
			'id'           => 'product-style',
			'type'         => 'select',
			'title'        => esc_html__('Product Style', 'consultancy'),
			'options'      => array(
			  'type1' 	   => esc_html__('Thick Border', 'consultancy'),
			  'type2'      => esc_html__('Pattern Overlay', 'consultancy'),
			  'type3'  	   => esc_html__('Thin Border', 'consultancy'),
			  'type4'      => esc_html__('Diamond Icons', 'consultancy'),
			  'type5'      => esc_html__('Girly', 'consultancy'),
			  'type6'  	   => esc_html__('Push Animation', 'consultancy'),
			  'type7' 	   => esc_html__('Dual Color BG', 'consultancy'),
			  'type8' 	   => esc_html__('Modern', 'consultancy'),
			  'type9' 	   => esc_html__('Diamond & Border', 'consultancy'),
			  'type10' 	   => esc_html__('Easing', 'consultancy'),
			  'type11' 	   => esc_html__('Boxed', 'consultancy'),
			  'type12' 	   => esc_html__('Easing Alt', 'consultancy'),
			  'type13' 	   => esc_html__('Parallel', 'consultancy'),
			  'type14' 	   => esc_html__('Pointer', 'consultancy'),
			  'type15' 	   => esc_html__('Diamond Flip', 'consultancy'),
			  'type16' 	   => esc_html__('Stack', 'consultancy'),
			  'type17' 	   => esc_html__('Bouncy', 'consultancy'),
			  'type18' 	   => esc_html__('Hexagon', 'consultancy'),
			  'type19' 	   => esc_html__('Masked Diamond', 'consultancy'),
			  'type20' 	   => esc_html__('Masked Circle', 'consultancy'),
			  'type21' 	   => esc_html__('Classic', 'consultancy'),
			),
			'class'        => 'chosen',
			'default' 	   => 'type6',
			'info'         => esc_html__('Choose products style to display shop & archive pages.', 'consultancy')
		  ),

		  array(
			'id'      	 => 'shop-page-product-layout',
			'type'       => 'image_select',
			'title'      => esc_html__('Product Layout', 'consultancy'),
			'options'    => array(
			  'one-half-column'     => CONSULTANCY_THEME_URI . '/cs-framework-override/images/one-half-column.png',
			  'one-third-column'    => CONSULTANCY_THEME_URI . '/cs-framework-override/images/one-third-column.png',
			  'one-fourth-column'   => CONSULTANCY_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
			),
			'default'      => 'one-third-column',
			'attributes'   => array(
			  'data-depend-id' => 'shop-page-product-layout',
			),
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Product Detail Page Options", 'consultancy' ),
		  ),

		  array(
			'id'      	   => 'product-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Layout', 'consultancy'),
			'options'      => array(
			  'content-full-width'   => CONSULTANCY_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => CONSULTANCY_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => CONSULTANCY_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => CONSULTANCY_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'product-layout',
			),
		  ),

		  array(
			'id'  		 	 => 'show-shop-standard-left-sidebar-for-product-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Left Sidebar', 'consultancy'),
			'dependency'   	 => array( 'product-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  			 => 'show-shop-standard-right-sidebar-for-product-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Right Sidebar', 'consultancy'),
			'dependency' 	 => array( 'product-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  		 	 => 'enable-related',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Related Products', 'consultancy'),
			'info'	  		 => esc_html__("YES! to display related products on single product's page.", 'consultancy'),
			'default'		=> true
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Product Category Page Options", 'consultancy' ),
		  ),

		  array(
			'id'      	   => 'product-category-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Layout', 'consultancy'),
			'options'      => array(
			  'content-full-width'   => CONSULTANCY_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => CONSULTANCY_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => CONSULTANCY_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => CONSULTANCY_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'product-category-layout',
			),
		  ),

		  array(
			'id'  		 	 => 'show-shop-standard-left-sidebar-for-product-category-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Left Sidebar', 'consultancy'),
			'dependency'   	 => array( 'product-category-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  			 => 'show-shop-standard-right-sidebar-for-product-category-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Right Sidebar', 'consultancy'),
			'dependency' 	 => array( 'product-category-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),
		  
		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Product Tag Page Options", 'consultancy' ),
		  ),

		  array(
			'id'      	   => 'product-tag-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Layout', 'consultancy'),
			'options'      => array(
			  'content-full-width'   => CONSULTANCY_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => CONSULTANCY_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => CONSULTANCY_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => CONSULTANCY_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'product-tag-layout',
			),
		  ),

		  array(
			'id'  		 	 => 'show-shop-standard-left-sidebar-for-product-tag-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Left Sidebar', 'consultancy'),
			'dependency'   	 => array( 'product-tag-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  			 => 'show-shop-standard-right-sidebar-for-product-tag-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Right Sidebar', 'consultancy'),
			'dependency' 	 => array( 'product-tag-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

	  ),
	);
}

// -----------------------------------------
// Hook Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'hook_options',
  'title'       => esc_html__('Hooks', 'consultancy'),
  'icon'        => 'fa fa-paperclip',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Top Hook", 'consultancy' ),
	  ),

	  array(
		'id'  	=> 'enable-top-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Top Hook', 'consultancy'),
		'info'	=> esc_html__("YES! to enable top hook.", 'consultancy')
	  ),

	  array(
		'id'  		 => 'top-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Top Hook', 'consultancy'),
		'info'		 => esc_html__('Paste your top hook, Executes after the opening &lt;body&gt; tag.', 'consultancy')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Content Before Hook", 'consultancy' ),
	  ),

	  array(
		'id'  	=> 'enable-content-before-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Content Before Hook', 'consultancy'),
		'info'	=> esc_html__("YES! to enable content before hook.", 'consultancy')
	  ),

	  array(
		'id'  		 => 'content-before-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Content Before Hook', 'consultancy'),
		'info'		 => esc_html__('Paste your content before hook, Executes before the opening &lt;#primary&gt; tag.', 'consultancy')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Content After Hook", 'consultancy' ),
	  ),

	  array(
		'id'  	=> 'enable-content-after-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Content After Hook', 'consultancy'),
		'info'	=> esc_html__("YES! to enable content after hook.", 'consultancy')
	  ),

	  array(
		'id'  		 => 'content-after-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Content After Hook', 'consultancy'),
		'info'		 => esc_html__('Paste your content after hook, Executes after the closing &lt;/#main&gt; tag.', 'consultancy')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Bottom Hook", 'consultancy' ),
	  ),

	  array(
		'id'  	=> 'enable-bottom-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Bottom Hook', 'consultancy'),
		'info'	=> esc_html__("YES! to enable bottom hook.", 'consultancy')
	  ),

	  array(
		'id'  		 => 'bottom-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Bottom Hook', 'consultancy'),
		'info'		 => esc_html__('Paste your bottom hook, Executes after the closing &lt;/body&gt; tag.', 'consultancy')
	  ),

  array(
		'id'  	=> 'enable-analytics-code',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Tracking Code', 'consultancy'),
		'info'	=> esc_html__("YES! to enable site tracking code.", 'consultancy')
	  ),

	  array(
		'id'  		 => 'analytics-code',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Google Analytics Tracking Code', 'consultancy'),
		'info'		 => esc_html__('Either enter your Google tracking id (UA-XXXXX-X) or your full Google Analytics tracking Code here. If you want to offer your visitors the option to stop being tracked you can place the shortcode [dt_sc_privacy_google_tracking] somewhere on your site', 'consultancy')
	  ),

   ),
);

// ------------------------------
// backup                       
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => esc_html__('Backup', 'consultancy'),
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => esc_html__('You can save your current options. Download a Backup and Import.', 'consultancy')
    ),

    array(
      'type'    => 'backup',
    ),

  )
);

// ------------------------------
// license
// ------------------------------
$options[]   = array(
  'name'     => 'theme_version',
  'title'    => constant('CONSULTANCY_THEME_NAME').esc_html__(' Log', 'consultancy'),
  'icon'     => 'fa fa-info-circle',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => constant('CONSULTANCY_THEME_NAME').esc_html__(' Theme Change Log', 'consultancy')
    ),
    array(
      'type'    => 'content',
	  'content' => '<pre>
2020.08.13 - version 2.2
* Compatible with wordpress 5.5
	  
2020.08.03 - version 2.1
* Updated: Envato Theme check
* Updated: sanitize_text_field added
* Updated: All wordpress theme standards
* Updated: All premium plugins

2020.06.17 - version 2.0

* Compatible with wordpress 5.4.2
* Updated: Some design tweaks
* Updated: Sub menu mouse hover issue
* Updated: Activating another theme causes error
* Updated: Header icons issue
* Updated: Parallax issue when scrolling

2020.02.06 - version 1.9

* Updated : All premium plugins	  

2020.01.29 – version 1.8

* Compatible with wordpress 5.3.2
* Updated: All premium plugins
* Updated: All wordpress theme standards
* Updated: Privacy and Cookies concept
* Updated: Gutenberg editor support for custom post types

* Fixed: Google Analytics issue
* Fixed: Mailchimp email client issue
* Fixed: Privacy Button Issue
* Fixed: Gutenberg check for old wordpress version

* Improved: Tags taxonomy added for portfolio
* Improved: Single product breadcrumb section
* Improved: Revisions options added for all custom posts

2019.11.12 – version 1.7

* Updated all wordpress theme standards
* Compatible with latest Gutenberg editor
* Updated: All premium plugins
* Updated: language files
* Compatible with wordpress 5.3

2019.08.26 – version 1.6
* Compatible with wordpress 5.2.3
* Updated: All wordpress theme standards
* Updated: All premium plugins
* Updated: Revisions added to all custom post types
* Updated: Gutenberg editor support for custom post types
* Updated: Link for phone number module
* Updated: Online documentation link, check readme file

* Fixed: Customizer logo option
* Fixed: Google Analytics issue
* Fixed: Mailchimp email client issue
* Fixed: Gutenberg check for old wordpress version
* Fixed: Edit with Visual Composer for portfolio
* Fixed: Site title color
* Fixed: Privacy popup bg color

* Improved: Single product breadcrumb section
* Improved: Tags taxonomy added for portfolio
* Improved: Woocommerce cart module added with custom class option

* New: Whatsapp Shortcode

2019.06.25 - version 1.5
* Gutenberg Latest update compatible
* Portfolio Video option
* Coming Soon page fix
* GDPR product single page fix
* Codestar framework update
* wpml xml file updated
* Updated latest version of all third party plugins
* Image Caption module link
* Some design tweaks
    

2019.01.19 - version 1.4

 * Gutenberg compatible
 * Latest WordPress version 5.0.3 compatible
 * Updated latest version of all third party plugins
 * Some design tweaks

2018.11.10 - version 1.3
 * Gutenberg plugin compatible
 * Latest wordpress version 4.9.8 compatible
 * Updated latest version of all third party plugins
 * Updated documentation

2018.08.04 - version 1.2
* GDPR Compliant update in comment form, mailchimp form etc.
* Compatible with wordpress 4.9.8
* Packed with - Layer Slider 6.7.6
* Packed with - Revolution Slider 5.4.8
* Packed with - WPBakery Page Builder 5.5.2
* Packed with - Ultimate Addons for Visual Composer 3.16.24
* Packed with - Envato Market 2.0.0

2018.05.16 - version 1.1
* Updated all third party plugins
* Fix - Unyson page builder conflicts with "Visual Composer" and "DesignThemes Page Builder" 
* Fix - All theme functions updated for child theme support
* Fix - Option for change the site title color
* Fix - Add target attribute for social media
* Fix - PO File updated. 
* Fix - ssl video player issue
* Fix - Nav Menu compatibility
* Fix - Menu disable link design issue
* Fix - Updated demo content
* Fix - Blog page with sidebar issue
* Fix - Mega Menu dropdown option
* Fix - Bundled with updated woocommerce file
* Fix - Twitter link added
* Fix - Documentation update

2017.07.04 - version 1.0
 * First release!  </pre>',
    ),

  )
);

// ------------------------------
// Seperator
// ------------------------------
$options[] = array(
  'name'   => 'seperator_1',
  'title'  => esc_html__('Plugin Options', 'consultancy'),
  'icon'   => 'fa fa-plug'
);


CSFramework::instance( $settings, $options );