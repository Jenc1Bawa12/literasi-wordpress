<?php

/**
 * Title: Features Hero Pro
 * Slug: saaslauncher/saaslauncher-features-hero
 * Categories: ct-saaslauncher-patterns-pro
 */
$saaslauncher_url    = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/about_6.jpg',
    $saaslauncher_url . 'assets/images/play_icon.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"8rem"}},"background":{"gradient":"var:preset|gradient|gradient-five"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"64px"}}},"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group" style="margin-bottom:64px"><!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center","fontSize":"64px"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-size:64px"><?php esc_html_e('Everything You Need to Build, Launch &amp; Scale', 'saaslauncher'); ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
        <p class="has-text-align-center"><?php esc_html_e('Get your website live fast with scalable SaaS tools designed to maximize performance and fuel seamless, sustainable business growth.', 'saaslauncher'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":10541,"dimRatio":0,"customOverlayColor":"#aeadae","isUserOverlayColor":false,"minHeight":680,"isDark":false,"sizeSlug":"large","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover is-light" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;min-height:680px"><img class="wp-block-cover__image-background wp-image-10541 size-large" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#aeadae"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:cozy-block/modal {"blockClientId":"2fb0dfbc-30ea-420d-b9c4-0d8309fde78b","boxWidth":680,"modalEvent":"click","iconStyles":{"enabled":true,"alignment":"right","horizontalSpacing":-50,"verticalSpacing":-50,"boxWidth":36,"boxHeight":36,"radius":100,"iconSize":10,"bg":"#7545FC","bgHover":"#7F0AF5","iconColor":"#fff","iconColorHover":"","border":"1px solid #000","borderRadius":20},"clickButtonStyles":{"padding":{"top":10,"right":10,"bottom":10,"left":10},"content":"image","label":"Open Popup","imgURL":"<?php echo esc_url($saaslauncher_images[1]) ?>","imgWidth":"120","imgHeight":"120","imgRadius":100,"imgHasPulse":true,"fontSize":14,"fontFamily":"Public Sans","fontWeight":"500","letterCase":"none","decoration":"none","lineHeight":"","letterSpacing":"","justify":"center","borderType":"none","borderWidth":{"top":1,"right":1,"bottom":1,"left":1},"borderColor":"#000","borderRadius":60,"color":"#ffffff00","colorHover":"","bgColor":"#ffffff00","bgColorHover":""}} -->
            <a class="cozy-modal-open" data-type="2fb0dfbc-30ea-420d-b9c4-0d8309fde78b">
                <figure class="cozy-modal-open__img has-pulse-animation"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" /></figure>
            </a>
            <div class="cozy-block-modal  type-default event-click display-none icon-align-right" id="cozyBlock_2fb0dfbc_30ea_420d_b9c4_0d8309fde78b">
                <div class="close-icon-wrapper">
                    <div class="modal-icon-wrapper"><svg class="modal-close-icon" width="16" height="16" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.8516 8.59375L16.7378 3.70752C17.3374 3.10791 17.3374 2.13574 16.7378 1.53564L15.6519 0.449707C15.0522 -0.149902 14.0801 -0.149902 13.48 0.449707L8.59375 5.33594L3.70752 0.449707C3.10791 -0.149902 2.13574 -0.149902 1.53564 0.449707L0.449707 1.53564C-0.149902 2.13525 -0.149902 3.10742 0.449707 3.70752L5.33594 8.59375L0.449707 13.48C-0.149902 14.0796 -0.149902 15.0518 0.449707 15.6519L1.53564 16.7378C2.13525 17.3374 3.10791 17.3374 3.70752 16.7378L8.59375 11.8516L13.48 16.7378C14.0796 17.3374 15.0522 17.3374 15.6519 16.7378L16.7378 15.6519C17.3374 15.0522 17.3374 14.0801 16.7378 13.48L11.8516 8.59375Z"></path>
                        </svg></div>
                </div><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
                <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:embed {"url":"https://www.youtube.com/watch?v=fNwIqedPyEU","type":"video","providerNameSlug":"youtube","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
                    <figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
                        <div class="wp-block-embed__wrapper">
                            https://www.youtube.com/watch?v=fNwIqedPyEU
                        </div>
                    </figure>
                    <!-- /wp:embed -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/modal -->
        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"48px"},"blockGap":{"left":"28px"}}}} -->
    <div class="wp-block-columns" style="margin-top:48px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"20px"}}} -->
                <h4 class="wp-block-heading" style="font-size:20px"><?php esc_html_e('01', 'saaslauncher'); ?></h4>
                <!-- /wp:heading -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"20px"}}} -->
                    <h4 class="wp-block-heading" style="font-size:20px"><?php esc_html_e('Full Site Editing', 'saaslauncher'); ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Build and customize your entire website visually with WordPress Site Editor, no code needed.', 'saaslauncher'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"20px"}}} -->
                <h4 class="wp-block-heading" style="font-size:20px"><?php esc_html_e('02', 'saaslauncher'); ?></h4>
                <!-- /wp:heading -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"20px"}}} -->
                    <h4 class="wp-block-heading" style="font-size:20px"><?php esc_html_e('Custom Blocks', 'saaslauncher'); ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Create engaging layouts and powerful website sections with flexible, feature-rich advanced blocks.', 'saaslauncher'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"20px"}}} -->
                <h4 class="wp-block-heading" style="font-size:20px"><?php esc_html_e('03', 'saaslauncher'); ?></h4>
                <!-- /wp:heading -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"20px"}}} -->
                    <h4 class="wp-block-heading" style="font-size:20px"><?php esc_html_e('Global Styles', 'saaslauncher'); ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Set colors, typography, spacing, and more globally to keep your entire website consistent.', 'saaslauncher'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"20px"}}} -->
                <h4 class="wp-block-heading" style="font-size:20px"><?php esc_html_e('04', 'saaslauncher'); ?></h4>
                <!-- /wp:heading -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"20px"}}} -->
                    <h4 class="wp-block-heading" style="font-size:20px"><?php esc_html_e('Patterns Library', 'saaslauncher'); ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Start faster with ready-made patterns and sections you can import, customize, and make your own.', 'saaslauncher'); ?></p>
                    <!-- /wp:paragraph -->
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