<?php get_header();?>



<?php
// Check if the post has a thumbnail
if ( has_post_thumbnail() ) {
	// Get the post thumbnail ID
	$thumbnail_id = get_post_thumbnail_id( get_the_ID() );
	
	// Get the image metadata
	$image_metadata = wp_get_attachment_metadata( $thumbnail_id );
	$width = $image_metadata['width'];
	$height = $image_metadata['height'];

	// Determine the aspect ratio
	if ( $width > $height ) {
		// Landscape layout
		?>
	


<div class="w-100 px-0 mx-0" style="height:85vh;background-position:center; background-repeat:no-repeat; background-size:cover; background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>');">

</div>

<div class="row mt-2 col-10 mx-auto">
<div class="col">
<?php  echo get_category_svg_icon(get_the_ID()); ?>
<?php
$categories = get_the_category();
if (!empty($categories)) {
$category_names = array_map(function($cat) { return $cat->name; }, $categories);
echo implode(', ', $category_names);
}
?></div>
<div class="col text-end">
<?php echo get_the_date('m/d/Y'); ?>
</div>
</div><!-- row -->


<div class="col-10 my-4 py-5 mx-auto">
<h1><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>
</div>

<hr class="border-1 border-dark">
 
 <p class="text-center"><u>Share this Post:</u></p>
<div class="mb-5 pb-5 mx-auto" style="width:320px;">
	<img class="rounded-circle" src="https://via.placeholder.com/75x75" alt="" title="" width="" height="">
	
	<img class="rounded-circle" src="https://via.placeholder.com/75x75" alt="" title="" width="" height="">
	
	<img class="rounded-circle" src="https://via.placeholder.com/75x75" alt="" title="" width="" height="">
	
	
	<img class="rounded-circle" src="https://via.placeholder.com/75x75" alt="" title="" width="" height="">
	  </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  <?php
	  } elseif ( $width < $height ) {
		  // Portrait layout
		  ?>
		  <div class="row mb-5 my-lg-5 pb-5 py-lg-5 col-12">
		  <div class="col-12 col-lg-6">
			 <img class="col-7 mb-5 mb-lg-0 mx-auto d-block" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>">
		  </div>
		  <div class="col-12 col-lg-6">
			  <h1 class="text-center text-lg-start"><?php the_title(); ?></h1>
			  <div class="d-flex gx-0">
			 <div class="ms-auto ms-lg-0 me-0 d-block"><?php echo get_category_svg_icon(get_the_ID());?></div> 
			 <div class="ms-2 me-auto ms-0"><h4> <?php
			  $categories = get_the_category();
			  if (!empty($categories)) {
			  $category_names = array_map(function($cat) { return $cat->name; }, $categories);
			  echo implode(', ', $category_names);
			  }
			  ?></h4></div>
		  </div><!-- row -->
			  <br>
		  <div class="small text-center text-lg-start"><?php echo get_the_date('m/d/Y'); ?></div>
			<div class="mx-auto mx-lg-0 col-10 mt-3"> <?php the_content(); ?> </div>
			<div class="mx-auto text-center text-lg-start ms-lg-0 mt-5">
				<img class="rounded-circle" src="https://via.placeholder.com/75x75" alt="" title="" width="" height="">
				
				<img class="rounded-circle" src="https://via.placeholder.com/75x75" alt="" title="" width="" height="">
				
				<img class="rounded-circle" src="https://via.placeholder.com/75x75" alt="" title="" width="" height="">
				
				
				<img class="rounded-circle" src="https://via.placeholder.com/75x75" alt="" title="" width="" height="">
				  </div>
		  </div>
		  </div><!-- row -->
		  <?php
	  } else {
		  // Square layout
		?>
		  <div class="row mb-5 my-lg-5 pb-5 py-lg-5 col-12">
		  <div class="col-12 col-lg-6">
			 <img class="col-7 mb-5 mb-lg-0 mx-auto d-block" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>">
		  </div>
		  <div class="col-12 col-lg-6">
			  <h1 class="text-center text-lg-start"><?php the_title(); ?></h1>
			  <div class="d-flex gx-0">
			 <div class="ms-auto ms-lg-0 me-0 d-block"><?php echo get_category_svg_icon(get_the_ID());?></div> 
			 <div class="ms-2 me-auto ms-0"><h4> <?php
			  $categories = get_the_category();
			  if (!empty($categories)) {
			  $category_names = array_map(function($cat) { return $cat->name; }, $categories);
			  echo implode(', ', $category_names);
			  }
			  ?></h4></div>
		  </div><!-- row -->
			  <br>
		  <div class="small text-center text-lg-start"><?php echo get_the_date('m/d/Y'); ?></div>
			<div class="mx-auto mx-lg-0 col-10 mt-3"> <?php the_content(); ?> </div>
			<div class="mx-auto text-center text-lg-start ms-lg-0 mt-5">
				<img class="rounded-circle" src="https://via.placeholder.com/75x75" alt="" title="" width="" height="">
				
				<img class="rounded-circle" src="https://via.placeholder.com/75x75" alt="" title="" width="" height="">
				
				<img class="rounded-circle" src="https://via.placeholder.com/75x75" alt="" title="" width="" height="">
				
				
				<img class="rounded-circle" src="https://via.placeholder.com/75x75" alt="" title="" width="" height="">
				  </div>
		  </div>
		  </div><!-- row -->
		  <?php
	  }
  } else {
	  // Default layout if no thumbnail
	  ?>
	  <div class="post-content no-thumbnail">
		  <h1><?php the_title(); ?></h1>
		  <?php the_content(); ?>
	  </div>
	  <?php
  }
  ?>
  
  
  
  
  
  <hr>
  
  
  <!-- Start Related/Similar Posts -->
	  
	  <div class="fdb-block fdb-viewport bg-dark text-light py-5">
	  <h2 class="mb-5 text-center">Related Posts</h2>
	  <div class="row px-1 gx-4">
	  
	  <!-- start card -->
	  <div class="card col-12 col-md-10 col-lg-2 mb-5 mb-lg-0 px-0 rounded-3 mx-auto bg-thin-glass-light pt-0">
	  <a href="#">
	  <div class="card-head pt-0">
	  <img class="w-100 mx-0 pt-0 mt-0 rounded-3" src="https://via.placeholder.com/300x200" />
	  </div>
	  <div class="card-body">
	  <h3 class="text-center text-lg-start">Post Title</h3>
	  <h5 class="text-center text-lg-start">Category</h5>
	  
	  </div>
	  </a>
	  </div>	<!-- card -->
	  
	  <!-- start card -->
	  <div class="card col-12 col-md-10 col-lg-2 mb-5 mb-lg-0 px-0 rounded-3 mx-auto bg-thin-glass-light pt-0">
	  <a href="#">
	  <div class="card-head pt-0">
	  <img class="w-100 mx-0 pt-0 mt-0 rounded-3" src="https://via.placeholder.com/300x200" />
	  </div>
	  <div class="card-body">
	  <h3 class="text-center text-lg-start">Post Title</h3>
	  <h5 class="text-center text-lg-start">Category</h5>
	  
	  </div>
	  </a>
	  </div>	<!-- card -->
	  
	  <!-- start card -->
	  <div class="card col-12 col-md-10 col-lg-2 mb-5 mb-lg-0 px-0 rounded-3 mx-auto bg-thin-glass-light pt-0">
	  <a href="#">
	  <div class="card-head pt-0">
	  <img class="w-100 mx-0 pt-0 mt-0 rounded-3" src="https://via.placeholder.com/300x200" />
	  </div>
	  <div class="card-body">
	  <h3 class="text-center text-lg-start">Post Title</h3>
	  <h5 class="text-center text-lg-start">Category</h5>
	  
	  </div>
	  </a>
	  </div>	<!-- card -->
	  
	  <!-- start card -->
	  <div class="card col-12 col-md-10 col-lg-2 mb-5 mb-lg-0 px-0 rounded-3 mx-auto bg-thin-glass-light pt-0">
	  <a href="#">
	  <div class="card-head pt-0">
	  <img class="w-100 mx-0 pt-0 mt-0 rounded-3" src="https://via.placeholder.com/300x200" />
	  </div>
	  <div class="card-body">
	  <h3 class="text-center text-lg-start">Post Title</h3>
	  <h5 class="text-center text-lg-start">Category</h5>
	  
	  </div>
	  </a>
	  </div>	<!-- card -->
	  
	  </div><!-- row -->
	  </div>
	  
	  <?php get_footer();?>

<?php get_footer();?>




