<?php get_header();?>


<h1 class="text-center my-5">All Websites</h1>
<div class="container">
<div class="row">


  
	  <?php
	  $args = array(
		'post_type' => 'webapp',
		'posts_per_page' => 6,
		'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
		'order' => 'ASC', // Descending order
		'orderby' => 'date'
	  );
  
	  $query = new WP_Query($args);
	  ?>
	  <?php if ($query->have_posts()) : $count = 0; ?>
		<?php while ($query->have_posts()) : $query->the_post(); $count++; ?>
  
		  <div class="col-12 col-md-6 col-lg-4 mb-4">
			<?php if (has_post_thumbnail()) : ?>
			  <a href="<?php the_permalink();?>"><img class="img-fluid mb-3" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>" alt="<?php the_title(); ?>" /></a>
			<?php else : ?>
			 <a href="<?php the_permalink();?>"><img class="img-fluid mb-3" src="https://placehold.co/400x300?text=No+Image" alt="Placeholder" /></a>
			<?php endif; ?>
  
			<h3><?php echo get_the_title(); ?></h3>
  
			<?php
			// Optional: get 'site_url' from post meta
			$site_url = get_post_meta(get_the_ID(), 'site_url', true);
			if ($site_url) :
			?>
			  <h5><a href="<?php echo esc_url($site_url); ?>" target="_blank"><?php echo esc_html($site_url); ?></a></h5>
			<?php endif; ?>
  
			<p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
  
			<?php
			$categories = get_the_category();
			if (!empty($categories)) {
			  $category_names = array_map(function ($cat) {
				return $cat->name;
			  }, $categories);
			  echo '<p><strong>Categories:</strong> ' . implode(', ', $category_names) . '</p>';
			}
			?>
  
			<p class="text-muted"><?php echo get_the_date('m/d/Y'); ?></p>
		  </div>
  
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	  <?php else : ?>
		<div class="mx-auto position-relative d-block text-center">
		  <span>No webapp posts found.</span>
		</div>
	  <?php endif; ?>
  
	</div><!-- row -->
  </div><!-- container -->
  
  <!-- Pagination -->
  <?php
  if ($query->have_posts()) :
	$total_pages = $query->max_num_pages;
  
	if ($total_pages > 1) {
	  $current_page = max(1, get_query_var('paged'));
  
	  echo '<nav class="w-100 mx-0 mt-4" aria-label="Page navigation example">';
	  echo '<ul class="pagination pagination-lg justify-content-center">';
  
	  $links = paginate_links(array(
		'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
		'format' => '?paged=%#%',
		'current' => $current_page,
		'total' => $total_pages,
		'type' => 'array',
		'prev_next' => true,
		'prev_text' => 'Prev',
		'next_text' => 'Next',
	  ));
  
	  if (is_array($links)) {
		foreach ($links as $link) {
		  if (strpos($link, 'current') !== false) {
			echo "<li class='page-item active' aria-current='page'><span class='page-link'>$link</span></li>";
		  } else {
			echo "<li class='page-item'>" . str_replace('<a', '<a class="page-link"', $link) . "</li>";
		  }
		}
	  }
  
	  echo '</ul>';
	  echo '</nav>';
	}
  endif;
  ?>
  


<?php get_footer(); ?>




<?php get_footer();?>