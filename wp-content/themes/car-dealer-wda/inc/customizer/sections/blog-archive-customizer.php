<?php 
	$wp_customize->add_panel( 'wpdevart_car_dealer_wda_blog_archive_search_panel', 
	array(
		'title'	=> esc_html__('Blog/Archive/Search','car-dealer-wda'),			
		'description'	=> esc_html__('Blog/Archive/Search pages settings','car-dealer-wda'),		
		'priority'		=> 27
	) 
	);

	##################------ Blog/Archive Page ------##################

	$wp_customize->add_section('wpdevart_car_dealer_wda_blog_section',array(
		'title'	=> esc_html__('Blog/Archive Page','car-dealer-wda'),
		'priority'		=> null,
		'panel'         => 'wpdevart_car_dealer_wda_blog_archive_search_panel'
	));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_archive_banner_width',array(
		'default'	=> esc_html('narrow'),
		'sanitize_callback'	=> 'wpdevart_car_dealer_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_dealer_wda_archive_banner_width',array(
			'label'	=> esc_html__('Blog/Archive banner width','car-dealer-wda'),
			'section'	=> 'wpdevart_car_dealer_wda_blog_section',
			'setting'	=> 'wpdevart_car_dealer_wda_archive_banner_width',
			'type' => 'select',
			'choices' => array(
				'narrow' => esc_html__('Narrow','car-dealer-wda'),
				'wide' => esc_html__('Wide','car-dealer-wda')
				)
	));	
	$wp_customize->add_setting('wpdevart_car_dealer_wda_archive_banner_title_alignment',array(
		'default'	=> esc_html('center'),
		'sanitize_callback'	=> 'wpdevart_car_dealer_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_dealer_wda_archive_banner_title_alignment',array(
			'label'	=> esc_html__('Blog/Archive title alignment','car-dealer-wda'),
			'section'	=> 'wpdevart_car_dealer_wda_blog_section',
			'setting'	=> 'wpdevart_car_dealer_wda_archive_banner_title_alignment',
			'type' => 'select',
			'choices' => array(
				'left' => esc_html__('Left','car-dealer-wda'),
				'center' => esc_html__('Center','car-dealer-wda'),
				'right' => esc_html__('Right','car-dealer-wda')
				)
	));	
	$wp_customize->add_setting('wpdevart_car_dealer_wda_archive_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_archive_banner_bg_color', esc_html('#0a090a')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_archive_banner_bg_color', array(
        'label' => esc_html__('Blog/Archive banner background color','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_blog_section',
        'settings' => 'wpdevart_car_dealer_wda_archive_banner_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_archive_banner_bg_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_car_dealer_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_dealer_wda_archive_banner_bg_gradient_type',array(
			'label'	=> esc_html__('Archive pages banner gradient type','car-dealer-wda'),
			'section'	=> 'wpdevart_car_dealer_wda_blog_section',
			'setting'	=> 'wpdevart_car_dealer_wda_archive_banner_bg_gradient_type',
			'type' => 'select',
			'choices' => array(
				'to right' => esc_html__('To right','car-dealer-wda'),
				'to left' => esc_html__('To left','car-dealer-wda'),
				'to bottom' => esc_html__('To bottom','car-dealer-wda'),
				'to top' => esc_html__('To top','car-dealer-wda'),
				'to bottom right' => esc_html__('To bottom right','car-dealer-wda'),
				'to bottom left' => esc_html__('To bottom left','car-dealer-wda'),
				'to top right' => esc_html__('To top right','car-dealer-wda'),
				'to top left' => esc_html__('To top left','car-dealer-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_car_dealer_wda_archive_banner_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_archive_banner_bg_gradient_color', esc_html('#0a090a')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_archive_banner_bg_gradient_color', array(
        'label' => esc_html__('Archive pages banner gradient color','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_blog_section',
        'settings' => 'wpdevart_car_dealer_wda_archive_banner_bg_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_archive_banner_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_archive_banner_title_color', esc_html('#f5f5f5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_archive_banner_title_color', array(
        'label' => esc_html__('Blog/Archive title color','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_blog_section',
        'settings' => 'wpdevart_car_dealer_wda_archive_banner_title_color'
    )));
    $wp_customize->add_setting( 'wpdevart_car_dealer_wda_blog_archive_page_layout',
	array(
		'default' => esc_html('sidebarright'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_car_dealer_wda_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_car_dealer_wda_blog_archive_page_layout',
	array(
		'label' => esc_html__( 'Blog/Archive Page Layout', 'car-dealer-wda' ),
		'description' => esc_html__( 'Choose the blog/archive page layout.', 'car-dealer-wda' ),
		'section' => 'wpdevart_car_dealer_wda_blog_section',
		'choices' => array(
		'sidebarleft' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-left.png',
			'name' => esc_html__( 'Left Sidebar', 'car-dealer-wda' )
		),
		'sidebarnone' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-none.png',
			'name' => esc_html__( 'No Sidebar', 'car-dealer-wda' )
		),
		'sidebarright' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-right.png',
			'name' => esc_html__( 'Right Sidebar', 'car-dealer-wda' )
		)
		)
	)
	) );

	##################------ Search Page ------##################

	$wp_customize->add_section('wpdevart_car_dealer_wda_search_page_section',array(
		'title'	=> esc_html__('Search Page','car-dealer-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_car_dealer_wda_blog_archive_search_panel'
	));


	$wp_customize->add_setting('wpdevart_car_dealer_wda_search_banner_width',array(
		'default'	=> esc_html('narrow'),
		'sanitize_callback'	=> 'wpdevart_car_dealer_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_dealer_wda_search_banner_width',array(
			'label'	=> esc_html__('Search page banner width','car-dealer-wda'),
			'section'	=> 'wpdevart_car_dealer_wda_search_page_section',
			'setting'	=> 'wpdevart_car_dealer_wda_search_banner_width',
			'type' => 'select',
			'choices' => array(
				'narrow' => esc_html__('Narrow','car-dealer-wda'),
				'wide' => esc_html__('Wide','car-dealer-wda')
				)
	));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_search_banner_title_alignment',array(
		'default'	=> esc_html('center'),
		'sanitize_callback'	=> 'wpdevart_car_dealer_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_dealer_wda_search_banner_title_alignment',array(
			'label'	=> esc_html__('Search page title alignment','car-dealer-wda'),
			'section'	=> 'wpdevart_car_dealer_wda_search_page_section',
			'setting'	=> 'wpdevart_car_dealer_wda_search_banner_title_alignment',
			'type' => 'select',
			'choices' => array(
				'left' => esc_html__('Left','car-dealer-wda'),
				'center' => esc_html__('Center','car-dealer-wda'),
				'right' => esc_html__('Right','car-dealer-wda')
				)
	));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_search_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_search_banner_bg_color', esc_html('#0a090a')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_search_banner_bg_color', array(
		'label' => esc_html__('Search page banner background color','car-dealer-wda'),
		'section' => 'wpdevart_car_dealer_wda_search_page_section',
		'settings' => 'wpdevart_car_dealer_wda_search_banner_bg_color'
	)));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_search_banner_bg_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_car_dealer_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_dealer_wda_search_banner_bg_gradient_type',array(
			'label'	=> esc_html__('Search page banner gradient type','car-dealer-wda'),
			'section'	=> 'wpdevart_car_dealer_wda_search_page_section',
			'setting'	=> 'wpdevart_car_dealer_wda_search_banner_bg_gradient_type',
			'type' => 'select',
			'choices' => array(
				'to right' => esc_html__('To right','car-dealer-wda'),
				'to left' => esc_html__('To left','car-dealer-wda'),
				'to bottom' => esc_html__('To bottom','car-dealer-wda'),
				'to top' => esc_html__('To top','car-dealer-wda'),
				'to bottom right' => esc_html__('To bottom right','car-dealer-wda'),
				'to bottom left' => esc_html__('To bottom left','car-dealer-wda'),
				'to top right' => esc_html__('To top right','car-dealer-wda'),
				'to top left' => esc_html__('To top left','car-dealer-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_car_dealer_wda_search_banner_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_search_banner_bg_gradient_color', esc_html('#0a090a')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_search_banner_bg_gradient_color', array(
        'label' => esc_html__('Search page banner gradient color','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_search_page_section',
        'settings' => 'wpdevart_car_dealer_wda_search_banner_bg_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_search_banner_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_search_banner_title_color', esc_html('#f5f5f5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_search_banner_title_color', array(
		'label' => esc_html__('Search page title color','car-dealer-wda'),
		'section' => 'wpdevart_car_dealer_wda_search_page_section',
		'settings' => 'wpdevart_car_dealer_wda_search_banner_title_color'
	)));	
	$wp_customize->add_setting( 'wpdevart_car_dealer_wda_search_page_layout',
	array(
		'default' => esc_html('sidebarright'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_car_dealer_wda_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_car_dealer_wda_search_page_layout',
	array(
		'label' => esc_html__( 'Search Page Layout', 'car-dealer-wda' ),
		'description' => esc_html__( 'Choose the search page layout.', 'car-dealer-wda' ),
		'section' => 'wpdevart_car_dealer_wda_search_page_section',
		'choices' => array(
		'sidebarleft' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-left.png',
			'name' => esc_html__( 'Left Sidebar', 'car-dealer-wda' )
		),
		'sidebarnone' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-none.png',
			'name' => esc_html__( 'No Sidebar', 'car-dealer-wda' )
		),
		'sidebarright' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-right.png',
			'name' => esc_html__( 'Right Sidebar', 'car-dealer-wda' )
		)
		)
	)
	) );
	$wp_customize->add_setting('wpdevart_car_dealer_wda_search_page_button_style',array(
		'default'	=> esc_html('wpdevart_car_dealer_wda_primary_button_slide primary_btn_slide_right'),
		'sanitize_callback'	=> 'wpdevart_car_dealer_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_dealer_wda_search_page_button_style',array(
			'label'	=> esc_html__('Search button color','car-dealer-wda'),
			'section'	=> 'wpdevart_car_dealer_wda_search_page_section',
			'setting'	=> 'wpdevart_car_dealer_wda_search_page_button_style',
			'type' => 'select',
			'choices' => array(
				'wpdevart_car_dealer_wda_primary_button_slide primary_btn_slide_right' => esc_html__('Custom Primary', 'car-dealer-wda'),
				'wpdevart_car_dealer_wda_secondary_button_slide secondary_btn_slide_right' => esc_html__('Custom Secondary', 'car-dealer-wda'),
				'wpdevart_car_dealer_wda_first_button_slide first_btn_slide_right' => esc_html__('WpDevArt Color', 'car-dealer-wda'),
				'wpdevart_car_dealer_wda_second_button_slide second_btn_slide_right' => esc_html__('Grapefruit Red', 'car-dealer-wda'),
				'wpdevart_car_dealer_wda_third_button_slide third_btn_slide_right' => esc_html__('Blue', 'car-dealer-wda'),
				'wpdevart_car_dealer_wda_fourth_button_slide fourth_btn_slide_right' => esc_html__('Dark', 'car-dealer-wda'),
				'wpdevart_car_dealer_wda_fifth_button_slide fifth_btn_slide_right' => esc_html__('Green', 'car-dealer-wda'),
				'wpdevart_car_dealer_wda_sixth_button_slide sixth_btn_slide_right' => esc_html__('Yellow', 'car-dealer-wda'),
				'wpdevart_car_dealer_wda_seventh_button_slide seventh_btn_slide_right' => esc_html__('Custom Green', 'car-dealer-wda'),
				'wpdevart_car_dealer_wda_eighth_button_slide eighth_btn_slide_right' => esc_html__('White', 'car-dealer-wda'),
				)
	));

	##################------ General ------##################
	
	$wp_customize->add_section('wpdevart_car_dealer_wda_blog_archive_search_general_section',array(
		'title'	=> esc_html__('General','car-dealer-wda'),
		'description'	=> esc_html__('This is the global options page for the Blog/Archive/Search posts lists.','car-dealer-wda'),
		'priority'		=> null,
		'panel'         => 'wpdevart_car_dealer_wda_blog_archive_search_panel'
	));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_blog_settings_posts_list_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_blog_settings_posts_list_bg_color', esc_html('#0a090b')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_blog_settings_posts_list_bg_color', array(
        'label' => esc_html__('Summary/Post/Page block background color','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_car_dealer_wda_blog_settings_posts_list_bg_color'
    )));
	$wp_customize->add_setting( 'wpdevart_car_dealer_wda_blog_archive_display_default_featured_image',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_car_dealer_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_car_dealer_wda_blog_archive_display_default_featured_image',
        array(
        'label' => esc_html__( 'Enable Default Featured Image', 'car-dealer-wda' ),
		'description' => esc_html__( 'Display the default featured image for posts that do not have a selected featured image.', 'car-dealer-wda' ),
        'section' => 'wpdevart_car_dealer_wda_blog_archive_search_general_section'
        )
    ) );
	$wp_customize->add_setting( 'wpdevart_car_dealer_wda_blog_settings_title_font_size',
    array(
       'default' => esc_html('22'),
       'sanitize_callback' => 'wpdevart_car_dealer_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_car_dealer_wda_blog_settings_title_font_size',
		array(
		'label' => esc_html__( 'Title font-size (px)', 'car-dealer-wda' ),
		'section' => 'wpdevart_car_dealer_wda_blog_archive_search_general_section',
		'input_attrs' => array(
			'min' => esc_html('15'),
			'max' => esc_html('50'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_car_dealer_wda_blog_settings_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_blog_settings_title_color', esc_html('#efb33f')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_blog_settings_title_color', array(
        'label' => esc_html__('Title color','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_car_dealer_wda_blog_settings_title_color'
    )));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_blog_settings_title_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_blog_settings_title_hover_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_blog_settings_title_hover_color', array(
        'label' => esc_html__('Title hover color','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_car_dealer_wda_blog_settings_title_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_blog_settings_title_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_blog_settings_title_border_color', esc_html('#efb33f')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_blog_settings_title_border_color', array(
        'label' => esc_html__('Title border color','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_car_dealer_wda_blog_settings_title_border_color'
    )));
	$wp_customize->add_setting( 'wpdevart_car_dealer_wda_blog_settings_metas_font_size',
    array(
       'default' => esc_html('12'),
       'sanitize_callback' => 'wpdevart_car_dealer_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_car_dealer_wda_blog_settings_metas_font_size',
		array(
		'label' => esc_html__( 'Entry metas font-size (px)', 'car-dealer-wda' ),
		'section' => 'wpdevart_car_dealer_wda_blog_archive_search_general_section',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('30'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_car_dealer_wda_blog_settings_metas_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_blog_settings_metas_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_blog_settings_metas_color', array(
        'label' => esc_html__('Color of the metas','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_car_dealer_wda_blog_settings_metas_color'
    )));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_blog_settings_metas_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_blog_settings_metas_hover_color', esc_html('#e13302')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_blog_settings_metas_hover_color', array(
        'label' => esc_html__('Entry metas hover color','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_car_dealer_wda_blog_settings_metas_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_blog_settings_meta_icons_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_blog_settings_meta_icons_color', esc_html('#e13302')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_blog_settings_meta_icons_color', array(
        'label' => esc_html__('Icons color of the metas','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_car_dealer_wda_blog_settings_meta_icons_color'
    )));
	$wp_customize->add_setting( 'wpdevart_car_dealer_wda_blog_settings_content_text_font_size',
    array(
       'default' => esc_html('15'),
       'sanitize_callback' => 'wpdevart_car_dealer_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_car_dealer_wda_blog_settings_content_text_font_size',
		array(
		'label' => esc_html__( 'Content font-size (px)', 'car-dealer-wda' ),
		'section' => 'wpdevart_car_dealer_wda_blog_archive_search_general_section',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_car_dealer_wda_blog_settings_content_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_blog_settings_content_text_color', esc_html('#d5d5d5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_blog_settings_content_text_color', array(
        'label' => esc_html__('Content text color','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_car_dealer_wda_blog_settings_content_text_color'
    )));
	$wp_customize->add_setting( 'wpdevart_car_dealer_wda_blog_settings_category_text_font_size',
    array(
       'default' => esc_html('13'),
       'sanitize_callback' => 'wpdevart_car_dealer_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_car_dealer_wda_blog_settings_category_text_font_size',
		array(
		'label' => esc_html__( 'Category font-size (px)', 'car-dealer-wda' ),
		'section' => 'wpdevart_car_dealer_wda_blog_archive_search_general_section',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_car_dealer_wda_blog_settings_category_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_blog_settings_category_bg_color', esc_html('#0a090b')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_blog_settings_category_bg_color', array(
        'label' => esc_html__('Categories background color','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_car_dealer_wda_blog_settings_category_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_blog_settings_category_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_blog_settings_category_border_color', esc_html('#efb33f')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_blog_settings_category_border_color', array(
        'label' => esc_html__('Categories border color','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_car_dealer_wda_blog_settings_category_border_color'
    )));	
	$wp_customize->add_setting('wpdevart_car_dealer_wda_blog_settings_category_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_blog_settings_category_text_color', esc_html('#efb33f')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_blog_settings_category_text_color', array(
        'label' => esc_html__('Categories text color','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_car_dealer_wda_blog_settings_category_text_color'
    )));	
	$wp_customize->add_setting('wpdevart_car_dealer_wda_blog_settings_category_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_blog_settings_category_bg_hover_color', esc_html('#0a090b')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_blog_settings_category_bg_hover_color', array(
        'label' => esc_html__('Categories background hover color','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_car_dealer_wda_blog_settings_category_bg_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_blog_settings_category_border_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_blog_settings_category_border_hover_color', esc_html('#ebebeb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_blog_settings_category_border_hover_color', array(
        'label' => esc_html__('Categories border hover color','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_car_dealer_wda_blog_settings_category_border_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_blog_settings_category_text_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_blog_settings_category_text_hover_color', esc_html('#ebebeb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_blog_settings_category_text_hover_color', array(
        'label' => esc_html__('Categories text hover color','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_car_dealer_wda_blog_settings_category_text_hover_color'
    )));

	##################------ Pagination ------##################

	$wp_customize->add_section('wpdevart_car_dealer_wda_pagination_settings',array(
		'title'	=> esc_html__('Pagination','car-dealer-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_car_dealer_wda_blog_archive_search_panel'
	));

	$wp_customize->add_setting('wpdevart_car_dealer_wda_pagination_buttons_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_pagination_buttons_bg_color', esc_html('#0a090b')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_pagination_buttons_bg_color', array(
        'label' => esc_html__('Buttons background color','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_pagination_settings',
        'settings' => 'wpdevart_car_dealer_wda_pagination_buttons_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_pagination_buttons_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_pagination_buttons_border_color', esc_html('#efb33f')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_pagination_buttons_border_color', array(
        'label' => esc_html__('Buttons border color','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_pagination_settings',
        'settings' => 'wpdevart_car_dealer_wda_pagination_buttons_border_color'
    )));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_pagination_buttons_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_pagination_buttons_link_color', esc_html('#efb33f')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_pagination_buttons_link_color', array(
        'label' => esc_html__('Text color of active buttons','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_pagination_settings',
        'settings' => 'wpdevart_car_dealer_wda_pagination_buttons_link_color'
    )));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_pagination_buttons_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_pagination_buttons_text_color', esc_html('#7c6014')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_pagination_buttons_text_color', array(
        'label' => esc_html__('Text color of inactive buttons','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_pagination_settings',
        'settings' => 'wpdevart_car_dealer_wda_pagination_buttons_text_color'
    )));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_pagination_buttons_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_pagination_buttons_bg_hover_color', esc_html('#0a090b')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_pagination_buttons_bg_hover_color', array(
        'label' => esc_html__('Buttons background hover color','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_pagination_settings',
        'settings' => 'wpdevart_car_dealer_wda_pagination_buttons_bg_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_pagination_buttons_border_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_pagination_buttons_border_hover_color', esc_html('#ebebeb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_pagination_buttons_border_hover_color', array(
        'label' => esc_html__('Buttons border hover color','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_pagination_settings',
        'settings' => 'wpdevart_car_dealer_wda_pagination_buttons_border_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_pagination_buttons_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_pagination_buttons_link_hover_color', esc_html('#ebebeb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_pagination_buttons_link_hover_color', array(
        'label' => esc_html__('Text color of active buttons on hover','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_pagination_settings',
        'settings' => 'wpdevart_car_dealer_wda_pagination_buttons_link_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_car_dealer_wda_pagination_buttons_text_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_dealer_wda_pagination_buttons_text_hover_color', esc_html('#7c6014')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_dealer_wda_pagination_buttons_text_hover_color', array(
        'label' => esc_html__('Text color of inactive buttons on hover','car-dealer-wda'),
        'section' => 'wpdevart_car_dealer_wda_pagination_settings',
        'settings' => 'wpdevart_car_dealer_wda_pagination_buttons_text_hover_color'
    )));