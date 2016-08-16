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


<div id="equipe">

    <div class="container">

        <div class="row">
            <div class="col-xs-12">
                <h1>Equipe</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <h2>Coordenadores</h2>
            </div>
        </div>

        <div class="row">

            <?php get_equipe_coordenadores(); ?>

        </div><!-- row -->

        <div class="row">
            <div class="col-xs-12">
                <h2>Executores</h2>
            </div>
        </div>

        <div class="row">
            <?php get_equipe_executores(); ?>
        </div><!-- row -->
    </div><!-- container -->
</div><!-- #equipe -->

<?php
get_footer();
