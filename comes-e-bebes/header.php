<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body <?php body_class(); ?>>

<div id="comesbebes_cart" class="cart_hidden">
    
    <div class="cart_background_shadow"></div>
    
    <div class="cart_itens_container">
        <div class="inner_cart_itens_container">
            <span class="cart_title">Carrinho</span>

            <div class="cart_itens">

            

                <?php
                    foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                        $product = $cart_item['data'];
                        $product_id = $cart_item['product_id'];
                        $variation_id = $cart_item['variation_id'];
                        $quantity = $cart_item['quantity'];
                        $price = WC()->cart->get_product_price( $product );
                        $subtotal = WC()->cart->get_product_subtotal( $product, $cart_item['quantity'] );
                        
                        ?>
                        
                        <div class="cart_iten">
                            
                           <div class="cart_image_container">
                                <?php echo wp_get_attachment_image(wc_get_product($product_id)->get_data()['image_id'], array('110','100'));?>
                           </div>

                           <div class="cart_product_info">
                                <div class="cart_product_info_left">
                                    <span class="cart_product_name">dsadsad</span>


                                    <div class="cart_product_qnt">
                                        <div class="cart_product_qnt_button_minnus">-</div>
                                        <div>
                                            <?php echo $quantity;?>
                                        </div>
                                        <div class="cart_product_qnt_button_plus">+</div>
                                    </div>
                                </div>
                                <div class="cart_product_info_right">
                                    <span> <?php echo $subtotal;?></span>
                                </div>
                           </div>
                            
                        </div>
                            
                        <?php    
                    }
                ?>
            </div>

            <div class="cart_summary">
                    <span>Total do Carrinho: R$ <?php print_r(WC()->cart->get_subtotal()); ?></span>    

                    <div class="cart_checkout_buton_container">
                        <a href="/checkout" class="cart_checkout">Comprar</a>
                    </div>

            </div>
        </div>
    </div>
</div>


<header class="header_general">
    <div class="inner_header">
        <div class="left_header">
            <?php the_custom_logo();?>
            <?php get_search_form(); ?>
        </div>


        <div class="rigth_header">
            
            <div class="pedido_button"><a href="/shop">Faça um pedido</a></div>
            <div id="comesbebes_cart_icon"><img class="header_icon" src="<?php echo IMAGES_DIR . "/cart.png"?>" alt=""></div>
            <a href="/"><img class="header_icon" src="<?php echo IMAGES_DIR . "/account.png"?>" alt=""></a>

        </div>
    </div>
</header>





