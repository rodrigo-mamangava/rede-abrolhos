<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rede-abrolhos
 */
get_header();
?>

<div id="projetos">

    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <h1>Projetos em execução</h1>



                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <div class="projeto-item">

                            <h2><?php echo get_the_title(); ?></h2>
                            <p><?php echo get_post_meta( get_the_ID(), 'periodo', true ); ?></p>
                            <p><?php echo get_post_meta( get_the_ID(), 'financiamento', true ); ?></p>

                        </div>

                    <?php endwhile; ?>
                    <?php
                else :
                    get_template_part('template-parts/content', 'none');
                endif;
                ?>


            </div>
        </div>
    </div>
</div><!-- #projetos -->



<?php
get_footer('projetos');
