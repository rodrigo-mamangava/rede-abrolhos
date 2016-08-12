<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rede-abrolhos
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

            <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('Skip to content', 'rede-abrolhos'); ?></a>

            <header id="masthead" class="site-header" role="banner">

                <?php get_template_part('template-parts/header/faixa', 'verde'); ?>
                <?php get_template_part('template-parts/header/menu', 'principal'); ?>

                
            </header><!-- #masthead -->


