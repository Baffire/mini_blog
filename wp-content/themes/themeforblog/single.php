<body>

<?php get_header(); ?>
<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">

                <?php
                the_post();
                add_filter('the_content', 'fio');

                function fio($content)
                {
                    if (is_single()) {
                        $author = get_the_author_posts_link();
                    }

                    return '<div class="post">' . $content . $author . '</div>';
                }

                the_content();
                ?>

                <p><?php the_tags(); ?></p>
            </div>
        </div>
    </div>
</article>

<hr>


<?php get_footer(); ?>
