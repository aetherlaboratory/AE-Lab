<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bs/bootstrap.min.css">
<script src="<?php echo get_stylesheet_directory_uri(); ?>/bs/bootstrap.min.js" defer></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Comfortaa:wght@300..700&family=Exo+2:ital,wght@0,100..900;1,100..900&family=Lexend+Deca:wght@100..900&family=Play:wght@400;700&family=Space+Grotesk:wght@300..700&family=Varela+Round&display=swap" rel="stylesheet">
<style>
html, body {
height: 100%;
margin: 0;
padding: 0;
}

.outer {
display: table;
width: 100%;
height: 100%;
}

.middle {
display: table-cell;
vertical-align: middle;
text-align: center;
}

.inner {
display: inline-block;
text-align: center; /* Resets text alignment for content inside */
}



</style>
</head>
<body>
<div class="outer">
<div class="middle">
<div class="inner">
<img src="https://picsum.photos/id/193/1080/500">
<br><br>
<a href="<?php echo home_url();?>/home/"><button class="btn btn-lg btn-outline-dark rounded-pill">Enter Site</button> </a>
</div><!-- inner -->
</div><!-- middle -->
</div><!-- outer -->
</body>
</html>