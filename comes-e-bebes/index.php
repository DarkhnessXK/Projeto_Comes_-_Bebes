<?php get_header();


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
    }
}

<?php
php get_footer();
?>