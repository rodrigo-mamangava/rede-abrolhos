<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rede-abrolhos
 */
get_header();
?>

<div id="page" <?php post_class(); ?> >
    <div class="container">
        <div class="row"> 
            <div class="col-xs-12">

                <?php
                while (have_posts()) : the_post();

                    the_title('<h1>', '</h1>');

                    the_content();

                endwhile;
                ?>



            </div>
        </div>
    </div>
</div><!-- #primary -->

<?php
get_footer();
