

</div><!-- site-wrapper -->
<footer>
</footer>
<?php wp_footer(); ?>

<?php
// You can add or change the conditions here depending on your needs
if (is_page('Home')) {
	// Code for the front page
	?>
	<script src="<?php bloginfo('template_url'); ?>/js/glide/glide.min.js"></script>
	
	<script>
	 var glide = new Glide('.glide', {
	  type: 'carousel',
	  perView: 4,
	  focusAt: 'center',
	  breakpoints: {
		800: {
		  perView: 2
		},
		480: {
		  perView: 1
		}
	  }
	})
	
	glide.mount()
	</script>
	<?php
} elseif (is_page('Websites')) {
	// Code for the Websites page
	?>
	<script src="<?php bloginfo('template_url'); ?>/js/glide/glide.min.js"></script>
	
	<script>
	 var glide = new Glide('.glide', {
	  type: 'carousel',
	  perView: 4,
	  focusAt: 'center',
	  breakpoints: {
		800: {
		  perView: 2
		},
		480: {
		  perView: 1
		}
	  }
	})
	
	glide.mount()
	</script>
	<?php
} elseif (is_page('Blog')) {
	// Code for the Blog page
} elseif (is_page('Quote')) {
	// Code for the Quote page
} elseif (is_page('About')) {
	// Code for the About page
} elseif (is_page('Contact')) {
	// Code for the Contact page
} elseif (is_singular('post')) {
	// Code for single blog posts
} elseif (is_singular('webapp')) {
	// Code for single website posts
} else {
	// Code for all other single pages
}
?>

</body>
</html>
