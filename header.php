<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?> </title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Comfortaa:wght@300..700&family=Exo+2:ital,wght@0,100..900;1,100..900&family=Lexend+Deca:wght@100..900&family=Play:wght@400;700&family=Space+Grotesk:wght@300..700&family=Varela+Round&display=swap" rel="stylesheet">
<!-- Required Core Stylesheet -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/preloader/preloader.css">
	  <!-- jQuery CDN -->
		   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/preloader/preloader.js"></script>
<?php wp_head(); ?>
</head>
<?php get_template_part( 'svg-icons' );?>
<body <?php body_class(); ?>>
<div class="site-wrapper">
	<?php get_template_part( 'menu' );?>

		  