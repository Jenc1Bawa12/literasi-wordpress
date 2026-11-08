<?php

/**
 * Title: Latest Post Grid 2
 * Slug: saaslauncher/latest-post-grid-2
 * Categories: saaslauncher-post
 */
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-post"],"name":"Post Grid 2"},"align":"full","style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-dark-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"84px"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"left"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:84px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":1,"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textAlign":"left","fontSize":"60px"}},"textColor":"light-color"} -->
                <h1 class="wp-block-heading has-text-align-left is-style-default has-light-color-color has-text-color has-link-color" style="font-size:60px"><?php esc_html_e('Recent Insight Articles', 'saaslauncher'); ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"medium"} -->
                <p class="has-text-align-left has-foreground-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover"} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover"><!-- wp:button {"className":"is-style-button-with-uparrow-icon","style":{"spacing":{"padding":{"left":"20px","right":"20px","top":"18px","bottom":"18px"}},"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"},"width":"0px","style":"none"}},"fontSize":"normal"} -->
                <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-normal-font-size has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:18px;padding-right:20px;padding-bottom:18px;padding-left:20px"><?php esc_html_e('More Articles', 'saaslauncher'); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"40px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-group" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:query {"queryId":22,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
                <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"64px"}},"layout":{"type":"grid","columnCount":1}} -->
                    <!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-default" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"410px","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"}}}} /-->

                        <!-- wp:group {"style":{"spacing":{"margin":{"top":"30px","bottom":"0"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="margin-top:30px;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0px","bottom":"15px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group" style="margin-top:0px;margin-bottom:15px"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"}},"textColor":"light-color","fontSize":"x-small"} /--></div>
                            <!-- /wp:group -->

                            <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"5px"}}},"fontSize":"x-large"} /-->

                            <!-- wp:post-excerpt {"excerptLength":22,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} /-->
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
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-group" style="margin-top:0px"><!-- wp:query {"queryId":22,"query":{"perPage":3,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
                <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"grid","columnCount":1}} -->
                    <!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-default" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:columns -->
                        <div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
                            <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-featured-image {"isLink":true,"height":"180px","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"}}}} /--></div>
                            <!-- /wp:column -->

                            <!-- wp:column {"width":"66.66%"} -->
                            <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
                                <div class="wp-block-group" style="margin-top:0px;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0px","bottom":"15px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group" style="margin-top:0px;margin-bottom:15px"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"}},"textColor":"light-color","fontSize":"x-small"} /--></div>
                                    <!-- /wp:group -->

                                    <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"5px"}}},"fontSize":"big"} /-->

                                    <!-- wp:post-excerpt {"excerptLength":12,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} /-->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:post-template -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->