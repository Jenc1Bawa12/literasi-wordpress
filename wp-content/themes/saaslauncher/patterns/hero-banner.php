<?php

/**
 * Title: Hero Banner
 * Slug: saaslauncher/hero-banner
 * Categories: saaslauncher-hero
 */
$saaslauncher_url    = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
	$saaslauncher_url . 'assets/images/dashboard_launcher.png',
);
?>
<!-- wp:group {"metadata":{"name":"Hero Banner","categories":["saaslauncher-hero"]},"align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-dark-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"isUserOverlayColor":true,"gradient":"gradient-one","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"}}},"textColor":"light-color","layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-cover has-light-color-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-gradient-one-gradient-background"></span>
		<div class="wp-block-cover__inner-container"><!-- wp:group {"className":"saaslauncher-fade-up","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"7rem","bottom":"5rem"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
			<div class="wp-block-group saaslauncher-fade-up" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:5rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
				<div class="wp-block-group"><!-- wp:group {"className":"is-style-saaslauncher-animated-border","style":{"spacing":{"padding":{"right":"10px","left":"5px","top":"5px","bottom":"5px"},"blockGap":"var:preset|spacing|20"},"border":{"color":"#592ced6e","width":"1px","radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}}},"backgroundColor":"background","layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group is-style-saaslauncher-animated-border has-border-color has-background-background-color has-background" style="border-color:#592ced6e;border-width:1px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:5px"><!-- wp:group {"style":{"typography":{"textTransform":"none","letterSpacing":"5%"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"top":"3px","bottom":"3px","left":"6px","right":"6px"}},"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}}},"backgroundColor":"primary","textColor":"primary","fontSize":"x-small","layout":{"type":"constrained"}} -->
						<div class="wp-block-group has-primary-color has-primary-background-color has-text-color has-background has-link-color has-x-small-font-size" style="border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:3px;padding-right:6px;padding-bottom:3px;padding-left:6px;letter-spacing:5%;text-transform:none"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"tiny"} -->
							<p class="has-light-color-color has-text-color has-link-color has-tiny-font-size"><?php esc_html_e('✨ Now Live', 'saaslauncher') ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"x-small"} -->
						<h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('20+ New Ready-Made Sections', 'saaslauncher') ?></h5>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"20px","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"940px"}} -->
				<div class="wp-block-group" style="margin-top:20px;margin-bottom:0"><!-- wp:heading {"level":1,"className":"saaslauncher-big-title is-style-default","style":{"typography":{"textAlign":"center","fontSize":"80px","letterSpacing":"-2px","lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
					<h1 class="wp-block-heading has-text-align-center saaslauncher-big-title is-style-default has-heading-color-color has-text-color has-link-color" style="font-size:80px;letter-spacing:-2px;line-height:1.2"><?php esc_html_e('Build Faster. Launch Sooner. No Coding Required.', 'saaslauncher') ?></h1>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"20px","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
				<div class="wp-block-group" style="margin-top:20px;margin-bottom:0"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"normal"} -->
					<p class="has-text-align-center has-foreground-color has-text-color has-link-color has-normal-font-size" style="line-height:1.5"><?php esc_html_e('Build your business website faster with ready-made sections, powerful blocks, and easy customization—no coding required.', 'saaslauncher') ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"36px"},"blockGap":{"left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:36px"><!-- wp:button {"className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"24px","right":"24px","top":"18px","bottom":"18px"}}},"fontSize":"small"} -->
					<div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:18px;padding-right:24px;padding-bottom:18px;padding-left:24px">
							<?php esc_html_e('Try today for free', 'saaslauncher') ?></a></div>
					<!-- /wp:button -->

					<!-- wp:button {"backgroundColor":"light-color","textColor":"primary","className":"is-style-button-hover-secondary-bgcolor","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"18px","bottom":"18px"}},"border":{"width":"0px","radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"},"style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"small"} -->
					<div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-color has-light-color-background-color has-text-color has-background has-link-color has-small-font-size has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:18px;padding-right:24px;padding-bottom:18px;padding-left:24px"><?php esc_html_e('View Portfolio', 'saaslauncher') ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"saaslauncher-fade-up","style":{"border":{"radius":{"topLeft":"32px","topRight":"32px","bottomLeft":"32px","bottomRight":"32px"},"width":"0px","style":"none"},"spacing":{"padding":{"right":"6px","left":"6px","top":"6px","bottom":"6px"},"margin":{"top":"0","bottom":"0"}},"background":{"gradient":"var:preset|gradient|gradient-two"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
			<div class="wp-block-group saaslauncher-fade-up" style="border-style:none;border-width:0px;border-top-left-radius:32px;border-top-right-radius:32px;border-bottom-left-radius:32px;border-bottom-right-radius:32px;margin-top:0;margin-bottom:0;padding-top:6px;padding-right:6px;padding-bottom:6px;padding-left:6px"><!-- wp:image {"id":8647,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"},"width":"0px","style":"none"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
				<figure class="wp-block-image alignfull size-full has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-8647" style="border-style:none;border-width:0px;border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->