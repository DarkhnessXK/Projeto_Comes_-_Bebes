<?php

function comesbebes_setup_theme() {
    add_theme_support('woocommerce');
    add_theme_support('custom-logo');
    //add_theme_support('menus');

    register_nav_menus([
        "Direita" => "Menu Lateral Direito",
        "Esquerda" => "Menu Lateral Esquerdo"
    ]);

}