<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#">
                          <span class="fa-stack fa-lg">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                          </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                          <span class="fa-stack fa-lg">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                          </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                          <span class="fa-stack fa-lg">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                          </span>
                        </a>
                    </li>
                </ul>
                <ul class="ml-auto list-inline text-center mt-3">
                    <?php
                    add_filter('nav_menu_css_class', '__return_empty_array');
                    add_filter('nav_menu_css_class', 'add_my_class_to_nav_menu_footer', 10, 3);

                    function add_my_class_to_nav_menu_footer($classes, $item)
                    {

                        $classes[] = 'list-inline-item';

                        return $classes;
                    }

                    ;

                    echo wp_nav_menu([
                        'theme_location' => 'menu',
                        'container' => false,
                        'manu_class' => false,
                        'items_wrap' => '%3$s',
                        'echo' => 0,
                    ]);

                    ?>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
