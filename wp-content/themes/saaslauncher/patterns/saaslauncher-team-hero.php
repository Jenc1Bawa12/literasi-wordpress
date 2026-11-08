<?php

/**
 * Title: Team Hero Pro
 * Slug: saaslauncher/saaslauncher-team-hero
 * Categories: ct-saaslauncher-patterns-pro
 */
$saaslauncher_url    = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/about_4.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["ct-saaslauncher-patterns-pro"],"name":"PRO: Team Hero"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"7rem","bottom":"7rem"},"margin":{"top":"0","bottom":"0"}},"background":{"gradient":"var:preset|gradient|gradient-five"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0rem","bottom":"0rem"},"margin":{"bottom":"84px"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
    <div class="wp-block-group" style="margin-bottom:84px;padding-top:0rem;padding-right:0;padding-bottom:0rem;padding-left:0"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500","textAlign":"center","fontSize":"64px"}},"textColor":"light-color"} -->
        <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:64px;font-style:normal;font-weight:500"><?php esc_html_e('Meet the People Behind the Product', 'saaslauncher'); ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"textAlign":"center"}},"textColor":"foreground-alt","fontSize":"medium"} -->
        <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('From design and development to product and support, our team works together to make building and launching a successful website simpler, faster, and better.', 'saaslauncher'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:image {"id":10451,"sizeSlug":"large","linkDestination":"none","align":"wide","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"}}}} -->
    <figure class="wp-block-image alignwide size-large has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-10451" style="border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px" /></figure>
    <!-- /wp:image -->
</div>
<!-- /wp:group -->