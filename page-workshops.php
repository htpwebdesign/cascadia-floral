<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cascadia_Floral
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/content', 'banner');
    ?>
        <section class="content">
            <h1 class="screen-reader-text"><?php the_title(); ?> </h1>
            <?php
            the_content();
            ?>
        </section>
    <?php


    endwhile; // End of the loop.
    ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
