	<?php $event_id = get_the_ID(); ?>

    <p class="nav-top-links">
        <a href="<?php echo esc_url( tribe_get_events_link() ); ?>" class="back-nav">« <?php esc_html_e('All Events', 'consultancy'); ?></a>
    </p>
    <div class="dt-sc-full-width column first">
      <div class="event-image-wrapper">   
          <?php echo tribe_event_featured_image( $event_id, 'consultancy-event-single-type1', false ); ?>
      </div>
      <h1 class="tribe-events-single-event-title"><?php the_title(); ?></h1>
      <p class="event-datetime">
        <h2><span><?php echo tribe_get_start_date ( $event_id, true, 'F' ).' <i>'.tribe_get_start_date ( $event_id, true, 'd' ).'</i>'; ?></span>
        @ <?php echo tribe_get_start_time ( $event_id, 'h:i a' ). ' - '.tribe_get_end_time ( $event_id, 'h:i a' ); ?>
        <?php $ecost = tribe_get_formatted_cost($event_id); ?></h2>
        <span class="tribe-events-divider">|</span>
        <span class="dt-sc-event-cost"><?php echo esc_attr($ecost); ?></span>
    </p>
    <!-- Navigation -->
		<h3 class="tribe-events-visuallyhidden"><?php printf( esc_html__( '%s Navigation', 'consultancy' ), $events_label_singular ); ?></h3>
		<ul class="tribe-events-sub-nav">
			<li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ); ?></li>
			<li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span>&raquo;</span>' ); ?></li>
		</ul>
		<!-- .tribe-events-sub-nav -->
      <div class="entry-content">
          <?php 
		  	  do_action( 'tribe_events_single_event_before_the_content' );
			  the_content();
			  do_action( 'tribe_events_single_event_after_the_content' ); ?>
      </div>
    </div>

	<?php do_action( 'tribe_events_single_event_before_the_meta' ); ?>

	<?php do_action( 'tribe_events_single_event_meta_primary_section_start' ); ?>

    <div class="dt-sc-full-width tribe-events-event-meta column">
        <div class="tribe-events-meta-group tribe-events-meta-group-details">
        <h3><?php esc_html_e('Details', 'consultancy'); ?></h3>
        <ul class="event-details">
            <li><dt><?php esc_html_e('Start:', 'consultancy'); ?></dt><?php echo tribe_get_start_date ( $event_id, true, 'F d' ).' @ '.tribe_get_start_time ( $event_id, 'h:i a' ); ?></li>
            <li><dt><?php esc_html_e('End:', 'consultancy'); ?></dt><?php echo tribe_get_end_date ( $event_id, true, 'F d' ).' @ '.tribe_get_end_time ( $event_id, 'h:i a' ); ?></li>
            <?php if ( tribe_get_cost() ) : ?>
                <li><dt><?php esc_html_e('Cost:', 'consultancy'); ?></dt><?php echo tribe_get_cost( $event_id, true ); ?></li>
            <?php endif; ?>
            <li><?php echo tribe_get_event_categories( $event_id, array( 'before' => '', 'sep' => ', ',  'after' => '', 'label' => '', 'label_before' => '<dt class="cat">Event Category',
                                                                         'label_after'  => '</dt>', 'wrap_before' => '<div class="cat-wrapper">', 'wrap_after' => '</div>' )); ?></li>
            <li><?php echo tribe_meta_event_tags( 'Event Tags:', ', ', false ); ?></li>
            <?php
            $website = tribe_get_event_website_link();
            if(!empty($website)): ?>
                <li><dt><?php esc_html_e('Website:', 'consultancy'); ?></dt><?php echo apply_filters( 'tribe_get_event_website_link', $website ); ?></li><?php
            endif; ?>
        </ul>
       </div>
       <div class="tribe-events-meta-group tribe-events-meta-group-organizer">
        <h3><?php esc_html_e('Organizer', 'consultancy'); ?></h3>
        <p><?php
        if(class_exists( 'Tribe__Events__Pro__Main' ))
            echo tribe_get_organizer_link ( $event_id, true, false );
        else
            echo tribe_get_organizer(); ?></p>
        <ul class="event-organize"><?php
            $phone = tribe_get_organizer_phone();
            if(!empty($phone)): ?>
                <li><dt><?php esc_html_e('Phone:', 'consultancy'); ?></dt><?php echo esc_html($phone); ?></li><?php
            endif;
            $email = tribe_get_organizer_email();
            if(!empty($email)): ?>
                <li>
                    <dt><?php esc_html_e('Email:', 'consultancy'); ?></dt>
                    <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo apply_filters( 'tribe_get_organizer_email', $email); ?></a>
                </li><?php
            endif;
            $website = tribe_get_organizer_website_link();
            if(!empty($website)): ?>
                <li><dt><?php esc_html_e('Website:', 'consultancy'); ?></dt><?php echo apply_filters( 'tribe_get_organizer_website_link',$website ); ?></li><?php
            endif; ?>
        </ul>
    </div>
    
        <?php
		# Additional fields...
        if(class_exists( 'Tribe__Events__Pro__Main' )):
            do_action( 'tribe_events_single_event_meta_primary_section_end' );
        endif; ?>
    </div>
    <div class="tribe-events-single-section tribe-events-event-meta secondary tribe-clearfix">
        <div class="tribe-events-meta-group tribe-events-meta-group-venue"><h3><?php esc_html_e('Venue', 'consultancy'); ?></h3>
        <p><?php
        if(class_exists( 'Tribe__Events__Pro__Main' ))
            echo tribe_get_venue_link($event_id, true);
        else
            echo tribe_get_venue($event_id); ?></p><?php
        if ( tribe_address_exists() ) :
            echo '<span class="event-address">'.tribe_get_full_address().'</span>';
            # Google map link...
            if ( tribe_show_google_map_link() ) :
                echo tribe_get_map_link_html();
                echo '<div class="dt-sc-hr-invisible-xsmall"></div>';
            endif;
        endif; ?>
        
        <ul class="event-venue"><?php
            $phone = tribe_get_phone();
            if(!empty($phone)): ?>
                <li><dt><?php esc_html_e('Phone:', 'consultancy'); ?></dt><?php echo esc_html($phone); ?></li><?php
            endif;
            $website = tribe_get_venue_website_link();
            if(!empty($website)): ?>
                <li><dt><?php esc_html_e('Website:', 'consultancy'); ?></dt><?php echo apply_filters( 'tribe_get_venue_website_link', $website ); ?></li><?php                
            endif; ?>
        </ul></div><div class="tribe-events-venue-map">
        <?php
		 # Google map...
        $map = tribe_get_embedded_map($event_id);
        if(!empty($map)): ?>
            <div class="dt-sc-hr-invisible-xsmall"></div><div class="dt-sc-clear"></div>
            <div class="event-google-map">
                <?php echo apply_filters( 'tribe_get_embedded_map', $map ); ?>
            </div><?php
        endif;
		?>
        </div></div>	
<div class="dt-sc-clear"></div>
	<?php do_action( 'tribe_events_single_event_after_the_meta' ); ?>
	
    <!-- Navigation -->
		<h3 class="tribe-events-visuallyhidden"><?php printf( esc_html__( '%s Navigation', 'consultancy' ), $events_label_singular ); ?></h3>
        <div id="tribe-events-footer">
            <ul class="tribe-events-sub-nav">
                <li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ); ?></li>
                <li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span>&raquo;</span>' ); ?></li>
            </ul>
        </div>
		<!-- .tribe-events-sub-nav -->