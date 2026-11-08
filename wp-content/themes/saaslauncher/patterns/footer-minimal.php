<?php

/**
 * Title: Minimal Footer
 * Slug: saaslauncher/footer-minimal
 * Categories: footer
 * Block Types: core/template-part/footer
 * Post Types: wp_template
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"categories":["footer"],"name":"Footer Minimal"},"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-dark-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"84px","bottom":"64px"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
    <div class="wp-block-group" style="margin-top:0px;padding-top:84px;padding-bottom:64px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:site-logo {"width":40} /-->

            <!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"large"} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"medium"} -->
        <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-medium-font-size">
            <?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.', 'saaslauncher'); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","iconBackgroundColor":"primary","iconBackgroundColorValue":"#0f9d8a","size":"has-normal-icon-size","className":"is-style-default","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"bottom":"40px","top":"40px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
        <ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color is-style-default" style="margin-top:40px;margin-bottom:40px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

            <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

            <!-- wp:social-link {"url":"#","service":"x"} /-->

            <!-- wp:social-link {"url":"#","service":"youtube"} /-->
        </ul>
        <!-- /wp:social-links -->

        <!-- wp:navigation {"textColor":"light-color","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","justifyContent":"center"}} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"32px","bottom":"32px"},"margin":{"top":"0px","bottom":"0"}},"border":{"top":{"color":"var:preset|color|foreground","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--foreground);border-top-width:1px;margin-top:0px;margin-bottom:0;padding-top:32px;padding-right:var(--wp--preset--spacing--40);padding-bottom:32px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"className":"has-light-color-color has-text-color has-link-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.5"}},"textColor":"light-color","fontSize":"normal"} -->
            <p class="has-light-color-color has-text-color has-link-color has-normal-font-size" style="line-height:1.5">
                <?php esc_html_e('Proudly powered by WordPress | SaasLauncher by CozyThemes.', 'saaslauncher'); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"tertiary","textColor":"foregound-alt","className":"saaslauncher-scrollto-top is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"50%"}}} -->
        <div class="wp-block-button saaslauncher-scrollto-top is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-tertiary-background-color has-text-color has-background wp-element-button" style="border-radius:50%">
                <?php esc_html_e('Scroll to Top', 'saaslauncher'); ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->