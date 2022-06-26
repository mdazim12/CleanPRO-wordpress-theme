<?php
/**
 * Redux Framework dimensions config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;
/*START ABOUT SECTION*/
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'About Content', 'cleanPRO' ),
		'id'         => 'about_content',
		'desc'       => esc_html__( ' This section is only for about page', 'cleanPro' ) ,
		'subsection' => true,
		'fields'     => array(
			array(
				'id'             => 'years_expe',
				'type'           => 'text',
				'title'          => esc_html__( 'Years of Experince', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input Your expernice year', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your expernice year', 'your-textdomain-here' ),
				'default'        =>'5',
			),
			array(
				'id'             => 'exper_title',
				'type'           => 'text',
				'title'          => esc_html__( 'Experince Title', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input Your expernice title', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your expernice tile', 'your-textdomain-here' ),
				'default'        =>'Years Experience',
			),
			array(
				'id'             => 'expe_background',
				'type'           => 'media',
				'title'          => esc_html__( 'Experince Background', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Select your background Images', 'cleanPRO' ),
				'desc'           => esc_html__( 'Upload your expernice background', 'your-textdomain-here' ),
				'default'  => array(
					'url'=> get_template_directory_uri().'/assest/img/about.jpg',
				),
			),




			array(
				'id'             => 'about_mini_title',
				'type'           => 'text',
				'title'          => esc_html__( 'About Mini Title', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input Your about mini section title', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your about section mini title', 'your-textdomain-here' ),
				'default'        =>'LEARN ABOUT UsS',
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
				'type'           => 'text',
				'title'          => esc_html__( 'About vedio link', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input your button URL', 'cleanPRO' ),
				'desc'           => esc_html__( 'TThis felid work as a vedio link .', 'cleanPRO' ),
				'default'        => 'https.www.fiverr.com/azim2508',
			),

		),
	)
);
 /*END ABOUT SECTION*/

					/*START EXPERINCE SECTION*/
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Experince Content', 'cleanPRO' ),
		'id'         => 'experince_content',
		'desc'       => esc_html__( ' This section is only for Experince section', 'cleanPro' ) ,
		'subsection' => true,
		'fields'     => array(
			array(
				'id'             => 'experince_mini_title',
				'type'           => 'text',
				'title'          => esc_html__( 'Experince Mini Title', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input Your expernice mini title', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your expernice mini title', 'your-textdomain-here' ),
				'default'        =>'WHY CHOOSE US',
			),
			array(
				'id'             => 'experince_title',
				'type'           => 'text',
				'title'          => esc_html__( 'Experince Main  expernice title', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your expernice title', 'your-textdomain-here' ),
				'default'        =>'25 Years Experience In Cleaning Industry',
			),
			array(
				'id'             => 'experince_des',
				'type'           => 'editor',
				'title'          => esc_html__( 'About Experince', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input your description here', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your experince description .', 'cleanPRO' ),
				'default'        => 'Eos kasd eos dolor vero vero, lorem stet diam rebum. Ipsum amet sed vero dolor sea lorem justo est dolor eos
                Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor mmmm',
			),
			array(
				'id'             => 'experince_cleaner',
				'type'           => 'text',
				'title'          => esc_html__( 'Number of Cleaners', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input Your total clarner', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your total clarner number', 'your-textdomain-here' ),
				'default'        =>'223',
			),
			array(
				'id'             => 'experince_cleaner_title',
				'type'           => 'text',
				'title'          => esc_html__( 'Cleaner Title', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input Your clarner Title', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your clarner title', 'your-textdomain-here' ),
				'default'        =>'Our Cleaners',
			),
			array(
				'id'             => 'experince_clients',
				'type'           => 'text',
				'title'          => esc_html__( 'Number of Clients', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input Your total clients', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your total cleints number', 'your-textdomain-here' ),
				'default'        =>'10500',
			),
			array(
				'id'             => 'experince_clients_title',
				'type'           => 'text',
				'title'          => esc_html__( 'Clients Title', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input Your clients Title', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your Clients title', 'your-textdomain-here' ),
				'default'        =>'Happy Clients',
			),
			array(
				'id'             => 'experince_projects',
				'type'           => 'text',
				'title'          => esc_html__( 'Number of Projects', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input Your total projects', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your total projects number', 'your-textdomain-here' ),
				'default'        =>'2500',
			),
			array(
				'id'             => 'experince_project_title',
				'type'           => 'text',
				'title'          => esc_html__( 'Projct Title', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input Your Projcts Title', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your projects title', 'your-textdomain-here' ),
				'default'        =>'Projects Done',
			),
			array(
				'id'             => 'experince_background',
				'type'           => 'media',
				'title'          => esc_html__( 'Experince Background', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Select your background Images', 'cleanPRO' ),
				'desc'           => esc_html__( 'Upload your expernice background', 'your-textdomain-here' ),
				'default'  => array(
					'url'=> get_template_directory_uri().'/assest/img/about.jpg',
				),
			),
		),
	)
);
					/*END EXPERINCE SECTION*/






					
					/*START TEAM SECTION*/
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Team Content', 'cleanPRO' ),
		'id'         => 'team_content',
		'desc'       => esc_html__( ' This section is only for Team section', 'cleanPro' ) ,
		'subsection' => true,
		'fields'     => array(
			array(
				'id'             => 'team_mini_title',
				'type'           => 'text',
				'title'          => esc_html__( 'Team Mini Title', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input Your Team mini title', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your team mini title', 'your-textdomain-here' ),
				'default'        =>'MEET OUR TEAM',
			),
			array(
				'id'             => 'team_title',
				'type'           => 'text',
				'title'          => esc_html__( 'Team Main title', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your team title', 'your-textdomain-here' ),
				'default'        =>'Meet Our Highly Experienced Cleaners',
			),
			array(
				'id'             => 'team_des',
				'type'           => 'editor',
				'title'          => esc_html__( 'Team Experince', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input your description here', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your team description .', 'cleanPRO' ),
				'default'        => 'Eos kasd eos dolor vero vero, lorem stet diam rebum. Ipsum amet sed vero dolor sea lorem justo est dolor eos
                Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor mmmm',
			),
		),
	)
);
					/*END TEAM SECTION*/
