<?php

/**
 * Title: Features Grid Pro
 * Slug: saaslauncher/saaslauncher-features-grid
 * Categories: ct-saaslauncher-patterns-pro
 */
$saaslauncher_url    = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/icon_301.png',
    $saaslauncher_url . 'assets/images/icon_302.png',
    $saaslauncher_url . 'assets/images/icon_303.png',
    $saaslauncher_url . 'assets/images/icon_304.png',
    $saaslauncher_url . 'assets/images/icon_305.png',
    $saaslauncher_url . 'assets/images/icon_306.png',
    $saaslauncher_url . 'assets/images/icon_307.png',
);
?>
<!-- wp:group {"metadata":{"name":"Features Grid Pro","categories":["ct-saaslauncher-patterns-pro"]},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"8rem"}}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"64px"}}},"layout":{"type":"constrained","contentSize":"580px"}} -->
    <div class="wp-block-group" style="margin-bottom:64px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"12px","left":"12px","top":"5px","bottom":"5px"}},"border":{"width":"1px","radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}}},"backgroundColor":"primary-shade-2","borderColor":"secondary-shade-1","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-secondary-shade-1-border-color has-primary-shade-2-background-color has-background" style="border-width:1px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"5%","fontSize":"13px"}},"textColor":"primary"} -->
                <h5 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-size:13px;font-style:normal;font-weight:500;letter-spacing:5%;text-transform:uppercase"><?php esc_html_e('Features', 'saaslauncher'); ?></h5>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center","fontSize":"60px"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-size:60px"><?php esc_html_e('Powerful Features. Effortless Building.', 'saaslauncher'); ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
        <p class="has-text-align-center"><?php esc_html_e('From advanced blocks to ready-made patterns, SaasLauncher gives you the tools to build with confidence.', 'saaslauncher'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"20px"},"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"border":{"width":"1px","radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"}},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"400px"}},"backgroundColor":"dark-shade","borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-color-border-color has-dark-shade-background-color has-background" style="border-width:1px;border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;min-height:400px;margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:image {"id":11063,"width":"64px","height":"64px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"border":{"radius":{"topLeft":"50px","topRight":"50px","bottomLeft":"50px","bottomRight":"50px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-11063" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:50px;object-fit:cover;width:64px;height:64px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"style":{"typography":{"fontSize":"40px","lineHeight":"1.2"}}} -->
                    <h2 class="wp-block-heading" style="font-size:40px;line-height:1.2"><?php esc_html_e('Full Site Editing - Take Full Control of your Site', 'saaslauncher'); ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'saaslauncher'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:28px"><!-- wp:button {"className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}}}} -->
                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link wp-element-button" style="border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px"><?php esc_html_e('Learn More', 'saaslauncher'); ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"border":{"width":"1px","radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"}},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"410px"}},"backgroundColor":"dark-shade","borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-color-border-color has-dark-shade-background-color has-background" style="border-width:1px;border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;min-height:410px;margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:image {"id":11064,"width":"64px","height":"64px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"border":{"radius":{"topLeft":"50px","topRight":"50px","bottomLeft":"50px","bottomRight":"50px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-11064" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:50px;object-fit:cover;width:64px;height:64px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"style":{"typography":{"fontSize":"40px","lineHeight":"1.2"}}} -->
                    <h2 class="wp-block-heading" style="font-size:40px;line-height:1.2"><?php esc_html_e('Ready-made website templates', 'saaslauncher'); ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'saaslauncher'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:28px"><!-- wp:button {"className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}}}} -->
                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link wp-element-button" style="border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px"><?php esc_html_e('Learn More', 'saaslauncher'); ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"20px"},"margin":{"top":"20px"}}}} -->
    <div class="wp-block-columns" style="margin-top:20px"><!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"style":{"border":{"width":"1px","radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"}},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"dimensions":{"minHeight":"230px"}},"backgroundColor":"dark-shade","borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-color-border-color has-dark-shade-background-color has-background" style="border-width:1px;border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;min-height:230px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:image {"id":11065,"width":"44px","height":"44px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-11065" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;object-fit:cover;width:44px;height:44px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"style":{"typography":{"fontSize":"24px","lineHeight":"1.3"}}} -->
                    <h2 class="wp-block-heading" style="font-size:24px;line-height:1.3"><?php esc_html_e('Reusable Patterns', 'saaslauncher'); ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'saaslauncher'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"style":{"border":{"width":"1px","radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"}},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"dimensions":{"minHeight":"230px"}},"backgroundColor":"dark-shade","borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-color-border-color has-dark-shade-background-color has-background" style="border-width:1px;border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;min-height:230px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:image {"id":11066,"width":"44px","height":"44px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($saaslauncher_images[3]) ?>" alt="" class="wp-image-11066" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;object-fit:cover;width:44px;height:44px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"style":{"typography":{"fontSize":"24px","lineHeight":"1.3"}}} -->
                    <h2 class="wp-block-heading" style="font-size:24px;line-height:1.3"><?php esc_html_e('WooCommerce Ready', 'saaslauncher'); ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'saaslauncher'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"style":{"border":{"width":"1px","radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"}},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"dimensions":{"minHeight":"230px"}},"backgroundColor":"dark-shade","borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-color-border-color has-dark-shade-background-color has-background" style="border-width:1px;border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;min-height:230px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:image {"id":11067,"width":"44px","height":"44px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($saaslauncher_images[4]) ?>" alt="" class="wp-image-11067" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;object-fit:cover;width:44px;height:44px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"style":{"typography":{"fontSize":"24px","lineHeight":"1.3"}}} -->
                    <h2 class="wp-block-heading" style="font-size:24px;line-height:1.3"><?php esc_html_e('Gutenberg Blocks', 'saaslauncher'); ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'saaslauncher'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"20px"},"margin":{"top":"20px","bottom":"0"}}}} -->
    <div class="wp-block-columns" style="margin-top:20px;margin-bottom:0"><!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"style":{"border":{"width":"1px","radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"}},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"dimensions":{"minHeight":"400px"}},"backgroundColor":"dark-shade","borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-color-border-color has-dark-shade-background-color has-background" style="border-width:1px;border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;min-height:400px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:image {"id":11069,"width":"64px","height":"64px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"border":{"radius":{"topLeft":"50px","topRight":"50px","bottomLeft":"50px","bottomRight":"50px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($saaslauncher_images[5]) ?>" alt="" class="wp-image-11069" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:50px;object-fit:cover;width:64px;height:64px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"style":{"typography":{"fontSize":"40px","lineHeight":"1.2"}}} -->
                    <h2 class="wp-block-heading" style="font-size:40px;line-height:1.2"><?php esc_html_e('Global Styles &amp; Design Controls', 'saaslauncher'); ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'saaslauncher'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:28px"><!-- wp:button {"className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}}}} -->
                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link wp-element-button" style="border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px"><?php esc_html_e('Learn More', 'saaslauncher'); ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"40%"} -->
        <div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"style":{"border":{"width":"1px","radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"}},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"dimensions":{"minHeight":"400px"}},"backgroundColor":"dark-shade","borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-color-border-color has-dark-shade-background-color has-background" style="border-width:1px;border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;min-height:400px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:image {"id":11070,"width":"64px","height":"64px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"border":{"radius":{"topLeft":"50px","topRight":"50px","bottomLeft":"50px","bottomRight":"50px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($saaslauncher_images[6]) ?>" alt="" class="wp-image-11070" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:50px;object-fit:cover;width:64px;height:64px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"style":{"typography":{"fontSize":"40px","lineHeight":"1.2"}}} -->
                    <h2 class="wp-block-heading" style="font-size:40px;line-height:1.2"><?php esc_html_e('Fully Customizable Header Footer', 'saaslauncher'); ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'saaslauncher'); ?></p>
                    <!-- /wp:paragraph -->
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