<?php
if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

class SaasLauncher_Admin
{

	private static $instance = null;

	private static $dir = SAASLAUNCHER_DIR . 'admin/';
	private static $url = SAASLAUNCHER_URL . 'admin/';

	public static function get_instance()
	{
		if (is_null(self::$instance)) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	private function __construct()
	{
		$this->include_files();

		add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_assets'));

		add_action('admin_notices', array($this, 'welcome_notice'));

		add_action('admin_menu', array($this, 'register_theme_menu'));
	}

	private function include_files()
	{
		require_once self::$dir . 'includes/class-admin-ajax.php';
		SaasLauncher_Admin_Ajax::get_instance();
	}

	public function enqueue_admin_assets()
	{
		if (! function_exists('get_current_screen')) {
			return;
		}

		$saaslauncher_notice_current_screen = get_current_screen();

		$allowed_pages = array(
			'dashboard',
			'themes',
		);

		if ((isset($_GET['page']) && ! empty($_GET['page']) && 'about-saaslauncher' === $_GET['page']) || in_array($saaslauncher_notice_current_screen->id, $allowed_pages, true)) {
			wp_enqueue_style('saaslauncher-admin-style', self::$url . 'css/admin-style.css', array(), SAASLAUNCHER_VERSION, 'all');

			wp_enqueue_script('saaslauncher-admin-scripts', self::$url . 'js/admin-scripts.js', array('jquery'), SAASLAUNCHER_VERSION, true);
			wp_localize_script(
				'saaslauncher-admin-scripts',
				'ajaxObj',
				array(
					'ajaxURL'      => admin_url('admin-ajax.php'),
					'welcomeNonce' => wp_create_nonce('saaslauncher_welcome_nonce'),
					'redirectURL'  => admin_url('themes.php?page=about-saaslauncher'),
				)
			);
		}
	}

	public function welcome_notice()
	{
		$current_screen  = get_current_screen();
		$allowed_screens = array('dashboard', 'themes');
		if (! in_array($current_screen->id, $allowed_screens, true) || is_network_admin() || ! current_user_can('manage_options') || get_option('saaslauncher_dismissed_custom_notice')) {
			return;
		}
?>
		<div class="saaslauncher-admin-notice notice notice-info is-dismissible content-install-plugin theme-info-notice"
			id="saaslauncher-welcome-notice">
			<div class="content-holder">
				<div class="notices">
					<figure class="brand-logo">
						<img width="44" height="44" src="<?php echo esc_url(self::$url . 'images/brand_logo.png'); ?>" />
					</figure>

					<div>
						<h2 class="notice-heading"><?php esc_html_e('Welcome to SaasLauncher! 🚀', 'saaslauncher'); ?></h2>

						<p>
							<?php
							esc_html_e(
								'SaasLauncher is installed and ready to go. Install the recommended plugins to import Starter Sites, unlock advanced customization, and launch your website faster.',
								'saaslauncher'
							);
							?>
						</p>

						<div class="saaslauncher-spacer sm"></div>

						<p>
							<i>
								<?php esc_html_e('Recommended Plugins: ✓ Cozy Blocks · ✓ Cozy Essential Addons · ✓ Advanced Import ', 'saaslauncher'); ?>
							</i>
						</p>

						<div class="saaslauncher-spacer sm"></div>

						<div class="notice-buttons">
							<?php
							if (saaslauncher_is_plugin_activated('cozy-addons/cozy-addons.php') && saaslauncher_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php') && saaslauncher_is_plugin_activated('advanced-import/advanced-import.php')) {
							?>
								<button class="notice-button">
									<a
										href="<?php echo esc_url(admin_url('site-editor.php')); ?>"><?php esc_html_e('Customize', 'saaslauncher'); ?></a>
								</button>
								<button class="notice-button notice-button-secondary">
									<a
										href="<?php echo esc_url(admin_url('themes.php?page=about-saaslauncher')); ?>"><?php esc_html_e('Explore SaasLauncher', 'saaslauncher'); ?></a>
								</button>
							<?php
							} else {
							?>
								<button class="saaslauncher-install-required-plugins btn notice-button has-spinner">
									<a href="#"><?php esc_html_e('Get Started in a single click →', 'saaslauncher'); ?></a>
									<span class="spinner saaslauncher-display-none" id="saaslauncher-admin-spinner"></span>
								</button>
								<button class="notice-button notice-button-secondary">
									<a
										href="<?php echo esc_url(admin_url('themes.php?page=about-saaslauncher')); ?>"><?php esc_html_e('Explore SaasLauncher', 'saaslauncher'); ?></a>
								</button>
							<?php
							}
							?>
						</div>
					</div>
				</div>
				<figure class="notice-image">
					<img src="<?php echo esc_url(self::$url . 'images/theme_screen_img.png'); ?>" />
				</figure>
			</div>
		</div>
<?php
	}

	public function register_theme_menu()
	{
		add_theme_page(
			esc_html__('About SaasLauncher', 'saaslauncher'),
			esc_html__('About SaasLauncher', 'saaslauncher'),
			'edit_theme_options',
			'about-saaslauncher',
			array($this, 'render_admin_dashboard')
		);
	}

	public function render_admin_dashboard()
	{
		require_once self::$dir . 'index.php';
	}
}
