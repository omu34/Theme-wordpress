<?php
//Adds dynamic title tag
function followBern_theme_support()
{
    add_theme_support('title-tag');
    //Add dynamic logo 
    add_theme_support('custom-logo');
    //Add images in Posts
    add_theme_support('post-thumbnails');
}
//adding hook to title 
add_action('after_setup_theme', 'followBern_theme_support');

//Adds Menus to the theme (appearance-menu will be added)
function followBern_menus()
{
    $locations = array(
        'primary' => "Desktop primary left side bar",
        "footer" => "footer menu items"
    );
    register_nav_menus($locations);
}
add_action('init', 'followBern_menus');

//Enqueueing styles
function followBern_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('followBern-style', get_template_directory_uri() . "/assets/css/style.css", array('followBern-boostrap'), $version, "all");
    wp_enqueue_style('followBern-boostrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "4.4.1", "all");
    wp_enqueue_style('followBern-fontAwesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", "all");
}
add_action('wp_enqueue_scripts', 'followBern_styles');

//Enqueueing scripts
function followBern_scripts()
{
    wp_enqueue_script('followBern-main', get_template_directory_uri() . "/assets/js/main.js", array(), "1.1.0", true);
    wp_enqueue_script('followBern-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), "3.4.1", true);
    wp_enqueue_script('followBern-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), "1.16.0", true);
    wp_enqueue_script('followBern-boostrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), "4.4.", true);
}
add_action('wp_enqueue_scripts', 'followBern_scripts');

// Widget Area
function followBern_widget_areas(){
    register_sidebar(
        array(
            'before_title'=>'',
            'after_title'=> '',
            'before_widget'=>'<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget'=>'</ul>',         
            'name'=>'Side bar area',
            'id'=>'sidebar-1',
            'description'=>'Sidebar widget area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',        
            'name' => 'Footer area',
            'id' => 'footer-1',
            'description' => 'Footer widget area'
        )
    );
}
add_action('widget_init', 'followBern_widget_areas');
