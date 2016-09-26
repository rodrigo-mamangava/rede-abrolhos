<?php
/**
 * Template Name: Contato
 *
 */
get_header();
?>

<div id="contato">

    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <section>

                    <?php
                    while (have_posts()) : the_post();

                        the_content();

                    endwhile;
                    ?>

                </section>
                <section>
                    <h1>Siga-nos nas redes sociais</h1>

                    <ul class="social">
                        <li>
                            <a target="_blank" href="<?php echo esc_attr(get_option('mmgv_facebook')); ?>" ><img  class="face teste11" src="<?php echo get_template_directory_uri() ?>/image/social/marca_FB_contato.png" >Facebook</a>
                        </li>
                        <li>
                            <a target="_blank" href="<?php echo esc_attr(get_option('mmgv_youtube')); ?>" ><img class="you" src="<?php echo get_template_directory_uri() ?>/image/social/marca_YT_contato.png">Youtube</a>
                        </li>
                        <li>
                            <a target="_blank" href="<?php echo esc_attr(get_option('mmgv_twitter')); ?>"><img class="twitter" src="<?php echo get_template_directory_uri() ?>/image/social/marca_TT_contato.png">Twitter</a>
                        </li>
                    </ul>

                </section>

            </div>
        </div>
    </div>
</div><!-- #contato -->

<?php
get_footer();
