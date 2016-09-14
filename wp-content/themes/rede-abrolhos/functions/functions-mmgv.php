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
add_image_size('thumb-noticia', 570, 345, true);
add_image_size('vitrine-noticia', 1920, '', true);

add_image_size('thumb-equipe', 160, 190, true);
add_image_size('interno-equipe', 200, 235, true);

add_image_size('thumb-galeria', 279, 279, true);

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


//    $count = $the_query->post_count;
//    
//    debug($count);
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

function the_titlesmall($before = '', $after = '', $echo = true, $length = false) {
    $title = get_the_title();



    if ($length && is_numeric($length)) {
        $title = substr($title, 0, $length) . '...';
    }

    if (strlen($title) > 0 && strlen($title) > $length) {
        $title = apply_filters('the_titlesmall', $before . $title . $after, $before, $after);
        if ($echo)
            echo $title;
        else
            return $title;
    }else {
        if ($echo)
            echo get_the_title();
        else
            return get_the_title();
    }
}

/**
 * 
 */
function get_equipe_coordenadores() {
    $args = array(
        'tax_query' => array(//(array) - use taxonomy parameters (available with Version 3.1).
            array(
                'taxonomy' => 'cargo', //(string) - Taxonomy.
                'field' => 'slug', //(string) - Select taxonomy term by ('id' or 'slug')
                'terms' => array('coordenadores'), //(int/string/array) - Taxonomy term(s).
            ),
        ),
        'post_type' => 'equipe',
        'orderby' => 'menu_order',
        'order' => 'ASC',
    );

    $the_query = new WP_Query($args);

    // The Loop
    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
            ?>

            <div class="col-sm-6">
                <a href="<?php the_permalink(); ?>">
                    <div class="card-equipe">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="card-equipe-principal">
                                    <div class="card-equipe-principal-foto">
                                        <img src="<?php the_post_thumbnail_url('thumb-equipe'); ?>" >
                                    </div>
                                    <div class="card-equipe-principal-texto">
                                        <div class="caixa">
                                            <h3><?php echo get_the_title(); ?></h3>
                                            <h4>Coordenação</h4>
                                        </div>
                                    </div>
                                    <div class=""></div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <?php echo get_field("resumo") ?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <?php
        endwhile;
    endif;
    // Reset Post Data
    wp_reset_postdata();
}

/**
 * 
 */
function get_equipe_executores() {
    $args = array(
        'tax_query' => array(//(array) - use taxonomy parameters (available with Version 3.1).
            array(
                'taxonomy' => 'cargo', //(string) - Taxonomy.
                'field' => 'slug', //(string) - Select taxonomy term by ('id' or 'slug')
                'terms' => array('executores'), //(int/string/array) - Taxonomy term(s).
            ),
        ),
        'post_type' => 'equipe',
        'orderby' => 'menu_order',
        'order' => 'ASC',
    );

    $the_query = new WP_Query($args);

    // The Loop
    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
            ?>

            <div class="col-sm-6">
                <a href="<?php the_permalink(); ?>">
                    <div class="card-equipe">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="card-equipe-principal">
                                    <div class="card-equipe-principal-foto">
                                        <img src="<?php the_post_thumbnail_url('thumb-equipe'); ?>" >
                                    </div>
                                    <div class="card-equipe-principal-texto">
                                        <div class="caixa">
                                            <h3><?php echo get_the_title(); ?></h3>
                                        </div>
                                    </div>
                                    <div class=""></div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <?php echo get_field("resumo") ?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <?php
        endwhile;
    endif;
    // Reset Post Data
    wp_reset_postdata();
}

function add_search_to_wp_menu($items, $args) {
    if ('primary' === $args->theme_location) {
        $items .= '<li class="menu-item menu-item-search">';
        $items .= '<form '
                . 'method="get" '
                . 'class="search-form-rede" '
                . 'action="' . get_bloginfo('home') . '/">'
                . '<p>'
                . '<input '
                . 'id="search-menu"'
                . 'class="text_input" '
                . 'type="text" '
                . 'value="" '
                . 'name="s" '
                . 'id="s" '
                . ' />'
                . '<i id="btn-search-menu" class="fa fa-search"></i>'
                . '</p></form>';
        $items .= '</li>';
    }
    return $items;
}

