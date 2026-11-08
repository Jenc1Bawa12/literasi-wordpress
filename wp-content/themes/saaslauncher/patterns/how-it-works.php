<?php

/**
 * Title: How It Works
 * Slug: saaslauncher/how-it-works
 * Categories: saaslauncher-about
 */
$saaslauncher_url    = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
	$saaslauncher_url . 'assets/images/about_4.jpg',
	$saaslauncher_url . 'assets/images/play_icon.png',
);
?>
<!-- wp:group {"metadata":{"name":"How It Works","categories":["saaslauncher-about"]},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"7rem","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
	<div class="wp-block-group" style="margin-bottom:60px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"400px","justifyContent":"left"}} -->
		<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
			<div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"textAlign":"left","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"x-small"} -->
				<h5 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-link-color has-x-small-font-size" style="text-transform:uppercase">
					<?php esc_html_e('How It Works', 'saaslauncher'); ?>
				</h5>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"left","fontSize":"60px"}}} -->
			<h1 class="wp-block-heading has-text-align-left" style="font-size:60px">
				<?php esc_html_e('Get Started in 3 Simple Steps', 'saaslauncher'); ?>
			</h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"580px","justifyContent":"left"}} -->
		<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textAlign":"left"}}} -->
			<p class="has-text-align-left">
				<?php esc_html_e('Make everyday operations more efficient with smart automation that simplifies routine tasks, enhances workflows, and helps teams achieve better results and scale effortlessly.', 'saaslauncher'); ?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":2501,"dimRatio":0,"customOverlayColor":"#8a8989","isUserOverlayColor":false,"minHeight":640,"isDark":false,"sizeSlug":"large","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"}},"color":{"duotone":"unset"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-cover is-light" style="border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;min-height:640px"><img class="wp-block-cover__image-background wp-image-2501 size-large" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#8a8989"></span>
		<div class="wp-block-cover__inner-container"><!-- wp:image {"lightbox":{"enabled":false},"id":909,"width":"120px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"custom","align":"center","className":"is-style-saaslauncher-image-pulse","style":{"color":{"duotone":["#0c8977","#ffffff"]}}} -->
			<figure class="wp-block-image aligncenter size-full is-resized is-style-saaslauncher-image-pulse"><a href="#"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-909" style="object-fit:cover;width:120px;height:120px" /></a></figure>
			<!-- /wp:image -->
		</div>
	</div>
	<!-- /wp:cover -->

	<!-- wp:columns {"className":"saaslauncher-steps-columns","style":{"spacing":{"margin":{"top":"44px","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
	<div class="wp-block-columns saaslauncher-steps-columns" style="margin-top:44px;margin-bottom:0"><!-- wp:column {"width":"30%","style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"60px"}}}} -->
		<div class="wp-block-column" style="padding-top:0;padding-right:60px;padding-bottom:0;padding-left:0;flex-basis:30%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group"><!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"60px"},"dimensions":{"minHeight":"60px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}},"backgroundColor":"background-alt","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
				<div class="wp-block-group has-background-alt-background-color has-background" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;min-height:60px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"500"}}} -->
					<h4 class="wp-block-heading" style="font-size:30px;font-style:normal;font-weight:500"><?php esc_html_e('01', 'saaslauncher'); ?></h4>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"30px"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="margin-top:30px"><!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"24px"}}} -->
				<h5 class="wp-block-heading" style="font-size:24px"><?php esc_html_e('Create Account', 'saaslauncher'); ?>
				</h5>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod', 'saaslauncher'); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"31%","style":{"spacing":{"blockGap":"0","padding":{"right":"60px","left":"60px","top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":{"color":"var:preset|color|border-color","width":"1px"},"bottom":{"width":"0px","style":"none"},"left":{"color":"var:preset|color|border-color","width":"1px"}}}} -->
		<div class="wp-block-column" style="border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--border-color);border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--border-color);border-left-width:1px;padding-top:0;padding-right:60px;padding-bottom:0;padding-left:60px;flex-basis:31%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group"><!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"60px"},"dimensions":{"minHeight":"60px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}},"backgroundColor":"background-alt","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
				<div class="wp-block-group has-background-alt-background-color has-background" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;min-height:60px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"500"}}} -->
					<h4 class="wp-block-heading" style="font-size:30px;font-style:normal;font-weight:500"><?php esc_html_e('02', 'saaslauncher'); ?></h4>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"30px"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="margin-top:30px"><!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"24px"}}} -->
				<h5 class="wp-block-heading" style="font-size:24px"><?php esc_html_e('Setup Automation', 'saaslauncher'); ?></h5>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.', 'saaslauncher'); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"30%","style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"60px","right":"0"}}}} -->
		<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:60px;flex-basis:30%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group"><!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"60px"},"dimensions":{"minHeight":"60px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}},"backgroundColor":"background-alt","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
				<div class="wp-block-group has-background-alt-background-color has-background" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;min-height:60px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"500"}}} -->
					<h4 class="wp-block-heading" style="font-size:30px;font-style:normal;font-weight:500"><?php esc_html_e('03', 'saaslauncher'); ?></h4>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"30px"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="margin-top:30px"><!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"24px"}}} -->
				<h5 class="wp-block-heading" style="font-size:24px"><?php esc_html_e('Grow & Scale', 'saaslauncher'); ?></h5>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod', 'saaslauncher'); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->