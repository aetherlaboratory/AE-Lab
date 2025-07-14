<?php get_header();?>
<h1 class="text-center mt-lg-5"><?php the_title(); ?></h1>
<h5 class="text-start px-5 px-lg-0 col-11 col-lg-8 mx-auto my-4 pb-4">Below is a form used for visitors to contact me about general inquiries, to report an error on the site, or a problem with a past purchase/service from us. This form is exclusively for contacting me about anything outside of requesting a website / repair / product / service. However, if you are not yet interested in buying a website but have general questions about the process, then this form below is for you. We will reply to you in a timely manner. If you are interested in requesting a website or repair/rework of a website please use this page: <a class="text-info" href="<?php echo home_url();?>/quote">Here</a>.</h5>

<div class="col-11 col-lg-8 mx-auto d-block position-relative">
<?php echo do_shortcode('[gravityform id="1" title="false"]');?>
</div>
<?php get_footer();?>