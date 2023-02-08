<?php // Template Name: Home?>

<?php get_header();?>

<section class="banner">
    <h1>Comes&Bebes</h1>
    <h2>O restaurante para todas as fomes</h2>
</section>

<?php
if(have_posts()){
    while(have_posts()){
        the_post();
        ?>
        <h1>
        <?php the_title(); ?>
        </h1>
        <main>
        <?php the_content(); ?>
        </main>

    <?php
    }
}
?>
<div class="footer-home">
    <h3>VISITE NOSSA LOJA FÍSICA</h3>
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