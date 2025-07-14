<?php get_header();?>
<?php 
$welcome_title = get_cs_option('welcome_title');
$welcome_text = get_cs_option('welcome_text');
$welcome_img = get_cs_option('welcome_img');
$need_website_img = get_cs_option('need_website_img');
?>
<section class="fdb-block py-0">
<div class="row p-5">
<div class="col-12 col-sm-10 col-md-8 m-md-auto ps-lg-5 col-lg-6 text-left order-2 order-lg-1">
<h1 class="display-4"><strong><?php echo wp_kses_post($welcome_title); ?></strong></h1>
<p class="lead">
<?php echo wp_kses_post($welcome_text); ?>
</p>
<p class="mt-4 text-center">
<a class="btn btn-primary" href="https://www.froala.com">Learn More</a>
</p>
</div><!-- col -->
<div class="col-12 col-sm-10 col-md-8 m-md-auto col-lg-6 order-1 order-lg-2">
<img class="mx-auto col-10 rounded-3" src="<?php echo esc_url($welcome_img); ?>">
</div><!-- img -->

</div> <!-- row -->
</section>

<section class="w-100 pb-2 pt-4 bg-white fdb-block fdb-viewport">
<h2 class="text-center text-gray pt-3">Recent Websites</h2>
<?php get_template_part( 'index-glide' );?>
</section>


<section class="quote-cta fdb-block py-5 fdb-viewport bg-light" style="background-attachment:fixed; background-image: url(<?php echo esc_url($need_website_img); ?>);">
<div class="container py-5 my-5 justify-content-center align-items-center d-flex">
<div class="row justify-content-center text-center">
<div class="col-12 col-md-8 bg-thin-glass-light rounded-5">
<!-- SVG ICON Goes Here -->
<h1>Need a Website?</h1>
<p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<p class="mt-5"><a href="<?php echo home_url();?>/quote" class="btn btn-lg btn-dark">Quote a Design</a></p>
</div>
</div>
</div>
</section>


<section class="bg-white text-dark fdb-blog fdb-viewport py-5">
<h2 class="text-center text-gray py-3">Recent Blog Posts</h2>
<div class="row text-left mt-5">

<?php
$args = array(
'post_type' => 'post', // Assuming 'photos' is your CPT
'posts_per_page' => 3,
'order' => 'ASC', // Ascending order
'orderby' => 'date' // Order by date
);
$query = new WP_Query($args);?>
<?php if ($query->have_posts()) : $count = 0; ?>
<?php while ($query->have_posts()) : $query->the_post(); $count++; ?>
<div class="col-12 col-sm-8 col-md-4 col-lg-3 m-sm-auto mr-md-auto mb-5 mb-lg-0 ml-md-0">
<div class="row"><p class="col text-start">
<?php  echo get_category_svg_icon(get_the_ID()); ?>
<?php
$categories = get_the_category();
if (!empty($categories)) {
$category_names = array_map(function($cat) { return $cat->name; }, $categories);
echo implode(', ', $category_names);
}
?></p>
<p class="text-end col"><?php echo get_the_date('m/d/Y'); ?></p></div>
<a class="text-decoration-none text-light" href="<?php the_permalink();?>"><img alt="image" class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>">

<h3 class="text-center"><strong><?php the_title(); ?></strong></h3>
<p class="mt-3 text-dark text-center"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
</div></a>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
</div>
<p class="text-center mt-4"><a href="https://www.froala.com" class="btn btn-lg btn-primary rounded-pill">View All Posts</a></p>
</section>



<section class="fdb-block py-5">
<div class="container">
<div class="row align-items-center text-left">
<div class="col-12 col-md-8">
<h1>Subscribe to Our Newsletter</h1>
<p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
</div>
<div class="col-12 col-md-3 ml-auto text-left text-md-right">
<p class="text-center"><a href="https://www.froala.com" class="btn btn-lg btn-primary">Subscribe</a></p>
</div>
</div>
</div>
</section>


<?php get_footer();?>