<?php
    
/**
 * Email shortcode
 * use: [email icon="true"]
 * 
 * Then need to add the icon name whithin the span
 * Need to add the email field to an options page, using Advanced Custom Fields Pro
 */

add_shortcode( 'email', 'email_func' );

function email_func( $atts ) {
    $args = shortcode_atts( array(
        'icon' => ''
    ), $atts, 'email' );

    $args['icon'] = filter_var( $args['icon'], FILTER_VALIDATE_BOOLEAN );
    
    if( $email = get_field('email', 'option') );
    
    if ( $args['icon']   )         
    {
        $icon = '<span class="uk-icon-envelope"></span>';
        return '<a href="mailto:'.$email.'">'.$icon.$email.'</a>';
    }
    else
    {
        return '<a href="mailto:'.$email.'">'.$email.'</a>';    
    }
}
