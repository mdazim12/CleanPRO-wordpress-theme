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
		),
	)
);
