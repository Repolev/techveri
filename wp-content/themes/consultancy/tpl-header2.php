<?php
/*
Template Name: Header: Fullwidth
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php wp_head(); ?>
</head>

<body <?php body_class('fullwidth-header'); ?>>

<?php
// loading
$loader = (int) get_theme_mod( 'use-site-loader', consultancy_defaults('use-site-loader') );
if( !empty($loader) )
echo '<div class="loader">
		<div class="loader-inner">
			<div class="preloader">
				<span data-preloader41="'.esc_attr__('L', 'consultancy').'">'.esc_html__('L', 'consultancy').'</span>
				<span data-preloader41="'.esc_attr__('O', 'consultancy').'">'.esc_html__('O', 'consultancy').'</span>
				<span data-preloader41="'.esc_attr__('A', 'consultancy').'">'.esc_html__('A', 'consultancy').'</span>
				<span data-preloader41="'.esc_attr__('D', 'consultancy').'">'.esc_html__('D', 'consultancy').'</span>
				<span data-preloader41="'.esc_attr__('I', 'consultancy').'">'.esc_html__('I', 'consultancy').'</span>
				<span data-preloader41="'.esc_attr__('N', 'consultancy').'">'.esc_html__('N', 'consultancy').'</span>
				<span data-preloader41="'.esc_attr__('G', 'consultancy').'">'.esc_html__('G', 'consultancy').'</span>
			</div>
		</div>
	</div>';
// top hook
do_action( 'consultancy_hook_top' ); ?>

<!-- **Wrapper** -->
<div class="wrapper">
	<div class="inner-wrapper">

		<!-- **Header Wrapper** -->
        <?php
		$hdarkbg = get_theme_mod( 'enable-header-darkbg', consultancy_defaults('enable-header-darkbg') ); 
		$class = ( $hdarkbg ) ? 'dt-sc-dark-bg' : ''; ?>
		<div id="header-wrapper" class="<?php echo esc_attr( $class ); ?>">
            <!-- **Header** -->
            <header id="header"><?php
				//top bar
				$topbar 	=  (int) get_theme_mod( 'enable-top-bar-content', consultancy_defaults('enable-top-bar-content') );
				$topcontent =  get_theme_mod( 'top-bar-content', '');
				if( ($topbar) && isset($topcontent) && $topcontent != '' ):?>
        	        <div class="top-bar">
            	        <div class="container"><?php
							$content = do_shortcode( stripslashes($topcontent) );
							echo consultancy_wp_kses( $content ); ?>	
                        </div>
                    </div><?php
				endif; ?>

            	<!-- **Main Header Wrapper** -->
            	<div id="main-header-wrapper" class="main-header-wrapper">

            		<div class="container">

            			<!-- **Main Header** -->
            			<div class="main-header">

							<?php consultancy_header_logo(); ?>

            				<div id="menu-wrapper" class="menu-wrapper <?php echo get_theme_mod( 'menu-active-style', consultancy_defaults('menu-active-style') ); ?>">
                            	<div class="dt-menu-toggle" id="dt-menu-toggle">
                                	<?php esc_html_e('Menu','consultancy'); ?>
                                    <span class="dt-menu-toggle-icon"></span>
                                </div><?php
								// Menu & Header
								consultancy_wp_nav_menu();
								require_once( CONSULTANCY_THEME_DIR .'/headers/default.php' ); ?>
            				</div>
            			</div>
            		</div>
            	</div><!-- **Main Header** --><?php
				echo consultancy_slider(); ?>

			</header><!-- **Header - End** -->
		</div><!-- **Header Wrapper - End** -->

        <!-- **Main** -->
        <div id="main"><?php
			// subtitle & breadcrumb section
			$tpl_default_settings = get_post_meta($post->ID,'_tpl_default_settings',TRUE);
			$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();

			if(empty($tpl_default_settings)) $tpl_default_settings['enable-sub-title'] = 'true';

			if($tpl_default_settings['enable-sub-title'] == 'true' ):
				require_once( CONSULTANCY_THEME_DIR .'/headers/breadcrumb.php' );
			endif;

			$class = "container"; ?>

            <!-- ** Container ** -->
            <div class="<?php echo esc_attr($class); ?>"><?php
			do_action( 'consultancy_hook_content_before' );

			$page_layout  = array_key_exists( "layout", $tpl_default_settings ) ? $tpl_default_settings['layout'] : "content-full-width";
			$show_sidebar = $show_left_sidebar = $show_right_sidebar = false;
			$sidebar_class = "";
			
			switch ( $page_layout ) {
				case 'with-left-sidebar':
					$page_layout = "page-with-sidebar with-left-sidebar";
					$show_sidebar = $show_left_sidebar = true;
					$sidebar_class = "secondary-has-left-sidebar";
				break;
		
				case 'with-right-sidebar':
					$page_layout = "page-with-sidebar with-right-sidebar";
					$show_sidebar = $show_right_sidebar	= true;
					$sidebar_class = "secondary-has-right-sidebar";
				break;
				
				case 'with-both-sidebar':
					$page_layout = "page-with-sidebar with-both-sidebar";
					$show_sidebar = $show_left_sidebar = $show_right_sidebar	= true;
					$sidebar_class = "secondary-has-both-sidebar";
				break;
		
				case 'content-full-width':
				default:
					$page_layout = "content-full-width";
				break;
			}
		
			if ( $show_sidebar ):
				if ( $show_left_sidebar ): ?>
					<!-- Secondary Left -->
					<section id="secondary-left" class="secondary-sidebar <?php echo esc_attr( $sidebar_class ); ?>"><?php get_sidebar('left'); ?></section><?php
				endif;
			endif;?>
			<section id="primary" class="<?php echo esc_attr( $page_layout ); ?>"><?php
				if( have_posts() ):
					while( have_posts() ):
						the_post();
						get_template_part( 'framework/loops/content', 'page' );
					endwhile;
				endif;?>
			</section><!-- **Primary - End** --><?php
		
			if ( $show_sidebar ):
				if ( $show_right_sidebar ): ?>
					<!-- Secondary Right -->
					<section id="secondary-right" class="secondary-sidebar <?php echo esc_attr( $sidebar_class ); ?>"><?php get_sidebar('right'); ?></section><?php
				endif;
			endif; ?>
        </div><!-- **Container - End** -->

        </div><!-- **Main - End** --><?php

        do_action( 'consultancy_hook_content_after' );

        $footer = (int) get_theme_mod( 'show-footer', consultancy_defaults('show-footer') );
		$activefooter = consultancy_is_active_sidebar_footer();
        $show_copyright_section = (int) get_theme_mod( 'show-copyright-text', consultancy_defaults('show-copyright-text') ); ?>
        <!-- **Footer** -->
        <footer id="footer">
            <?php if( !empty( $footer ) && $activefooter ) :
                $darkbg =(int) get_theme_mod( 'enable-footer-darkbg', consultancy_defaults('enable-footer-darkbg') );
                $class = ( $darkbg ) ? 'dt-sc-dark-bg' : '';
                $columns = (int) get_theme_mod( 'footer-columns', consultancy_defaults('footer-columns') ); ?>
                <div class="footer-widgets <?php echo esc_attr( $class ); ?>">
                    <div class="container"><?php
                        consultancy_show_footer_widgetarea( $columns ); ?>
                    </div>
                </div>
            <?php endif;

            $copyright = get_theme_mod( 'copyright-text', consultancy_defaults('copyright-text') );
            $copyright = stripslashes ( $copyright );
            $copyright = do_shortcode( $copyright );

            $copyright_next = get_theme_mod( 'copyright-next', consultancy_defaults('copyright-next') );

            $darkbg = get_theme_mod( 'enable-copyright-darkbg', consultancy_defaults('enable-copyright-darkbg') );
            $class  = ( $darkbg ) ? 'dt-sc-dark-bg' : '';
			$center = ( $copyright_next == 'disable' ) ? 'align-center' : ''; ?>
            <div class="footer-copyright <?php echo esc_attr( $class ); ?>">
                <div class="container">
                    <div class="column dt-sc-one-half first <?php esc_attr( $center ); ?>"><?php
                        if( !empty( $show_copyright_section ) ) :
                            echo consultancy_wp_kses( $copyright );
                        endif; ?>
                    </div>
                    <div class="column dt-sc-one-half <?php esc_attr( $copyright_next ); ?>"><?php
                        if( $copyright_next == 'sociable' ) :
                            $sociables = get_theme_mod( 'footer-sociables', consultancy_defaults( 'footer-sociables' ) );
						    $start = $end = $list = '';

                            if( !empty( $sociables ) ) {
                                $start = '<ul class="dt-sc-sociable">';
                                $end = '</ul>';
                            }

                            foreach( $sociables as $social ) {
                                $value = get_theme_mod( 'social-'.$social, '#' );
                                if( !empty( $value) ) {
                                    $list .= '<li class="'.esc_attr( $social ).'"><a target="_blank" href="'.esc_attr( $value ).'"></a></li>';
                                }
                            }

                            echo (($start.$list.$end));
                        elseif( $copyright_next == 'footer-menu' ):
                            wp_nav_menu( array(
                                'container' => false,
                                'menu_id' => 'menu-footer-menu',
                                'menu_class' => 'menu-links',
                                'theme_location' => 'footer-menu',
                                'depth' => 1
                            ) );
                        endif;?>
                    </div>
                </div>
            </div>
           </footer><!-- **Footer - End** -->
    </div><!-- **Inner Wrapper - End** -->
</div><!-- **Wrapper - End** -->
<?php do_action( 'consultancy_hook_bottom' ); ?>
<?php wp_footer(); ?>
</body>
</html>