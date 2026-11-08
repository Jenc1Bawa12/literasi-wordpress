<?php

##################------ Pro Button Section ------##################
	$wp_customize->register_section_type( 'wpdevart_car_dealer_wda_Section_Premium' );

	$wp_customize->add_section(
		new wpdevart_car_dealer_wda_Section_Premium(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__('Car Dealer WDA','car-dealer-wda'),
				'pro_text' => esc_html__('Premium','car-dealer-wda'),
				'pro_url'  => apply_filters( 'parent_wpdevart_car_dealer_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-car-dealer-theme')),
				'priority'  => 10,
			)
		)
	);