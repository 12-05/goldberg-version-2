<?php 
    function echoImg($fileName) {
        $url = get_stylesheet_directory_uri().'/assets/images/'.$fileName;
        echo $url;
    }

add_filter( 'acf/shortcode/allow_unsafe_html', function ( $allowed, $atts ) {
    if ( $atts['field'] === 'content' ) {
        return true;
    }
    return $allowed;
}, 10, 2 );
