<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="saaslauncher-banner section">
	<div class="inner-wrap">
		<p class="section-pill"><?php esc_html_e( 'Welcome to SaasLauncher', 'saaslauncher' ); ?></p>
		<div class="saaslauncher-spacer xs"></div>
		<h1 class="banner-heading"><?php esc_html_e( 'Launch your SaaS, startup, or business website', 'saaslauncher' ); ?> <mark><?php esc_html_e( 'without starting from scratch', 'saaslauncher' ); ?></mark></h1>

		<ul class="getting-started-timeline">
			<li class="timeline-item complete"><span class="counter"><?php esc_html_e( '1', 'saaslauncher' ); ?></span> <?php esc_html_e( 'Setup', 'saaslauncher' ); ?></li>
			<li class="separator"></li>
			<?php
			$classes   = array();
			$classes[] = 'timeline-item';
			$classes[] = saaslauncher_is_plugin_activated( 'cozy-addons/cozy-addons.php' ) && saaslauncher_is_plugin_activated( 'cozy-essential-addons/cozy-essential-addons.php' ) && saaslauncher_is_plugin_activated( 'advanced-import/advanced-import.php' ) ? 'complete' : '';
			?>
			<li class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>"><span class="counter"><?php esc_html_e( '2', 'saaslauncher' ); ?></span> <?php esc_html_e( 'Import Starter Site', 'saaslauncher' ); ?></li>
			<li class="separator"></li>
			<li class="timeline-item"><span class="counter"><?php esc_html_e( '3', 'saaslauncher' ); ?></span> <?php esc_html_e( 'Customize', 'saaslauncher' ); ?></li>
			<li class="separator"></li>
			<li class="timeline-item"><span class="counter"><?php esc_html_e( '4', 'saaslauncher' ); ?></span> <?php esc_html_e( 'Launch', 'saaslauncher' ); ?></li>
		</ul>

		<div class="saaslauncher-spacer sm"></div>

		<?php
		if ( ! saaslauncher_is_plugin_activated( 'cozy-addons/cozy-addons.php' ) || ! saaslauncher_is_plugin_activated( 'cozy-essential-addons/cozy-essential-addons.php' ) || ! saaslauncher_is_plugin_activated( 'advanced-import/advanced-import.php' ) ) {
			?>
			<button class="saaslauncher-install-required-plugins btn btn-primary has-spinner">
				<a><?php esc_html_e( 'Get Started →', 'saaslauncher' ); ?></a>
				<span class="spinner saaslauncher-display-none" id="saaslauncher-admin-spinner"></span>
			</button>
			<?php
		} elseif ( saaslauncher_is_plugin_activated( 'cozy-addons/cozy-addons.php' ) && saaslauncher_is_plugin_activated( 'cozy-essential-addons/cozy-essential-addons.php' ) && saaslauncher_is_plugin_activated( 'advanced-import/advanced-import.php' ) ) {
			?>
			<button class="btn btn-primary">
				<a href="<?php echo esc_url( admin_url( 'themes.php?page=advanced-import' ) ); ?>"><?php esc_html_e( 'Import Starter Site →', 'saaslauncher' ); ?></a>
			</button>
			<?php
		}
		?>
	</div>
	<figure class="banner-image">
		<img height="330" src="<?php echo esc_url( SAASLAUNCHER_URL . 'admin/images/dashboard-banner.png' ); ?>" />
	</figure>
</div>