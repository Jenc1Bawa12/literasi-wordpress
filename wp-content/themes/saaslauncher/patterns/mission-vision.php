<?php

/**
 * Title: Mission & Vision Section
 * Slug: saaslauncher/mission-vision
 * Categories: saaslauncher-about
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/about_2.jpg',
    $saaslauncher_url . 'assets/images/about_3.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-about"],"name":"Mission \u0026 Vision Section"},"align":"full","style":{"spacing":{"padding":{"top":"9rem","bottom":"8rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:9rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"100px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"48px"}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"","justifyContent":"left"}} -->
            <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                <div class="wp-block-group" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"12px","left":"12px","top":"5px","bottom":"5px"}},"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"},"width":"1px"}},"backgroundColor":"background-alt","borderColor":"border-color","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-border-color has-border-color-border-color has-background-alt-background-color has-background" style="border-width:1px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontSize":"13px","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary"} -->
                        <h5 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-size:13px;font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e('Our Mission', 'saaslauncher'); ?></h5>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"lineHeight":"1.3","fontSize":"60px"}},"textColor":"heading-color"} -->
                <h1 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="font-size:60px;line-height:1.3"><?php esc_html_e('Building Tools That Simplify Modern Work', 'saaslauncher'); ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"28px"}}}} -->
                <p style="margin-bottom:28px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"40px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"textColor":"light-color","className":"is-style-button-hover-secondary-bgcolor","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"10px","bottom":"10px"}},"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"},"color":"#ffffff14","width":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"fontSize":"small"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-light-color-color has-text-color has-link-color has-border-color has-small-font-size has-custom-font-size wp-element-button" style="border-color:#ffffff14;border-width:2px;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px"><?php esc_html_e('Join Free Today', 'saaslauncher'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"48px"}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"id":6108,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"}}}} -->
            <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-6108" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"100px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"48px"}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"id":6108,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"}}}} -->
            <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-6108" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"48px"}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"","justifyContent":"left"}} -->
            <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                <div class="wp-block-group" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"12px","left":"12px","top":"5px","bottom":"5px"}},"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"},"width":"1px"}},"backgroundColor":"background-alt","borderColor":"border-color","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-border-color has-border-color-border-color has-background-alt-background-color has-background" style="border-width:1px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontSize":"13px","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary"} -->
                        <h5 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-size:13px;font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e('Our Vision', 'saaslauncher'); ?></h5>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"lineHeight":"1.3","fontSize":"60px"}},"textColor":"heading-color"} -->
                <h1 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="font-size:60px;line-height:1.3"><?php esc_html_e('Building a Future Where Work Feels Effortless', 'saaslauncher'); ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"28px"}}}} -->
                <p style="margin-bottom:28px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"40px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"textColor":"light-color","className":"is-style-button-hover-secondary-bgcolor","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"10px","bottom":"10px"}},"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"},"color":"#ffffff14","width":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"fontSize":"small"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-light-color-color has-text-color has-link-color has-border-color has-small-font-size has-custom-font-size wp-element-button" style="border-color:#ffffff14;border-width:2px;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px"><?php esc_html_e('Join Free Today', 'saaslauncher'); ?></a></div>
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