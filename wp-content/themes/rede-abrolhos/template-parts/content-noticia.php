
<article id="noticia-single post-<?php the_ID(); ?>" <?php post_class('unica'); ?>>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                
                <?php the_content(); ?>
            </div>
        </div>
    </div>

</article><!-- #post-## -->
