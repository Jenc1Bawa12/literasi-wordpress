<?php

/**
 * Title: Contact Form
 * Slug: saaslauncher/contact-form
 * Categories: saaslauncher-contact
 */
?>
<!-- wp:group {"metadata":{"name":"Contact Form","categories":["saaslauncher-contact"]},"style":{"spacing":{"margin":{"bottom":"60px"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"4rem","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="margin-bottom:60px;padding-top:4rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0px"},"blockGap":{"left":"100px"}}}} -->
	<div class="wp-block-columns" style="margin-top:0px"><!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
			<div class="wp-block-group" style="margin-bottom:60px"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textAlign":"left"}},"textColor":"heading-color","fontSize":"xx-large"} -->
				<h1 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color has-xx-large-font-size">
					<?php esc_html_e('Send us an enquiry', 'saaslauncher'); ?> </h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.7,"fontSize":"18px","textAlign":"left"}}} -->
				<p class="has-text-align-left" style="font-size:18px;line-height:1.7">
					<?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher'); ?> </p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"66.66%"} -->
		<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"20px","right":"68px","left":"68px"}},"border":{"radius":{"topLeft":"40px","topRight":"40px","bottomLeft":"40px","bottomRight":"40px"},"width":"0px","style":"none"}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"980px"}} -->
			<div class="wp-block-group has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-top-left-radius:40px;border-top-right-radius:40px;border-bottom-left-radius:40px;border-bottom-right-radius:40px;padding-top:60px;padding-right:68px;padding-bottom:20px;padding-left:68px"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
				<h4 class="wp-block-heading has-heading-color-color has-text-color has-link-color">
					<?php esc_html_e('Please insert the contact form shortcode here to display the form.', 'saaslauncher'); ?> </h4>
				<!-- /wp:heading -->

				<!-- wp:contact-form-7/contact-form-selector {"id":506,"hash":"b5f65b7","title":"Contact form 1"} -->
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