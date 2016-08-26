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

<div id="divulgacao">

    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <h1>Divulgação na mídia</h1>

                <p>Divulgação do trabalho e temas relacionados a Rede abrolhos nas mídias.</p>

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <div class="divulgacao-item">
                            <a target="_blank" href="<?php echo get_post_meta( get_the_ID(), 'link', true ); ?>">
                                <p class="data"><?php echo get_the_date('F Y'); ?></p>
                                <h2><?php echo get_the_title(); ?></h2>
                                <h3><?php echo get_post_meta( get_the_ID(), 'onde', true ); ?></h3>
                            </a>
                        </div>

                    <?php endwhile; ?>
                    <?php
                else :
                    get_template_part('template-parts/content', 'none');
                endif;
                ?>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12">

                    <?php 
                    custom_pagination_mmgv(10);
                    ?>

            </div>
        </div><!-- row -->
        
    </div>
</div><!-- #contato -->



<?php
get_footer();
