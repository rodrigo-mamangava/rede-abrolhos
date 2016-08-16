<?php
/**
 * Template Name: A Rede
 *
 */
get_header();
?>
<div id="rede">
    <div class="container">
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
</div><!-- #home-texto -->

<?php
get_footer();
