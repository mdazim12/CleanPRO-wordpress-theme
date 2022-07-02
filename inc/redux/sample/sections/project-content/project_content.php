<?php
/**
 * Redux Framework dimensions config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

                    /*START PROJECTS*/
                    					
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Project Content', 'cleanPRO' ),
		'id'         => 'proj_content',
		'desc'       => esc_html__( ' This section is only for Project Content', 'cleanPro' ) ,
		'subsection' => true,
		'fields'     => array(
            array(
				'id'             => 'proj_background',
				'type'           => 'media',
				'title'          => esc_html__( 'Project Background', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Select your background Images', 'cleanPRO' ),
				'desc'           => esc_html__( 'Upload your testimonail background', 'cleanPRO' ),
				'default'  => array(
					'url'=> get_template_directory_uri().'/assest/img/about.jpg',
				),
			),
			array(
				'id'             => 'proj_mini_title',
				'type'           => 'text',
				'title'          => esc_html__( 'Project Mini Title', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input Your project mini title', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your project mini title', 'cleanPRO' ),
				'default'        =>'Our Project',
			),
			array(
				'id'             => 'proj_title',
				'type'           => 'text',
				'title'          => esc_html__( 'Project Main title', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your project title', 'cleanPRO' ),
				'default'        =>'Visit Our Awesome Cleaning Projects',
			),
            array(
				'id'             => 'proj_des',
				'type'           => 'editor',
				'title'          => esc_html__( 'Project Description', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your description', 'cleanPRO' ),
				'default'        =>'Visit Our Awesome Cleaning Projects',
			),
		),
	)
);
                                /*END PROJECTS*/
                    

 
                                
                       /*START CONTACT*/
                    					
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Contact Content', 'cleanPRO' ),
		'id'         => 'con_content',
		'desc'       => esc_html__( ' This section is only for Contact Page', 'cleanPro' ) ,
		'subsection' => true,
		'fields'     => array(
			array(
				'id'             => 'con_mini_title',
				'type'           => 'text',
				'title'          => esc_html__( 'Contact Mini Title', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input Your contact mini title', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your contact mini title', 'cleanPRO' ),
				'default'        =>'contact us',
			),
			array(
				'id'             => 'con_title',
				'type'           => 'text',
				'title'          => esc_html__( 'Contact Main title', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your project title', 'cleanPRO' ),
				'default'        =>'Contact Us For Cleaning Services',
			),
            array(
				'id'             => 'con_des',
				'type'           => 'editor',
				'title'          => esc_html__( 'Contact Description', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your  description', 'cleanPRO' ),
				'default'        =>'Contact Us For Cleaning Services',
			),
            ),
	)
);
                                /*END CONTACT*/




                                /*START 404 PAGES*/

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( '404 pages Content', 'cleanPRO' ),
		'id'         => '404_content',
		'desc'       => esc_html__( ' This section is only for 404 Pages', 'cleanPro' ) ,
		'subsection' => true,
		'fields'     => array(
			array(
				'id'             => '404_title',
				'type'           => 'text',
				'title'          => esc_html__( '404 page title', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your 404 title', 'cleanPRO' ),
				'default'        =>'Contact Us For Cleaning Services',
			),
            array(
				'id'             => '404_des',
				'type'           => 'editor',
				'title'          => esc_html__( '404 Description', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your  description', 'cleanPRO' ),
				'default'        =>'Contact Us For Cleaning Services',
			),
            array(
				'id'             => '404_img',
				'type'           => 'media',
				'title'          => esc_html__( '404 Images', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Select your background Images', 'cleanPRO' ),
				'desc'           => esc_html__( 'Upload your 404 Images', 'cleanPRO' ),
				'default'  => array(
					'url'=> get_template_directory_uri().'/assest/img/404.png',
				),
			),
		),
	)
);
                        /*END 404 PAGES*/







                        /*START BLOG SECTION     */
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Blog pages Content', 'cleanPRO' ),
		'id'         => 'blog_content',
		'desc'       => esc_html__( ' This section is only for Blog Pages', 'cleanPro' ) ,
		'subsection' => true,
		'fields'     => array(
			array(
				'id'             => 'blog_mini_title',
				'type'           => 'text',
				'title'          => esc_html__( 'Blog mini title', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your blog mini title', 'cleanPRO' ),
				'default'        =>'LATEST BLOG',
			),
            array(
				'id'             => 'blog_title',
				'type'           => 'text',
				'title'          => esc_html__( 'Blog page title', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your blog title', 'cleanPRO' ),
				'default'        =>'LATEST BLOG',
			),
            array(
				'id'             => 'blog_des',
				'type'           => 'editor',
				'title'          => esc_html__( 'Blog Description', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your blog description', 'cleanPRO' ),
				'default'        =>'Eirmod kasd duo eos et magna, diam dolore stet sea clita sit ea erat lorem. Ipsum eos ipsum magna lorem stet',
			),
            
		),
	)
);
                               /*START BLOG SECTION     */



							
                        /*START FOOTER SECTION     */
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Footer Content', 'cleanPRO' ),
		'id'         => 'footer_content',
		'desc'       => esc_html__( ' This section is only for footer Pages', 'cleanPro' ) ,
		'subsection' => true,
		'fields'     => array(
			array(
				'id'             => 'foo_mini_title',
				'type'           => 'editor',
				'title'          => esc_html__( 'Footer text', 'cleanPRO' ),
				'default'        =>'All Rights Reserved. Designed by ',
			),
            
            
		),
	)
);
                               /*END FOOTER SECTION     */















                           

                                      
                                    
