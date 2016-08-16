<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<?php
$args = array(
    'post_type' => 'noticias',
    'order' => 'ASC',
    'orderby' => 'date',
    'posts_per_page' => 3,
);

$the_query = new WP_Query($args);

$countBollet = 0;
$countSlide = 0;
?>



<div id="home-vitrine">
    <div id="carousel-home" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->




        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <?php if ($the_query->have_posts()) : ?>

                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                    <div class="item <?php echo ($countSlide == 0) ? 'active' : ''; ?>">
                        <img src="<?php the_post_thumbnail_url('vitrine-noticia'); ?>" alt="...">
                        <div class="carousel-texto">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h2 class="carousel">
                                            <?php echo get_the_title(); ?>
                                        </h2>
                                    </div>
                                </div><!--row-->
                            </div>
                        </div>
                    </div>


                    <?php $countSlide++; ?>
                <?php endwhile; ?>

            <?php endif; ?>
        </div>


        <div class="container vitrine">
            <div class="row">
                <div class="col-xs-12">
                    <ol class="carousel-indicators">
                        <?php if ($the_query->have_posts()) : ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <li data-target="#carousel-home" data-slide-to="<?php echo $countBollet ?>" class="<?php echo ($countBollet == 0) ? 'active' : '' ?>"></li>
                                <?php $countBollet++; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ol>
                </div>
            </div>
        </div>


    </div>
</div>


<?php wp_reset_postdata(); ?>