<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Debugar a funcao com pre e var_dump
 * @param type $var
 */
function debug($var) {
    echo '<pre>';
    echo var_dump($var);
    echo '<pre>';
}

/**
 * 
 */
register_nav_menus(array(
    'primary' => __('Menu principal', 'Rede-abrolhos'),
));

/**
 * 
 */
function remove_menus() {

//  remove_menu_page( 'index.php' );                  //Dashboard
//  remove_menu_page( 'jetpack' );                    //Jetpack* 
    remove_menu_page('edit.php');                   //Posts
//  remove_menu_page( 'upload.php' );                 //Media
//  remove_menu_page( 'edit.php?post_type=page' );    //Pages
//  remove_menu_page( 'edit-comments.php' );          //Comments
//  remove_menu_page( 'themes.php' );                 //Appearance
//  remove_menu_page( 'plugins.php' );                //Plugins
//  remove_menu_page( 'users.php' );                  //Users
//  remove_menu_page( 'tools.php' );                  //Tools
//  remove_menu_page( 'options-general.php' );        //Settings
}

add_action('admin_menu', 'remove_menus');


/**
 * 
 */
add_image_size('thumb-noticia', 570, 345);

/**
 * Retorna o excerpt com o numero determinado de caracteres
 * @param type $count
 * @return string
 */
function get_excerpt($count) {

    if (has_excerpt()) {
        return get_the_excerpt();
    } else {
        $permalink = get_permalink($post->ID);
        $excerpt = get_the_excerpt();
        $excerpt = strip_tags($excerpt);
        $excerpt = substr($excerpt, 0, $count);
        $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
        $excerpt = $excerpt . '[...]';
        return $excerpt;
    }
}

function get_expedicoes_by_year($ano) {
    $args = array(
        'post_type' => 'expedicao',
        'year' => $ano,
        'order' => 'ASC',
        'orderby' => 'date',
    );

    $the_query = new WP_Query($args);

    // The Loop
    if ($the_query->have_posts()) :
        ?>
        <div class="expedicoes-item">
            <div class="row">
                <div class="col-xs-2 col-sm-1">
                    <h3>
                        <?php echo $ano ?>
                    </h3>

                </div>
                <div class="col-xs-10 col-sm-11">
                    <ul>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php echo get_the_date('F'); ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div><!-- .expedicoes-item -->
        <?php
    endif;

    wp_reset_postdata();
}