<?php

/**
 * Title: Sidebar Default
 * Slug: saaslauncher/sidebar-default
 * Categories: saaslauncher
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/person_7.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher"],"name":"Sidebar Default"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"transparent","layout":{"type":"constrained","contentSize":"580px"}} -->
<div class="wp-block-group has-transparent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"24px"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"width":"1px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;margin-bottom:24px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"},"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-bottom:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
            <h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Search', 'saaslauncher'); ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"className":"is-style-saaslauncher-search-style-two","style":{"border":{"radius":"8px","width":"1px"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"primary","textColor":"light-color","fontSize":"small","borderColor":"border-color"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"28px","right":"28px"},"margin":{"top":"0","bottom":"24px"}},"border":{"width":"1px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"dimensions":{"minHeight":"0px"}},"borderColor":"border-color","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;min-height:0px;margin-top:0;margin-bottom:24px;padding-top:40px;padding-right:28px;padding-bottom:40px;padding-left:28px"><!-- wp:image {"id":6090,"width":"130px","height":"130px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-6090" style="border-radius:100px;object-fit:cover;width:130px;height:130px" /></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"40px"}},"typography":{"textAlign":"center"}},"textColor":"heading-color","fontSize":"big"} -->
        <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color has-big-font-size" style="margin-top:40px"><?php esc_html_e('Rozita Brandson', 'saaslauncher'); ?></h4>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"10px","bottom":"0"}},"typography":{"textAlign":"center"}},"textColor":"heading-color"} -->
        <p class="has-text-align-center has-heading-color-color has-text-color has-link-color" style="margin-top:10px;margin-bottom:0"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.', 'saaslauncher'); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#0b1f1b","className":"is-style-logos-only","style":{"spacing":{"margin":{"top":"28px"},"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
        <ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:28px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

            <!-- wp:social-link {"url":"#","service":"x"} /-->

            <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

            <!-- wp:social-link {"url":"#","service":"youtube"} /-->

            <!-- wp:social-link {"url":"#","service":"dribbble"} /-->
        </ul>
        <!-- /wp:social-links -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"margin":{"top":"0","bottom":"24px"}},"border":{"width":"1px","radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"}}},"borderColor":"border-color","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;margin-top:0;margin-bottom:24px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"0px"}},"typography":{"textAlign":"left"}},"textColor":"heading-color","fontSize":"big"} -->
        <h4 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color has-big-font-size" style="margin-top:0px"><?php esc_html_e('Signup Newsletter', 'saaslauncher'); ?></h4>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"10px","bottom":"0"}},"typography":{"textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
        <p class="has-text-align-left has-foreground-color has-text-color has-link-color" style="margin-top:10px;margin-bottom:0"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium illo inventore.', 'saaslauncher'); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:contact-form-7/contact-form-selector {"id":253,"hash":"f245613","title":"Newsletter","className":"saaslauncher-newsletter-1"} -->
        <div class="wp-block-contact-form-7-contact-form-selector saaslauncher-newsletter-1">[contact-form-7 id="f245613" title="Newsletter"]</div>
        <!-- /wp:contact-form-7/contact-form-selector -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"24px"},"padding":{"top":"28px","bottom":"5px","left":"28px","right":"28px"}},"border":{"width":"1px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;margin-bottom:24px;padding-top:28px;padding-right:28px;padding-bottom:5px;padding-left:28px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"},"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-bottom:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
            <h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Latest Posts', 'saaslauncher'); ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"1180px","justifyContent":"center"}} -->
        <div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":29,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"excludeCurrent":null}} -->
            <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
                <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"16px"}}}} -->
                <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"120px"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:120px"><!-- wp:post-featured-image {"isLink":true,"width":"120px","height":"94px","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}}} /--></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":""} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:post-title {"level":4,"isLink":true,"className":"is-style-title-hover-secondary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"bottom":"var:preset|spacing|40","top":"0","right":"0"}},"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"500"}},"textColor":"light-color","fontSize":"small"} /-->

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

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"24px"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"width":"1px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;margin-bottom:24px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"},"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-bottom:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
            <h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Categories', 'saaslauncher'); ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:categories {"showHierarchy":true,"showPostCounts":true,"className":"is-style-fotawp-categories-bullet-hide-style is-style-storemate-categories-bullet-hide-style is-style-saaslauncher-categories-bullet-hide-style","style":{"typography":{"lineHeight":"2"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"24px"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"width":"1px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;margin-bottom:24px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"},"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-bottom:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
            <h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Tag Cloud', 'saaslauncher'); ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:tag-cloud /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"24px"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"width":"1px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;margin-bottom:24px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"},"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-bottom:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"big"} -->
            <h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Social Media', 'saaslauncher'); ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:social-links {"openInNewTab":true,"showLabels":true,"className":"is-style-saaslauncher-social-links-half-width","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
        <ul class="wp-block-social-links has-visible-labels is-style-saaslauncher-social-links-half-width" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px"><!-- wp:social-link {"url":"#","service":"wordpress","label":"WordPress"} /-->

            <!-- wp:social-link {"url":"#","service":"facebook","label":"Facebook"} /-->

            <!-- wp:social-link {"url":"#","service":"x","label":"X"} /-->

            <!-- wp:social-link {"url":"#","service":"linkedin","label":"Linkedin"} /-->

            <!-- wp:social-link {"url":"#","service":"youtube","label":"YouTube"} /-->

            <!-- wp:social-link {"url":"#","service":"reddit","label":"Reddit"} /-->
        </ul>
        <!-- /wp:social-links -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->