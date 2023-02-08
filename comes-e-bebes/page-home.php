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

<?php get_footer();?>



