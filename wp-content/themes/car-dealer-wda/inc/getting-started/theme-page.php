<?php

function wpdevart_theme_backend_enqueue() {
    wp_enqueue_style( 'wpdevart-theme-car-dealer-wda-getting-started', get_template_directory_uri() . '/inc/getting-started/notice.css' );
}
add_action( 'admin_enqueue_scripts', 'wpdevart_theme_backend_enqueue' );

function wpdevart_car_dealer_wda_menu() {
	add_theme_page( esc_html__( 'About Theme', 'car-dealer-wda' ), esc_html__( 'About Theme', 'car-dealer-wda' ), 'edit_theme_options', 'wpdevart-theme-about', 'wpdevart_car_dealer_wda_about_display' );
}
add_action( 'admin_menu', 'wpdevart_car_dealer_wda_menu' );

function wpdevart_car_dealer_wda_about_display() {
	$wpdevart_car_dealer_wda_theme = wp_get_theme();
	?>
	<div class="wrap about-wrap full-width-layout wpdevart-admin-container">
		<div class="wpdevart-about-theme">
			<div class="wpdevart-theme-description">
				<h1 class="getting-started-heading"><?php echo esc_html( $wpdevart_car_dealer_wda_theme ); ?></h1>
				<p class="about-text"><?php echo apply_filters( 'parent_wpdevart_child_description_text', esc_html('The WordPress Car Dealer WDA theme is a modern, professional, and flexible website solution designed specifically for car dealerships, auto sellers, vehicle showrooms, automotive businesses, and used-car dealers. The theme helps businesses create an impressive online showroom where visitors can discover cars, explore vehicle details, learn about dealership services, and easily get in touch. With its responsive design, customizable layouts, attractive homepage sections, smooth animations, and WooCommerce compatibility, the theme provides everything needed to create a professional automotive website without starting from scratch. Whether you operate a small independent dealership or a larger automotive business, the theme can be customized to match your brand, inventory, and business goals.')); ?></p>
				<p class="actions">
					<a target="_blank" href="<?php echo apply_filters( 'parent_wpdevart_car_dealer_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-car-dealer-theme')); ?>" class="button button-secondary getting-started-main-button" target="_blank"><?php esc_html_e( 'Theme Info', 'car-dealer-wda' ); ?></a>
					<a target="_blank" href="<?php echo apply_filters( 'parent_wpdevart_child_demo_url', esc_url('https://theme.wpdevart.com/car-dealer')); ?>" class="button button-secondary getting-started-main-button" target="_blank"><?php esc_html_e( 'Demo', 'car-dealer-wda' ); ?></a>
                    <a target="_blank" href="<?php echo apply_filters( 'parent_wpdevart_child_wp_support_url', esc_url('https://wordpress.org/support/theme/car-dealer-wda')); ?>" class="button button-secondary getting-started-main-button" target="_blank"><?php esc_html_e( 'Support', 'car-dealer-wda' ); ?></a>
					<a target="_blank" href="<?php echo apply_filters( 'parent_wpdevart_car_dealer_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-car-dealer-theme')); ?>" class="button button-secondary getting-started-main-button getting-started-focus-button" target="_blank"><?php esc_html_e( 'Upgrade to Premium', 'car-dealer-wda' ); ?></a>
                    <a target="_blank" href="<?php echo esc_url('https://wpdevart.com/hire-wordpress-developer-dedicated-experts-are-ready-to-help/'); ?>" class="button button-secondary getting-started-main-button getting-started-focus-button" target="_blank"><?php esc_html_e( 'Hire a Developer', 'car-dealer-wda' ); ?></a>
				</p>
			</div>
			<div class="wpdevart-theme-screenshot">
				<img src="<?php echo esc_url( $wpdevart_car_dealer_wda_theme->get_screenshot() ); ?>" />
			</div>
		</div>
		<nav class="nav-tab-wrapper wp-clearfix wpdevart-admin-tab" aria-label="<?php esc_attr_e( 'Secondary menu', 'car-dealer-wda' ); ?>">
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'wpdevart-theme-about' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['page'] ) && 'wpdevart-theme-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'About', 'car-dealer-wda' ); ?></a>
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'wpdevart-theme-about', 'tab' => 'free_vs_pro' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Free Vs Pro', 'car-dealer-wda' ); ?></a>
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'wpdevart-theme-about', 'tab' => 'changelog' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'FAQ', 'car-dealer-wda' ); ?></a>
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'wpdevart-theme-about', 'tab' => 'plugins' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'plugins' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Plugins', 'car-dealer-wda' ); ?></a>
		</nav>
		<?php
			wpdevart_car_dealer_wda_main_screen();
			wpdevart_car_dealer_wda_changelog_screen();
			wpdevart_car_dealer_wda_free_vs_pro();
			wpdevart_admin_featured_plugins_screen();
		?>
	</div>
	<?php
}

