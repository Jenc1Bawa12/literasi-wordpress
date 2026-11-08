<?php

/**
 * Title: Case Study Pro
 * Slug: saaslauncher/saaslauncher-case-study
 * Categories: ct-saaslauncher-patterns-pro
 */
$saaslauncher_url    = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/benefit_1.jpg',
    $saaslauncher_url . 'assets/images/benefit_2.jpg',
    $saaslauncher_url . 'assets/images/benefit_3.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"PRO: Case Study","categories":["ct-saaslauncher-patterns-pro"]},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"6rem"},"margin":{"top":"0","bottom":"0"}},"background":{"gradient":"var:preset|gradient|gradient-five"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"120px"}}},"layout":{"type":"constrained","contentSize":"740px"}} -->
    <div class="wp-block-group" style="margin-bottom:120px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:group {"className":"is-style-default","style":{"border":{"width":"1px","radius":"20px"},"spacing":{"padding":{"top":"3px","bottom":"3px","left":"8px","right":"8px"}}},"borderColor":"primary","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-default has-border-color has-primary-border-color" style="border-width:1px;border-radius:20px;padding-top:3px;padding-right:8px;padding-bottom:3px;padding-left:8px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Case Studies', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.4","textAlign":"center","fontSize":"64px"}},"textColor":"light-color"} -->
        <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:64px;font-style:normal;font-weight:500;line-height:1.4"><?php esc_html_e('Success Stories That Speak for Themselves', 'saaslauncher'); ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"18px","textAlign":"center"}},"textColor":"foreground-alt"} -->
        <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('Get your website live fast with scalable SaaS tools designed to maximize performance and fuel seamless, sustainable business growth.', 'saaslauncher'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"24px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":""} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":47,"dimRatio":0,"customOverlayColor":"#a39d96","isUserOverlayColor":false,"minHeight":480,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;min-height:480px"><img class="wp-block-cover__image-background wp-image-47 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#a39d96"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"width":"1px","radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"}},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}},"dimensions":{"minHeight":"480px"}},"backgroundColor":"background-alt","borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-color-border-color has-background-alt-background-color has-background" style="border-width:1px;border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;min-height:480px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                <div class="wp-block-group" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"12px","left":"12px","top":"5px","bottom":"5px"}},"border":{"width":"1px","radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}}},"backgroundColor":"primary-shade-2","borderColor":"secondary-shade-1","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-border-color has-secondary-shade-1-border-color has-primary-shade-2-background-color has-background" style="border-width:1px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                        <p class="has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Growth Strategy', 'saaslauncher'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3","fontSize":"40px"},"spacing":{"margin":{"top":"10px"}}},"textColor":"light-color"} -->
                <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="margin-top:10px;font-size:40px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('How We Helped a SaaS Brand Scale from 1K to 10K Users in 90 Days', 'saaslauncher'); ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"medium"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"28px"}}}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:28px"><!-- wp:button {"className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":"60px"}}} -->
                    <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link wp-element-button" style="border-radius:60px"><?php esc_html_e('See the Full Story', 'saaslauncher'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"24px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"width":"1px","radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"}},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}},"dimensions":{"minHeight":"480px"}},"backgroundColor":"background-alt","borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-color-border-color has-background-alt-background-color has-background" style="border-width:1px;border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;min-height:480px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                <div class="wp-block-group" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"12px","left":"12px","top":"5px","bottom":"5px"}},"border":{"width":"1px","radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}}},"backgroundColor":"primary-shade-2","borderColor":"secondary-shade-1","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-border-color has-secondary-shade-1-border-color has-primary-shade-2-background-color has-background" style="border-width:1px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                        <p class="has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Startup Launch', 'saaslauncher'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3"},"spacing":{"margin":{"top":"10px"}}},"textColor":"light-color"} -->
                <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="margin-top:10px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Launching a Full SaaS MVP from Scratch in Just One Month', 'saaslauncher'); ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"medium"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"28px"}}}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:28px"><!-- wp:button {"className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":"60px"}}} -->
                    <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link wp-element-button" style="border-radius:60px"><?php esc_html_e('See the Full Story', 'saaslauncher'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":""} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[1]) ?>","id":47,"dimRatio":0,"customOverlayColor":"#a39d96","isUserOverlayColor":false,"minHeight":480,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;min-height:480px"><img class="wp-block-cover__image-background wp-image-47 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#a39d96"></span>
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

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"24px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":""} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[2]) ?>","id":47,"dimRatio":0,"customOverlayColor":"#a39d96","isUserOverlayColor":false,"minHeight":480,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;min-height:480px"><img class="wp-block-cover__image-background wp-image-47 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#a39d96"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"width":"1px","radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"}},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}},"dimensions":{"minHeight":"480px"}},"backgroundColor":"background-alt","borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-color-border-color has-background-alt-background-color has-background" style="border-width:1px;border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;min-height:480px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                <div class="wp-block-group" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"12px","left":"12px","top":"5px","bottom":"5px"}},"border":{"width":"1px","radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}}},"backgroundColor":"primary-shade-2","borderColor":"secondary-shade-1","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-border-color has-secondary-shade-1-border-color has-primary-shade-2-background-color has-background" style="border-width:1px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                        <p class="has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('SaaS UI/UX', 'saaslauncher'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3"},"spacing":{"margin":{"top":"10px"}}},"textColor":"light-color"} -->
                <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="margin-top:10px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Cutting Customer Churn by 42% with UX and Retention Strategy', 'saaslauncher'); ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"medium"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"28px"}}}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:28px"><!-- wp:button {"className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":"60px"}}} -->
                    <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link wp-element-button" style="border-radius:60px"><?php esc_html_e('See the Full Story', 'saaslauncher'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->