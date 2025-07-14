<?php get_header();?>
<div id="myCarousel" class="carousel slide sigma" data-bs-ride="carousel">
<div class="carousel-indicators">
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
<div class="carousel-item active" style="height:500px;">
<img src="https://picsum.photos/id/11/1366/500">

<div class="container">
<div class="carousel-caption text-start bg-glass-dark">
<h1>Example headline.</h1>
<h5>Category</h5>
<p>Some representative placeholder content for the first slide of the carousel.</p>
<p><a class="btn btn-sm btn-primary" href="#">Sign up today</a></p>
</div>
</div>
</div>
<div class="carousel-item" style="height:500px;">
<img src="https://picsum.photos/id/12/1366/500">

<div class="container">
<div class="carousel-caption bg-glass-dark">
<h1>Another example headline.</h1>
<h5>Category</h5>
<p>Some representative placeholder content for the second slide of the carousel.</p>
<p><a class="btn btn-sm btn-primary" href="#">Learn more</a></p>
</div>
</div>
</div>
<div class="carousel-item" style="height:500px;">
<img src="https://picsum.photos/id/13/1366/500">

<div class="container">
<div class="carousel-caption text-end bg-glass-dark">
<h1>One more for good measure.</h1>
<h5>Category</h5>
<p>Some representative placeholder content for the third slide of this carousel.</p>
<p><a class="btn btn-sm btn-primary" href="#">Browse gallery</a></p>
</div>
</div>
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>
<!-- End Carousel -->



<div class="row">
<?php
$args = array(
'post_type'      => 'post',
'posts_per_page' => 2, // Limit to 2 posts for this row
);
$query = new WP_Query($args);

if ($query->have_posts()) :
while ($query->have_posts()) : $query->the_post();
// Alternate classes for the columns
$is_dark = $query->current_post % 2 === 0; // Odd-even checker
?>
<div class="col-12 col-lg-6 <?php echo $is_dark ? 'bg-dark text-white' : 'bg-light'; ?> text-center overflow-hidden">
<div class="my-3 py-3">
<h2 class="display-5"><?php the_title(); ?></h2>
<?php  echo get_category_svg_icon(get_the_ID()); ?>
<h5 class="d-inline-block m-0 ps-1"><?php the_category(', '); ?></h5>
<p class="lead"><?php echo get_the_excerpt(); ?></p>
</div>
<?php if (has_post_thumbnail()) : ?>
<img src="<?php the_post_thumbnail_url('large'); ?>" class="shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
<?php endif; ?>
</div>
<?php
endwhile;
wp_reset_postdata();
endif;
?>
</div><!-- row -->


<div class="container py-4">
<?php
$jumbotron_post = new WP_Query(array(
'post_type'      => 'post',
'posts_per_page' => 1, // Limit to 1 post
'offset'        => '2', 
));

if ($jumbotron_post->have_posts()) :
while ($jumbotron_post->have_posts()) : $jumbotron_post->the_post();
?>
<div class="p-5 mb-4 bg-light rounded-3" style="background-size:cover;background-image:url('<?php the_post_thumbnail_url('full'); ?>');">
<div class="container-fluid py-5">
<div class="bg-glass-light">
<h1 class="display-5 fw-bold"><?php the_title(); ?></h1>
<?php  echo get_category_svg_icon(get_the_ID()); ?>
<h5 class="d-inline-block m-0 ps-1"><?php the_category(', '); ?></h5>
<p class="col-md-8 fs-4"><?php the_excerpt(); ?></p>
</div>
<a href="<?php the_permalink(); ?>" class="mt-3 btn btn-dark btn-md">Read More</a>
</div>
</div>
<?php
endwhile;
wp_reset_postdata();
endif;
?>
</div><!-- container -->




<div class="row align-items-md-stretch">
<?php
$background_posts = new WP_Query(array(
'post_type'      => 'post',
'posts_per_page' => 2, // 2 posts for the two sections
'offset' => 3,
));

if ($background_posts->have_posts()) :
while ($background_posts->have_posts()) : $background_posts->the_post();
$is_dark = $background_posts->current_post % 2 === 0;
?>
<div class="col-md-6">
<div class="h-100 p-5 <?php echo $is_dark ? 'text-white bg-dark' : 'bg-light border'; ?> rounded-3" 
style="background-size:cover;background-image:url('<?php the_post_thumbnail_url('full'); ?>');">
<div class="bg-glass-light">
<h2><?php the_title(); ?></h2>
<?php  echo get_category_svg_icon(get_the_ID()); ?>
<h5 class="d-inline-block m-0 ps-1"><?php the_category(', '); ?></h5>
<p><?php the_excerpt(); ?></p>
</div>
<a href="<?php the_permalink(); ?>" class="mt-3 btn btn-sm <?php echo $is_dark ? 'btn-outline-light' : 'btn-outline-secondary'; ?>">Read More</a>
</div>
</div>
<?php
endwhile;
wp_reset_postdata();
endif;
?>
</div><!-- row -->

<p class="text-center my-5 pb-5"><a href="<?php echo home_url();?>/archive" class="btn btn-lg btn-primary rounded-pill">View All Posts</a></p>





<?php get_footer();?>