function wpdevart_car_dealer_wda_main_screen() {
	if ( isset( $_GET['page'] ) && 'wpdevart-theme-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) {
	?>
		<div class="feature-section two-col wpdevart-feature-section">
			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Theme Customizer', 'car-dealer-wda' ); ?></h2>
				<p><?php esc_html_e( 'You can edit and change theme options using the customizer. All theme options are available via Customize screen.', 'car-dealer-wda' ) ?></p>
				<p><a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Customize', 'car-dealer-wda' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Got theme support question?', 'car-dealer-wda' ); ?></h2>
				<p><?php esc_html_e( 'If you have any questions regarding our theme, you can add a support ticket and get fast support from our team.', 'car-dealer-wda' ) ?></p>
				<p><a target="_blank" href="<?php echo apply_filters( 'parent_wpdevart_child_wp_support_url', esc_url('https://wordpress.org/support/theme/car-dealer-wda')); ?>" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Support Forum', 'car-dealer-wda' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Hire a Developer', 'car-dealer-wda' ); ?></h2>
				<p><?php esc_html_e( 'Hire WordPress developers from WpDevArt and you will get a quick and flexible solution at cost-effective rates. Our WordPress experts will help you to solve any problem. We provide different services for WordPress – website customization and development, theme/plugin customization and development, SEO optimization, WordPress integration, website speed optimization, etc. Our experts have over 10 years of experience, so a high-quality job is guaranteed.', 'car-dealer-wda' ) ?></p>
				<p><a target="_blank" href="<?php echo esc_url('https://wpdevart.com/hire-wordpress-developer-dedicated-experts-are-ready-to-help/'); ?>" class="button button-secondary getting-started-main-button getting-started-focus-button"><?php esc_html_e( 'Check Details', 'car-dealer-wda' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Best Offer', 'car-dealer-wda' ); ?></h2>
				<p><?php esc_html_e( 'On the Best Offer page, you can check the best deals that our company suggests. At this moment we have 15 powerful and useful WordPress plugins and 15+ well-designed and unique themes. These plugins and themes will help you add various features to your WordPress site and improve its appearance. We decided to collect all plugins and themes in one package and take more than 73.99% of the price. You can find more detailed information on our website.', 'car-dealer-wda' ) ?></p>
				<p><a target="_blank" href="<?php echo esc_url('https://wpdevart.com/the-best-offer-from-wpdevart/'); ?>" class="button button-secondary getting-started-main-button getting-started-focus-button"><?php esc_html_e( 'Check Details', 'car-dealer-wda' ); ?></a></p>
			</div>
		</div>
	<?php
	}
}

function wpdevart_car_dealer_wda_free_vs_pro() {
	if ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) {
	?>
		<div class="wrap about-wrap wpdevart-vs-table">
			<p class="about-description"><?php esc_html_e( 'Check out some of the differences between the free and premium versions below:', 'car-dealer-wda' ); ?></p>
			<div class="wpdevart-vs-theme-table">
				<table>
					<thead>
						<tr><th scope="col"></th>
							<th class="head" scope="col"><?php esc_html_e( 'Free Version', 'car-dealer-wda' ); ?></th>
							<th class="head" scope="col"><?php esc_html_e( 'Pro Version', 'car-dealer-wda' ); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Fully Responsive Design', 'car-dealer-wda' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Integrated with WooCommerce', 'car-dealer-wda' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Optimized PageSpeed and Clear Codding', 'car-dealer-wda' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Customizable Top Bar and Header', 'car-dealer-wda' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><span><?php esc_html_e( 'Homepage Premium Sections', 'car-dealer-wda' ); ?></span></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( '+7 Homepage Banner Themes', 'car-dealer-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Animation Effects', 'car-dealer-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Wide and Full-width Layouts', 'car-dealer-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Breadcrumbs', 'car-dealer-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Customizable Header Cart', 'car-dealer-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Patterns', 'car-dealer-wda' ); ?></td>
							<td headers="features" class="feature"><?php esc_html_e( '1', 'car-dealer-wda' ); ?></td>
							<td headers="features" class="feature"><?php esc_html_e( '13+', 'car-dealer-wda' ); ?></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Sticky Header', 'car-dealer-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'WooCommerce Search Bar', 'car-dealer-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'WooCommerce Shop/Category Structure', 'car-dealer-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'WooCommerce Premium Sections', 'car-dealer-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Banner Animations', 'car-dealer-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Button Animations', 'car-dealer-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Preloader', 'car-dealer-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Footer Themes', 'car-dealer-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Priority Support', 'car-dealer-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td class="feature feature--empty"></td>
							<td class="feature feature--empty"></td>
							<td headers="comp-2" class="td-btn-2"><a class="button button-secondary getting-started-main-button getting-started-focus-button" href="<?php echo apply_filters( 'parent_wpdevart_car_dealer_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-car-dealer-theme')); ?>" target="_blank"><?php esc_html_e( 'Go For Premium', 'car-dealer-wda' ); ?></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	<?php
	}
}

