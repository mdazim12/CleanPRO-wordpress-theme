<?php

   function theme_support(){
      add_theme_support('title-tag');
      add_theme_support( 'post-thumbnails' ); 
      add_image_size( 'blog-thumb', 600, 400 );
      add_image_size( 'team-thumb', 250, 250, true );
   }
   add_action( 'after_setup_theme','theme_support' );

 function clean_register_style()
  {
     //// all css file
        wp_enqueue_style( 'owlcarousel',get_template_directory_uri().'/assets/lib/owlcarousel/assets/owl.carousel.min.css' );                                                                    
        wp_enqueue_style( 'lightbox',get_template_directory_uri().'/assets/lib/lightbox/css/lightbox.min.css' );                                                                    
        wp_enqueue_style( 'main_style',get_template_directory_uri().'/assets/css/main_style.css' );                                                                    
        wp_enqueue_style( 'style-name', get_stylesheet_uri() );
       

     /// all js file
     wp_enqueue_script('jquery');

     wp_enqueue_script( 'boostrap',get_template_directory_uri().'/assets/js/boostrap_main.js', 'jquery','v1.0',true );

     wp_enqueue_script( 'easing',get_template_directory_uri().'/assets/lib/easing/easing.min.js', 'jquery','v1.0',true );

     wp_enqueue_script( 'waypoints',get_template_directory_uri().'/assets/lib/waypoints/waypoints.min.js', 'jquery','v1.0',true );

     wp_enqueue_script( 'counterup',get_template_directory_uri().'/assets/lib/counterup/counterup.min.js', 'jquery','v1.0',true );

     wp_enqueue_script( 'owlcarousel_js',get_template_directory_uri().'/assets/lib/owlcarousel/owl.carousel.min.js', 'jquery','v1.0',true );

     wp_enqueue_script( 'isotope_js',get_template_directory_uri().'/assets/lib/isotope/isotope.pkgd.min.js', 'jquery','v1.0',true );

     wp_enqueue_script( 'lightbox_js',get_template_directory_uri().'/assets/lib/lightbox/js/lightbox.min.js', 'jquery','v1.0',true );

     wp_enqueue_script( 'mail_js',get_template_directory_uri().'/assets/mail/jqBootstrapValidation.min.js', 'jquery','v1.0',true );

     wp_enqueue_script( 'mail_js',get_template_directory_uri().'/assets/mail/contact.js', 'jquery','v1.0',true );

     wp_enqueue_script( 'main_js',get_template_directory_uri().'/assets/js/main.js', 'jquery','v1.0',true );
   }
add_action('wp_enqueue_scripts','clean_register_style' );

register_nav_menus(array(
    'primary_menu' => 'Primary menu',
    'footer_menu'  => 'Footer_menu'
));


if ( ! file_exists( get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php' ) ) {
   // File does not exist... return an error.
   return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
   // File exists... require it.
   require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}

function pro_clean_slider(){
   register_post_type('pro_clean_slider',array(
      'labels'             =>array(
         'menu_name'       =>'Slider',
         'name'            =>'Slider',
         'add_new'         =>'Add New',
         'all_items'       =>"Slider",
         'add_new_items'   =>'Add New',
      ),
      'public'             =>true,
      'menu_icon'          =>'dashicons-images-alt2',
      'supports'           =>array('thumbnail','title','custom-fields'),
   ));
}
add_action( 'init','pro_clean_slider' );


function pro_services(){
   register_post_type('pro_services',array(
      'labels'             =>array(
         'menu_name'       =>'Services',
         'name'            =>'Services',
         'add_new'         =>'Add New',
         'all_items'       =>"Services",
         'add_new_items'   =>'Add New',
      ),
      'public'             =>true,
      'menu_icon'          =>'dashicons-list-view',
      'supports'           =>array('thumbnail','title','custom-fields'),
   ));
}
add_action( 'init','pro_services' );

   
   

   



   function recent_project(){
      register_post_type('recent_project',array(
         'labels'    =>array(
            'menu_name'      =>'Recent Project',
            'name'           =>'Recent Project',
            'add_new'        =>'Add New',
            'all_items'      =>'Projects',
            'add_new_items'  =>'Add New',
         ),
         'public'            =>true,
         'menu_icon'         =>'dashicons-portfolio',
         'supports'          =>array('thumbnail','custom-fields'),
      ));
   }
   add_action( 'init','recent_project' );





   function custom_post(){
      register_post_type( 'all_cleaner', array(
         'labels' => array(
            'menu_name'    =>'All Cleraner',
            'name'         =>'All Cleraner',
            'add_new'      =>'Add New',
            'all_items'    =>'All Cleraner List ',
            'add_new_items'=>'Add New'
         ),
           'public'         =>true,
           'menu_icon'      =>'dashicons-groups',
           'supports'       =>array('thumbnail','custom-fields','title'),
           
      ) );
   }
   add_action( 'init','custom_post' );


   function pro_testi(){
      register_post_type('pro_testi',array(
         'labels'  =>array(
            'menu_name'       =>'Testimonial',
            'name'            =>'Testimonai',
            'add_new'         =>'Add New',
            'all_items'       =>'Testimonaill',
            'all_new_items'   =>'Add New',
         ),
         'public'             =>true,
         'menu_icon'          =>'dashicons-testimonial',
         'supports'           =>array('thumbnail','custom-fields','title','editor'),
      ));
   }
   add_action( 'init','pro_testi' );


   



   include_once('inc/cmb2_custom_field.php');
   include_once('inc/redux/redux-framework.php');
   include_once('inc/redux/sample/config.php');
   include_once('sidebar-primary.php');
 
  
















































