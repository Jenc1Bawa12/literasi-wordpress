<?php

/**
 * Title: Testimonial Hero Pro
 * Slug: saaslauncher/saaslauncher-testimonial-hero
 * Categories: ct-saaslauncher-patterns-pro
 */
$saaslauncher_url    = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/testimonial_hero.jpg',
    $saaslauncher_url . 'assets/images/star_icon.png',
);
?>
<!-- wp:group {"metadata":{"name":"PRO: Testimonials Hero","categories":["ct-saaslauncher-patterns-pro"]},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"8rem"},"margin":{"top":"0","bottom":"0"}},"background":{"gradient":"var:preset|gradient|gradient-five"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"740px"}} -->
    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"3px","bottom":"3px","left":"8px","right":"8px"}},"border":{"width":"1px","radius":"60px"}},"borderColor":"primary","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-default has-border-color has-primary-border-color" style="border-width:1px;border-radius:60px;padding-top:3px;padding-right:8px;padding-bottom:3px;padding-left:8px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                <p class="has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('What Our Client Says', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3","textAlign":"center","fontSize":"64px"}},"textColor":"light-color"} -->
        <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:64px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Join the Success Stories Powered by SaasLauncher', 'saaslauncher'); ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
        <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('See how businesses, creators, and agencies are using SaasLauncher to turn their ideas into professional websites and move their projects forward with confidence.', 'saaslauncher'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"64px"}}}} -->
    <div class="wp-block-columns" style="margin-top:64px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}},"dimensions":{"minHeight":"540px"}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-color-border-color" style="border-width:1px;min-height:540px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":5945,"width":"130px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"}}} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-5945" style="width:130px;height:auto" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading -->
                <h2 class="wp-block-heading"><?php esc_html_e('Built to Make Website Creation Easier', 'saaslauncher'); ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"24px"}}} -->
                <p style="font-size:24px"><?php esc_html_e('“SaasLauncher gave us the right foundation from day one. We were able to build a professional-looking website faster without compromising on flexibility or design.”', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"24px"},"spacing":{"margin":{"top":"44px"}}}} -->
                <h4 class="wp-block-heading" style="margin-top:44px;font-size:24px"><?php esc_html_e('Nova Carter, Founder at NovaLabs', 'saaslauncher'); ?></h4>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":9360,"dimRatio":0,"customOverlayColor":"#beb0a3","isUserOverlayColor":false,"focalPoint":{"x":0.5,"y":0.25},"minHeight":540,"isDark":false,"sizeSlug":"full","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="min-height:540px"><img class="wp-block-cover__image-background wp-image-9360 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" style="object-position:50% 25%" data-object-fit="cover" data-object-position="50% 25%" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#beb0a3"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->