function wpdevart_car_dealer_wda_changelog_screen() {
	if ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) {
		global $wp_filesystem;
	?>
			<div class="feature-section two-col wpdevart-feature-section">			
				<div class="col card">
					<h2 class="title"><?php esc_html_e( 'How can I display the custom homepage instead of the latest posts on the main page?', 'car-dealer-wda' ); ?></h2>
					<p><?php esc_html_e( 'Go to the theme customize page, then in the left menu, click the Custom Homepage section, go to the Enable Custom Homepage section, and enable the option. Important: You will need to make sure that on the theme Customize page under the Homepage Settings section, the “Your homepage displays” option is set to “Your latest posts.”', 'car-dealer-wda' ) ?></p>
				</div>
				<div class="col card">
					<h2 class="title"><?php esc_html_e( 'How can I add widgets to the WooCommerce sidebar?', 'car-dealer-wda' ); ?></h2>
					<p><?php esc_html_e( 'You need to go to Appearance > Widgets page, find the WooCommerce Sidebar widget and add the widgets you want.', 'car-dealer-wda' ) ?></p>
				</div>
				<div class="col card">
					<h2 class="title"><?php esc_html_e( 'What is the difference between the Primary Button and the header/banner/search page and other buttons?', 'car-dealer-wda' ); ?></h2>
					<p><?php esc_html_e( 'The Primary Button is the style of the widget search button and the comments submit button and you can set a custom color for it, while the other buttons are placed on different settings pages and you can choose the color for these buttons from the 10 available colors.', 'car-dealer-wda' ) ?></p>
				</div>
				<div class="col card">
					<h2 class="title"><?php esc_html_e( 'What should I do if after successful payment I did not receive a link to download the premium version?', 'car-dealer-wda' ); ?></h2>
					<p><?php esc_html_e( 'You need to contact us using the form on the Contact Us page of our website.', 'car-dealer-wda' ) ?></p>
				</div>
				<div class="col card">
					<h2 class="title"><?php esc_html_e( 'Can I use animated elements in the free version?', 'car-dealer-wda' ); ?></h2>
					<p><?php esc_html_e( 'The animation feature is only available in the premium version, so you need to purchase a theme to use it.', 'car-dealer-wda' ) ?></p>
				</div>
			</div>
	<?php
	}
}

