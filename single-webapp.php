<?php get_header();?>
  <?php $meta_data = get_post_meta( get_the_ID(), '_custom_post_options', true );?>
<div class="w-100 px-5">
<div class="row pt-5">

<div class="col-12 col-lg-6 pt-4 order-2 order-lg-1">
<hr class="border-dark border-1 d-lg-none">
<div class="row justify-content-center">
<img class="col-5 ms-lg-1" src="<?php echo $meta_data['mobile_img_url'];?>" style="max-width:30%;">
<img class="col-6 ms-lg-4 ms-xl-5" src="<?php echo $meta_data['tablet_img_url'];?>" style="max-width:40%;">
</div><!-- row -->
<img class="col-11 col-lg-12 mt-5 mx-auto d-block" src="<?php echo $meta_data['desktop_img_url'];?>" style="max-width:75%;">
</div><!-- col-6-->





<div class="col-12 ms-auto me-0 col-lg-5 ps-5 pt-lg-4 order-1 order-lg-2">
  <img class="mx-auto mx-lg-0 d-block mb-4" src="<?php echo $meta_data['comp_logo'];?>" style="width:150px;">
<h1 class="text-center text-lg-start"><?php echo $meta_data['comp_name'];?></h1>
<h3 class="text-center text-lg-start"><?php echo $meta_data['site_url'];?></h3>
<h3 class="text-center text-lg-start"><?php echo $meta_data['phone_no'];?></h3>
<h3 class="text-center text-lg-start"><?php echo $meta_data['comp_email'];?></h3>

 <?php echo wp_kses_post( $meta_data['site_desc'] ); ?>


<div class="mt-5 text-center text-lg-start">
<?php
 // echo do_shortcode('[social-share counters="0"]'); 
 ?>

</div>
</div><!-- col-6-->



</div><!--row--> 
</div><!--w-100-->



<hr>
<!-- Start Related/Similar Websites -->

<div class="fdb-block fdb-viewport bg-white text-light py-5">
<h2 class="mb-5 text-center">More Websites</h2>
<div class="row px-1 gx-4">
<?php
// Get the current post ID
$current_post_id = get_the_ID();

// Get current post categories (for related posts)
$categories = wp_get_post_terms($current_post_id, 'category', array('fields' => 'ids'));

// Query related posts
$args = array(
    'post_type'      => 'webapp', // Change this if you need a different post type
    'posts_per_page' => 4, // Number of related posts to show
    'post__not_in'   => array($current_post_id), // Exclude the current post
    'orderby'        => 'date' // Random order for variation
 
);

$related_posts = new WP_Query($args);

if ($related_posts->have_posts()) :?>
        <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
<!-- start card -->
<div class="col-12 col-md-10 col-lg-2 mb-5 mb-lg-0 px-0 rounded-3 mx-auto pt-0">
<a href="<?php echo get_the_permalink(); ?>" class="text-decoration-none">
<div class="pt-0">
<img class="w-100 mx-0 pt-0 mt-0 rounded-3" src="<?php echo get_the_post_thumbnail_url();?>" />
</div>
<h3 class="text-center"><?php the_title();?></h3>
<h5 class="text-center">
  <?php
  $categories = get_the_category();
  if (!empty($categories)) {
  $category_names = array_map(function($cat) { return $cat->name; }, $categories);
  echo implode(', ', $category_names);
  }
  ?>
</h5>

</a>
</div>	<!-- card -->
  <?php endwhile; ?>
  </div>
  <?php
  wp_reset_postdata(); // Reset query
else :
  echo '<p>No related Websites found.</p>';
endif;
?>


</div><!-- row -->
</div>

<?php get_footer();?>