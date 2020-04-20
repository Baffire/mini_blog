<!DOCTYPE html>
<html>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>
		<?php echo wp_get_document_title(); ?>
	</title>

	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />

	<?php wp_head(); ?>
</head>

<body>
<?php get_header(); ?>
	<div class="middle">
		<?php
					the_post();

					echo '<h1>'. get_the_title() .'</h3>';
				  the_content();

          echo comments_template();
		?>
	</div>
<?php get_footer(); ?>
