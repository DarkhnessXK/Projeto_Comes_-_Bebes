<?php

function NOME???_enqueue_style(){
    wp_register_style('comesbebes-reset', STYLE_DIR . '/reset.css', [], '1.0.0', false);
    wp_register_style(
        LINK DE FONTE SE NECESSARIO
    );
    wp_register_style('style', get_stylesheet_uri(), [], '1.0.0', false);
    wp_register_style('comesbebes-header', STYLE_DIR . '/header.css', [], '1.0.0', false);


    wp_enqueue_style('comesbebes-reset');
    wp_enqueue_style('NOME DE FONTE SE NECESSARIO');
    wp_enqueue_style('style');
    wp_enqueue_style('comesbebes-header');
}



?>