add_filter('wp_nav_menu_items', 'add_search_to_wp_menu', 10, 2);

function get_page_name() {
    global $post;
    return $post->post_name;
}

function limit_posts_per_archive_page() {

    if (is_post_type_archive('noticias'))
        $limit = 4;
    elseif (is_post_type_archive('divulgacao-midia'))
        $limit = 5;
    elseif (is_post_type_archive('equipe'))
        $limit = 999;
    else
        $limit = get_option('posts_per_page');

    set_query_var('posts_per_archive_page', $limit);
}

add_filter('pre_get_posts', 'limit_posts_per_archive_page');


add_action('pre_get_posts', 'my_change_sort_order');

function my_change_sort_order($query) {
    if (is_archive()):
        //If you wanted it for the archive of a custom post type use: is_post_type_archive( $post_type )
        //Set the order ASC or DESC
        $query->set('order', 'DESC');
        //Set the orderby
        $query->set('orderby', 'date');
    endif;
}

;

function custom_pagination_mmgv($pagerange = '', $paged = '') {

    $numpages = $GLOBALS['wp_query']->max_num_pages;

    if (empty($pagerange)) {
        $pagerange = 2;
    }

    /**
     * This first part of our function is a fallback
     * for custom pagination inside a regular loop that
     * uses the global $paged and global $wp_query variables.
     * 
     * It's good because we can now override default pagination
     * in our theme, and use this function in default quries
     * and custom queries.
     */
    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }
    if ($numpages == '') {
        global $wp_query;
        $numpages = $wp_query->max_num_pages;
        if (!$numpages) {
            $numpages = 1;
        }
    }

    /**
     * We construct the pagination arguments to enter into our paginate_links
     * function. 
     */
    $pagination_args = array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => 'page/%#%',
        'show_all' => FALSE,
        'total' => $numpages,
        'current' => $paged,
        'mid_size' => 2,
        'end_size' => 1,
        'prev_text' => __('<'),
        'next_text' => __('>'),
        'type' => 'plain',
    );

    $paginate_links = paginate_links_mmgv($pagination_args);

    if ($paginate_links) {
        echo "<nav class='custom-pagination'>";
        //echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
        echo $paginate_links;
        echo "</nav>";
    }
}

//add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
//add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');
//
//function posts_link_attributes_1() {
//    return 'class="pull-right"';
//}
//function posts_link_attributes_2() {
//    return 'class="pull-left"';
//}

