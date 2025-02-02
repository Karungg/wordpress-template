<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package landing Lite
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	 <?php
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    }
    ?>
	<div class="main-container">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'landing-pagency' ); ?></a>
		<header id="site-header" role="banner">
			<?php if ( get_theme_mod( 'toggle_header_frontpage' ) == '' ) : ?>
				<div class="primary-navigation header-activated">
				<?php else : ?>
					<?php if ( is_front_page() ) : ?>
						<div class="primary-navigation header-activated">
						<?php else : ?>
							<div class="primary-navigation">
							<?php endif; ?>
						<?php endif; ?>
						<a href="#" id="pull" class="toggle-mobile-menu"><?php esc_html_e('Menu', 'landing-pagency'); ?></a>
						<div class="container clear">
							<nav id="navigation" class="primary-navigation mobile-menu-wrapper" role="navigation">
								<?php if (has_custom_logo()) { ?>
								<span id="logo" class="image-logo" itemprop="headline">
									<?php the_custom_logo(); ?>
								</span><!-- END #logo -->
								<?php } ?>


								<?php if ( has_nav_menu( 'primary' ) ) { ?>
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu clearfix', 'container' => '' ) ); ?>
								<?php } else { ?>
								<ul class="menu clearfix">
									<?php wp_list_categories('title_li='); ?>
								</ul>
								<?php } ?>
							</nav><!-- #site-navigation -->
						</div>
					</div>            

					<!-- Feature in the making, coming soon -->
					<?php if ( get_theme_mod( 'toggle_header_frontpage' ) == '' ) : ?>
						<div class="container clear">
							<div class="site-branding">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
										<div class="site-title"><?php bloginfo( 'name' ); ?></div>
										<div class="site-description"><?php bloginfo( 'description' ); ?></div>
										</a>
							</div><!-- .site-branding -->
						</div>
						<!-- Feature in the making, coming soon -->
					<?php else : ?>
						<?php if ( is_front_page() ) : ?>
							<div class="container clear">
								<div class="site-branding">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
										<div class="site-title"><?php bloginfo( 'name' ); ?></div>
										<div class="site-description"><?php bloginfo( 'description' ); ?></div>
									</a>
								</div><!-- .site-branding -->
							</div>
						<?php endif; ?>
					<?php endif; ?>
				</header><!-- #masthead -->
				<?php if ( get_theme_mod( 'toggle_upper_widgets_frontpage' ) == '' ) : ?>
					<!-- Upper widgets -->
					<?php if ( is_active_sidebar( 'top-widget-first') ||  is_active_sidebar( 'top-widget-second') ||  is_active_sidebar( 'top-widget-third')  ) : ?>
						<div class="container">
							<div class="upper-widgets-grid-wrapper">
								<?php if ( is_active_sidebar( 'top-widget-first' ) ) : ?>
									<div class="upper-widgets-grid">
										<div class="top-column-widget">
											<?php dynamic_sidebar( 'top-widget-first' ); ?> 
										</div>
									</div>
								<?php endif; ?>
								<?php if ( is_active_sidebar( 'top-widget-second' ) ) : ?>
									<div class="upper-widgets-grid"> 
										<div class="top-column-widget">
											<?php dynamic_sidebar( 'top-widget-second' ); ?> 
										</div> 
									</div>
								<?php endif; ?>
								<?php if ( is_active_sidebar( 'top-widget-third' ) ) : ?>
									<div class="upper-widgets-grid">
										<div class="top-column-widget">
											<?php dynamic_sidebar( 'top-widget-third' ); ?> 
										</div>
									</div>
								<?php endif; ?>
							</div>
						</div>
					<?php endif; ?>
					<!-- / Upper widgets -->
				<?php else : ?>
					<?php if ( is_front_page() ) : ?>
						<!-- Upper widgets -->
						<?php if ( is_active_sidebar( 'top-widget-first') ||  is_active_sidebar( 'top-widget-second') ||  is_active_sidebar( 'top-widget-third')  ) : ?>
							<div class="container">
								<div class="upper-widgets-grid-wrapper">
									<?php if ( is_active_sidebar( 'top-widget-first' ) ) : ?>
										<div class="upper-widgets-grid">
											<div class="top-column-widget">
												<?php dynamic_sidebar( 'top-widget-first' ); ?> 
											</div>
										</div>
									<?php endif; ?>
									<?php if ( is_active_sidebar( 'top-widget-second' ) ) : ?>
										<div class="upper-widgets-grid"> 
											<div class="top-column-widget">
												<?php dynamic_sidebar( 'top-widget-second' ); ?> 
											</div>
										</div>
									<?php endif; ?>
									<?php if ( is_active_sidebar( 'top-widget-third' ) ) : ?>
										<div class="upper-widgets-grid">
											<div class="top-column-widget">
												<?php dynamic_sidebar( 'top-widget-third' ); ?> 
											</div>
										</div>
									<?php endif; ?>
								</div>
							</div>
						<?php endif; ?>
						<!-- / Upper widgets -->
					<?php endif; ?>
				<?php endif; ?>