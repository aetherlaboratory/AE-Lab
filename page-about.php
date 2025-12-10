<?php get_header();?>

<?php
$bio_img = get_cs_option('bio_img');
$bio_img = get_cs_option('bio_img');
$bio_img = get_cs_option('bio_img');
$bio_text = get_cs_option('bio_text');
$skills_text = get_cs_option('skills_text');
$skill_img = get_cs_option('skill_img');
$skill_titlei = get_cs_option('skill_titlei');
$skilli = get_cs_option('skilli');
$skill_titleii = get_cs_option('skill_titleii');
$skillii = get_cs_option('skillii');
$skill_titleiii = get_cs_option('skill_titleiii');
$skilliii = get_cs_option('skilliii');
$skill_titleiv = get_cs_option('skill_titleiv');
$skilliv = get_cs_option('skilliv');
$about_need_website_img = get_cs_option('about_need_website_img');
?> 

<!-- Bio -->
<section class="fdb-block fdb-viewport py-5">
<div class="container">
<div class="row text-center">
<div class="col-8 col-md-4">
<img alt="image" class="img-fluid" src="https://picsum.photos/id/375/350/350">
</div>

<div class="col-4 col-md-2">
<div class="row">
<div class="col-12">
<img alt="image" class="img-fluid" src="https://picsum.photos/id/477/160/160">
</div>
</div>

<div class="row mt-4">
<div class="col-12">
<img alt="image" class="img-fluid" src="https://picsum.photos/id/473/160/160">
</div>
</div>
</div>

<div class="col-12 col-md-6 col-lg-5 ms-auto">

<h1>Design Blocks</h1>
<p class="lead text-start">
	Lorem ipsum dolor sit amet, oporteat adversarium vis te. Cum in paulo alterum deterruisset, ea quo solum assentior conceptam. Audiam verear singulis at mea, virtute aliquid scripserit sed id.
	<br><br>
	Reque ullamcorper te his. Cum epicuri argumentum an. Te mea graeci accumsan, vim ex veritus deterruisset reprehendunt. Ad inermis mentitum est. Per ne scribentur neglegentur.
</p>
</div>
</div>
</div>
</section>

<!-- Services -->
<section class="bg-carbon fdb-block fdb-viewport py-5 bg-dark text-light">
<div class="container">
<div class="row align-items-center pb-xl-5">
<div class="col-12 col-md-7 col-xl-5">
<h1>Froala Design Blocks</h1>
<p class="lead bg-carbon-flat p-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
</div>
<div class="col-12 col-sm-6 col-md-5 m-sm-auto mr-md-0 ml-md-auto pt-4 pt-md-0">
<img alt="image" class="img-fluid rounded-2 border border-light border-2" src="https://picsum.photos/id/1/700/400">
</div>
</div>

<div class="row bg-carbon-flat p-2 mt-2">
<div class="col-12 col-sm-6 col-md-3">
<h3><strong>Feature One</strong></h3>
<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large ocean.</p>
</div>

<div class="col-12 col-sm-6 col-md-3 pt-3 pt-sm-0">
<h3><strong>Feature Two</strong></h3>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
</div>

<div class="col-12 col-sm-6 col-md-3 pt-3 pt-md-0">
<h3><strong>Feature Three</strong></h3>
<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
</div>

<div class="col-12 col-sm-6 col-md-3 pt-3 pt-md-0">
<h3><strong>Feature Four</strong></h3>
<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
</div>
</div>
</div>
</section>





<!-- Proficiencies -->
<section class="fdb-block py-5">
  <div class="container">
    <div class="row text-center">
      <div class="col-12 py-5">
        <h1>Proficiencies</h1>
      </div>
    </div>

    <?php
    $skills = [
        ['ps', 'Adobe Photoshop', 'Photo Editing/Image Manipulation/Fashion Design'],
        ['aill', 'Adobe Illustrator', 'Graphic Design/Web Design/Typography'],
        ['ind', 'Adobe Indesign', 'Book Editing/Publishing'],
        ['ae', 'Adobe After Effects', 'Motion Graphics/Advanced Animation'],
        ['html', 'HTML 5', 'Web Design/Prototyping'],
        ['css', 'CSS 3', 'Web Design/UI/UX Design'],  
        ['jq', 'jQuery', 'Most Popular Javascript Plugin'],
        ['js', 'Javascript', 'Interactivity/Web Development'],
        ['wp', 'WordPress', 'PHP, CMS, Web Server Development'],
        ['gh', 'GitHub', 'Version Control/Collaboration'],
        ['svg', 'SVG', 'Scalable Vector Graphics'],
        ['sketch', 'Sketch', 'UI/UX Design/Prototyping'],
        ['bs', 'Bootstrap', 'CSS Utility Library'],
        ['anime', 'Anime.js', 'Advanced JS Animation Utility'],
        ['react', 'React', 'JavaScript Library for UI'],
        ['tw', 'Tailwind', 'Utility-First CSS Framework'],
        ['next', 'Next.js', 'React Framework / Backend Fetching'],
        ['pc', 'Procreate', '(iPad Pro) Digital Painting/CGI'],
        ['afd', 'Affinity Designer', '(iPad Pro) Vector Design'],
        ['blen', 'Blender 3D', '3D Modeling/Sculpting'],
        ['mj', 'MidJourney', 'Generative Ai Image/Video'],
        ['gpt', 'ChatGPT', 'Generative Ai Prompting/Research']
    ];

    // Break into chunks of 4 items per row
    $chunks = array_chunk($skills, 4);
    foreach ($chunks as $row) :
    ?>
    <div class="row text-left mt-5">
      <?php foreach ($row as $skill) : ?>
      <div class="col-12 col-sm-6 col-lg-3 mb-4">
        <div class="row">
          <div class="col-2 me-2">
            <svg class="icon about-icon"><use xlink:href="#<?php echo esc_attr($skill[0]); ?>"></use></svg>
          </div>
          <div class="col-9">
            <h3><strong><?php echo esc_html($skill[1]); ?></strong></h3>
            <p><?php echo esc_html($skill[2]); ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
  </div>
</section>







<section class="quote-cta fdb-block py-5 fdb-viewport bg-light text-dark" style="background-attachment:fixed; background-image: url(<?php echo esc_url($about_need_website_img); ?>);">
	<div class="container py-5 my-5 justify-content-center align-items-center d-flex">
	<div class="row justify-content-center text-center">
	<div class="col-12 col-md-8 bg-glass-light rounded-5">
	<!-- SVG ICON Goes Here -->
	<h1 class="text-primary">Need a Website?</h1>
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