<?php

function comesbebes_enqueue_style(){
    wp_register_style('comesbebes-reset', STYLE_DIR . '/reset.css', [], '1.0.0', false);
    wp_register_style('style', get_stylesheet_uri(), [], '1.0.0', false);
    wp_register_style('comesbebes-header', STYLE_DIR . '/header.css', [], '1.0.0', false);
    wp_register_style('comesbebes-footer', STYLE_DIR . '/footer.css', [], '1.0.0', false);
    wp_register_style(
        'belota-text',
        'https://fonts.googleapis.com/css2?family=Bellota+Text:wght@400;700&family=Darker+Grotesque:wght@300;400;700&display=swap'
    );

    wp_enqueue_style('comesbebes-reset');
    wp_enqueue_style('style');
    wp_enqueue_style('comesbebes-header');
    wp_enqueue_style('comesbebes-footer');
    wp_enqueue_style('belota-text');
}



?>