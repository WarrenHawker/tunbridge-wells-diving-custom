<?php
//LIVE WEBSITE FILE
if(!defined('ABSPATH') ) EXIT; //Exit if accessed directly
$roots_includes = array(
    '/functions/custom-post-types.php',
);

foreach($roots_includes as $file){
  if(!$filepath = locate_template($file)) {
    trigger_error("Error locating `$file` for inclusion!", E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

function divingClubFeatures() {
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
}

function divingClubFiles() {
    wp_enqueue_script("divingClubJS", get_theme_file_uri("/src/index.js"), NULL, "1.0", true);
    wp_enqueue_style("divingClubMainStyles", get_stylesheet_uri());
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('google-icons', '//fonts.googleapis.com/icon?family=Material+Icons');
    //google fonts from theme customizer (customize-fonts.php)
    $custom_font = esc_html(get_theme_mod('twdiving_fonts'));
    wp_enqueue_style('customizer-font', '//fonts.googleapis.com/css?family='.$custom_font);
}

add_action("wp_enqueue_scripts", "divingClubFiles");
add_action("after_setup_theme", "divingClubFeatures");
add_action('init', 'divingClubPostTypes');

include( get_stylesheet_directory() . '/functions/customizer.php');


// add_action( 'after_setup_theme', 'register_menus' );
 
// function register_menus() {
//     register_nav_menu( 'primary', __( 'Primary Menu', 'twdiving' ) );
//     register_nav_menu( 'footer', __( 'Footer Menu', 'twdiving' ) );
// }

