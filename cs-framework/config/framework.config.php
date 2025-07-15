<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Framework',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Æther Laboratory <small>by Æ-Lab</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();


// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'seperator_pages',
  'title'  => 'Main Pages',
  'icon'   => 'fa fa-file'
);







// ------------------------------
// H O M E                      -
// ------------------------------
$options[]   = array(
  'name'     => 'home_section',
  'title'    => 'Home',
  'icon'     => 'fa fa-home',
  'fields'   => array(


array(
  'id'      => 'welcome_title',
  'type'    => 'textarea',
  'title'   => 'Welcome Title',
  'help'    => 'This option field is useful. You will love it!',
),

array(
  'id'      => 'welcome_text',
  'type'    => 'textarea',
  'title'   => 'Welcome Text',
  'help'    => 'This option field is useful. You will love it!',
),

array(
  'id'      => 'welcome_img',
  'type'    => 'upload',
  'title'   => 'Welcome Image',
  'help'    => 'Upload a site logo for your branding.',
),





array(
  'id'      => 'need_website_img',
  'type'    => 'upload',
  'title'   => 'Need a Website Image',
  'help'    => 'Upload a site logo for your branding.',
),











  )
);












// ------------------------------
// W E B S I T E S              -
// ------------------------------
$options[]   = array(
  'name'     => 'websites_section',
  'title'    => 'Websites',
  'icon'     => 'fa fa-globe',
  'fields'   => array(




array(
  'id'      => 'about_our_websites_img',
  'type'    => 'upload',
  'title'   => 'About Our Websites Image',
  'help'    => 'Upload a site logo for your branding.',
),




  
  
  
)
);













// ------------------------------
//  A B O U T                   -
// ------------------------------
$options[]   = array(
  'name'     => 'about_section',
  'title'    => 'About',
  'icon'     => 'fa fa-user',
  'fields'   => array(

   array(
     'id'      => 'bio_imgi',
     'type'    => 'upload',
     'title'   => 'Bio Image 1',
     'help'    => 'Upload a site logo for your branding.',
   ),
   array(
     'id'      => 'bio_imgii',
     'type'    => 'upload',
     'title'   => 'Bio Image 2',
     'help'    => 'Upload a site logo for your branding.',
   ),
   array(
     'id'      => 'bio_imgiii',
     'type'    => 'upload',
     'title'   => 'Bio Image 3',
     'help'    => 'Upload a site logo for your branding.',
   ),
   
   array(
     'id'      => 'bio_text',
     'type'    => 'textarea',
     'title'   => 'Bio Text',
     'help'    => 'This option field is useful. You will love it!',
   ),
   
   
   array(
      'id'      => 'skills_text',
      'type'    => 'textarea',
      'title'   => 'Skills Text',
      'help'    => 'This option field is useful. You will love it!',
    ),
    
    array(
    'id'      => 'skill_img',
     'type'    => 'upload',
     'title'   => 'Skills Image',
     'help'    => 'Upload a site logo for your branding.',
   ),
   
   
   // begin: a field
     array(
       'id'      => 'skill_titlei',
       'type'    => 'text',
       'title'   => 'Skill Title 1',
     ),
     // end: a field
   array(
      'id'      => 'skill_i',
      'type'    => 'textarea',
      'title'   => 'Skill 1',
      'help'    => 'This option field is useful. You will love it!',
    ),


// begin: a field
   array(
     'id'      => 'skill_titleii',
     'type'    => 'text',
     'title'   => 'Skill Title 2',
   ),
   // end: a field
 array(
    'id'      => 'skill_ii',
    'type'    => 'textarea',
    'title'   => 'Skill 2',
    'help'    => 'This option field is useful. You will love it!',
  ),
  
  
  // begin: a field
     array(
       'id'      => 'skill_titleiii',
       'type'    => 'text',
       'title'   => 'Skill Title 3',
     ),
     // end: a field
   array(
      'id'      => 'skill_iii',
      'type'    => 'textarea',
      'title'   => 'Skill 3',
      'help'    => 'This option field is useful. You will love it!',
    ),
    
    
    // begin: a field
       array(
         'id'      => 'skill_titleiv',
         'type'    => 'text',
         'title'   => 'Skill Title 4',
       ),
       // end: a field
     array(
        'id'      => 'skill_iv',
        'type'    => 'textarea',
        'title'   => 'Skill 4',
        'help'    => 'This option field is useful. You will love it!',
      ),
  
  
  



      array(
  'id'      => 'about_need_website_img',
  'type'    => 'upload',
  'title'   => 'Need a Website Image',
  'help'    => 'Upload a site logo for your branding.',
),



  
)
);










CSFramework::instance( $settings, $options );
