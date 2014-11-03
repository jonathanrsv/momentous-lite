<?php
/**
 * Register Header Content section, settings and controls for Theme Customizer
 *
 */

// Add Theme Colors section to Customizer
add_action( 'customize_register', 'momentous_customize_register_general_settings' );

function momentous_customize_register_general_settings( $wp_customize ) {

	// Add Section for General Settings
	$wp_customize->add_section( 'momentous_section_general', array(
        'title'    => __( 'General Settings', 'momentous' ),
        'priority' => 10,
		'panel' => 'momentous_options_panel' 
		)
	);
	
	// Add Settings and Controls for Layout
	$wp_customize->add_setting( 'momentous_theme_options[layout]', array(
        'default'           => 'right-sidebar',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'momentous_sanitize_layout'
		)
	);
    $wp_customize->add_control( 'momentous_control_layout', array(
        'label'    => __( 'Theme Layout', 'momentous'),
        'section'  => 'momentous_section_general',
        'settings' => 'momentous_theme_options[layout]',
        'type'     => 'radio',
		'priority' => 1,
        'choices'  => array(
            'left-sidebar' => __( 'Left Sidebar', 'momentous'),
            'right-sidebar' => __( 'Right Sidebar', 'momentous')
			)
		)
	);
	
	// Add Title for latest posts setting
	$wp_customize->add_setting( 'momentous_theme_options[latest_posts_title]', array(
        'default'           => __( 'Latest Posts', 'momentous' ),
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_html'
		)
	);
    $wp_customize->add_control( 'momentous_control_latest_posts_title', array(
        'label'    => __( 'Title above Latest Posts', 'momentous' ),
        'section'  => 'momentous_section_general',
        'settings' => 'momentous_theme_options[latest_posts_title]',
        'type'     => 'text',
		'priority' => 2
		)
	);
	
	// Add Footer Settings
	$wp_customize->add_setting( 'momentous_theme_options[footer_text]', array(
        'default'           => '',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'momentous_sanitize_footer_text'
		)
	);
    $wp_customize->add_control( 'momentous_control_footer_text', array(
        'label'    => __( 'Footer Text', 'momentous' ),
        'section'  => 'momentous_section_general',
        'settings' => 'momentous_theme_options[footer_text]',
        'type'     => 'textarea',
		'priority' => 3
		)
	);
	$wp_customize->add_setting( 'momentous_theme_options[credit_link]', array(
        'default'           => true,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'momentous_sanitize_checkbox'
		)
	);
    $wp_customize->add_control( 'momentous_control_credit_link', array(
        'label'    => __( 'Display Credit Link to ThemeZee on footer line.', 'momentous' ),
        'section'  => 'momentous_section_general',
        'settings' => 'momentous_theme_options[credit_link]',
        'type'     => 'checkbox',
		'priority' => 4
		)
	);
}

?>