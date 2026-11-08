<?php

/**
 * Title: Blog Grid 4
 * Slug: saaslauncher/blog-grid-4
 * Categories: saaslauncher-post
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"48px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="padding-bottom:48px"><!-- wp:heading {"level":3,"className":"is-style-heading-text-bullet-lead","style":{"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"left":"18px"}}}} -->
    <h3 class="wp-block-heading is-style-heading-text-bullet-lead" style="padding-left:18px;font-size:20px;font-style:normal;font-weight:600;text-transform:uppercase">
        <?php esc_html_e('Top Articles', 'saaslauncher'); ?></h3>
    <!-- /wp:heading -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"center"}} -->
    <div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":29,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
        <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"20px"},"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"},"margin":{"bottom":"0px"}},"border":{"width":"1px","color":"#e0e8e6","radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center has-border-color" style="border-color:#e0e8e6;border-width:1px;border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;margin-bottom:0px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:column {"verticalAlignment":"center","width":"140px"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:140px"><!-- wp:post-featured-image {"isLink":true,"width":"140px","height":"140px","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"}}}} /--></div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":""} -->
                <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|light-color"}},"color":{"text":"var:preset|color|heading-color"}}}},"fontSize":"tiny"} /-->

                        <!-- wp:post-title {"level":4,"isLink":true,"className":"is-style-title-hover-secondary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"0","right":"0"}},"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"500","fontSize":"18px"}},"textColor":"light-color"} /-->

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