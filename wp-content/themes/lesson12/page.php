<body>

<?php get_header(); ?>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php the_post(); ?>
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php
if (is_page('contact')) {
    echo get_template_part('contact');
}
?>
<hr>

<?php get_footer(); ?>
