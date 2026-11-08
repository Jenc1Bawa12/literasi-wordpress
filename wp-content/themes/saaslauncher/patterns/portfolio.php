<?php

/**
 * Title: Portfolio
 * Slug: saaslauncher/portfolio
 * Categories: saaslauncher-gallery
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/p1.jpg',
    $saaslauncher_url . 'assets/images/p2.jpg',
    $saaslauncher_url . 'assets/images/p3.jpg',
    $saaslauncher_url . 'assets/images/p4.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-gallery"],"name":"Portfolio"},"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"8rem"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"84px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:84px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"60px","width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"780px"}} -->
        <div class="wp-block-group is-style-default" style="border-style:none;border-width:0px;border-radius:60px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <div class="wp-block-group" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"12px","left":"12px","top":"5px","bottom":"5px"}},"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"},"width":"1px"}},"backgroundColor":"background-alt","borderColor":"border-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-border-color has-border-color-border-color has-background-alt-background-color has-background" style="border-width:1px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontSize":"13px","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary"} -->
                    <h5 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-size:13px;font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e('Portfolio', 'saaslauncher'); ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.3","fontSize":"60px"},"spacing":{"margin":{"top":"10px","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
            <h1 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="margin-top:10px;margin-bottom:0;font-size:60px;line-height:1.3"><?php esc_html_e('Projects That Make an Impact', 'saaslauncher'); ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('See how we combine strategy, creativity, and technology to build digital experiences that inspire trust and accelerate business growth.', 'saaslauncher'); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"40px"},"blockGap":{"left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:40px"><!-- wp:button {"className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"30px","right":"30px","top":"18px","bottom":"18px"}}},"fontSize":"medium"} -->
            <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-medium-font-size has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;padding-top:18px;padding-right:30px;padding-bottom:18px;padding-left:30px"><?php esc_html_e('View all Works', 'saaslauncher'); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"64px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"id":5702,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"}}}} -->
            <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-5702" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px" /></figure>
            <!-- /wp:image -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"level":3,"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size"><?php esc_html_e('Brand Identity &amp; Website Redesign', 'saaslauncher'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Automated dashboards reduced manual reporting time and improved client delivery speed.', 'saaslauncher'); ?> </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"id":5702,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"}}}} -->
            <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-5702" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px" /></figure>
            <!-- /wp:image -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"level":3,"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size"><?php esc_html_e('E-Commerce Growth Platform', 'saaslauncher'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Designed and developed a high-performance online store with seamless shopping experiences, resulting in higher sales and customer engagement.', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"64px"},"margin":{"top":"64px"}}}} -->
    <div class="wp-block-columns" style="margin-top:64px"><!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"id":5702,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"}}}} -->
            <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-5702" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px" /></figure>
            <!-- /wp:image -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"level":3,"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size"><?php esc_html_e('Corporate Business Website', 'saaslauncher'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Built a fast, responsive, and SEO-friendly corporate website that enhanced credibility, showcased services, and generated qualified leads.', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"id":5702,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"}}}} -->
            <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[3]) ?>" alt="" class="wp-image-5702" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px" /></figure>
            <!-- /wp:image -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"level":3,"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size"><?php esc_html_e('Branding', 'saaslauncher'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Executed a data-driven marketing strategy combining SEO, PPC, and social media to boost traffic, leads, and overall business growth.', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->