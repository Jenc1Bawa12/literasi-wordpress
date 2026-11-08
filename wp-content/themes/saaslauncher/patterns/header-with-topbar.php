<?php

/**
 * Title: Header with topbar
 * Slug: saaslauncher/header-with-topbar
 * Categories: header
 * Keywords: header, nav, links, button
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"categories":["header"],"name":"Header with Topbar","patternName":"saaslauncher/header-with-topbar"},"align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"color":{"background":"#090a0f"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#090a0f;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"5px","bottom":"5px"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1230px"}} -->
    <div class="wp-block-group has-primary-background-color has-background" style="padding-top:5px;padding-right:var(--wp--preset--spacing--40);padding-bottom:5px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"textAlign":"center"}},"fontSize":"x-small"} -->
            <h5 class="wp-block-heading has-text-align-center has-x-small-font-size"><?php esc_html_e('Special Launch Offer: 40% Off All Plans', 'saaslauncher') ?></h5>
            <!-- /wp:heading -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-hover-light-bgcolor","style":{"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"#FFFFFE","width":"1px"},"left":{"width":"0px","style":"none"}}},"fontSize":"x-small"} -->
                <div class="wp-block-button is-style-button-hover-light-bgcolor"><a class="wp-block-button__link has-x-small-font-size has-custom-font-size wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:#FFFFFE;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Grab the Deal', 'saaslauncher') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"saaslauncher-header is-style-default","style":{"spacing":{"padding":{"top":"20px","right":"var:preset|spacing|40","bottom":"20px","left":"var:preset|spacing|40"}},"border":{"bottom":{"width":"0px","style":"none"}}},"backgroundColor":"transparent","layout":{"type":"constrained","contentSize":"1230px"}} -->
    <div class="wp-block-group saaslauncher-header is-style-default has-transparent-background-color has-background" style="border-bottom-style:none;border-bottom-width:0px;padding-top:20px;padding-right:var(--wp--preset--spacing--40);padding-bottom:20px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"is-style-saaslauncher-boxshadow","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"100px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group is-style-saaslauncher-boxshadow" style="border-radius:100px;margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:site-logo {"width":44,"shouldSyncIcon":false,"style":{"color":{"duotone":"unset"}}} /-->

                    <!-- wp:site-title {"style":{"typography":{"textTransform":"none","letterSpacing":"0px","fontSize":"32px","lineHeight":"1","fontStyle":"italic","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"0px"}}},"fontFamily":"instrument-serif"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:navigation {"textColor":"light-color","overlayBackgroundColor":"secondary-bg","overlayTextColor":"black-color","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"saaslauncher-navigation is-style-saaslauncher-navigation","style":{"typography":{"textTransform":"none","lineHeight":"2"},"spacing":{"blockGap":"24px"}},"fontSize":"small","layout":{"type":"flex","justifyContent":"center"}} -->
                <!-- wp:home-link /-->
                <!-- wp:page-list /-->
                <!-- /wp:navigation -->
                <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
                <div class="wp-block-buttons is-style-button-zoom-on-hover"><!-- wp:button {"className":"is-style-fill","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"},"color":"#ffffff14","width":"2px"},"spacing":{"padding":{"left":"16px","right":"16px","top":"8px","bottom":"8px"}}},"fontSize":"small"} -->
                    <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-border-color has-small-font-size has-custom-font-size wp-element-button" style="border-color:#ffffff14;border-width:2px;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px"><?php esc_html_e('Sign up Today', 'saaslauncher') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->