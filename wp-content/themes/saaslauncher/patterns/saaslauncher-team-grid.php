<?php

/**
 * Title: Team Grid Pro
 * Slug: saaslauncher/saaslauncher-team-grid
 * Categories: ct-saaslauncher-patterns-pro
 */
$saaslauncher_url    = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/person_1.jpg',
    $saaslauncher_url . 'assets/images/person_2.jpg',
    $saaslauncher_url . 'assets/images/person_3.jpg',
    $saaslauncher_url . 'assets/images/person_4.jpg',
    $saaslauncher_url . 'assets/images/person_5.jpg',
    $saaslauncher_url . 'assets/images/person_6.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["ct-saaslauncher-patterns-pro"],"name":"PRO: Team Grid"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"7rem","bottom":"7rem"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0rem","bottom":"0rem"},"margin":{"bottom":"84px"}}},"layout":{"type":"constrained","contentSize":"840px"}} -->
    <div class="wp-block-group" style="margin-bottom:84px;padding-top:0rem;padding-right:0;padding-bottom:0rem;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"12px","left":"12px","top":"5px","bottom":"5px"}},"border":{"width":"1px","radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}}},"backgroundColor":"primary-shade-2","borderColor":"secondary-shade-1","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-secondary-shade-1-border-color has-primary-shade-2-background-color has-background" style="border-width:1px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"5%","fontSize":"13px"}},"textColor":"primary"} -->
                <h5 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-size:13px;font-style:normal;font-weight:500;letter-spacing:5%;text-transform:uppercase"><?php esc_html_e('Our Team', 'saaslauncher'); ?></h5>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500","textAlign":"center"}},"textColor":"light-color","fontSize":"xxx-large"} -->
        <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Built by a Team That Cares', 'saaslauncher'); ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"textAlign":"center"}},"textColor":"foreground-alt","fontSize":"medium"} -->
        <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Meet the creative minds and problem-solvers working together to build better tools for the WordPress community.', 'saaslauncher'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"40px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":749,"dimRatio":0,"customOverlayColor":"#ada4a0","isUserOverlayColor":false,"minHeight":410,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"12px"},"spacing":{"margin":{"bottom":"28px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-radius:12px;margin-bottom:28px;min-height:410px"><img class="wp-block-cover__image-background wp-image-749 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#ada4a0"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textAlign":"left","fontSize":"28px"}},"textColor":"light-color"} -->
                <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color" style="font-size:28px"><?php esc_html_e('John Doe', 'saaslauncher'); ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}},"typography":{"textAlign":"left"}},"textColor":"meta-color","fontSize":"small"} -->
                <p class="has-text-align-left has-meta-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Doe Industries', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"top":"20px"}},"typography":{"textAlign":"left"}},"textColor":"foreground-alt"} -->
                <p class="has-text-align-left has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"black-color","iconColorValue":"#000000","iconBackgroundColor":"light-color","iconBackgroundColorValue":"#FFFFFE","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"24px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:24px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[1]) ?>","id":758,"dimRatio":0,"customOverlayColor":"#a99190","isUserOverlayColor":false,"minHeight":410,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"12px"},"spacing":{"margin":{"bottom":"28px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-radius:12px;margin-bottom:28px;min-height:410px"><img class="wp-block-cover__image-background wp-image-758 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#a99190"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textAlign":"left","fontSize":"28px"}},"textColor":"light-color"} -->
                <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color" style="font-size:28px"><?php esc_html_e('Emma Dola', 'saaslauncher'); ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}},"typography":{"textAlign":"left"}},"textColor":"meta-color","fontSize":"small"} -->
                <p class="has-text-align-left has-meta-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Doe Industries', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"top":"20px"}},"typography":{"textAlign":"left"}},"textColor":"foreground-alt"} -->
                <p class="has-text-align-left has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"black-color","iconColorValue":"#000000","iconBackgroundColor":"light-color","iconBackgroundColorValue":"#FFFFFE","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"24px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:24px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[2]) ?>","id":759,"dimRatio":0,"customOverlayColor":"#b2aeb0","isUserOverlayColor":false,"minHeight":410,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"12px"},"spacing":{"margin":{"bottom":"28px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-radius:12px;margin-bottom:28px;min-height:410px"><img class="wp-block-cover__image-background wp-image-759 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b2aeb0"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textAlign":"left","fontSize":"28px"}},"textColor":"light-color"} -->
                <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color" style="font-size:28px"><?php esc_html_e('Robert Klep', 'saaslauncher'); ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}},"typography":{"textAlign":"left"}},"textColor":"meta-color","fontSize":"small"} -->
                <p class="has-text-align-left has-meta-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Doe Industries', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"top":"20px"}},"typography":{"textAlign":"left"}},"textColor":"foreground-alt"} -->
                <p class="has-text-align-left has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"black-color","iconColorValue":"#000000","iconBackgroundColor":"light-color","iconBackgroundColorValue":"#FFFFFE","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"24px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:24px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"40px"},"margin":{"top":"40px"}}}} -->
    <div class="wp-block-columns" style="margin-top:40px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[3]) ?>","id":758,"dimRatio":0,"customOverlayColor":"#a99190","isUserOverlayColor":false,"minHeight":410,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"12px"},"spacing":{"margin":{"bottom":"28px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-radius:12px;margin-bottom:28px;min-height:410px"><img class="wp-block-cover__image-background wp-image-758 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[3]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#a99190"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textAlign":"left","fontSize":"28px"}},"textColor":"light-color"} -->
                <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color" style="font-size:28px"><?php esc_html_e('Dia Voltur', 'saaslauncher'); ?> </h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}},"typography":{"textAlign":"left"}},"textColor":"meta-color","fontSize":"small"} -->
                <p class="has-text-align-left has-meta-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Doe Industries', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"top":"20px"}},"typography":{"textAlign":"left"}},"textColor":"foreground-alt"} -->
                <p class="has-text-align-left has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"black-color","iconColorValue":"#000000","iconBackgroundColor":"light-color","iconBackgroundColorValue":"#FFFFFE","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"24px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:24px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[4]) ?>","id":759,"dimRatio":0,"customOverlayColor":"#b2aeb0","isUserOverlayColor":false,"minHeight":410,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"12px"},"spacing":{"margin":{"bottom":"28px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-radius:12px;margin-bottom:28px;min-height:410px"><img class="wp-block-cover__image-background wp-image-759 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[4]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b2aeb0"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textAlign":"left","fontSize":"28px"}},"textColor":"light-color"} -->
                <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color" style="font-size:28px"><?php esc_html_e('Max Pater', 'saaslauncher'); ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}},"typography":{"textAlign":"left"}},"textColor":"meta-color","fontSize":"small"} -->
                <p class="has-text-align-left has-meta-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Doe Industries', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"top":"20px"}},"typography":{"textAlign":"left"}},"textColor":"foreground-alt"} -->
                <p class="has-text-align-left has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"black-color","iconColorValue":"#000000","iconBackgroundColor":"light-color","iconBackgroundColorValue":"#FFFFFE","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"24px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:24px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[5]) ?>","id":749,"dimRatio":0,"customOverlayColor":"#ada4a0","isUserOverlayColor":false,"minHeight":410,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"12px"},"spacing":{"margin":{"bottom":"28px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-radius:12px;margin-bottom:28px;min-height:410px"><img class="wp-block-cover__image-background wp-image-749 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[5]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#ada4a0"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textAlign":"left","fontSize":"28px"}},"textColor":"light-color"} -->
                <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color" style="font-size:28px"><?php esc_html_e('Lexy Roy', 'saaslauncher'); ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}},"typography":{"textAlign":"left"}},"textColor":"meta-color","fontSize":"small"} -->
                <p class="has-text-align-left has-meta-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Doe Industries', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"top":"20px"}},"typography":{"textAlign":"left"}},"textColor":"foreground-alt"} -->
                <p class="has-text-align-left has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"black-color","iconColorValue":"#000000","iconBackgroundColor":"light-color","iconBackgroundColorValue":"#FFFFFE","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"24px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:24px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->