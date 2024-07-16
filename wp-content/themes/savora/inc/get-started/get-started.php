<?php
add_action( 'admin_menu', 'savora_getting_started' );
function savora_getting_started() {
	add_theme_page( esc_html__('Savora Theme', 'savora'), esc_html__('Savora Theme', 'savora'), 'edit_theme_options', 'savora-guide-page', 'savora_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function savora_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'savora_admin_theme_style');

// Guidline for about theme
function savora_test_guide() { 
	// Custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'savora' );
?>
<div class="wrapper-info">
	<div class="intro">
		<div class="col-left">
			<h1 class="theme-title"><?php esc_html_e( 'Savora WordPress Theme', 'savora' ); ?></h1>
			<p><?php esc_html_e('Version: ','savora'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="col-right text-align-end">
			<a class="bg-color bg-color" href="<?php echo esc_url( SAVORA_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to PRO', 'savora'); ?></a>
		</div>
	</div>
	<div class="col-left">
		<div class="started">
			<hr>
			<div class="centerbold">
				<h4><?php esc_html_e('Unlock Premium Features', 'savora'); ?></h4>
				<p><?php esc_html_e('Unlock the full potential of your website with our Pro theme upgrade.', 'savora'); ?></p>
				<a class="bg-color" href="<?php echo esc_url( SAVORA_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade Now', 'savora'); ?></a>
				<hr>
				<h4><?php esc_html_e('Preview Demo', 'savora'); ?></h4>
				<p><?php esc_html_e('See our theme in action! Take a tour of our demo site to experience firsthand the stunning design and powerful features our theme has to offer.', 'savora'); ?></p>
				<a class="bg-color" href="<?php echo esc_url( SAVORA_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Theme Demo', 'savora'); ?></a>
				<hr>
				<h4><?php esc_html_e('Need Help?', 'savora'); ?></h4>
				<p><?php esc_html_e('Visit our support forum for assistance with any questions or feedback you may have regarding the theme.', 'savora'); ?></p>
				<a href="<?php echo esc_url( SAVORA_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'savora'); ?></a>
				<hr>
				<h4><?php esc_html_e('Are you enjoying our theme?', 'savora'); ?></h4>
				<p><?php esc_html_e('We\'d love to hear your thoughts! Leave us a review and share your feedback.', 'savora'); ?></p>
				<a href="<?php echo esc_url( SAVORA_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'savora'); ?></a>
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-inner"> 
			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		</div>
	</div>
</div>
<?php } ?>