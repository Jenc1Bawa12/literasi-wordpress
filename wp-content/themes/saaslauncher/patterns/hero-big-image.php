<?php

/**
 * Title: Hero with big image
 * Slug: saaslauncher/hero-big-image
 * Categories: saaslauncher-hero
 */
$saaslauncher_url    = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/about_4.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Hero with big image","categories":["saaslauncher-hero"]},"align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"position":{"type":""},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-dark-shade-background-color has-background" style="border-style:none;border-width:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"7rem","bottom":"5rem"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:5rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"bottom"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"0px","bottom":"7px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"860px","justifyContent":"center","wideSize":"800px"}} -->
            <div class="wp-block-group" style="margin-top:0px;margin-bottom:7px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"metadata":{"blockVisibility":false},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"right":"15px","left":"15px","top":"7px","bottom":"7px"}},"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"},"color":"#356150","width":"1px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-border-color" style="border-color:#356150;border-width:1px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:7px;padding-right:15px;padding-bottom:7px;padding-left:15px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"#5cdbaf"}}},"typography":{"textTransform":"uppercase","textAlign":"left","fontStyle":"normal","fontWeight":"500","fontSize":"13px"},"color":{"text":"#5cdbaf"}}} -->
                        <h5 class="wp-block-heading has-text-align-left has-text-color has-link-color" style="color:#5cdbaf;font-size:13px;font-style:normal;font-weight:500;text-transform:uppercase">
                            <?php esc_html_e('Welcome to SaasLauncher', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"level":1,"className":"saaslauncher-big-title is-style-default","style":{"typography":{"letterSpacing":"-1px","textAlign":"center","lineHeight":"1.1","fontSize":"84px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                <h1 class="wp-block-heading has-text-align-center saaslauncher-big-title is-style-default has-light-color-color has-text-color has-link-color" style="font-size:84px;letter-spacing:-1px;line-height:1.1"><?php esc_html_e('Launch your business website with confidence.', 'saaslauncher'); ?></h1>
                <!-- /wp:heading -->

                <!-- wp:group {"layout":{"type":"constrained","contentSize":"680px","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"normal"} -->
                    <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-normal-font-size" style="line-height:1.5"><?php esc_html_e('We help businesses design, build, and scale digital products—from websites and SaaS platforms to AI-powered solutions and growth strategies.', 'saaslauncher'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"32px"},"blockGap":{"left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:32px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"24px","right":"24px","top":"18px","bottom":"18px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"fontSize":"normal"} -->
                    <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color has-normal-font-size has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:18px;padding-right:24px;padding-bottom:18px;padding-left:24px"><?php esc_html_e('Book a Consultation', 'saaslauncher'); ?></a></div>
                    <!-- /wp:button -->

                    <!-- wp:button {"backgroundColor":"light-color","textColor":"heading-color","className":"is-style-fill","style":{"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"28px","right":"28px","top":"18px","bottom":"18px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"fontSize":"normal"} -->
                    <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-heading-color-color has-light-color-background-color has-text-color has-background has-link-color has-normal-font-size has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:18px;padding-right:28px;padding-bottom:18px;padding-left:28px"><?php esc_html_e('View Portfolio', 'saaslauncher'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"is-style-default","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0rem"},"margin":{"top":"0","bottom":"0"}},"position":{"type":""}},"backgroundColor":"transparent","layout":{"type":"constrained","contentSize":"1200px"}} -->
    <div class="wp-block-group is-style-default has-transparent-background-color has-background" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":5650,"focalPoint":{"x":0.5,"y":1},"sizeSlug":"full","linkDestination":"none","align":"wide","style":{"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"},"width":"0px","style":"none"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"color":{"duotone":"unset"}}} -->
        <figure class="wp-block-image alignwide size-full has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-5650" style="border-style:none;border-width:0px;border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px" /></figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->