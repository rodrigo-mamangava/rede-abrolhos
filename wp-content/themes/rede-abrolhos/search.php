<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package rede-abrolhos
 */
get_header();
?>

<div id="rede">

    <div class="container">

        <div class="row">
            <div class="col-xs-12">

                <?php if (have_posts()) : ?>

                    <header class="page-header">
                        <h1 class="page-title"><?php printf(esc_html__('Resultados para: %s', 'rede-abrolhos'), '<span>' . get_search_query() . '</span>'); ?></h1>
                    </header><!-- .page-header -->

                    <?php
                    /* Start the Loop */
                    while (have_posts()) : the_post();

                        /**
                         * Run the loop for the search to output the results.
                         * If you want to overload this in a child theme then include a file
                         * called content-search.php and that will be used instead.
                         */
                        get_template_part('template-parts/content', 'search');

                    endwhile;

                    the_posts_navigation();

                else :

                    get_template_part('template-parts/content', 'none');

                endif;
                ?>


            </div>
        </div>
    </div>
</div><!-- #galeria -->
<?php
get_footer();