/**
 * Retrieve paginated link for archive post pages.
 *
 * Technically, the function can be used to create paginated link list for any
 * area. The 'base' argument is used to reference the url, which will be used to
 * create the paginated links. The 'format' argument is then used for replacing
 * the page number. It is however, most likely and by default, to be used on the
 * archive post pages.
 *
 * The 'type' argument controls format of the returned value. The default is
 * 'plain', which is just a string with the links separated by a newline
 * character. The other possible values are either 'array' or 'list'. The
 * 'array' value will return an array of the paginated link list to offer full
 * control of display. The 'list' value will place all of the paginated links in
 * an unordered HTML list.
 *
 * The 'total' argument is the total amount of pages and is an integer. The
 * 'current' argument is the current page number and is also an integer.
 *
 * An example of the 'base' argument is "http://example.com/all_posts.php%_%"
 * and the '%_%' is required. The '%_%' will be replaced by the contents of in
 * the 'format' argument. An example for the 'format' argument is "?page=%#%"
 * and the '%#%' is also required. The '%#%' will be replaced with the page
 * number.
 *
 * You can include the previous and next links in the list by setting the
 * 'prev_next' argument to true, which it is by default. You can set the
 * previous text, by using the 'prev_text' argument. You can set the next text
 * by setting the 'next_text' argument.
 *
 * If the 'show_all' argument is set to true, then it will show all of the pages
 * instead of a short list of the pages near the current page. By default, the
 * 'show_all' is set to false and controlled by the 'end_size' and 'mid_size'
 * arguments. The 'end_size' argument is how many numbers on either the start
 * and the end list edges, by default is 1. The 'mid_size' argument is how many
 * numbers to either side of current page, but not including current page.
 *
 * It is possible to add query vars to the link by using the 'add_args' argument
 * and see {@link add_query_arg()} for more information.
 *
 * The 'before_page_number' and 'after_page_number' arguments allow users to
 * augment the links themselves. Typically this might be to add context to the
 * numbered links so that screen reader users understand what the links are for.
 * The text strings are added before and after the page number - within the
 * anchor tag.
 *
 * @since 2.1.0
 *
 * @global WP_Query   $wp_query
 * @global WP_Rewrite $wp_rewrite
 *
 * @param string|array $args {
 *     Optional. Array or string of arguments for generating paginated links for archives.
 *
 *     @type string $base               Base of the paginated url. Default empty.
 *     @type string $format             Format for the pagination structure. Default empty.
 *     @type int    $total              The total amount of pages. Default is the value WP_Query's
 *                                      `max_num_pages` or 1.
 *     @type int    $current            The current page number. Default is 'paged' query var or 1.
 *     @type bool   $show_all           Whether to show all pages. Default false.
 *     @type int    $end_size           How many numbers on either the start and the end list edges.
 *                                      Default 1.
 *     @type int    $mid_size           How many numbers to either side of the current pages. Default 2.
 *     @type bool   $prev_next          Whether to include the previous and next links in the list. Default true.
 *     @type bool   $prev_text          The previous page text. Default '« Previous'.
 *     @type bool   $next_text          The next page text. Default '« Previous'.
 *     @type string $type               Controls format of the returned value. Possible values are 'plain',
 *                                      'array' and 'list'. Default is 'plain'.
 *     @type array  $add_args           An array of query args to add. Default false.
 *     @type string $add_fragment       A string to append to each link. Default empty.
 *     @type string $before_page_number A string to appear before the page number. Default empty.
 *     @type string $after_page_number  A string to append after the page number. Default empty.
 * }
 * @return array|string|void String of page links or array of page links.
 */
