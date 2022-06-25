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
		'title'      => esc_html__( 'Home Content', 'cleanPRO' ),
		'id'         => 'home_content',
		'desc'       => esc_html__( ' This section is only for home adress content', 'cleanPro' ) ,
		'subsection' => true,
		'fields'     => array(
			array(
				'id'             => 'home_adress',
				'type'           => 'text',
				'title'          => esc_html__( 'Adress Title', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input Your Adress title here', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your adress title', 'your-textdomain-here' ),
				'default'        =>'Our Office',
			),
			array(
				'id'             => 'home_aadress_value',
				'type'           => 'text',
				'title'          => esc_html__( 'Adress', 'cleanPRO' ),
				'subtitle'       => esc_html__( 'Input your full adress', 'cleanPRO' ),
				'desc'           => esc_html__( 'This felids will be show your adress title .', 'cleanPRO' ),
				'default'        => '123 Street, New York, USA',
			),
			array(
				'id'             => 'email_title',
				'type'           => 'text',
				'title'          => esc_html__( 'Email Title', 'cleanPRO' ),
				'desc'           => esc_html__( 'Input your Email Title .', 'cleanPRO' ),
				'default'        => 'Email Us',
			),
			array(
				'id'             => 'email_value',
				'type'           => 'text',
				'title'          => esc_html__( 'Email Adress', 'cleanPRO' ),
				'desc'           => esc_html__( 'Put your Email here .', 'cleanPRO' ),
				'default'        => 'azimuddin807@gmail.com',
			),
			array(
				'id'             => 'call_title',
				'type'           => 'text',
				'title'          => esc_html__( 'Call Title', 'cleanPRO' ),
				'desc'           => esc_html__( 'Input your Email title here .', 'cleanPRO' ),
				'default'        => 'Call Us',
			),
			array(
				'id'             => 'call_number',
				'type'           => 'text',
				'title'          => esc_html__( 'Input your Number', 'cleanPRO' ),
				'desc'           => esc_html__( 'Input your Number here .', 'cleanPRO' ),
				'default'        => '+8005452455',
			),
			array(
				'id'             => 'fb_link',
				'type'           => 'text',
				'title'          => esc_html__( ' Facebook ', 'cleanPRO' ),
				'desc'           => esc_html__( 'Input your facebook link here .', 'cleanPRO' ),
				'default'        => '#',
			),
			array(
				'id'             => 'tw_link',
				'type'           => 'text',
				'title'          => esc_html__( ' Twitter ', 'cleanPRO' ),
				'desc'           => esc_html__( 'Input your twitter link here .', 'cleanPRO' ),
				'default'        => '#',
			),
			array(
				'id'             => 'linksin_link',
				'type'           => 'text',
				'title'          => esc_html__( ' Linkdin ', 'cleanPRO' ),
				'desc'           => esc_html__( 'Input your linkdin link here .', 'cleanPRO' ),
				'default'        => '#',
			),
			array(
				'id'             => 'insta_link',
				'type'           => 'text',
				'title'          => esc_html__( ' Instagram ', 'cleanPRO' ),
				'desc'           => esc_html__( 'Input your instragram link here .', 'cleanPRO' ),
				'default'        => '#',
			),
			array(
				'id'             => 'youube_link',
				'type'           => 'text',
				'title'          => esc_html__( ' Youtube ', 'cleanPRO' ),
				'desc'           => esc_html__( 'Input your youtube link here .', 'cleanPRO' ),
				'default'        => '#',
			),
		),
	)
);
