<?php
/**
 * Template Name: Front-page
 *
 */
get_header();
?>
<div id="home">


    <?php get_template_part('template-parts/home/vitrine'); ?>


    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                
                <?php
                while (have_posts()) : the_post();

                    the_content();

                endwhile;
                ?>
                
            </div>
            <div class="col-xs-12 text-center">
                <a class="btn-saiba-mais" href="<?php echo get_permalink( get_page_by_path( 'a-rede' ) ); ?>" >saiba mais</a>
            </div>
        </div>
    </div>
</div><!-- #home-texto -->

<?php
get_footer();