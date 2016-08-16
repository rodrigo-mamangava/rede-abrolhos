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
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'trackbacks', 'revisions', 'page-attributes', 'post-formats')
            //'taxonomies' => array('category')
//        'taxonomies' => array('category', 'post_tag')
    );

    register_post_type('noticias', $args);
    //NOTICIAS - END
    //Artigos
    $labels = array(
        'name' => 'Artigos',
        'singular_name' => 'Artigos',
        'menu_name' => 'Artigos científicos',
        'name_admin_bar' => 'Artigos científicos',
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
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields'),
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
        'menu_icon' => 'dashicons-megaphone',
        'query_var' => true,
        'rewrite' => array('slug' => 'divulgacao-midia'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments', 'trackbacks', 'revisions', 'page-attributes', 'post-formats')
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
    //Expedicoes
    $labels = array(
        'name' => 'Expedição',
        'singular_name' => 'Expedição',
        'menu_name' => 'Expedições',
        'name_admin_bar' => 'Expedições',
        'add_new' => 'Nova expedição',
        'add_new_item' => 'Nova expedição',
        'new_item' => 'Nova expedição',
        'edit_item' => 'Editar',
        'view_item' => 'Ver',
        'all_items' => 'Todas',
        'search_items' => 'Buscar',
        'parent_item_colon' => 'Expedições',
        'not_found' => 'Expedição não localizada.',
        'not_found_in_trash' => 'Expedição não localizada no lixo.'
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-admin-site',
        'query_var' => true,
        'rewrite' => array('slug' => 'expedicao'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            //'taxonomies' => array('category')
//        'taxonomies' => array('category', 'post_tag')
    );

    register_post_type('expedicao', $args);
    //Expedicoes - END
    
    
    
    //PROJETOS
    $labels = array(
        'name' => 'Projetos',
        'singular_name' => 'Projeto',
        'menu_name' => 'Projetos em execução',
        'name_admin_bar' => 'Projetos em execução',
        'add_new' => 'Novo projeto',
        'add_new_item' => 'Novo',
        'new_item' => 'Novo projeto',
        'edit_item' => 'Editar',
        'view_item' => 'Ver',
        'all_items' => 'Todos',
        'search_items' => 'Buscar',
        'parent_item_colon' => 'Projetos',
        'not_found' => 'Projeto não localizado.',
        'not_found_in_trash' => 'Projeto não localizado no lixo.'
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-clipboard',
        'query_var' => true,
        'rewrite' => array('slug' => 'projetos-em-execucao'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'trackbacks', 'revisions', 'page-attributes', 'custom-fields')
            //'taxonomies' => array('category')
//        'taxonomies' => array('category', 'post_tag')
    );

    register_post_type('projetos-em-execucao', $args);
    //PROJETOS - END
    
}

//
add_action('init', 'theme_custom_post_type');

/* Custom Taxonomies */

function theme_custom_category() {

    //cargo
    $labels = array(
        'name' => 'Cargo',
        'singular_name' => 'Cargo',
        'search_items' => 'Buscar',
        'all_items' => 'Todos',
        'parent_item' => __('Parent'),
        'parent_item_colon' => __('Parent:'),
        'edit_item' => 'Editar',
        'update_item' => 'Editar',
        'add_new_item' => 'Adicionar novo cargo',
        'new_item_name' => 'Novo cargo',
        'menu_name' => __('Cargo'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'cargo'),
    );

    register_taxonomy('cargo', array('equipe'), $args);
    //end - cargo
    
}

add_action('init', 'theme_custom_category');