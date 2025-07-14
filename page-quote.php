<?php get_header();?>

<h1 class="text-center mt-lg-5"><?php the_title(); ?></h1>
<h5 class="text-start px-5 px-lg-0 col-11 col-lg-8 mx-auto my-4 pb-4">Below is a form used for visitors to request a website of their own, this form is sent to me using the contact information you will be replied to with. We will reply to you in a timely manner for a consultation. Please keep in mind that consultations cost a fee depending on the type of guidance and direction provided. However if a client does in-fact follow through with a service/product often times the consultation fee will be waived. This form is exclusively for requesting a service/product and it is not used for general contact. Also, if you are not yet interested in buying a website but have general questions about the process then this form below is "NOT" for you. If you wish to contact me about other manners, to report an error on the site, or a problem with a past purchase/service from us, please use this page: <a class="text-info" href="<?php echo home_url();?>/contact">Here</a>.</h5>

<div class="col-11 col-lg-8 mx-auto d-block position-relative">
<?php echo do_shortcode('[gravityform id="2" title="false"]');?>
</div>
<?php get_footer();?>