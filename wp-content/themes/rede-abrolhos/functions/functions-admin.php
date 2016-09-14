<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * 
 */
function remove_menus() {

//  remove_menu_page( 'index.php' );                  //Dashboard
//  remove_menu_page( 'jetpack' );                    //Jetpack* 
    remove_menu_page('edit.php');                   //Posts
//  remove_menu_page( 'upload.php' );                 //Media
//  remove_menu_page( 'edit.php?post_type=page' );    //Pages
    remove_menu_page('edit-comments.php');          //Comments
//  remove_menu_page( 'themes.php' );                 //Appearance
//  remove_menu_page( 'plugins.php' );                //Plugins
//  remove_menu_page( 'users.php' );                  //Users
//  remove_menu_page( 'tools.php' );                  //Tools
//  remove_menu_page( 'options-general.php' );        //Settings
    
}

add_action('admin_menu', 'remove_menus');

function mmgv_form_init() {
    register_setting('mmgv_options', 'mmgv_facebook');
    register_setting('mmgv_options', 'mmgv_twitter');
    register_setting('mmgv_options', 'mmgv_youtube');
}

add_action('admin_init', 'mmgv_form_init');

function mmgv_form_cliente_conf_list() {
    ?>
    <div class="wrap">
    <?php screen_icon(); ?>
        <h2>Informações gerais para o site</h2>
        <br/>

        <h2>Rede social</h2>

        <form action="options.php" method="post" id="form_senha_cliente">

    <?php settings_fields('mmgv_options') ?>

            <p><label for="mmgv_facebook" >Facebook</label></p>
            <p>
                <input type="text" id="mmgv_facebook" name="mmgv_facebook" style="width: 500px;"
                       value="<?php echo esc_attr(get_option('mmgv_facebook')); ?>" />           
            </p>


            <p><label for="mmgv_twitter" >Twitter</label></p>
            <p>
                <input type="text" id="mmgv_twitter" name="mmgv_twitter" style="width: 500px;"
                       value="<?php echo esc_attr(get_option('mmgv_twitter')); ?>" />           
            </p>


            <p><label for="mmgv_youtube" >Youtube</label></p>
            <p>
                <input type="text" id="mmgv_youtube" name="mmgv_youtube" style="width: 500px;"
                       value="<?php echo esc_attr(get_option('mmgv_youtube')); ?>" />           
            </p>




            <input type="submit" value="Salvar">

        </form>


    </div>

    <?php
}

function mmgv_config_pass() {
    add_options_page('Informações gerais', 'Informações gerais', 'manage_options', 'mmgv_pass', 'mmgv_form_cliente_conf_list');
}

add_action('admin_menu', 'mmgv_config_pass');

