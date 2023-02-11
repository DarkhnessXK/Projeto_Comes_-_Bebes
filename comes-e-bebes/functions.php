<?php

//Variáveis

define('ROOT_DIR', get_theme_file_path());
define('STYLE_DIR', get_template_directory_uri() . '/assets/css');
define('IMAGES_DIR', get_template_directory_uri() . '/assets/images');
define('JS_DIR', get_template_directory_uri() . '/assets/js');
define('INCLUDES_DIR', ROOT_DIR . '/includes');



function comes_e_bebes_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


//Includes

include_once(INCLUDES_DIR . '/enqueue.php');
include_once(INCLUDES_DIR . '/setup-theme.php');


//Ganchos

add_action('wp_enqueue_scripts', 'comesbebes_enqueue_style');
add_action('after_setup_theme', 'comesbebes_setup_theme');
add_action('after_theme_support', 'comesbebes_setup-theme');
add_action( 'after_setup_theme', 'comes_e_bebes_add_woocommerce_support' );

add_action( 'wp_enqueue_scripts', 'comesbebes_enqueue_scripts' );


function filter_woocommerce_account_orders_columns( $columns ) {
    
    $columns['order-actions'] = __( '', 'woocommerce' );

    return $columns;
}
add_filter( 'woocommerce_account_orders_columns', 'filter_woocommerce_account_orders_columns', 10, 1 );


function custom_remove_downloads_from_my_account( $items ) {
    unset( $items['downloads'] );
    unset( $items['edit-account'] );
    $items['edit-address'] = "Endereços";
    return $items;
   }

   
add_filter( 'woocommerce_account_menu_items', 'custom_remove_downloads_from_my_account' );




function custom_checkout_fields( $fields ) {
    
    

    $billing = [
        "billing_email" => [
            "type" => "email",
            "label" => "Email para contato",
            "placeholder" => "Email",
            "class" => ["form-row-wide", "checkout_form_text_input"],
            "label_class" => ["checkout_form_label"],
            "required" => "true",
        ],
        "billing_first_name" => [
            "type" => "text",
            "label" => "Nome",
            "placeholder" => "Digite seu nome",
            "class" => ["form-row-first", "checkout_form_text_input"],
            "label_class" => ["checkout_form_label"],
            "required" => "true",
        ],
        "billing_last_name" => [
            "type" => "text",
            "label" => "Nome",
            "placeholder" => "Digite seu sobrenome",
            "class" => ["form-row-last", "checkout_form_text_input"],
            "label_class" => ["checkout_form_label"],
            "required" => "true",
        ],
        "billing_phone_1" => [
            "type" => "text",
            "label" => "Telefone fixo",
            "placeholder" => "(21) XXXXX-XXXX",
            "class" => ["form-row-first", "checkout_form_text_input"],
            "label_class" => ["checkout_form_label"],
            "required" => "true",
        ],
        "billing_phone_2" => [
            "type" => "text",
            "label" => "Celular",
            "placeholder" => "(21) XXXXX-XXXX",
            "class" => ["form-row-last", "checkout_form_text_input"],
            "label_class" => ["checkout_form_label"],
            "required" => "true",
        ],
        "billing_postcode" => [
            "type" => "text",
            "label" => "CEP",
            "placeholder" => "XXXXX-XXX",
            "class" => ["form-row-wide", "checkout_form_text_input"],
            "label_class" => ["checkout_form_label"],
            "required" => "true",
        ],
        "billing_address_1" => [
            "type" => "text",
            "label" => "Logradouro",
            "placeholder" => "Rua Lorem Ipsum, 150, Pro",
            "class" => ["form-row-wide", "checkout_form_text_input"],
            "label_class" => ["checkout_form_label"],
            "required" => "true",
        ],
        "billing_address_2" => [
            "type" => "text",
            "label" => "Complemento",
            "placeholder" => "Bl 2, Apto 905",
            "class" => ["form-row-wide", "checkout_form_text_input"],
            "label_class" => ["checkout_form_label"],
            "required" => "true",
        ],
        "billing_address_3" => [
            "type" => "text",
            "label" => "Bairro",
            "placeholder" => "Lorem Ipsum",
            "class" => ["form-row-first", "checkout_form_text_input"],
            "label_class" => ["checkout_form_label"],
            "required" => "true",
        ],
        "billing_address_4" => [
            "type" => "text",
            "label" => "Cidade",
            "placeholder" => "Lorem Ipsum",
            "class" => ["form-row-last", "checkout_form_text_input"],
            "label_class" => ["checkout_form_label"],
            "required" => "true",
        ],
    ];


    $custom_fields = [
        "billing" => $billing,
    ];


    return $custom_fields;
 }


 add_filter( 'woocommerce_checkout_fields', 'custom_checkout_fields' );


?>