function wpdevart_admin_featured_plugins_screen() {
	if ( isset( $_GET['tab'] ) && 'plugins' === $_GET['tab'] ) {
	?>
		<p class="about-description"><?php esc_html_e( 'Below you can see a list of Recommended Plugins:', 'car-dealer-wda' ); ?></p>
		<div class="wpdevart-featured-plugins-section">
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/woocommerce-wishlist-quick-view-plugin/"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/wishlist-for-woocommerce.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'WooCommerce Wishlist & Quick View', 'car-dealer-wda' ); ?></h2>
				<p><?php esc_html_e( 'This plugin is a great tool for any store. Its functionality allows site visitors to preview products in a quick view pop-up window and add them to their wishlist.', 'car-dealer-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/woocommerce-wishlist-quick-view-plugin/" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'car-dealer-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/woocommerce-ai-schema-geo-plugin/"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/ai-schema-for-woocommerce.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'WooCommerce AI Schema & GEO', 'car-dealer-wda' ); ?></h2>
				<p><?php esc_html_e( 'The AI ​​Schema & GEO plugin is a great tool for increasing sales through AI-powered search. It adds structured product data, AI-optimized markup, and more.', 'car-dealer-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/woocommerce-ai-schema-geo-plugin/" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'car-dealer-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/woocommerce-pre-order-plugin-with-deposits"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/woocommerce-pre-order-plugin.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'WooCommerce Pre-Orders', 'car-dealer-wda' ); ?></h2>
				<p><?php esc_html_e( 'The WooCommerce Pre-Order with Deposits plugin turns your products and their variations into pre-orders with a release date and custom pricing.', 'car-dealer-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/woocommerce-pre-order-plugin-with-deposits" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'car-dealer-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/wordpress-countdown-extended-version"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/icon-128x128.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'WordPress Countdown Extended', 'car-dealer-wda' ); ?></h2>
				<p><?php esc_html_e( 'Countdown Extended is a fresh and extended version of the countdown timer. You can easily create and add countdown timers to your website.', 'car-dealer-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/wordpress-countdown-extended-version" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'car-dealer-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/wordpress-organization-chart-plugin"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/chart-featured.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'WordPress Organization Chart', 'car-dealer-wda' ); ?></h2>
				<p><?php esc_html_e( 'WordPress organization chart plugin is a great tool for adding organizational charts to your WordPress websites.', 'car-dealer-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/wordpress-organization-chart-plugin" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'car-dealer-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/wordpress-coming-soon-plugin"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/coming_soon.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'Coming soon and Maintenance mode', 'car-dealer-wda' ); ?></h2>
				<p><?php esc_html_e( 'Coming soon and Maintenance mode plugin is an awesome tool to show your visitors that you are working on your website to make it better.', 'car-dealer-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/wordpress-coming-soon-plugin" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'car-dealer-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/wordpress-booking-calendar-plugin"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/Booking_calendar_featured.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'WordPress Booking Calendar', 'car-dealer-wda' ); ?></h2>
				<p><?php esc_html_e( 'WordPress Booking Calendar plugin is an awesome tool to create a booking system for your website. Create booking calendars in a few minutes.', 'car-dealer-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/wordpress-booking-calendar-plugin" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'car-dealer-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/wordpress-gallery-plugin"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/gallery-album-icon.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'WordPress Gallery plugin', 'car-dealer-wda' ); ?></h2>
				<p><?php esc_html_e( 'The gallery plugin is a useful tool that will help you to create Galleries and Albums. Try our nice Gallery views and awesome animations.', 'car-dealer-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/wordpress-gallery-plugin" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'car-dealer-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/wordpress-pricing-table-plugin"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/Pricing-table.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'WordPress Pricing Table', 'car-dealer-wda' ); ?></h2>
				<p><?php esc_html_e( 'WordPress Pricing Table plugin is a nice tool for creating beautiful pricing tables. Use WpDevArt pricing table themes and create tables just in a few minutes.', 'car-dealer-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/wordpress-pricing-table-plugin" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'car-dealer-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/wordpress-youtube-embed-plugin"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/youtube.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'WordPress YouTube Embed', 'car-dealer-wda' ); ?></h2>
				<p><?php esc_html_e( 'YouTube Embed plugin is a convenient tool for adding videos to your website. Use YouTube Embed plugin for adding YouTube videos in posts/pages, widgets.', 'car-dealer-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/wordpress-youtube-embed-plugin" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'car-dealer-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/wordpress-vertical-menu-plugin"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/vertical-menu.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'WordPress Vertical Menu', 'car-dealer-wda' ); ?></h2>
				<p><?php esc_html_e( 'WordPress Vertical Menu is a handy tool for adding nice vertical menus. You can add icons for your website vertical menus using our plugin.', 'car-dealer-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/wordpress-vertical-menu-plugin" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'car-dealer-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/wordpress-lightbox-plugin"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/lightbox.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'WordPress Lightbox plugin', 'car-dealer-wda' ); ?></h2>
				<p><?php esc_html_e( 'WordPress Lightbox Popup is a highly customizable and responsive plugin for displaying images and videos in the popup.', 'car-dealer-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/wordpress-lightbox-plugin" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'car-dealer-wda' ); ?></a></p>
			</div>
		</div>
	<?php
	}
}