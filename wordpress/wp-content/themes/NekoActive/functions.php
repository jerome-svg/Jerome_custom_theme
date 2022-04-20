<?php

function jerome_theme_support(){
    // This is the code for getting the title and logo
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

}


add_action('after_setup_theme', 'jerome_theme_support');

//Adding the link for website
function jerome_theme_register_style(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('jerome_theme_style', get_template_directory_uri() . "/style.css", array('jerome_theme_main_style'), $version, "all");
    wp_enqueue_style('jerome_theme_main_style', "/wp-content/themes/NekoActive/assets/css/neko.css", array(), $version, "all");
    wp_enqueue_style('jerome_theme_bootstrap', "/wp-content/themes/NekoActive/assets/css/bootstrap.css", array(), "5.1.3", "all");

}


add_action('wp_enqueue_scripts', 'jerome_theme_register_style');


function jerome_theme_register_script(){
    wp_enqueue_script('jerome_themeJs_custom', "/wp-content/themes/NekoActive/assets/js/custom.js", $version, false);
}
add_action('wp_enqueue_scripts', 'jerome_theme_register_script');


// This is code for adding for menus

function jerome_custom_menus(){
    $locations = array(
        "primary"=>"This is the menu for custom theme desktop", 
        "footer"=>"Footer menus Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'jerome_custom_menus');



?>