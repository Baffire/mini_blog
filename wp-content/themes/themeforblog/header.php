<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php bloginfo('name'); wp_title(); ?></title>

    <!-- Custom fonts for this template -->
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>
</head>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top pt-5" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto main-menu">
                <?php
                add_filter('nav_menu_css_class', '__return_empty_array');
                add_filter('nav_menu_css_class', 'add_my_class_to_nav_menu', 10, 3);
                function add_my_class_to_nav_menu($classes, $item)
                {
                    $classes[] = 'nav-item';
                    return $classes;
                };

                $menu = wp_nav_menu([
                    'theme_location' => 'menu',
                    'container' => false,
                    'manu_class' => false,
                    'items_wrap' => '%3$s',
                    'echo' => 0,
                ]);

                echo $menu;
                ?>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Header -->

<?php
if (is_page('contact')) {
    $url = 'contact-bg';
} elseif (is_page('about')) {
    $url = 'about-bg';
} elseif (is_home()) {
    $url = 'home-bg';
} else {
    $url = 'post-bg';
}
?>
<header class="masthead" style="background-image: url('<?php bloginfo('template_url') ?>/img/<?php echo $url ?>.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>
                        <?php
                        if (is_page('contact')) {
                            wp_title(' Me', true, 'right');
                        } elseif (is_page('about')) {
                            wp_title(' Me', true, 'right');
                        } elseif (is_home()) {
                            bloginfo('name');
                        } elseif (is_single()) {
                            echo the_title();
                        }
                        ?>
                    </h1>
                    <span class="subheading">
            <?php
            if (is_page('contact')) {
                echo 'Have questions? I have answers.';
            } elseif (is_page('about')) {
                echo 'This is what I do.';
            } elseif (is_home()) {
                bloginfo('description');
            } elseif (is_single()) {
                echo the_time('d F Y');
            }
            ?>
          </span>
                </div>
            </div>
        </div>
    </div>
</header>
