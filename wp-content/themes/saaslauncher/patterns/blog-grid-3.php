<?php

/**
 * Title: Blog Grid 3
 * Slug: saaslauncher/blog-grid-3
 * Categories: saaslauncher-post
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"48px"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="margin-top:48px;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group"><!-- wp:heading {"level":3,"className":"is-style-heading-text-bullet-lead","style":{"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"left":"18px"}}}} -->
		<h3 class="wp-block-heading is-style-heading-text-bullet-lead" style="padding-left:18px;font-size:20px;font-style:normal;font-weight:600;text-transform:uppercase">
			<?php esc_html_e("Editor's Choice", 'saaslauncher'); ?>
		</h3>
		<!-- /wp:heading -->

		<!-- wp:buttons {"className":"is-style-button-transofom-on-hover"} -->
		<div class="wp-block-buttons is-style-button-transofom-on-hover"><!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"left":"10px","right":"10px","top":"6px","bottom":"6px"}},"border":{"width":"1px","color":"#e0e8e6","radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"}}}} -->
			<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color has-border-color wp-element-button" style="border-color:#e0e8e6;border-width:1px;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;padding-top:6px;padding-right:10px;padding-bottom:6px;padding-left:10px"><?php esc_html_e('View More', 'saaslauncher') ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"48px","left":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border-color","width":"1px"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"center"}} -->
	<div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:0;padding-right:0;padding-bottom:48px;padding-left:0"><!-- wp:query {"queryId":29,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
		<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"28px"}},"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"300px","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"}}}} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"24px","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group" style="margin-top:24px;margin-bottom:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|light-color"}},"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"tiny"} /-->

						<!-- wp:post-time-to-read {"style":{"spacing":{"margin":{"top":"0","bottom":"10px"}}}} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-title {"level":4,"isLink":true,"className":"is-style-title-hover-secondary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|30","right":"0"}},"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"500"}},"textColor":"light-color","fontSize":"big"} /-->

					<!-- wp:post-excerpt {"excerptLength":15} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"bottom":"0"},"margin":{"top":"20px","bottom":"0px"}}},"fontSize":"x-small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group has-x-small-font-size" style="margin-top:20px;margin-bottom:0px;padding-bottom:0"><!-- wp:post-author-name {"className":"is-style-author-name-with-icon"} /-->

						<!-- wp:post-date {"format":"human-diff","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"is-style-post-date-with-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","fontSize":"xx-small"} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->