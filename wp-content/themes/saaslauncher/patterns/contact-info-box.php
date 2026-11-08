<?php

/**
 * Title: Contact info box 
 * Slug: saaslauncher/contact-info-box
 * Categories: saaslauncher-contact
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/icon_map.png',
    $saaslauncher_url . 'assets/images/icon_call.png',
    $saaslauncher_url . 'assets/images/icon_envelope.png',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-contact"],"name":"Contact info box"},"style":{"spacing":{"margin":{"bottom":"60px"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"6rem","bottom":"2rem"}},"border":{"style":"none","width":"0px"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="border-style:none;border-width:0px;margin-bottom:60px;padding-top:6rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:2rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"640px","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center","fontSize":"64px"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-size:64px"><?php esc_html_e('Contact Us', 'saaslauncher'); ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"24px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top"} -->
        <div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"margin":{"top":"30px"},"blockGap":"var:preset|spacing|20","padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}},"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"},"width":"1px"}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;margin-top:30px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":2564,"width":"50px","height":"50px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#7545fc","#ffffff"]},"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}},"layout":{"selfStretch":"fit","flexSize":null}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-2564" style="border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;object-fit:cover;width:50px;height:50px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-medium-font-size"><a href="#"></a><a href="#"><?php esc_html_e('2824 Fleming Street, Montgomery', 'saaslauncher'); ?></a></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Have questions about our online learning platform or how Skillfye works?', 'saaslauncher'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top"} -->
        <div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"margin":{"top":"30px"},"blockGap":"var:preset|spacing|20","padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}},"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"},"width":"1px"}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;margin-top:30px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":2565,"width":"50px","height":"50px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#7545fc","#ffffff"]},"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}},"layout":{"selfStretch":"fit","flexSize":null}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-2565" style="border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;object-fit:cover;width:50px;height:50px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-medium-font-size"><a href="#">
                            <?php esc_html_e('+1 ( 000) 012-3456', 'saaslauncher'); ?></a></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Have questions about our online learning platform or how Skillfye works?', 'saaslauncher'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top"} -->
        <div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"margin":{"top":"30px"},"blockGap":"var:preset|spacing|20","padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}},"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"},"width":"1px"}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;margin-top:30px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":2566,"width":"50px","height":"50px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#7545fc","#ffffff"]},"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}},"layout":{"selfStretch":"fit","flexSize":null}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-2566" style="border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;object-fit:cover;width:50px;height:50px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-medium-font-size"><a href="#"><?php esc_html_e('sample@example.com', 'saaslauncher'); ?></a></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Have questions about our online learning platform or how Skillfye works?', 'saaslauncher'); ?></p>
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