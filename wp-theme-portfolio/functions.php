<?php

// ******************************************* //
// Uncomment frgment of code you want to use   //
// ******************************************* //

// =========================================== //
// register menu                               //
// =========================================== //
/*
add_action('init', 'wp_portfolio_registerMenus');

function wp_portfolio_registerMenus(){
    register_nav_menus(
        array(
            'primary' => __('Primary')
        )
    );
}
*/
// ------------------------------------------- //

// =========================================== //
// register admin menu theme settings          //
// =========================================== //
/*
add_action('admin_menu', 'wp_portfolio_registerThemeSettings');

function wp_portfolio_registerThemeSettings(){
	add_menu_page('Theme menu', 'Theme menu', 'manage_options', 'theme_menu', 'wp_portfolio_themeSettings', 'dashicons-admin-home', 60);
    add_action('admin_init', 'wp_portfolio_registerStringsSettings');
}

function wp_portfolio_registerStringsSettings(){
    // register_setting('wp-potfolio-theme-settings', 'top_contact_info');
}

function wp_portfolio_themeSettings(){
    include('admin/theme-menu.php');
}
*/
// ------------------------------------------- //

// =========================================== //
// shortcode: [foobar]                         //
// =========================================== //
/*
add_shortcode('wp_portfolio_example', 'wp_portfolio_exampleShortcode');

function wp_portfolio_exampleShortcode($atts){
	return "Example shortcode";
}
*/
// ------------------------------------------- //

// =========================================== //
// Register widgets                            //
// =========================================== //
/*
function wp_portfolio_registerWidgets(){
	register_sidebar(array(
		'name'          => 'Example widget',
		'id'            => 'example_widget',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	));
}
add_action('widgets_init', 'wp_portfolio_registerWidgets');
*/
// ------------------------------------------- //

// =========================================== //
// Custom image sizes                          //
// =========================================== //
/*
function wp_portfolio_registerImageSizes(){
    add_image_size('example', 750, 750, true);
}
add_action('init', 'wp_portfolio_registerImageSizes');
*/
// ------------------------------------------- //

// =========================================== //
// Add theme support post thumbnails           //
// =========================================== //
/*
add_theme_support('post-thumbnails');
*/
// ------------------------------------------- //

// =========================================== //
// Enqueue assets                              //
// =========================================== //
/*
function wp_portfolio_enqueueStyles(){
    wp_enqueue_style('master', get_template_directory_uri().'/css/master.css');
    wp_enqueue_style('style', get_stylesheet_uri());
}
function wp_portfolio_enqueueScripts(){
    // for newer jquery
    if(!is_admin() && !is_login_page()){
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'http://code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true);
    }
    wp_enqueue_script('master', get_template_directory_uri().'/js/master.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'wp_portfolio_enqueueStyles');
add_action('wp_enqueue_scripts', 'wp_portfolio_enqueueScripts');
*/
// ------------------------------------------- //

// =========================================== //
// Check if current page is login page         //
// =========================================== //
/*
function is_login_page(){
    return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}
*/
// ------------------------------------------- //

// =========================================== //
// Register custom post type                   //
// =========================================== //
/*
function wp_portfolio_registerCustomPostType(){
    $labels = array(
        'name' => 'Projekty',
        'singular_name' => 'Projekt',
        'menu_name' => 'Projekty',
        'name_admin_bar' => 'Projekt',
        'add_new' => 'Dodaj nowy',
        'add_new_item' => 'Dodaj nowy projekt',
        'new_item' => 'Nowy projekt',
        'edit_item' => 'Edytuj projekt',
        'view_item' => 'Zobacz projekt',
        'all_items' => 'Wszystkie projekty',
        'search_items' => 'Szukaj projekty',
        'parent_item_colon' => 'Nadrzędne projekty',
        'not_found' => 'Nie znaleziono projekty',
        'not_found_in_trash' => 'Nie znaleziono projekty w koszu',
        'featured_image' => 'Okładka projekty',
        'set_featured_image' => 'Ustaw okładkę projekty',
        'remove_featured_image' => 'Usuń okładkę projekty',
        'use_featured_image' => 'Użyj jako okładkę projekty',
        'archives' => 'Archiwa projektów',
        'insert_into_item' => 'Wstaw do projekty',
        'uploaded_to_this_item' => 'Wyślij do tego projekty',
        'filter_items_list' => 'Filtruj projekty',
        'items_list_navigation' => 'Lista nawigacyjna projektów',
        'items_list' => 'Lista projektów',
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'projekt'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
    );
    register_post_type('project', $args);
}
add_action('init', 'wp_portfolio_registerCustomPostType');
*/
// ------------------------------------------- //