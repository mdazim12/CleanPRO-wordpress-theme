<?php
/**
 * Redux Framework dimensions config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;
				
					/*START SERVICES  SECTION*/
  				
					
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Service Content', 'cleanPRO' ),
		'id'         => 'service_content',
		'desc'       => esc_html__( ' This section is only for services section', 'cleanPro' ) ,
		'subsection' => true,
		'fields'     => array(
			array(
				'id'             => 'ser_mini_title',
				'type'           => 'text',
				'title'          => esc_html__( 'Service Mini Title', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input Your service mini title', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your service mini title', 'your-textdomain-here' ),
				'default'        =>'our services',
			),
			array(
				'id'             => 'ser_title',
				'type'           => 'text',
				'title'          => esc_html__( 'Services Main title', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your service title', 'your-textdomain-here' ),
				'default'        =>'Awesome Cleaning Services For You',
			),
			array(
				'id'             => 'ser_des',
				'type'           => 'editor',
				'title'          => esc_html__( 'Services Experince', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input your description here', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your service description .', 'cleanPRO' ),
				'default'        => 'Eos kasd eos dolor vero vero, lorem stet diam rebum. Ipsum amet sed vero dolor sea lorem justo est dolor eos
                Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor mmmm',
			),
            array(
				'id'             => 'ser_btn',
				'type'           => 'text',
				'title'          => esc_html__( 'Services button', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your service button label.', 'your-textdomain-here' ),
				'default'        =>'More',
			),
            array(
				'id'             => 'ser_btn_link',
				'type'           => 'text',
				'title'          => esc_html__( 'Services button link', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your service button URL.', 'your-textdomain-here' ),
				'default'        =>'#',
			),
            array(
				'id'             => 'ser_background',
				'type'           => 'media',
				'title'          => esc_html__( 'Service Background', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Select your background Images', 'cleanPRO' ),
				'desc'           => esc_html__( 'Upload your service background', 'your-textdomain-here' ),
				'default'  => array(
					'url'=> get_template_directory_uri().'/assest/img/about.jpg',
				),
			),
		),
	)
);
					/*END SERVICES SECTION*/





                    /*START TESTIMONIAL*/
                    					
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Testimonial Content', 'cleanPRO' ),
		'id'         => 'testi_content',
		'desc'       => esc_html__( ' This section is only for Testimonialsection', 'cleanPro' ) ,
		'subsection' => true,
		'fields'     => array(
            array(
				'id'             => 'testi_background',
				'type'           => 'media',
				'title'          => esc_html__( 'Testimonail Background', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Select your background Images', 'cleanPRO' ),
				'desc'           => esc_html__( 'Upload your testimonail background', 'your-textdomain-here' ),
				'default'  => array(
					'url'=> get_template_directory_uri().'/assest/img/about.jpg',
				),
			),
			array(
				'id'             => 'testi_mini_title',
				'type'           => 'text',
				'title'          => esc_html__( 'Testimonial Mini Title', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input Your testimonail mini title', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your testimonail mini title', 'your-textdomain-here' ),
				'default'        =>'testimonial',
			),
			array(
				'id'             => 'testi_title',
				'type'           => 'text',
				'title'          => esc_html__( 'Testimonail Main title', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your testimaonail title', 'your-textdomain-here' ),
				'default'        =>'What Our Clients Say',
			),
           

            array(
				'id'             => 'testi_images',
				'type'           => 'media',
				'title'          => esc_html__( 'Testimonail Images', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Select your  Images', 'cleanPRO' ),
				'desc'           => esc_html__( 'Upload your imahes ', 'your-textdomain-here' ),
				'default'  => array(
					'url'=> get_template_directory_uri().'/assest/img/about.jpg',
				),
			),
		),
	)
);

                    
                 
                                    
