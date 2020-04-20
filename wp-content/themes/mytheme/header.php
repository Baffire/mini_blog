<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>
		<?php echo wp_get_document_title(); ?>
	</title>

	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />

  <?php
    wp_register_script('test', get_template_directory_uri() . '/test.js', true);
    wp_enqueue_script('test');
  ?>

  <?php
    $custom_js = "
      .middle {
        background: green;
      }";
    wp_add_inline_script( 'test', $custom_js );

    echo '<style>'. wp_get_custom_css() .'</style>';
  ?>

  <?php echo '<style>'. wp_get_custom_css() .'</style>'; ?>

	<?php wp_head(); ?>
</head>
	<body>
		<header class="header">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h2><?php bloginfo( 'description' ); ?></h2>

      <?php get_search_form(); ?>
		</header>
