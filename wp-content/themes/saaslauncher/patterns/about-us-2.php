<?php

/**
 * Title: About Us 2
 * Slug: saaslauncher/about-us-2
 * Categories: saaslauncher-about
 */
$saaslauncher_url    = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
	$saaslauncher_url . 'assets/images/about_4.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-about"],"name":"About Us 2"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"9rem","bottom":"6rem"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:9rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"left":"40px"},"margin":{"top":"0","bottom":"64px"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-top" style="margin-top:0;margin-bottom:64px"><!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"12px","left":"12px","top":"5px","bottom":"5px"}},"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"},"width":"1px"}},"backgroundColor":"background-alt","borderColor":"border-color","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-border-color-border-color has-background-alt-background-color has-background" style="border-width:1px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontSize":"13px","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary"} -->
					<h5 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-size:13px;font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e('Our Story', 'saaslauncher'); ?></h5>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.3"},"spacing":{"margin":{"top":"10px","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"mega"} -->
			<h1 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-mega-font-size" style="margin-top:10px;margin-bottom:0;line-height:1.3">
				<?php esc_html_e('Building Smarter Solutions SaaS Experts', 'saaslauncher'); ?>
			</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
			<p style="font-size:18px">
				<?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'saaslauncher'); ?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"28px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
			<div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:28px"><!-- wp:button {"className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"24px","right":"24px","top":"18px","bottom":"18px"}}},"fontSize":"small"} -->
				<div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:18px;padding-right:24px;padding-bottom:18px;padding-left:24px"><?php esc_html_e('Try today for free', 'saaslauncher') ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:image {"id":5702,"sizeSlug":"large","linkDestination":"none","align":"wide","style":{"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"}}}} -->
	<figure class="wp-block-image alignwide size-large has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-5702" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px" /></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->