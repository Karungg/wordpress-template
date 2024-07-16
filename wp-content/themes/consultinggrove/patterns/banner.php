<?php
/**
 * Title: Featured Banner
 * Slug: consultinggrove/banner
 * Categories: consultinggrove
 * Keywords: banner
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/bannerbg.jpg","id":1081,"dimRatio":80,"overlayColor":"black","isUserOverlayColor":true,"minHeight":650,"tagName":"section","metadata":{"name":"Banner"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<section class="wp-block-cover" style="margin-top:0;margin-bottom:0;min-height:650px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1081" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/bannerbg.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"tagName":"main","layout":{"type":"constrained","contentSize":"720px"}} -->
<main class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"56px"},"elements":{"link":{"color":{"text":"var:preset|color|white-text-color"}}}},"textColor":"white-text-color"} -->
<h2 class="wp-block-heading has-text-align-center has-white-text-color-color has-text-color has-link-color" style="font-size:56px"><?php echo esc_html__( 'Building things is our mission.', 'consultinggrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white-text-color"}}}},"textColor":"white-text-color"} -->
<p class="has-text-align-center has-white-text-color-color has-text-color has-link-color"><?php echo esc_html__( 'Pellentesque dapibus hendrerit tortor. Cras non dolor. Fusce vel dui. Mauris turpis nunc, blandit et, volutpat molestie, porta ut, ligula. Cras sagittis.', 'consultinggrove' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><?php echo esc_html__( 'About Us', 'consultinggrove' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"white","textColor":"dark-text-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-text-color"}}},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-dark-text-color-color has-white-background-color has-text-color has-background has-link-color wp-element-button" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><?php echo esc_html__( 'Contact Us', 'consultinggrove' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></main>
<!-- /wp:group --></div></section>
<!-- /wp:cover -->