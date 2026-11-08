<?php

/**
 * Title: CTA with Background Image
 * Slug: saaslauncher/cta-with-background-image
 * Categories: saaslauncher-cta
 */
$saaslauncher_url    = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/cta_bg.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"CTA with Background Image","categories":["saaslauncher-cta"]},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":9022,"dimRatio":80,"overlayColor":"black-color","isUserOverlayColor":true,"minHeight":640,"sizeSlug":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:640px"><img class="wp-block-cover__image-background wp-image-9022 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-black-color-background-color has-background-dim-80 has-background-dim"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:group {"className":"saaslauncher-fade-up","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"5rem","bottom":"5rem"}}},"layout":{"type":"constrained","contentSize":"840px"}} -->
            <div class="wp-block-group saaslauncher-fade-up" style="margin-top:0;margin-bottom:0;padding-top:5rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:5rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textAlign":"center","fontSize":"18px"}},"textColor":"light-color"} -->
                <h4 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('Let\'s get started', 'saaslauncher') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"20px","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"940px"}} -->
                <div class="wp-block-group" style="margin-top:20px;margin-bottom:0"><!-- wp:heading {"level":1,"className":"saaslauncher-big-title is-style-default","style":{"typography":{"textAlign":"center","fontSize":"80px","letterSpacing":"-2px","lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                    <h1 class="wp-block-heading has-text-align-center saaslauncher-big-title is-style-default has-light-color-color has-text-color has-link-color" style="font-size:80px;letter-spacing:-2px;line-height:1.2"><?php esc_html_e('Ready to Turn Your Idea Into a Website?', 'saaslauncher') ?></h1>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"20px","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
                <div class="wp-block-group" style="margin-top:20px;margin-bottom:0"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"normal"} -->
                    <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-normal-font-size" style="line-height:1.5"><?php esc_html_e('Build a professional business website faster with ready-made sections, powerful blocks, and easy customization—no coding required.', 'saaslauncher') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"36px"},"blockGap":{"left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:36px"><!-- wp:button {"className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"24px","right":"24px","top":"18px","bottom":"18px"}}},"fontSize":"small"} -->
                    <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:18px;padding-right:24px;padding-bottom:18px;padding-left:24px"><?php esc_html_e('Get Started', 'saaslauncher') ?></a></div>
                    <!-- /wp:button -->

                    <!-- wp:button {"backgroundColor":"light-color","textColor":"primary","className":"is-style-button-hover-secondary-bgcolor","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"18px","bottom":"18px"}},"border":{"width":"0px","radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"},"style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"small"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-color has-light-color-background-color has-text-color has-background has-link-color has-small-font-size has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:18px;padding-right:24px;padding-bottom:18px;padding-left:24px"><?php esc_html_e('View Portfolio', 'saaslauncher') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->