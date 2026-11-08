<?php

/**
 * Title:Demo Booking form Pro
 * Slug: saaslauncher/saaslauncher-demo-booking-form
 * Categories: ct-saaslauncher-patterns-pro
 */
?>
<!-- wp:group {"style":{"background":{"gradient":"var:preset|gradient|gradient-five"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"8rem"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"84px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
        <div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"64px"}}} -->
                <h1 class="wp-block-heading" style="font-size:64px"><?php esc_html_e('Book a Free Demo', 'saaslauncher'); ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('See SaasLauncher in action and discover how you can build a professional website faster, customize it with ease, and launch with confidence.', 'saaslauncher'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":""} -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-saaslauncher-gradient-border","style":{"spacing":{"padding":{"right":"64px","left":"64px","top":"28px","bottom":"28px"}},"border":{"width":"1px","radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"}}},"backgroundColor":"background-alt","borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-saaslauncher-gradient-border has-border-color has-border-color-border-color has-background-alt-background-color has-background" style="border-width:1px;border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;padding-top:28px;padding-right:64px;padding-bottom:28px;padding-left:64px"><!-- wp:contact-form-7/contact-form-selector {"id":506,"hash":"b5f65b7","title":"Contact form 1"} -->
                <div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7 id="b5f65b7" title="Contact form 1"]</div>
                <!-- /wp:contact-form-7/contact-form-selector -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->