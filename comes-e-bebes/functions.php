<?php

//Variáveis

define('ROOT_DIR', get_theme_file_path());
define('STYLE_DIR', get_template_directory_uri() . '/assets/css');
define('IMAGES_DIR', get_template_directory_uri() . '/assets/images');
define('INCLUDES_DIR', ROOT_DIR . '/includes');



function comes_e_bebes_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


//Includes

include_once(INCLUDES_DIR . '/enqueue.php');
include_once(INCLUDES_DIR . '/setup-theme.php');


//Ganchos

add_action('wp_enqueue_scripts', 'comesbebes_enqueue_style');
add_action('after_theme_support', 'comesbebes_setup-theme');
add_action( 'after_setup_theme', 'comes_e_bebes_add_woocommerce_support' );





?>
