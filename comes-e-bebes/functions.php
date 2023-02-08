<?php

//Variáveis

define('ROOT_DIR', get_theme_file_path());
define('STYLE_DIR', get_template_directory_uri() . '/assets/css');
define('IMAGES_DIR', get_template_directory_uri() . '/assets/images');
define('INCLUDES_DIR', ROOT_DIR . '/includes');


//Includes

include_once(INCLUDES_DIR . '/enqueue.php');
include_once(INCLUDES_DIR . '/setup-theme.php');


//Ganchos

add_action('wp_enqueue_scripts', 'comesbebes_enqueue_style');
add_action('after_setup_theme', 'comesbebes_setup_theme');

?>