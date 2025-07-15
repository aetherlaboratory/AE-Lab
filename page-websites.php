<?php get_header();?>

<?php
$need_website_img = get_cs_option('need_website_img');
$about_our_websites_img = get_cs_option('about_our_websites_img');
?> 

<section class="fdb-block text-gray fdb-viewport py-5">
<div class="container">
<h2 class="text-center mb-4 pb-3 text-gray">Newest Project</h2>
<?php
$args = array(
'post_type' => 'webapp', 
'posts_per_page' => 1,
'order' => 'DESC', // Descending order
'orderby' => 'date' // Order by date
);
$query = new WP_Query($args);?>
<?php if ($query->have_posts()) : $count = 0; ?>
<?php while ($query->have_posts()) : $query->the_post(); $count++; 
//Start Loop
?>
<?php $meta_data = get_post_meta( get_the_ID(), '_custom_post_options', true );?>

<div class="row align-content-start">
<div class="col-12 col-lg-6 mx-auto my-5">
<h3 class="text-gray mb-3 text-center text-lg-start"><?php echo get_the_title(); ?><h3>
<p class="cat text-center text-lg-start">
<?php
$categories = get_the_category();
if (!empty($categories)) {
$category_names = array_map(function($cat) { return $cat->name; }, $categories);
echo implode(', ', $category_names);
}
?>
</p>
<p class="post-date small text-muted text-center text-lg-start"><?php echo get_the_date('m/d/Y'); ?></p>
 <?php echo wp_kses_post( $meta_data['site_desc'] ); ?>
<p class="mt-4 text-center text-lg-start"><a href="<?php echo the_permalink();?>" class="btn btn-md btn-primary rounded-pill">View Website</a></p>

</div>




<div class="col-12 col-lg-5 pt-2 order-2 order-lg-1">
<hr class="border-dark border-1 d-lg-none">
<div class="row justify-content-center">
<img class="col-5" src="<?php echo $meta_data['mobile_img_url'];?>" style="max-width:25%;">
<img class="col-6" src="<?php echo $meta_data['tablet_img_url'];?>" style="max-width:35%;">
</div><!-- row -->
<img class="col-11 col-lg-12 mt-5 mx-auto d-block" src="<?php echo $meta_data['desktop_img_url'];?>" style="max-width:75%;">
</div><!-- col-6-->
</div><!-- row -->
<?php //End Loop
endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<?php endif; ?>
</div>
</section>

<section class="py-5 fdb-block">
<h2 class="text-center">Featured Websites</h2>
<?php get_template_part( 'website-glide' );?>
<p class="text-center mt-4"><a href="/all-websites" class="btn btn-lg btn-primary rounded-pill">View All Websites</a></p>
</section>










<section class="fdb-block bg-white text-dark fdb-viewport py-5">
<div class="container">
<div class="row align-items-center">
<div class="col-12 col-md-8 col-lg-6 m-md-auto ml-lg-0 mr-lg-auto">
<img alt="image" class="img-fluid" src="<?php echo esc_url($about_our_websites_img); ?>">
</div>
<div class="col-12 col-lg-6 col-xl-5 ml-sm-auto pt-5 pt-lg-0 text-light">
<h1>About our Websites</h1>

<div class="row pt-4 pt-xl-5">
<div class="col-12 col-sm-6 col-xl-5">
<h4><strong>Responsive Design</strong></h4>
<p class="text-dark">Every website is designed for Mobile, Tablet, & Desktop screens.</p>
</div>
<div class="col-12 col-sm-6 col-xl-5 m-auto pt-3 pt-sm-0">
<h4><strong>SEO/Accessibility</strong></h4>
<p class="text-dark">Rank high in search engines but also accommodate handicapped users on the site.</p>
</div>
</div>

<div class="row pt-3">
<div class="col-12 col-sm-6 col-xl-5">
<h4><strong>WooCommerce!</strong></h4>
<p class="text-dark">We utilize the plugin wooCommmerce for any eCommerce (online shop websites).</p>
</div>
<div class="col-12 col-sm-6 col-xl-5 m-auto pt-3 pt-sm-0">
<h4><strong>Custom Made</strong></h4>
<p class="text-dark">Need a booking system, to sell tickets, auction, survey/application, newsletter, we can help! </p>
</div>
</div>
</div>
</div>
</div>
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