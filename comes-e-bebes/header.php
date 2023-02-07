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

    <header>
        <a href="" id="logo"> <img src="images/comesebebeslogo.png"> </a>
        <a href="" id="pesquisa"> <img src="images/pesquisa.png"> </a>
        <button id="faca_pedido"><span>Faça um pedido<span></button>
        <a href="" id="carrinho"> <img src="images/carrinho.png"> </a>
        <a href="" id="user"> <img src="images/user.png"> </a>
    </header>