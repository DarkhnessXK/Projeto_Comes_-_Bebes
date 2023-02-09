<?php get_header();?>

<section class="banner">
    <h1>Comes&Bebes</h1>
    <h2>O restaurante para todas as fomes</h2>
</section>

<section class="corpo-loja">
    <h3 class="h3-custom">CONHEÇA NOSSA LOJA</h3>

    <div class="pratos-principais">
        <h4>Tipo de pratos principais</h4>

        <a href="/"><img class="pratos-nomes" src="<?php echo IMAGES_DIR . "/gradienteroxo.png"?>"><img class="tipos" src="<?php echo IMAGES_DIR . "/nordestina.jpg"?>" alt="Comida Nordestina">
        </a>            

        <a href="/"><img class="pratos-nomes" src="<?php echo IMAGES_DIR . "/gradienteroxo.png"?>"><img class="tipos" src="<?php echo IMAGES_DIR . "/vegana.jpg"?>" alt="Comida Vegana">
        </a>

        <a href="/"><img class="pratos-nomes" src="<?php echo IMAGES_DIR . "/gradienteroxo.png"?>"><img class="tipos" src="<?php echo IMAGES_DIR . "/massas.jpg"?>" alt="Massas">
        </a>

        <a href="/"><img class="pratos-nomes" src="<?php echo IMAGES_DIR . "/gradienteroxo.png"?>"><img class="tipos" src="<?php echo IMAGES_DIR . "/japonesa.jpg"?>" alt="Comida Japonesa">
        </a>
    </div>

    <div class="pratos-do-dia">
        <h4>Pratos dos dias de hoje: </br>
            <?php setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
            date_default_timezone_set('America/Sao_Paulo');
            echo ucwords(strftime('%A', strtotime('today')));?>
        </h4>

        <a href="/"><img class="pratos-dia-nomes" src="<?php echo IMAGES_DIR . "/gradienteroxo_grande.png"?>"><img class="tipos2" src="<?php echo IMAGES_DIR . "/pratododia1.jpg"?>" alt="Prato do dia  1">
        </a>

        <a href="/"><img class="pratos-dia-nomes" src="<?php echo IMAGES_DIR . "/gradienteroxo_grande.png"?>"><img class="tipos2" src="<?php echo IMAGES_DIR . "/pratododia2.jpg"?>" alt="Prato do dia 2">
        </a>

        <a href="/"><img class="pratos-dia-nomes" src="<?php echo IMAGES_DIR . "/gradienteroxo_grande.png"?>"><img class="tipos2" src="<?php echo IMAGES_DIR . "/pratododia3.jpg"?>" alt="Prato do dia 3">
        </a>

        <a href="/"><img class="pratos-dia-nomes" src="<?php echo IMAGES_DIR . "/gradienteroxo_grande.png"?>"><img class="tipos2" src="<?php echo IMAGES_DIR . "/pratododia4.jpg"?>" alt="Prato do dia 4">
        </a>
    </div>

    <div class="botao-opcoes">
        <button class="button_options"><p>Veja outras opções</p></button>
    </div>
    </section>


<div class="footer-home">
    <h3 class="h3-custom">VISITE NOSSA LOJA FÍSICA</h3>
    <div>
        <div class="map">
            <div style="overflow:hidden;width:250px;position:relative;"></div>
            <iframe width="345px" height="203px" src="https://maps.google.com/maps?width=250&amp;height=168&amp;hl=en&amp;q=&amp;t=&amp;z=12&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <ul class="infomap">
                <div>
                    <img class="icon" src="<?php echo IMAGES_DIR . '/cutlery.svg' ?>" alt="cutlery icon">
                    <li>Rua lorem ipsum, 123, LI, Brasil</li>
                </div>
                <div>
                    <img class="icon" src="<?php echo IMAGES_DIR . '/phone.svg' ?>" alt="phone icon">
                    <li>(XX) XXXXX-XXXX</li>
                </div>
            </ul>
        </div>
        <img id="footer_img" src="<?php echo IMAGES_DIR . '/happyfriends.jpg' ?>" alt="happy friends">
    </div>
</div>

<?php get_footer();?>