<body>

<?php get_header(); ?>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            <div class="col-8 float-left">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="post-preview">
                            <a href="post.html">
                                <?
                                function text($title)
                                {
                                    return $title . ' dsfsdfsd' . home_url();
                                }

                                the_title();
                                add_filter('the_title', 'text');
                                ?>

                                <h2 class="post-title">
                                    <a href="<?php permalink_link(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <?php
                                add_image_size('spec_thumb', 250, 250);
                                the_post_thumbnail('spec_thumb', 'class=imgstyle');
                                ?>

                                <h5 class="post-subtitle">
                                    <?php the_content('more...'); ?>
                                </h5>
                            </a>
                            <p class="post-meta">Posted by
                                <a href="<?php get_the_author_posts_link(); ?>"><?php the_author(); ?></a>
                                <?php the_time('d.m.Y H:i:s'); ?>
                            <p><?php the_tags('The tags: '); ?></p></p>
                        </div>
                        <hr>

                    <?php endwhile; ?>
                    <?php
                    if (is_home()) { ?>
                        <div class="clearfix">
                            <?php
                            $out = wp_get_archives([
                                'type' => 'monthly',
                                'limit' => 12,
                                'format' => 'custom',
                                'echo' => 0,
                                'show_post_count' => false,
                            ]);

                            $two = str_replace('<a', '<a class="btn btn-primary float-right"', $out);
                            $three = str_replace('</a>', ' older Posts &rarr;</a>', $two);

                            echo $three;
                            ?>
                        </div>
                    <?php } ?>
                <?php else : ?>

                    <?php // No Posts Found ?>

                <?php endif; ?>
            </div>

            <!-- <div class="col-lg-8 col-md-10 mx-auto"> -->
            <div class="col-4 float-right">
                <?php get_sidebar() ?>
            </div>
            <!-- </div> -->
        </div>
    </div>
</div>
</div>
</div>
</div>

<hr>

<?php get_footer(); ?>
