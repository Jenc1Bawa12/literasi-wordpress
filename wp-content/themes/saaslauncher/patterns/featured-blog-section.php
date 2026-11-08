<?php

/**
 * Title: Featured Blog Section
 * Slug: saaslauncher/featured-blog-section
 * Categories: saaslauncher-post
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
        <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
            <div class="wp-block-query"><!-- wp:post-template -->
                <!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"isUserOverlayColor":true,"minHeight":520,"gradient":"gradient-fourteen","contentPosition":"bottom center","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"}},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;min-height:520px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim has-background-gradient has-gradient-fourteen-gradient-background"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|light-color"}},"color":{"text":"var:preset|color|light-color"}}}},"fontSize":"tiny"} /-->

                        <!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"x-large"} /-->

                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:post-author-name {"className":"is-style-author-name-with-white-icon"} /-->

                            <!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"is-style-post-date-with-white-icon"} /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
                <!-- /wp:post-template -->

                <!-- wp:query-no-results -->
                <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
                <p></p>
                <!-- /wp:paragraph -->
                <!-- /wp:query-no-results -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"33.33%"} -->
        <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":3,"className":"is-style-heading-text-bullet-lead","style":{"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"left":"18px"}}}} -->
                <h3 class="wp-block-heading is-style-heading-text-bullet-lead" style="padding-left:18px;font-size:20px;font-style:normal;font-weight:600;text-transform:uppercase">
                    <?php esc_html_e('Recent News', 'saaslauncher'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"1180px","justifyContent":"center"}} -->
                <div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":29,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
                    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default","columnCount":3}} -->
                        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"20px"},"padding":{"top":"0","right":"0","bottom":"18px","left":"0"},"margin":{"bottom":"18px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border-color","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
                        <div class="wp-block-columns are-vertically-aligned-center" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-bottom:18px;padding-top:0;padding-right:0;padding-bottom:18px;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"120px"} -->
                            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:120px"><!-- wp:post-featured-image {"isLink":true,"width":"120px","height":"120px","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"}}}} /--></div>
                            <!-- /wp:column -->

                            <!-- wp:column {"verticalAlignment":"center","width":""} -->
                            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|light-color"}},"color":{"text":"var:preset|color|heading-color"}}}},"fontSize":"tiny"} /-->

                                    <!-- wp:post-title {"level":4,"isLink":true,"className":"is-style-title-hover-secondary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|30","right":"0"}},"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"500","fontSize":"16px"}},"textColor":"light-color"} /-->

                                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"0"}}},"fontSize":"x-small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group has-x-small-font-size" style="padding-bottom:0"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"is-style-post-date-with-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","fontSize":"xx-small"} /--></div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                        <!-- /wp:post-template -->
                    </div>
                    <!-- /wp:query -->
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