function paginate_links_mmgv($args = '') {
    global $wp_query, $wp_rewrite;

    // Setting up default values based on the current URL.
    $pagenum_link = html_entity_decode(get_pagenum_link());
    $url_parts = explode('?', $pagenum_link);

    // Get max pages and current page out of the current query, if available.
    $total = isset($wp_query->max_num_pages) ? $wp_query->max_num_pages : 1;
    $current = get_query_var('paged') ? intval(get_query_var('paged')) : 1;

    // Append the format placeholder to the base URL.
    $pagenum_link = trailingslashit($url_parts[0]) . '%_%';

    // URL base depends on permalink settings.
    $format = $wp_rewrite->using_index_permalinks() && !strpos($pagenum_link, 'index.php') ? 'index.php/' : '';
    $format .= $wp_rewrite->using_permalinks() ? user_trailingslashit($wp_rewrite->pagination_base . '/%#%', 'paged') : '?paged=%#%';

    $defaults = array(
        'base' => $pagenum_link, // http://example.com/all_posts.php%_% : %_% is replaced by format (below)
        'format' => $format, // ?page=%#% : %#% is replaced by the page number
        'total' => $total,
        'current' => $current,
        'show_all' => false,
        'prev_next' => true,
        'prev_text' => __('&laquo; Previous'),
        'next_text' => __('Next &raquo;'),
        'end_size' => 1,
        'mid_size' => 2,
        'type' => 'plain',
        'add_args' => array(), // array of query args to add
        'add_fragment' => '',
        'before_page_number' => '',
        'after_page_number' => ''
    );

    $args = wp_parse_args($args, $defaults);

    if (!is_array($args['add_args'])) {
        $args['add_args'] = array();
    }

    // Merge additional query vars found in the original URL into 'add_args' array.
    if (isset($url_parts[1])) {
        // Find the format argument.
        $format = explode('?', str_replace('%_%', $args['format'], $args['base']));
        $format_query = isset($format[1]) ? $format[1] : '';
        wp_parse_str($format_query, $format_args);

        // Find the query args of the requested URL.
        wp_parse_str($url_parts[1], $url_query_args);

        // Remove the format argument from the array of query arguments, to avoid overwriting custom format.
        foreach ($format_args as $format_arg => $format_arg_value) {
            unset($url_query_args[$format_arg]);
        }

        $args['add_args'] = array_merge($args['add_args'], urlencode_deep($url_query_args));
    }

    // Who knows what else people pass in $args
    $total = (int) $args['total'];
    if ($total < 2) {
        return;
    }
    $current = (int) $args['current'];
    $end_size = (int) $args['end_size']; // Out of bounds?  Make it the default.
    if ($end_size < 1) {
        $end_size = 0;
    }
    $mid_size = (int) $args['mid_size'];
    if ($mid_size < 0) {
        $mid_size = 2;
    }
    $add_args = $args['add_args'];
    $r = '';
    $page_links = array();
    $dots = false;

    //if ( $args['prev_next'] && $current && 1 < $current ) :
    $link = str_replace('%_%', 2 == $current ? '' : $args['format'], $args['base']);
    $link = str_replace('%#%', $current - 1, $link);
    if ($add_args)
        $link = add_query_arg($add_args, $link);
    $link .= $args['add_fragment'];

    /**
     * Filter the paginated links for the given archive pages.
     *
     * @since 3.0.0
     *
     * @param string $link The paginated link URL.
     */
    $page_links[] = '<a class="prev page-numbers" href="' . esc_url(apply_filters('paginate_links', $link)) . '">' . $args['prev_text'] . '</a>';
    //endif;
    for ($n = 1; $n <= $total; $n++) :
        if ($n == $current) :
            $page_links[] = "<span class='page-numbers current'>" . $args['before_page_number'] . number_format_i18n($n) . $args['after_page_number'] . "</span>";
            $dots = true;
        else :
            if ($args['show_all'] || ( $n <= $end_size || ( $current && $n >= $current - $mid_size && $n <= $current + $mid_size ) || $n > $total - $end_size )) :
                $link = str_replace('%_%', 1 == $n ? '' : $args['format'], $args['base']);
                $link = str_replace('%#%', $n, $link);
                if ($add_args)
                    $link = add_query_arg($add_args, $link);
                $link .= $args['add_fragment'];

                /** This filter is documented in wp-includes/general-template.php */
                $page_links[] = "<a class='page-numbers' href='" . esc_url(apply_filters('paginate_links', $link)) . "'>" . $args['before_page_number'] . number_format_i18n($n) . $args['after_page_number'] . "</a>";
                $dots = true;
            elseif ($dots && !$args['show_all']) :
                $page_links[] = '<span class="page-numbers dots">' . __('&hellip;') . '</span>';
                $dots = false;
            endif;
        endif;
    endfor;
    if ($args['prev_next'] && $current && ( $current < $total || -1 == $total )) :
        $link = str_replace('%_%', $args['format'], $args['base']);
        $link = str_replace('%#%', $current + 1, $link);
        if ($add_args)
            $link = add_query_arg($add_args, $link);
        $link .= $args['add_fragment'];

        /** This filter is documented in wp-includes/general-template.php */
        $page_links[] = '<a class="next page-numbers" href="' . esc_url(apply_filters('paginate_links', $link)) . '">' . $args['next_text'] . '</a>';
    endif;
    switch ($args['type']) {
        case 'array' :
            return $page_links;

        case 'list' :
            $r .= "<ul class='page-numbers'>\n\t<li>";
            $r .= join("</li>\n\t<li>", $page_links);
            $r .= "</li>\n</ul>\n";
            break;

        default :
            $r = join("\n", $page_links);
            break;
    }
    return $r;
}
