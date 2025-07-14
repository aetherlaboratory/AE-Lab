<?php get_header(); ?>

<h1 class="text-center pb-5 py-lg-5"> Post Archive</h1>
<div class="container-fluid">
<div class="row">
<?php
$args = array(
'post_type' => 'post', // Assuming 'photos' is your CPT
'posts_per_page' => 8,
'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
'order' => 'ASC', // Ascending order
'orderby' => 'date' // Order by date
);

$query = new WP_Query($args);?>
<?php if ($query->have_posts()) : $count = 0; ?>
<?php while ($query->have_posts()) : $query->the_post(); $count++; ?>


<div class="mx-auto col-10 col-md-6 col-lg-3 mb-5 pb-5 bg-glass-light">
<a class="text-decoration-none" href="<?php the_permalink();?>">
<div class="w-100 rounded-3" style="height:175px; background-size:cover; background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>');"></div>
<h3><?php echo get_the_title(); ?></h3>
<div class=""><?php echo wp_trim_words( get_the_excerpt(), 15 ); ?></div>


<div class="row mt-2 pt-2"><p class="col-1 text-start mb-0"><?php  echo get_category_svg_icon(get_the_ID()); ?></p>
<div class="col-4 text-start">
<?php
$categories = get_the_category();
if (!empty($categories)) {
$category_names = array_map(function($cat) { return $cat->name; }, $categories);
echo implode(', ', $category_names);
}
?></div></div>
 <hr class="border-dark border-2">
<div class="text-muted"><?php echo esc_html(get_the_date('m/d/Y')); ?></div>
<?php /* if ($count % 3 == 0) : */ ?>
</a>
</div><!-- col-3 -->




<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<div class="mx-auto position-relative d-block text-center">
<span>No gallery posts found.</span>
</div>
<?php endif; ?>

</div><!-- row -->



</div><!-- container-fluid -->


<!--Pagination-->

<?php
if ($query->have_posts()) : 
// Calculate the total number of pages
$total_pages = $query->max_num_pages;

if ($total_pages > 1) {
$current_page = max(1, get_query_var('paged'));

echo '<nav class="mt-4" aria-label="Page navigation example">';
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
// Check if the link is the current page
if (strpos($link, 'current') !== false) {
echo "<li class='page-item active' aria-current='page'><span class='page-link'>$link</span></li>";
} else {
// Wrap each link in <li> and apply 'page-item' class; also apply 'page-link' class to <a>
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