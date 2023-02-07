<?php

function comesbebes_enqueue_style(){
    wp_register_style('comesbebes-reset', STYLE_DIR . '/reset.css', [], '1.0.0', false);
    
    wp_register_style('comesbebes-bellota-text-font', 'https://fonts.googleapis.com/css2?family=Bellota+Text:wght@300&display=swap');

    
    wp_register_style('style', get_stylesheet_uri(), [], '1.0.0', false);
    wp_register_style('comesbebes-header', STYLE_DIR . '/header.css', [], '1.0.0', false);


    wp_enqueue_style('comesbebes-reset');
    wp_enqueue_style('comesbebes-bellota-text-font');
    wp_enqueue_style('style');
    wp_enqueue_style('comesbebes-header');
}



?>

