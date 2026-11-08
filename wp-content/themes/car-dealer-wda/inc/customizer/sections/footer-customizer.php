<?php 
        $wp_customize->add_section('wpdevart_car_dealer_wda_footer_section',array(
            'title'	=> esc_html__('Footer','car-dealer-wda'),
            'priority'		=> 30
        ));
        $wp_customize->add_setting( 'wpdevart_car_dealer_wda_footer_layout',
        array(
            'default' => esc_html('wpdevartfivewidgets'),
            'transport' => 'refresh',
            'sanitize_callback' => 'wpdevart_car_dealer_wda_text_sanitization'
        )
        );
        $wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_car_dealer_wda_footer_layout',
        array(
            'label' => esc_html__( 'Footer layout', 'car-dealer-wda' ),
            'description' => esc_html__( 'Select the layout of the footer', 'car-dealer-wda' ),
            'section' => 'wpdevart_car_dealer_wda_footer_section',
            'choices' => array(
            'wpdevartthreewidgetsleft' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-one.jpg',
                'name' => esc_html__( 'Large widget on the left', 'car-dealer-wda' )
            ),
            'wpdevartthreewidgetscenter' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-two.jpg',
                'name' => esc_html__( 'Large widget in the center', 'car-dealer-wda' )
            ),
            'wpdevartthreewidgetsright' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-three.jpg',
                'name' => esc_html__( 'Large widget on the right', 'car-dealer-wda' )
            ),
            'wpdevartfourwidgets' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-four.jpg',
                'name' => esc_html__( 'Four widgets', 'car-dealer-wda' )
            ),
            'wpdevartfourwidgetsalternative' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-five.jpg',
                'name' => esc_html__( 'Four widgets - alternative', 'car-dealer-wda' )
            ),
            'wpdevartfivewidgets' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-six.jpg',
                'name' => esc_html__( 'Five widgets', 'car-dealer-wda' )
            )
            )
        )
        ) );
        $wp_customize->add_setting( 'wpdevart_car_dealer_wda_pre_footer_wave_display_option',
        array(
           'default' => esc_html('1'),
           'transport' => 'refresh',
           'sanitize_callback' => 'wpdevart_car_dealer_wda_switch_sanitization'
        )
        );
        $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_car_dealer_wda_pre_footer_wave_display_option',
            array(
            'label' => esc_html__( 'Display Wave before footer', 'car-dealer-wda' ),
            'description' => esc_html__( 'Disable this option if you do not want to display the pre-footer background effect.', 'car-dealer-wda' ),
            'section' => 'wpdevart_car_dealer_wda_footer_section'
            )
        ) );
        $wp_customize->add_setting('wpdevart_car_dealer_wda_footer_copyright_text',array(
            'default'	=> esc_html('Copyright ©2023. All rights reserved.'),
            'sanitize_callback'	=> 'wpdevart_car_dealer_wda_text_sanitization'	
        ));
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'wpdevart_car_dealer_wda_footer_copyright_text',
                array(
                    'label'    => esc_html__('Copyright text','car-dealer-wda'),
                    'section'  => 'wpdevart_car_dealer_wda_footer_section',
                    'settings' => 'wpdevart_car_dealer_wda_footer_copyright_text',
                    'type'     => 'text'
                )
            )
        );