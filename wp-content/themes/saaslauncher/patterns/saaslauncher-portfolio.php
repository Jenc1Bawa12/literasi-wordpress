<?php

/**
 * Title: Portfolio Pro
 * Slug: saaslauncher/saaslauncher-portfolio
 * Categories: ct-saaslauncher-patterns-pro
 */
$saaslauncher_url    = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/p20.jpg',
    $saaslauncher_url . 'assets/images/p22.jpg',
    $saaslauncher_url . 'assets/images/p21.jpg',
    $saaslauncher_url . 'assets/images/p23.jpg',
    $saaslauncher_url . 'assets/images/p24.jpg',
    $saaslauncher_url . 'assets/images/p25.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Portfolio Pro","categories":["ct-saaslauncher-patterns-pro"]},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"4rem"}},"background":{"gradient":"var:preset|gradient|gradient-five"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:4rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"64px"}}},"layout":{"type":"constrained","contentSize":"540px"}} -->
    <div class="wp-block-group" style="margin-bottom:64px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"12px","left":"12px","top":"5px","bottom":"5px"}},"border":{"width":"1px","radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}}},"borderColor":"primary","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-primary-border-color" style="border-width:1px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"5%","fontSize":"13px"}},"textColor":"primary"} -->
                <h5 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-size:13px;font-style:normal;font-weight:500;letter-spacing:5%;text-transform:uppercase"><?php esc_html_e('Portfolio Showcase', 'saaslauncher') ?></h5>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"64px","textAlign":"center"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-size:64px"><?php esc_html_e('Explore Projects Built for Growth', 'saaslauncher') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
        <p class="has-text-align-center"><?php esc_html_e('Explore thoughtfully crafted websites built to help businesses stand out and grow online.', 'saaslauncher') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/featured-content-box {"blockClientId":"4c8e71fe-434d-45f2-a15c-fa0c365de268","layout":"gallery","gridOptions":{"enableMasonry":true,"columnCount":2,"gap":28}} -->
    <div class="cozy-block-featured-content-box display-grid layout-gallery has-masonry  " id="cozyBlock_4c8e71fe_434d_45f2_a15c_fa0c365de268">
        <div class="cozy-grid-wrapper "><!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":11072,"dimRatio":0,"overlayColor":"black-color","isUserOverlayColor":true,"minHeight":380,"contentPosition":"bottom center","sizeSlug":"full","className":"cozy-featured-content-box__layout-gallery","style":{"elements":{"heading":{"color":{"text":"#fffffe"}},"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"}}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-center cozy-featured-content-box__layout-gallery has-text-color has-link-color" style="color:#fffffe;min-height:380px"><img class="wp-block-cover__image-background wp-image-11072 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-black-color-background-color has-background-dim-0 has-background-dim"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"lock":{"move":true,"remove":true},"className":"cozy-featured-content-box__container","style":{"border":{"style":"none","width":"0px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group cozy-featured-content-box__container" style="border-style:none;border-width:0px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"16px","left":"16px","top":"20px","bottom":"20px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"borderColor":"primary","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group has-border-color has-primary-border-color" style="border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;margin-top:0;margin-bottom:0;padding-top:20px;padding-right:16px;padding-bottom:20px;padding-left:16px"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"}}} -->
                                <h3 class="wp-block-heading" style="font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('E-Commerce Solutions', 'saaslauncher') ?></h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p><?php esc_html_e('Build seamless e-commerce experiences that make it easier for businesses to showcase products, engage customers, and drive sales.', 'saaslauncher') ?></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"16px"}},"typography":{"fontSize":"14px"}},"layout":{"type":"flex","justifyContent":"left"}} -->
                                <div class="wp-block-buttons has-custom-font-size is-style-button-transofom-on-hover" style="margin-top:16px;font-size:14px"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"}},"color":{"text":"#fffffe"},"elements":{"link":{"color":{"text":"#fffffe"}}},"spacing":{"padding":{"left":"26px","right":"26px","top":"12px","bottom":"12px"}}}} -->
                                    <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-top-left-radius:100px;border-top-right-radius:100px;border-bottom-left-radius:100px;border-bottom-right-radius:100px;color:#fffffe;padding-top:12px;padding-right:26px;padding-bottom:12px;padding-left:26px">Learn More</a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"top":"20px","bottom":"20px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-bottom:20px"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading"><?php esc_html_e('E-Commerce Solutions', 'saaslauncher') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('UI/Ux , Web Design', 'saaslauncher') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[1]) ?>","id":11074,"dimRatio":0,"overlayColor":"black-color","isUserOverlayColor":true,"minHeight":510,"contentPosition":"bottom center","isDark":false,"sizeSlug":"full","className":"cozy-featured-content-box__layout-gallery","style":{"elements":{"heading":{"color":{"text":"#fffffe"}},"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"}}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center cozy-featured-content-box__layout-gallery has-text-color has-link-color" style="color:#fffffe;min-height:510px"><img class="wp-block-cover__image-background wp-image-11074 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-black-color-background-color has-background-dim-0 has-background-dim"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"lock":{"move":true,"remove":true},"className":"cozy-featured-content-box__container","style":{"border":{"style":"none","width":"0px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group cozy-featured-content-box__container" style="border-style:none;border-width:0px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"16px","left":"16px","top":"20px","bottom":"20px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"borderColor":"primary","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group has-border-color has-primary-border-color" style="border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;margin-top:0;margin-bottom:0;padding-top:20px;padding-right:16px;padding-bottom:20px;padding-left:16px"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"}}} -->
                                <h3 class="wp-block-heading" style="font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Branding', 'saaslauncher') ?></h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p><?php esc_html_e('Create memorable brand experiences with thoughtful visual identity, consistent messaging, and designs that connect with your audience.', 'saaslauncher') ?></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"16px"}},"typography":{"fontSize":"14px"}},"layout":{"type":"flex","justifyContent":"left"}} -->
                                <div class="wp-block-buttons has-custom-font-size is-style-button-transofom-on-hover" style="margin-top:16px;font-size:14px"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"}},"color":{"text":"#fffffe"},"elements":{"link":{"color":{"text":"#fffffe"}}},"spacing":{"padding":{"left":"26px","right":"26px","top":"12px","bottom":"12px"}}}} -->
                                    <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-top-left-radius:100px;border-top-right-radius:100px;border-bottom-left-radius:100px;border-bottom-right-radius:100px;color:#fffffe;padding-top:12px;padding-right:26px;padding-bottom:12px;padding-left:26px">Learn More</a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"top":"20px","bottom":"20px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-bottom:20px"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading"><?php esc_html_e('Branding', 'saaslauncher') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Redesign . Marketing', 'saaslauncher') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[2]) ?>","id":11073,"dimRatio":0,"overlayColor":"black-color","isUserOverlayColor":true,"minHeight":740,"contentPosition":"bottom center","isDark":false,"sizeSlug":"full","className":"cozy-featured-content-box__layout-gallery","style":{"elements":{"heading":{"color":{"text":"#fffffe"}},"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"}}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center cozy-featured-content-box__layout-gallery has-text-color has-link-color" style="color:#fffffe;min-height:740px"><img class="wp-block-cover__image-background wp-image-11073 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-black-color-background-color has-background-dim-0 has-background-dim"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"lock":{"move":true,"remove":true},"className":"cozy-featured-content-box__container","style":{"border":{"style":"none","width":"0px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group cozy-featured-content-box__container" style="border-style:none;border-width:0px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"16px","left":"16px","top":"20px","bottom":"20px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"borderColor":"primary","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group has-border-color has-primary-border-color" style="border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;margin-top:0;margin-bottom:0;padding-top:20px;padding-right:16px;padding-bottom:20px;padding-left:16px"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"}}} -->
                                <h3 class="wp-block-heading" style="font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Lead Planner', 'saaslauncher') ?></h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p><?php esc_html_e('A smart lead planning solution designed to help businesses organize prospects, streamline follow-ups, and turn more leads into customers.', 'saaslauncher') ?></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"16px"}},"typography":{"fontSize":"14px"}},"layout":{"type":"flex","justifyContent":"left"}} -->
                                <div class="wp-block-buttons has-custom-font-size is-style-button-transofom-on-hover" style="margin-top:16px;font-size:14px"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"}},"color":{"text":"#fffffe"},"elements":{"link":{"color":{"text":"#fffffe"}}},"spacing":{"padding":{"left":"26px","right":"26px","top":"12px","bottom":"12px"}}}} -->
                                    <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-top-left-radius:100px;border-top-right-radius:100px;border-bottom-left-radius:100px;border-bottom-right-radius:100px;color:#fffffe;padding-top:12px;padding-right:26px;padding-bottom:12px;padding-left:26px">Learn More</a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"top":"20px","bottom":"20px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-bottom:20px"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading"><?php esc_html_e('Lead Planer', 'saaslauncher') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Design . Marketing . Strategy', 'saaslauncher') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->
        </div>
    </div>
    <!-- /wp:cozy-block/featured-content-box -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"32px","bottom":"0"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:32px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/featured-content-box {"blockClientId":"74eafa29-3462-4e9b-9456-7e2557b45a51","layout":"gallery","gridOptions":{"enableMasonry":true,"columnCount":3,"gap":28}} -->
        <div class="cozy-block-featured-content-box display-grid layout-gallery has-masonry  " id="cozyBlock_74eafa29_3462_4e9b_9456_7e2557b45a51">
            <div class="cozy-grid-wrapper "><!-- wp:cozy-block/grid -->
                <div class="cozy-block-grid"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[3]) ?>","id":11075,"dimRatio":0,"overlayColor":"black-color","isUserOverlayColor":true,"minHeight":460,"contentPosition":"bottom center","isDark":false,"sizeSlug":"full","className":"cozy-featured-content-box__layout-gallery","style":{"elements":{"heading":{"color":{"text":"#fffffe"}},"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"}}} -->
                    <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center cozy-featured-content-box__layout-gallery has-text-color has-link-color" style="color:#fffffe;min-height:460px"><img class="wp-block-cover__image-background wp-image-11075 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[3]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-black-color-background-color has-background-dim-0 has-background-dim"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"lock":{"move":true,"remove":true},"className":"cozy-featured-content-box__container","style":{"border":{"style":"none","width":"0px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group cozy-featured-content-box__container" style="border-style:none;border-width:0px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"16px","left":"16px","top":"20px","bottom":"20px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"borderColor":"primary","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group has-border-color has-primary-border-color" style="border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;margin-top:0;margin-bottom:0;padding-top:20px;padding-right:16px;padding-bottom:20px;padding-left:16px"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"}}} -->
                                    <h3 class="wp-block-heading" style="font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Startup', 'saaslauncher') ?></h3>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph -->
                                    <p><?php esc_html_e('Build a strong digital foundation for startups with modern design, clear messaging, and scalable solutions built for growth.', 'saaslauncher') ?></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"16px"}},"typography":{"fontSize":"14px"}},"layout":{"type":"flex","justifyContent":"left"}} -->
                                    <div class="wp-block-buttons has-custom-font-size is-style-button-transofom-on-hover" style="margin-top:16px;font-size:14px"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"}},"color":{"text":"#fffffe"},"elements":{"link":{"color":{"text":"#fffffe"}}},"spacing":{"padding":{"left":"26px","right":"26px","top":"12px","bottom":"12px"}}}} -->
                                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-top-left-radius:100px;border-top-right-radius:100px;border-bottom-left-radius:100px;border-bottom-right-radius:100px;color:#fffffe;padding-top:12px;padding-right:26px;padding-bottom:12px;padding-left:26px">Learn More</a></div>
                                        <!-- /wp:button -->
                                    </div>
                                    <!-- /wp:buttons -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                    </div>
                    <!-- /wp:cover -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"top":"20px","bottom":"20px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-bottom:20px"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading"><?php esc_html_e('Startup', 'saaslauncher') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Consulting . Design', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/grid -->

                <!-- wp:cozy-block/grid -->
                <div class="cozy-block-grid"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[4]) ?>","id":11076,"dimRatio":0,"overlayColor":"black-color","isUserOverlayColor":true,"minHeight":460,"contentPosition":"bottom center","isDark":false,"sizeSlug":"full","className":"cozy-featured-content-box__layout-gallery","style":{"elements":{"heading":{"color":{"text":"#fffffe"}},"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"}}} -->
                    <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center cozy-featured-content-box__layout-gallery has-text-color has-link-color" style="color:#fffffe;min-height:460px"><img class="wp-block-cover__image-background wp-image-11076 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[4]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-black-color-background-color has-background-dim-0 has-background-dim"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"lock":{"move":true,"remove":true},"className":"cozy-featured-content-box__container","style":{"border":{"style":"none","width":"0px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group cozy-featured-content-box__container" style="border-style:none;border-width:0px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"16px","left":"16px","top":"20px","bottom":"20px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"borderColor":"primary","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group has-border-color has-primary-border-color" style="border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;margin-top:0;margin-bottom:0;padding-top:20px;padding-right:16px;padding-bottom:20px;padding-left:16px"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"}}} -->
                                    <h3 class="wp-block-heading" style="font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('SaaS Platform', 'saaslauncher') ?></h3>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph -->
                                    <p><?php esc_html_e('Design intuitive SaaS experiences that simplify complex workflows, improve user engagement, and help products deliver lasting value.', 'saaslauncher') ?></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"16px"}},"typography":{"fontSize":"14px"}},"layout":{"type":"flex","justifyContent":"left"}} -->
                                    <div class="wp-block-buttons has-custom-font-size is-style-button-transofom-on-hover" style="margin-top:16px;font-size:14px"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"}},"color":{"text":"#fffffe"},"elements":{"link":{"color":{"text":"#fffffe"}}},"spacing":{"padding":{"left":"26px","right":"26px","top":"12px","bottom":"12px"}}}} -->
                                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-top-left-radius:100px;border-top-right-radius:100px;border-bottom-left-radius:100px;border-bottom-right-radius:100px;color:#fffffe;padding-top:12px;padding-right:26px;padding-bottom:12px;padding-left:26px">Learn More</a></div>
                                        <!-- /wp:button -->
                                    </div>
                                    <!-- /wp:buttons -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                    </div>
                    <!-- /wp:cover -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"top":"20px","bottom":"20px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-bottom:20px"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading"><?php esc_html_e('SaaS Platform', 'saaslauncher') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Software . Development', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/grid -->

                <!-- wp:cozy-block/grid -->
                <div class="cozy-block-grid"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[5]) ?>","id":11077,"dimRatio":0,"overlayColor":"black-color","isUserOverlayColor":true,"minHeight":460,"contentPosition":"bottom center","isDark":false,"sizeSlug":"full","className":"cozy-featured-content-box__layout-gallery","style":{"elements":{"heading":{"color":{"text":"#fffffe"}},"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"}}} -->
                    <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center cozy-featured-content-box__layout-gallery has-text-color has-link-color" style="color:#fffffe;min-height:460px"><img class="wp-block-cover__image-background wp-image-11077 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[5]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-black-color-background-color has-background-dim-0 has-background-dim"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"lock":{"move":true,"remove":true},"className":"cozy-featured-content-box__container","style":{"border":{"style":"none","width":"0px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group cozy-featured-content-box__container" style="border-style:none;border-width:0px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"16px","left":"16px","top":"20px","bottom":"20px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"borderColor":"primary","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group has-border-color has-primary-border-color" style="border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;margin-top:0;margin-bottom:0;padding-top:20px;padding-right:16px;padding-bottom:20px;padding-left:16px"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"}}} -->
                                    <h3 class="wp-block-heading" style="font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Integration', 'saaslauncher') ?></h3>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph -->
                                    <p><?php esc_html_e('Connect tools and workflows through seamless integrations that reduce manual work, improve efficiency, and keep your business moving.', 'saaslauncher') ?></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"16px"}},"typography":{"fontSize":"14px"}},"layout":{"type":"flex","justifyContent":"left"}} -->
                                    <div class="wp-block-buttons has-custom-font-size is-style-button-transofom-on-hover" style="margin-top:16px;font-size:14px"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"}},"color":{"text":"#fffffe"},"elements":{"link":{"color":{"text":"#fffffe"}}},"spacing":{"padding":{"left":"26px","right":"26px","top":"12px","bottom":"12px"}}}} -->
                                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-top-left-radius:100px;border-top-right-radius:100px;border-bottom-left-radius:100px;border-bottom-right-radius:100px;color:#fffffe;padding-top:12px;padding-right:26px;padding-bottom:12px;padding-left:26px">Learn More</a></div>
                                        <!-- /wp:button -->
                                    </div>
                                    <!-- /wp:buttons -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                    </div>
                    <!-- /wp:cover -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"top":"20px","bottom":"20px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-bottom:20px"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading"><?php esc_html_e('Integration', 'saaslauncher') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Integration . App', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/grid -->
            </div>
        </div>
        <!-- /wp:cozy-block/featured-content-box -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->