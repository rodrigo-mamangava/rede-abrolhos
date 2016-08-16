<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package rede-abrolhos
 */
get_header();
?>

<div id="expedicao-single" class="unica">

    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <?php
                while (have_posts()) : the_post();

                    get_template_part('template-parts/content', 'expedicao');

                endwhile; // End of the loop.
                ?>

            </div>
        </div>
    </div>
</div><!-- #expedicao-single .single -->

<?php
get_footer();
