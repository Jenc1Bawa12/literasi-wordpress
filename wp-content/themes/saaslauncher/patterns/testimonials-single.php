<?php

/**
 * Title: Testimonial Single
 * Slug: saaslauncher/testimonials-single
 * Categories: saaslauncher-testimonial
 */
$saaslauncher_url    = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
	$saaslauncher_url . 'assets/images/star_icon.png',
	$saaslauncher_url . 'assets/images/person_7.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Testimonial Single","categories":["saaslauncher-testimonial"]},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"6rem","bottom":"6rem"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="padding-top:6rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"84px"}}}} -->
	<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textAlign":"left","fontSize":"60px","lineHeight":"1.2"}},"textColor":"heading-color"} -->
			<h1 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:60px;line-height:1.2"><?php esc_html_e('Testimonials', 'saaslauncher'); ?></h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"}},"dimensions":{"minHeight":"420px"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-default" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;min-height:420px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":4350,"width":"120px","height":"23px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"duotone":["#fcb900","#ffffff"]}}} -->
				<figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-4350" style="object-fit:contain;width:120px;height:23px" /></figure>
				<!-- /wp:image -->

				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"32px"}},"textColor":"foreground"} -->
				<p class="has-foreground-color has-text-color has-link-color" style="font-size:32px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'saaslauncher'); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"84px","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="margin-top:84px;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}},"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}}},"layout":{"type":"constrained","contentSize":"64px"}} -->
					<div class="wp-block-group" style="border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":4340,"width":"64px","height":"64px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}}}} -->
						<figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-4340" style="border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;object-fit:cover;width:64px;height:64px" /></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px"}},"textColor":"heading-color"} -->
						<h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="font-size:20px"><?php esc_html_e('Daniel Wilson', 'saaslauncher'); ?></h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"14px"}},"textColor":"foreground"} -->
						<p class="has-foreground-color has-text-color has-link-color" style="font-size:14px">
							<?php esc_html_e('Founder &amp; CEO', 'saaslauncher'); ?> </p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->