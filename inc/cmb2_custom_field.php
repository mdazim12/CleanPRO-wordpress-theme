<?php

require_once __DIR__.'/CMB2/init.php';	

    function custom_fieled(){
        $cleaner_metabox = new_cmb2_box( array(
            'id'            => 'cleaner_metabox',
            'title'         => esc_html__( 'Cleaner Metabox', 'cleanPRO' ),
            'object_types'  => 'all_cleaner', // Post type
            'context'    => 'normal',
            'priority'   => 'high',
            'show_names' => true, // Show field names on the left
            
        ) );
    
        $cleaner_metabox->add_field( array(
            'name'       => esc_html__( 'Cleaner Designation', 'cmb2' ),
            'desc'       => esc_html__( 'Input Designation', 'cleanPRO' ),
            'id'         => 'yourprefix_demo_text',
            'type'       => 'text',
            'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
           
        ) );

        $cleaner_metabox->add_field( array(
            'name'       => esc_html__( 'Cleaner Facebook', 'cmb2' ),
            'desc'       => esc_html__( 'Input Iink', 'cleanPRO' ),
            'id'         => 'cleaner_fb',
            'type'       => 'text',
            'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
           
        ) );

        $cleaner_metabox->add_field( array(
            'name'       => esc_html__( 'Cleaner Twitter', 'cmb2' ),
            'desc'       => esc_html__( 'Input link here', 'cleanPRO' ),
            'id'         => 'cleaner_twitter',
            'type'       => 'text',
            'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
           
        ) );
        $cleaner_metabox->add_field( array(
            'name'       => esc_html__( 'Cleaner Linkdin', 'cmb2' ),
            'desc'       => esc_html__( 'Input link here', 'cleanPRO' ),
            'id'         => 'cleaner_linkdin',
            'type'       => 'text',
            'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
           
        ) );

       
    }
    add_action( 'cmb2_admin_init','custom_fieled' );




   
/**
 * Define the metabox and field configurations.
 */
function client_professon() {

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'test_metabox',
		'title'         => __( 'Testimonail Meta Box', 'cleanPRO' ),
		'object_types'  => 'pro_testi', // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		
	) );

	// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Client Profession', 'cmb2' ),
		'desc'       => __( 'Input profession here ', 'cleanPRO' ),
		'id'         => 'client_profeeson',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
		
	) );

}
add_action( 'cmb2_admin_init', 'client_professon' );



//images meta box




/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

	/**
	 * Initiate the metabox
	 */
	$slider_meta_box = new_cmb2_box( array(
		'id'            => 'slider_meta_box',
		'title'         => __( 'Slider Meta Box', 'cleanPRO' ),
		'object_types'  => 'pro_clean_slider', // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );

	// Regular text field
	$slider_meta_box->add_field( array(
		'name'       => __( 'Slider Short texr', 'cleanPRO' ),
		'desc'       => __( 'Input here', 'cleanPRO' ),
		'id'         => 'slider_short_text',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', 
	) );

    $slider_meta_box->add_field( array(
		'name'       => __( 'Slider Main Heading', 'cleanPRO' ),
		'desc'       => __( 'Input here', 'cleanPRO' ),
		'id'         => 'slider_main_text',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', 
	) );

    $slider_meta_box->add_field( array(
		'name'       => __( 'Slider Button', 'cleanPRO' ),
		'desc'       => __( 'Input button here', 'cleanPRO' ),
		'id'         => 'slider_button',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', 
	) );

    $slider_meta_box->add_field( array(
		'name'       => __( 'Slider Button Link', 'cleanPRO' ),
		'desc'       => __( 'Input link here', 'cleanPRO' ),
		'id'         => 'slider_button_link',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', 
	) );

    $slider_meta_box->add_field( array(
        'name'    => 'Test File',
        'desc'    => 'Upload an image or enter an URL.',
        'id'      => 'wiki_test_image',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => true, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Add slider Images' // Change upload button text. Default: "Add or Upload File"
        ),
        // query_args are passed to wp.media's library query.
        'query_args' => array(
            'type' => 'application/pdf', // Make library only display PDFs.
            // Or only allow gif, jpg, or png images
            // 'type' => array(
            // 	'image/gif',
            // 	'image/jpeg',
            // 	'image/png',
            // ),
        ),
        'preview_size' => 'large', // Image size to use when previewing in the admin.
    ) );

	
	

}
add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );





