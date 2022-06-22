<?php
/*
Plugin Name: Wordpress Security Headers
Plugin URI: #
Description: A drop-in plugin by appit to add security headers.
Author: Yash
Version: 0.1
Author URI: #
*/

function wordpress_security_headers( $headers ) {
    $headers['X-XSS-Protection'] = '1; mode=block';
    $headers['X-Content-Type-Options'] = 'nosniff';
    $headers['Strict-Transport-Security'] = 'max-age=31536000';
    $headers['Content-Security-Policy'] = 'script-src \'self\'';
    $headers['Referrer-Policy'] = 'no-referrer-when-downgrade';
    
    $headers['Permissions-Policy'] = 'geolocation=(self "home_url()"), microphone=()';
    
    $headers['X-Content-Security-Policy'] = 'default-src \'self\'; script-src \'self\';';


    

    return $headers;
}

add_filter( 'wp_headers', 'wordpress_security_headers' );

