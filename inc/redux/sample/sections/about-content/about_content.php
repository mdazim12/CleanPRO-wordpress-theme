<?php
/**
 * Redux Framework dimensions config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'About Content', 'cleanPRO' ),
		'id'         => 'about_content',
		'desc'       => esc_html__( ' This section is only for about page', 'cleanPro' ) ,
		'subsection' => true,
		'fields'     => array(
			array(
				'id'             => 'about_mini_title',
				'type'           => 'text',
				'title'          => esc_html__( 'About Mini Title', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input Your about mini section title', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your about section mini title', 'your-textdomain-here' ),
				'default'        =>'LEARN ABOUT US',
			),
			array(
				'id'             => 'about_title',
				'type'           => 'text',
				'title'          => esc_html__( 'About Title', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input your title here', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your about title here .', 'cleanPRO' ),
				'default'        => 'We Provide The Best Cleaning Services',
			),
            array(
				'id'             => 'about_des',
				'type'           => 'editor',
				'title'          => esc_html__( 'About Description', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input your description here', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your about description .', 'cleanPRO' ),
				'default'        => 'Eos kasd eos dolor vero vero, lorem stet diam rebum. Ipsum amet sed vero dolor sea lorem justo est dolor eos
                Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor mmmm',
			),
            array(
				'id'             => 'about_btn',
				'type'           => 'text',
				'title'          => esc_html__( 'About Button label', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input your button name', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your button name .', 'cleanPRO' ),
				'default'        => 'Learn More',
			),
            array(
				'id'             => 'about_btn_link',
				'type'           => 'text',
				'title'          => esc_html__( 'About Button URL', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input your button URL', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your button URL .', 'cleanPRO' ),
				'default'        => 'https.www.fiverr.com/azim2508',
			),
            array(
				'id'             => 'about_vedio_link',
				'type'           => 'media',
                'url'            => true,
				'title'          => esc_html__( 'About background Images', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Select your iamges', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be as a background .', 'cleanPRO' ),
                'default'  => array(
                    'url'=>'http://localhost/restaurant/wp-content/uploads/2022/06/about.jpg'
                ),
				
			),
		),
	)
);
