<?php
// menu icons
$socialicons = (int) get_theme_mod( 'menu-social-icons', consultancy_defaults('menu-social-icons') );
$searchicon = (int) get_theme_mod( 'menu-search-icon', consultancy_defaults('menu-search-icon') );
$carticon = (int) get_theme_mod( 'menu-cart-icon', consultancy_defaults('menu-cart-icon') );
?>
	<div class="menu-icons-wrapper"><?php
		if( !empty($socialicons) ): ?>
        	<div class="menu-social-icons">            	
            	<ul class="dt-sc-sociable"><?php
					$sociables = array( 'delicious', 'deviantart', 'digg', 'dribbble', 'envelope-open', 'facebook', 'flickr', 'google-plus', 'comment', 'instagram', 'lastfm', 'linkedin',
					'pinterest', 'reddit', 'rss', 'skype', 'stumbleupon', 'tumblr', 'twitter', 'viadeo', 'vimeo', 'yahoo', 'youtube' );
					foreach( $sociables as $social ) {
						$value = get_theme_mod( 'social-'.$social, consultancy_defaults('social-'.$social) );
						if( !empty( $value) ) {
							echo '<li class="'.esc_attr( $social ).'"><a target="_blank" href="'.esc_attr( $value ).'"></a></li>';
						}
					} ?>
                </ul>
            </div><?php
		endif;
		if( !empty($searchicon) ): ?>
			<div class="search"><?php
				// getting search box type
				$type = get_theme_mod( 'search-box-type', consultancy_defaults('search-box-type') );
				$type = !empty( $type ) ? $type : 'type1'; ?>
				<a href="javascript:void(0)" id="overlay-search-<?php echo esc_attr( $type ); ?>" class="dt-search-icon <?php echo esc_attr( $type ); ?>"> <span class="fa fa-search"> </span> </a><?php
				if($type == 'type1'): ?>
                    <div class="top-menu-search-container">
                        <?php get_search_form(); ?>
                    </div><?php
				else: ?>
                    <div class="overlay overlay-search">
                        <div class="overlay-close"></div>
                        <?php get_search_form(); ?>
                    </div><?php
				endif; ?>
			</div><?php
		endif;
		if( !empty($carticon) && function_exists("is_woocommerce")) : ?>
			<div class="cart">
				<a href="<?php echo wc_get_cart_url(); ?>" title="<?php esc_html_e( 'View Shopping Cart', 'consultancy' ); ?>">
					<span class="fa fa-shopping-cart"> </span><?php
					$count = WC()->cart->cart_contents_count;
					if( $count > 0 ) : ?>
						<sup><?php echo esc_html( $count ); ?></sup><?php
					endif;?>
				</a>
			</div><?php
		endif; ?>
	</div>