<?php

function leotheme_add_scripts() {
        wp_enqueue_script('masonry');
}
add_action('wp_enqueue_scripts', 'leotheme_add_scripts');

function custom_excerpt_length( $length ) {
        return 7;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

?>
