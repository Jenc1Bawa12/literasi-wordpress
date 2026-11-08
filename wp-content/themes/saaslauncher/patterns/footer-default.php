<?php

/**
 * Title: Footer Default
 * Slug: saaslauncher/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 * Post Types: wp_template
 * Inserter: true
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
	$saaslauncher_url . 'assets/images/saaslauncher.png',
);
?>
<!-- wp:group {"metadata":{"patternName":"saaslauncher/footer-default","name":"Footer Default","categories":["footer"]},"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"dimRatio":30,"isUserOverlayColor":true,"gradient":"gradient-four","isDark":false,"layout":{"type":"constrained"}} -->
	<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim has-background-gradient has-gradient-four-gradient-background"></span>
		<div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"6rem","bottom":"6rem"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
			<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:6rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"60px"},"margin":{"top":"0px"}}}} -->
				<div class="wp-block-columns" style="margin-top:0px"><!-- wp:column {"width":"45%","style":{"border":{"width":"0px","style":"none"}}} -->
					<div class="wp-block-column" style="border-style:none;border-width:0px;flex-basis:45%"><!-- wp:group {"layout":{"type":"constrained","contentSize":"360px","justifyContent":"left"}} -->
						<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
							<div class="wp-block-group"><!-- wp:image {"id":8994,"sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixedNoShrink","flexSize":"44px"}}} -->
								<figure class="wp-block-image size-full"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-8994" /></figure>
								<!-- /wp:image -->

								<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontSize":"32px"}},"textColor":"heading-color"} /-->
							</div>
							<!-- /wp:group -->

							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"16px","lineHeight":"1.5"}},"textColor":"foreground"} -->
							<p class="has-foreground-color has-text-color has-link-color" style="font-size:16px;line-height:1.5"><?php esc_html_e('Build, launch, and grow your startup or agency effortlessly with powerful solutions designed to scale your business and boost results fast.', 'saaslauncher'); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","iconBackgroundColor":"dark-shade","iconBackgroundColorValue":"#1f1e33","className":"is-style-default","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"},"margin":{"top":"30px"}}}} -->
							<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default" style="margin-top:30px"><!-- wp:social-link {"url":"#","service":"WordPress"} /-->

								<!-- wp:social-link {"url":"#","service":"facebook"} /-->

								<!-- wp:social-link {"url":"#","service":"x"} /-->

								<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

								<!-- wp:social-link {"url":"#","service":"youtube"} /-->

								<!-- wp:social-link {"url":"#","service":"instagram"} /-->
							</ul>
							<!-- /wp:social-links -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"className":"saaslauncher-footer-list"} -->
					<div class="wp-block-column saaslauncher-footer-list"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none","fontSize":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
						<h3 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:400;text-transform:none"><?php esc_html_e('Company', 'saaslauncher'); ?></h3>
						<!-- /wp:heading -->

						<!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"small"} -->
						<ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;text-transform:none" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-small-font-size"><!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
							<li class="has-foreground-color has-text-color has-link-color"><a href="#">
									<?php esc_html_e('About Us', 'saaslauncher'); ?> </a></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"textColor":"foreground"} -->
							<li class="has-foreground-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#">
									<?php esc_html_e('Career', 'saaslauncher'); ?> </a></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"textColor":"foreground"} -->
							<li class="has-foreground-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#">
									<?php esc_html_e('Blog', 'saaslauncher'); ?> </a></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"textColor":"foreground"} -->
							<li class="has-foreground-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#">
									<?php esc_html_e('Contact Us', 'saaslauncher'); ?> </a></li>
							<!-- /wp:list-item -->
						</ul>
						<!-- /wp:list -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"className":"saaslauncher-footer-list"} -->
					<div class="wp-block-column saaslauncher-footer-list"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none","fontSize":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
						<h3 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:400;text-transform:none">
							<?php esc_html_e('Products', 'saaslauncher'); ?> </h3>
						<!-- /wp:heading -->

						<!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"small"} -->
						<ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;text-transform:none" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-small-font-size"><!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
							<li class="has-foreground-color has-text-color has-link-color"><a href="#">
									<?php esc_html_e('Privacy Policy', 'saaslauncher'); ?> </a></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"textColor":"foreground"} -->
							<li class="has-foreground-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#">
									<?php esc_html_e('Terms &amp; Conditions', 'saaslauncher'); ?> </a></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"textColor":"foreground"} -->
							<li class="has-foreground-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#">
									<?php esc_html_e('Services', 'saaslauncher'); ?> </a></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"textColor":"foreground"} -->
							<li class="has-foreground-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#">
									<?php esc_html_e('Features', 'saaslauncher'); ?> </a></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"textColor":"foreground"} -->
							<li class="has-foreground-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#">
									<?php esc_html_e('Pricing', 'saaslauncher'); ?> </a></li>
							<!-- /wp:list-item -->
						</ul>
						<!-- /wp:list -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"","className":"saaslauncher-footer-list"} -->
					<div class="wp-block-column saaslauncher-footer-list"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none","fontSize":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
						<h3 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:400;text-transform:none">
							<?php esc_html_e('Features', 'saaslauncher'); ?></h3>
						<!-- /wp:heading -->

						<!-- wp:group {"className":"saaslauncher-footer-list","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"28px","bottom":"0"},"padding":{"left":"0px","top":"0px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group saaslauncher-footer-list" style="margin-top:28px;margin-bottom:0;padding-top:0px;padding-left:0px"><!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"small"} -->
							<ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;text-transform:none" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-small-font-size"><!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
								<li class="has-foreground-color has-text-color has-link-color"><a href="#"><?php esc_html_e('AI Automation', 'saaslauncher'); ?></a></li>
								<!-- /wp:list-item -->

								<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"textColor":"foreground"} -->
								<li class="has-foreground-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#">
										<?php esc_html_e('Smart Notification', 'saaslauncher'); ?></a></li>
								<!-- /wp:list-item -->

								<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"textColor":"foreground"} -->
								<li class="has-foreground-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#">
										<?php esc_html_e('Real-time Analytics', 'saaslauncher'); ?></a></li>
								<!-- /wp:list-item -->

								<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"textColor":"foreground"} -->
								<li class="has-foreground-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#">
										<?php esc_html_e('Integrations', 'saaslauncher'); ?></a></li>
								<!-- /wp:list-item -->
							</ul>
							<!-- /wp:list -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"1200px","wideSize":"1260px"}} -->
			<div class="wp-block-group" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"10px"}},"border":{"top":{"color":"#7645fc26","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
				<div class="wp-block-group" style="border-top-color:#7645fc26;border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:40px;padding-bottom:10px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"small"} -->
					<p class="has-text-align-center has-heading-color-color has-text-color has-link-color has-small-font-size" style="line-height:1.5">
						<?php esc_html_e('Proudly powered by WordPress | SaasLauncher by CozyThemes.', 'saaslauncher'); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->

	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
	<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"tertiary","textColor":"foregound-alt","className":"saaslauncher-scrollto-top is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"50%"}}} -->
		<div class="wp-block-button saaslauncher-scrollto-top is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-tertiary-background-color has-text-color has-background wp-element-button" style="border-radius:50%">
				<?php esc_html_e('Scroll to Top', 'saaslauncher'); ?> </a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->