<?php get_header();?>


<main>
	<h1 class="text-center pb-5 py-lg-5"><?php single_cat_title(); ?></h1>
	<p><?php echo category_description(); ?></p>
	<div class="container-fluid">
	<div class="row justify-content-center">

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		
		
		
		
		
		<div class="mx-auto mx-lg-5 col-10 col-md-6 col-lg-3 mb-5 pb-5 bg-glass-light">
		<a class="text-decoration-none" href="<?php the_permalink();?>">
		<div class="w-100 rounded-3" style="height:175px; background-size:cover; background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>');"></div>
		<h3><?php echo get_the_title(); ?></h3>
		<div class=""><?php echo wp_trim_words( get_the_excerpt(), 15 ); ?></div>
		
		
		<div class="row"><p class="col-1 text-start mb-0"><?php  echo get_category_svg_icon(get_the_ID()); ?></p>
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
	<?php else : ?>
		<p>No posts found in this category.</p>
	<?php endif; ?>
</div><!-- row -->
	
	
	
	</div><!-- container-fluid -->
	<?php the_posts_pagination(); ?>
</main>



<?php get_footer();?>