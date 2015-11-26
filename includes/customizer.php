<?php
namespace Mastering_Customizer\Customizer;

function example_1( $wp_customize ) {

	$wp_customize->add_section( 'wordcamp_sp_heading', array(
			'title'	=> esc_html__( 'Headline', 'wordcamp_sp' ),
			'capability' => 'edit_theme_options',
			'description' => esc_html__( 'Your description here...', 'wordcamp_sp' ),
			'prioriry' => 120
		)
	);

	$wp_customize->add_setting( 'wordcamp_sp_headline', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'postMessage'
		)
	);

	$wp_customize->add_control( 'wordcamp_sp_headline_control', array(
			'label' => esc_html__( 'Headline ', 'wordcamp_sp' ),
			'section' => 'wordcamp_sp_heading',
			'settings' => 'wordcamp_sp_headline',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting( 'wordcamp_sp_heading_text', array(
			'type'          => 'theme_mod', //
			'capability'    => 'edit_theme_options',
			'transport'     => 'postMessage'
		)
	);

	$wp_customize->add_control( 'wordcamp_sp_heading_text_control', array(
			'label'         => esc_html__( 'Heading Text: ', 'wordcamp_sp' ),
			'section'       => 'wordcamp_sp_heading',
			'type'          => 'text',
			'settings'      => 'wordcamp_sp_heading_text'
		)
	);

	$wp_customize->add_setting( 'wordcamp_sp_button_text', array(
			'type'          => 'theme_mod', //
			'capability'    => 'edit_theme_options',
			'transport'     => 'postMessage'
		)
	);

	$wp_customize->add_control( 'wordcamp_sp_button_text_control', array(
			'label'         => esc_html__( 'Button Text: ', 'wordcamp_sp' ),
			'section'       => 'wordcamp_sp_heading',
			'type'          => 'text',
			'settings'      => 'wordcamp_sp_button_text'
		)
	);

	$wp_customize->add_setting( 'wordcamp_sp_button_color', array(
			'type'          => 'theme_mod', //
			'capability'    => 'edit_theme_options',
			'transport'     => 'postMessage',
			'default'       => '#5cb85c'
		)
	);

	$wp_customize->add_control(
		new \WP_Customize_Color_Control(
			$wp_customize,
			'wordcamp_sp_button_color',
			array(
				'settings'		=> 'wordcamp_sp_button_color',
				'section'		=> 'wordcamp_sp_heading',
				'label'			=> esc_html__( 'Button Color', 'wordcamp_sp-slug' )
			)
		)
	);


}

add_action( 'customize_register' , __NAMESPACE__ .  '\\example_1' );

function live_preview() {
	wp_enqueue_script(
		'mastering-customizer-customizer-preview',
		MASTERING_CUSTOMIZER_TEMPLATE_URL . '/assets/js/customizer.js',
		array( 'customize-preview' ),
		'10',
		true
	);
}
add_action( 'customize_preview_init', __NAMESPACE__ . '\\live_preview');

function example_2( $wp_customize ) {

	$wp_customize->add_panel( 'wordcamp_sp_footer_panel', array(
			'priority'      => 130,
			'capability'    => 'edit_theme_options',
			'title'         => esc_html__( 'Footer Options', 'wordcamp_sp' ),
			'description'   => esc_html__( 'General Footer Options', 'wordcamp_sp' )
		)
	);

	$wp_customize->add_section( 'wordcamp_sp_footer_2', array(
			'title'	=> esc_html__( 'Footer', 'wordcamp_sp' ),
			'capability' => 'edit_theme_options',
			'description' => esc_html__( 'Your description here...', 'wordcamp_sp' ),
			'panel' => 'wordcamp_sp_footer_panel'
		)
	);

	$wp_customize->add_setting( 'wordcamp_sp_copyright_2', array(
			'type' => 'theme_mod',
		)
	);

	$wp_customize->add_control( 'wordcamp_sp_copyright_control_2', array(
			'label' => esc_html__( 'Copyright text', 'wordcamp_sp' ),
			'section' => 'wordcamp_sp_footer_2',
			'settings' => 'wordcamp_sp_copyright_2',
			'type' => 'text'
		)
	);
}

//add_action( 'customize_register' , __NAMESPACE__ .  '\\example_2' );


