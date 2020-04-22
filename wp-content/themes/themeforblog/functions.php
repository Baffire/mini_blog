<?php
/*
* Loading styles and scripts
*/
function load_style_script()
{
    wp_enqueue_style('bootstrap.min.css', get_template_directory_uri() . "/vendor/bootstrap/css/bootstrap.min.css");
    wp_enqueue_style('clean-blog.min.css', get_template_directory_uri() . "/css/clean-blog.min.css");
    wp_enqueue_style('all.min.css', get_template_directory_uri() . "/vendor/fontawesome-free/css/all.min.css");
    wp_enqueue_style('style.css', get_template_directory_uri() . "/style.css");

    wp_enqueue_script('jquery.min.js', get_template_directory_uri() . "/vendor/jquery/jquery.min.js");
    wp_enqueue_script('bootstrap.bundle.min.js', get_template_directory_uri() . "/vendor/bootstrap/js/bootstrap.bundle.min.js");
    wp_enqueue_script('clean-blog.min.js', get_template_directory_uri() . "/js/clean-blog.min.js");
}

/*
* Load styles and scripts
*/
add_action('wp_enqueue_scripts', 'load_style_script');

/*
* Thumbnails
*/
add_theme_support('post-thumbnails');

/*
* Main menu
*/
register_nav_menu('menu', 'Main menu');

/*
* Footer menu
*/
add_theme_support('meu');
register_nav_menu('meu', 'Footer menu');

/*
* Sidebar
*/
register_sidebar($args = array(
    'name' => 'sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div class="vidget">',
    'after_widget' => '</div">',
));

?>
