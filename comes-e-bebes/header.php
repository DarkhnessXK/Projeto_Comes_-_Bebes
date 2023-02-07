<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
    <?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>>


<header> <!-- SUBSTITUIR PRO WORDPRESS DEPOIS (NÃO ESQUECER) -->
    <div class="inner_header">
        <div class="left_header">
            <?php the_custom_logo();?>
            <?php get_search_form(); ?>
        </div>


        <div class="rigth_header">
            <button>Faça um pedido</button>
            <button>Faça um pedido</button>
            <button>Faça um pedido</button>
        </div>
    </div>
</header>

