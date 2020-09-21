<?php
/* ---------------------------------------------------------------------------
 * Hook of Top
 * --------------------------------------------------------------------------- */
if(!function_exists('consultancy_hook_top')) {
function consultancy_hook_top() {
	if( cs_get_option( 'enable-top-hook' ) ) :
		echo '<!-- consultancy_hook_top -->';
			$hook = cs_get_option( 'top-hook' );
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
			echo apply_filters( 'consultancy_top_hook', $hook );
		echo '<!-- consultancy_hook_top -->';
	endif;	
}
}
add_action( 'consultancy_hook_top', 'consultancy_hook_top' );


/* ---------------------------------------------------------------------------
 * Hook of Content before
 * --------------------------------------------------------------------------- */
if(!function_exists('consultancy_hook_content_before')) {
function consultancy_hook_content_before() {
	if( cs_get_option( 'enable-content-before-hook' ) ) :
		echo '<!-- consultancy_hook_content_before -->';
			$hook = cs_get_option( 'content-before-hook' );
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
				echo do_shortcode( stripslashes($hook) );
		echo '<!-- consultancy_hook_content_before -->';
	endif;
}
}
add_action( 'consultancy_hook_content_before', 'consultancy_hook_content_before' );


/* ---------------------------------------------------------------------------
 * Hook of Content after
 * --------------------------------------------------------------------------- */
if(!function_exists('consultancy_hook_content_after')) {
function consultancy_hook_content_after() {
	if( cs_get_option( 'enable-content-after-hook' ) ) :
		echo '<!-- consultancy_hook_content_after -->';
			$hook = cs_get_option( 'content-after-hook' );
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
				echo do_shortcode( stripslashes($hook) );
		echo '<!-- consultancy_hook_content_after -->';
	endif;
}
}
add_action( 'consultancy_hook_content_after', 'consultancy_hook_content_after' );


/* ---------------------------------------------------------------------------
 * Hook of Bottom
 * --------------------------------------------------------------------------- */
if(!function_exists('consultancy_hook_bottom')) {
function consultancy_hook_bottom() {
	if( cs_get_option( 'enable-bottom-hook' ) ) :
		echo '<!-- consultancy_hook_bottom -->';
			$hook = cs_get_option( 'bottom-hook' );
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
				echo do_shortcode( stripslashes($hook) );
		echo '<!-- consultancy_hook_bottom -->';
	endif;
}
}
add_action( 'consultancy_hook_bottom', 'consultancy_hook_bottom' );

function consultancy_skins( $skin ) {
	$skins['blue']           =  array( 'primary-color' => '#274584',  'secondary-color' => '#e3f6f9', 'tertiary-color' => '#7699e3', 'quaternary-default-color' => '#7699e3' ); 
	$skins['cyan']           =  array( 'primary-color' => '#00b6e7',  'secondary-color' => '#edfbff', 'tertiary-color' => '#b7cacf', 'quaternary-default-color' => '#b7cacf' ); 
	$skins['green']          =  array( 'primary-color' => '#27d100',  'secondary-color' => '#e5ffdf', 'tertiary-color' => '#b9cdb5', 'quaternary-default-color' => '#b9cdb5' ); 
	$skins['orange']         =  array( 'primary-color' => '#f76e2a',  'secondary-color' => '#fff4ef', 'tertiary-color' => '#cdbeb6', 'quaternary-default-color' => '#cdbeb6' ); 
	$skins['pink']           =  array( 'primary-color' => '#eb0e85',  'secondary-color' => '#fff1f8', 'tertiary-color' => '#cfb7c3', 'quaternary-default-color' => '#cfb7c3' ); 
	$skins['purple']         =  array( 'primary-color' => '#9d00ff',  'secondary-color' => '#f8ecff', 'tertiary-color' => '#c4b5cd', 'quaternary-default-color' => '#c4b5cd' ); 
	$skins['radient-orchid'] =  array( 'primary-color' => '#b565a7',  'secondary-color' => '#f0e0ed', 'tertiary-color' => '#cdb6c9', 'quaternary-default-color' => '#cdb6c9' ); 
	$skins['red']            =  array( 'primary-color' => '#e7204e',  'secondary-color' => '#ffeaef', 'tertiary-color' => '#cdb6bb', 'quaternary-default-color' => '#cdb6bb' ); 
	$skins['royal-blue']     =  array( 'primary-color' => '#0069ff',  'secondary-color' => '#f1f7ff', 'tertiary-color' => '#b6c0cd', 'quaternary-default-color' => '#b6c0cd' ); 
	$skins['teal']           =  array( 'primary-color' => '#19b5a5',  'secondary-color' => '#e4fffc', 'tertiary-color' => '#b6cdca', 'quaternary-default-color' => '#b6cdca' ); 
	return $skins[ $skin ];
}
?>