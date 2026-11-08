<?php

/**
 * Title: Post List Sidebar
 * Slug: saaslauncher/post-list-sidebar
 * Categories: saaslauncher-post
 */
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-post"],"name":"Post List Sidebar"},"style":{"spacing":{"margin":{"top":"0px"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"48px","bottom":"48px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="margin-top:0px;padding-top:48px;padding-right:var(--wp--preset--spacing--40);padding-bottom:48px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group"><!-- wp:heading {"level":3,"className":"is-style-heading-text-bullet-lead","style":{"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"left":"18px"}}}} -->
        <h3 class="wp-block-heading is-style-heading-text-bullet-lead" style="padding-left:18px;font-size:20px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('Latest Posts', 'saaslauncher') ?></h3>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"40px","left":"40px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"1180px","justifyContent":"center"}} -->
            <div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":10,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
                <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
                    <!-- wp:columns {"style":{"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border-color","width":"1px"},"left":{"width":"0px","style":"none"}},"spacing":{"margin":{"top":"0","bottom":"28px"},"padding":{"bottom":"28px"}}}} -->
                    <div class="wp-block-columns" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:28px;padding-bottom:28px"><!-- wp:column {"width":"45%"} -->
                        <div class="wp-block-column" style="flex-basis:45%"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"270px","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"}}}} /--></div>
                        <!-- /wp:column -->

                        <!-- wp:column {"width":""} -->
                        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"24px","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                            <div class="wp-block-group" style="margin-top:24px;margin-bottom:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|light-color"}},"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"fontSize":"tiny"} /-->

                                    <!-- wp:post-time-to-read {"style":{"spacing":{"padding":{"bottom":"10px"}}}} /-->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:post-title {"level":4,"isLink":true,"className":"is-style-title-hover-secondary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|30","right":"0"}},"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"500"}},"textColor":"light-color","fontSize":"large"} /-->

                                <!-- wp:post-excerpt {"excerptLength":15} /-->

                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"bottom":"0"},"margin":{"top":"20px","bottom":"0px"}}},"fontSize":"x-small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group has-x-small-font-size" style="margin-top:20px;margin-bottom:0px;padding-bottom:0"><!-- wp:post-author-name {"className":"is-style-author-name-with-icon"} /-->

                                    <!-- wp:post-date {"format":"human-diff","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"is-style-post-date-with-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","fontSize":"xx-small"} /-->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                    <!-- /wp:post-template -->

                    <!-- wp:query-pagination {"className":"is-style-pagination-with-background-round"} -->
                    <!-- wp:query-pagination-previous /-->

                    <!-- wp:query-pagination-numbers /-->

                    <!-- wp:query-pagination-next /-->
                    <!-- /wp:query-pagination -->

                    <!-- wp:query-no-results -->
                    <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
                    <p></p>
                    <!-- /wp:paragraph -->
                    <!-- /wp:query-no-results -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"30%"} -->
        <div class="wp-block-column" style="flex-basis:30%"><!-- wp:template-part {"slug":"sidebar","theme":"saaslauncher","area":"uncategorized"} /--></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->