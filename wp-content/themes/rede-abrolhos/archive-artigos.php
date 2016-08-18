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
<div id="artigos">

    <div class="container">

        <div class="row">
            <div class="col-xs-12">

                <h1>Artigos científicos</h1>

                <p>Artigos publicados pela Rede Abrolhos separados por ano.</p>

                <?php
                $anoAtual = date(Y);
                $anoUrl = ($_GET['ano'] == '') ? $anoAtual : $_GET['ano'];
                ?>  

                <ul>
                    <?php while ($anoAtual >= 2011): ?>
                        <li>
                            <a href="<?php echo add_query_arg('ano', $anoAtual, $_SERVER['REQUEST_URI']); ?>" class="<?php echo ($anoUrl == $anoAtual) ? 'active' : ''; ?>" >
                                <?php echo $anoAtual; ?>
                            </a>
                        </li>
                        <?php $anoAtual--; ?>
                    <?php endwhile; ?>
                </ul>

            </div>
        </div>


        <?php
        $args = array(
            'post_type' => 'artigos',
            'year' => $anoUrl,
            'order' => 'ASC',
            'orderby' => 'date',
        );

        $the_query = new WP_Query($args);

        // The Loop
        if ($the_query->have_posts()) :
            ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="row">
                    <div class="col-xs-12">
                        <a target="_blank" href="<?php echo get_post_meta(get_the_ID(), 'link', true); ?>">
                            <div class="artigos-lista">
                                <div class="artigos-item">
                                    <h2><?php echo get_the_title(); ?></h2>
                                    <h3><?php echo get_post_meta(get_the_ID(), 'onde', true); ?> </h3>
                                    <p><?php echo get_post_meta(get_the_ID(), 'autor', true); ?></p>
                                    <p><?php echo get_post_meta(get_the_ID(), 'tipo', true); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>

            <div class="row">
                <div class="col-xs-12">
                    <div class="artigos-lista">
                        <div class="artigos-item">
                            <h2>Sem artigos cadastrados esse ano.</h2>
                        </div>
                    </div>
                </div>
            </div>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>



    </div>

</div><!-- #artigos -->

<?php
get_footer('artigo');

