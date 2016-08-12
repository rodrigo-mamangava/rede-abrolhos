<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



/**
 * Register the theme custom post type
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function theme_custom_post_type() {
    
    //NOTICIAS
    $labels = array(        
        'name' => 'Notícias',
        'singular_name' => 'Notícias',
        'menu_name' => 'Notícia',
        'name_admin_bar' => 'Notícias',
        'add_new' => 'Nova notícia',
        'add_new_item' => 'Nova',
        'new_item' => 'Nova notícia',
        'edit_item' => 'Editar',
        'view_item' => 'Ver',
        'all_items' => 'Todas',
        'search_items' => 'Buscar',
        'parent_item_colon' => 'Notícias',
        'not_found' => 'Notícia não localizada.',
        'not_found_in_trash' => 'Notícia não localizada no lixo.'
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-media-document',
        'query_var' => true,
        'rewrite' => array('slug' => 'noticias'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'trackbacks', 'revisions', 'page-attributes', 'post-formats' )
            //'taxonomies' => array('category')
//        'taxonomies' => array('category', 'post_tag')
    );

    register_post_type('noticias', $args);
    //NOTICIAS - END
    
    //Artigos
    $labels = array(
        'name' => 'Artigos',
        'singular_name' => 'Artigos',
        'menu_name' => 'Artigos',
        'name_admin_bar' => 'Artigos',
        'add_new' => 'Novo artigo',
        'add_new_item' => 'Novo artigo',
        'new_item' => 'Novo artigo',
        'edit_item' => 'Editar',
        'view_item' => 'Ver',
        'all_items' => 'Todos',
        'search_items' => 'Buscar',
        'parent_item_colon' => 'Artigos',
        'not_found' => 'Artigo não localizado.',
        'not_found_in_trash' => 'Artigo não localizado no lixo.'
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'query_var' => true,
        'rewrite' => array('slug' => 'artigos'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            //'taxonomies' => array('category')
//        'taxonomies' => array('category', 'post_tag')
    );

    register_post_type('artigos', $args);
    //Artigos - END
    
    
    //Mídia
    $labels = array(
        'name' => 'Divulgação na mídia',
        'singular_name' => 'Divulgação na mídia',
        'menu_name' => 'Divulgação na mídia',
        'name_admin_bar' => 'Divulgação na mídia',
        'add_new' => 'Nova divulgação',
        'add_new_item' => 'Nova divulgação',
        'new_item' => 'Nova divulgação',
        'edit_item' => 'Editar',
        'view_item' => 'Ver',
        'all_items' => 'Todas',
        'search_items' => 'Buscar',
        'parent_item_colon' => 'Divulgação na mídia',
        'not_found' => 'Divulgação não localizada.',
        'not_found_in_trash' => 'Divulgação não localizada no lixo.'
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-visibility',
        'query_var' => true,
        'rewrite' => array('slug' => 'divulgacao-midia'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            //'taxonomies' => array('category')
//        'taxonomies' => array('category', 'post_tag')
    );

    register_post_type('divulgacao-midia', $args);
    //Mídia - END
    
    
    //Equipe
    $labels = array(
        'name' => 'Equipe',
        'singular_name' => 'Equipe',
        'menu_name' => 'Equipe',
        'name_admin_bar' => 'Equipe',
        'add_new' => 'Novo membro',
        'add_new_item' => 'Novo membro',
        'new_item' => 'Novo membro',
        'edit_item' => 'Editar',
        'view_item' => 'Ver',
        'all_items' => 'Todos',
        'search_items' => 'Buscar',
        'parent_item_colon' => 'Equipe',
        'not_found' => 'Membro não localizado.',
        'not_found_in_trash' => 'Membro não localizado no lixo.'
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-id',
        'query_var' => true,
        'rewrite' => array('slug' => 'equipe'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            //'taxonomies' => array('category')
//        'taxonomies' => array('category', 'post_tag')
    );

    register_post_type('equipe', $args);
    //Equipe - END
    
}

//
add_action('init', 'theme_custom_post_type');

/* Custom Taxonomies */

//function theme_custom_category() {
//
//    //Áreas de pesquisa
//    $labels = array(
//        'name' => 'Tipo de botão',
//        'singular_name' => 'Tipo de botão',
//        'search_items' => 'Buscar',
//        'all_items' => 'Todos',
//        'parent_item' => __('Parent'),
//        'parent_item_colon' => __('Parent:'),
//        'edit_item' => 'Editar',
//        'update_item' => 'Editar',
//        'add_new_item' => 'Adicionar novo tipo de botão',
//        'new_item_name' => 'Novo tipo de botão',
//        'menu_name' => __('Tipo de botão'),
//    );
//
//    $args = array(
//        'hierarchical' => true,
//        'labels' => $labels,
//        'show_ui' => true,
//        'show_admin_column' => true,
//        'query_var' => true,
//        'rewrite' => array('slug' => 'tipo-botao'),
//    );
//
//    register_taxonomy('tipo-botao', array('botao-home'), $args);
//    //end - Áreas de pesquisa
//    //Áreas de pesquisa
//    $labels = array(
//        'name' => 'Tamanho do botão',
//        'singular_name' => 'Tamanho do botão',
//        'search_items' => 'Buscar',
//        'all_items' => 'Todos',
//        'parent_item' => __('Parent'),
//        'parent_item_colon' => __('Parent:'),
//        'edit_item' => 'Editar',
//        'update_item' => 'Editar',
//        'add_new_item' => 'Adicionar novo tamanho de botão',
//        'new_item_name' => 'Novo tamanho de botão',
//        'menu_name' => __('Tamanho do botão'),
//    );
//
//    $args = array(
//        'hierarchical' => true,
//        'labels' => $labels,
//        'show_ui' => true,
//        'show_admin_column' => true,
//        'query_var' => true,
//        'rewrite' => array('slug' => 'tamanho-botao'),
//    );
//
//    register_taxonomy('tamanho-botao', array('botao-home'), $args);
//    //end - Áreas de pesquisa
//}
//
//add_action('init', 'theme_custom_category');