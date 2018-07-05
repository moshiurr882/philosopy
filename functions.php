<?php 
if (site_url()=="http://localhost/phil"){
    define("VERSION",time());
}
else{
    define("VERSION",wp_get_theme()->get("Version"));
}


function philosopy_theme_setup(){
    load_theme_textdomain("philosopy");
    add_theme_support("post-thumbnails"); 
    add_theme_support("title-tag");
    add_theme_support('html5',array('search-form','comment-list'));
    add_theme_support('post-formats',array("image","gallery","quote","audio","video","link"));
    add_editor_style("/assets/css/editor-style.css");
    register_nav_menu("topmenu", __("Top Menu", "philosopy"));

}
add_action('after_setup_theme', 'philosopy_theme_setup');


function philosopy_theme_assets() {
    wp_enqueue_style( "fontawesome-css", get_theme_file_uri("/assests/css/font-awesome/font-awesome.css"),null,VERSION);
    wp_enqueue_style( "fonts-css", get_theme_file_uri("/assests/css/fonts.css"),null,VERSION);
    wp_enqueue_style( "base-css", get_theme_file_uri("/assests/css/base.css"),null,VERSION);
    wp_enqueue_style( "vendo-cssr", get_theme_file_uri("/assests/css/vendor.css"),null,VERSION);
    wp_enqueue_style( "main-css", get_theme_file_uri("/assests/css/main.css"),null,VERSION);
    wp_enqueue_style( "philosopy-css",get_template_directory_uri(),null,VERSION);


    wp_enqueue_script( "modernizr-js", get_theme_file_uri("/assests/js/modernizr.js"),null,VERSION);
    wp_enqueue_script( "plugins-js", get_theme_file_uri("/assests/js/plugins.js"),array("jquery"),true,VERSION);
    wp_enqueue_script( "main-js", get_theme_file_uri("/assests/js/main.js"),array("jquery"),true,VERSION);
}
add_action('wp_enqueue_scripts', 'philosopy_theme_assets');



