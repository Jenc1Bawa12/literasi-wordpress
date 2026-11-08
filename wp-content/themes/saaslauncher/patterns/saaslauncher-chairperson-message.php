<?php

/**
 * Title: Team Chairperson Message Pro
 * Slug: saaslauncher/saaslauncher-chairperson-message
 * Categories: ct-saaslauncher-patterns-pro
 */
$saaslauncher_url    = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/person_1.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"PRO: Chairperson Message","categories":["ct-saaslauncher-patterns-pro"]},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"8rem"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":4} -->
    <h4 class="wp-block-heading"><?php esc_html_e('“We believe building a great website shouldn’t require starting from scratch or spending weeks figuring out the details. SaasLauncher was created to make that process simpler—giving businesses the tools, templates, and flexibility to turn ideas into professional websites with confidence.', 'saaslauncher'); ?></h4>
    <!-- /wp:heading -->

    <!-- wp:heading {"level":4} -->
    <h4 class="wp-block-heading"><?php esc_html_e('We’re constantly learning from our community and improving what we build. Our goal is simple: create products that help you spend less time building and more time growing.”', 'saaslauncher'); ?></h4>
    <!-- /wp:heading -->

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"40px","bottom":"0"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:40px;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"80px"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80px"><!-- wp:image {"id":759,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"80px"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
            <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-759" style="border-radius:80px;object-fit:cover;width:80px;height:80px" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":""} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size"><?php esc_html_e('Robert Mathew', 'saaslauncher'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder &amp; CEO', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->