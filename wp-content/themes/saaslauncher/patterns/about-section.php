<?php

/**
 * Title: About Us Section
 * Slug: saaslauncher/about-section
 * Categories: saaslauncher-about
 */
$saaslauncher_url    = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
	$saaslauncher_url . 'assets/images/about_4.jpg',
	$saaslauncher_url . 'assets/images/about_5.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-about"],"name":"About Us Section"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"6rem","bottom":"3rem"},"margin":{"top":"0","bottom":"0"}},"background":{"gradient":"var:preset|gradient|gradient-five"}},"backgroundColor":"black-color","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group has-black-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:6rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:3rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"860px","justifyContent":"left"}} -->
		<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"500","fontSize":"74px","textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
			<h1 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color" style="font-size:74px;font-style:normal;font-weight:500;line-height:1.4"><?php esc_html_e('Crafting Digital Experiences That Drive Results', 'saaslauncher'); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"big"} -->
			<p class="has-foreground-alt-color has-text-color has-link-color has-big-font-size"><?php esc_html_e('From branding to web development, we create seamless digital experiences that captivate audiences and leave a lasting impact.', 'saaslauncher'); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"className":"is-style-button-transofom-on-hover"} -->
		<div class="wp-block-buttons is-style-button-transofom-on-hover"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-with-uparrow-icon","style":{"spacing":{"padding":{"left":"28px","right":"28px","top":"18px","bottom":"18px"}},"border":{"radius":"80px"},"typography":{"fontSize":"18px"}}} -->
			<div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-primary-background-color has-background has-custom-font-size wp-element-button" style="border-radius:80px;padding-top:18px;padding-right:28px;padding-bottom:18px;padding-left:28px;font-size:18px"><?php esc_html_e('Get Started Today', 'saaslauncher'); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"64px","bottom":"0"},"blockGap":{"left":"28px"}}}} -->
	<div class="wp-block-columns" style="margin-top:64px;margin-bottom:0"><!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":13223,"dimRatio":0,"customOverlayColor":"#adaba9","isUserOverlayColor":false,"minHeight":480,"isDark":false,"style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-cover is-light" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;min-height:480px"><img class="wp-block-cover__image-background wp-image-13223" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#adaba9"></span>
				<div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
					<p class="has-text-align-center has-large-font-size"></p>
					<!-- /wp:paragraph -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[1]) ?>","id":13225,"dimRatio":0,"customOverlayColor":"#837c76","isUserOverlayColor":false,"minHeight":480,"style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"100px"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-cover" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:100px;min-height:480px"><img class="wp-block-cover__image-background wp-image-13225" alt="" src="<?php echo esc_url($saaslauncher_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#837c76"></span>
				<div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
					<p class="has-text-align-center has-large-font-size"></p>
					<!-- /wp:paragraph -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->