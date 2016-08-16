<?php
/**
 * Template Name: Galeria
 *
 */
get_header();
?>

<div id="galeria">

    <div class="container">
        <div class="row"> 
            <div class="col-xs-12">
                <h1>Galeria de imagens</h1>
            </div>                    
        </div>

        <div class="row">
            <div class="col-xs-12">
                <?php
                    while (have_posts()) : the_post();

                        the_content();

                    endwhile;
                    ?>
            </div>
        </div>
    </div>
</div><!-- #galeria -->

<?php
get_footer();
