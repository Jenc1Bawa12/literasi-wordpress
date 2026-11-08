<?php

/**
 * Title: Team Section
 * Slug: saaslauncher/team-section
 * Categories: saaslauncher-team
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/person_1.jpg',
    $saaslauncher_url . 'assets/images/person_2.jpg',
    $saaslauncher_url . 'assets/images/person_3.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-team"],"name":"Team Section"},"align":"full","style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"64px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:64px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
        <div class="wp-block-group" style="margin-bottom:0px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"20px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <div class="wp-block-group" style="margin-bottom:20px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"15px","left":"15px","top":"7px","bottom":"7px"}},"border":{"width":"1px","radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}}},"backgroundColor":"primary-shade-2","borderColor":"secondary-shade-1","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-border-color has-secondary-shade-1-border-color has-primary-shade-2-background-color has-background" style="border-width:1px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:7px;padding-right:15px;padding-bottom:7px;padding-left:15px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"none","textAlign":"left","fontStyle":"normal","fontWeight":"500","fontSize":"13px"}},"textColor":"primary"} -->
                    <h5 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-link-color" style="font-size:13px;font-style:normal;font-weight:500;text-transform:none"><?php esc_html_e('TEAM', 'saaslauncher'); ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textAlign":"left","lineHeight":"1.2","fontSize":"64px"}},"textColor":"light-color"} -->
            <h1 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:64px;line-height:1.2"><?php esc_html_e('Meet the experts behind every success.', 'saaslauncher'); ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"400px","justifyContent":"left"}} -->
        <div class="wp-block-group" style="margin-bottom:0px"><!-- wp:paragraph {"style":{"typography":{"textAlign":"right"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"medium"} -->
            <p class="has-text-align-right has-foreground-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'saaslauncher'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"28px"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:28px"><!-- wp:button {"className":"is-style-button-with-uparrow-icon","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"18px","bottom":"18px"}},"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}},"typography":{"fontSize":"16px"}}} -->
                <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-custom-font-size wp-element-button" style="border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:18px;padding-right:24px;padding-bottom:18px;padding-left:24px;font-size:16px"><?php esc_html_e('Meet the Team', 'saaslauncher'); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"40px"},"margin":{"top":"64px"}}}} -->
    <div class="wp-block-columns" style="margin-top:64px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":5370,"dimRatio":0,"isUserOverlayColor":true,"minHeight":480,"gradient":"gradient-fourteen","contentPosition":"bottom center","isDark":false,"sizeSlug":"full","className":"is-style-default","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center is-style-default" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;min-height:480px"><img class="wp-block-cover__image-background wp-image-5370 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient has-gradient-fourteen-gradient-background"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"0px","margin":{"top":"30px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group" style="margin-top:30px"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textAlign":"center","fontSize":"28px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                <h3 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:28px;font-style:normal;font-weight:500"><?php esc_html_e('John doe', 'saaslauncher'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"small"} -->
                <p class="has-text-align-center has-foreground-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Chief Technology Officer', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[1]) ?>","id":5371,"dimRatio":0,"isUserOverlayColor":true,"minHeight":480,"gradient":"gradient-fourteen","contentPosition":"bottom center","isDark":false,"sizeSlug":"full","className":"is-style-default","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center is-style-default" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;min-height:480px"><img class="wp-block-cover__image-background wp-image-5371 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient has-gradient-fourteen-gradient-background"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"0px","margin":{"top":"30px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group" style="margin-top:30px"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textAlign":"center","fontSize":"28px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                <h3 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:28px;font-style:normal;font-weight:500"><?php esc_html_e('Olivia Bennett', 'saaslauncher'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Chief Marketing Officer', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[2]) ?>","id":5372,"dimRatio":0,"isUserOverlayColor":true,"minHeight":480,"gradient":"gradient-fourteen","contentPosition":"bottom center","isDark":false,"sizeSlug":"full","className":"is-style-default","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center is-style-default" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;min-height:480px"><img class="wp-block-cover__image-background wp-image-5372 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient has-gradient-fourteen-gradient-background"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"0px","margin":{"top":"30px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group" style="margin-top:30px"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textAlign":"center","fontSize":"28px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                <h3 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:28px;font-style:normal;font-weight:500"><?php esc_html_e('Ethan Carter', 'saaslauncher'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Full-Stack Engineer', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->