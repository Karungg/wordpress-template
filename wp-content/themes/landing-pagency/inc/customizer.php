<?php
/**
 * landing Theme Customizer.
 *
 * @package landing Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function landing_pagency_customize_register( $wp_customize ) {


	/*---------------------
	* Theme Options
	----------------------*/
    $wp_customize->add_panel( 'panel_id', array(
        'priority'       => 121,
        'capability'     => 'edit_theme_options',
        'title'          => __('Theme Design Options', 'landing-pagency'),
        'description'    => __('Theme Design Options', 'landing-pagency'),
        ) ); 


    /***************************************************/
    /*****                 Layout                 ****/
    /**************************************************/
    $wp_customize->add_section( 'landing_pagency_styling_settings', array(
        'title'      => __('All Blog Posts Settings','landing-pagency'),
        'priority'   => 122,
        'capability' => 'edit_theme_options',

        ) );


    $wp_customize->add_section( 'landing_pagency_general_layout', array(
        'title'      => __('General Layout','landing-pagency'),
        'priority'   => 1,
        'capability' => 'edit_theme_options',

        ) );


    $wp_customize->add_setting('landing_pagency_layout', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_key',
        'default'           => 'cslayout',
        ));


// Sidebar
    $wp_customize->add_control('landing_pagency_layout', array(
        'settings' => 'landing_pagency_layout',
        'label'    => __('Sidebar Position', 'landing-pagency'),
        'priority'   => 1,
        'section'  => 'sidebars_settings',
        'type'     => 'radio',
        'choices'  => array(
            'cslayout' => __('Right Sidebar','landing-pagency'),
            'sclayout' => __('Left Sidebar','landing-pagency'),
            ),
        ));
    //Color Scheme

    $wp_customize->add_setting( 'top_header_background_color', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_header_background_color', array(
        'label'       => __( 'Header Background Color', 'landing-pagency' ),
        'description' => __( 'Applied to header background.', 'landing-pagency' ),
        'section'     => 'header_image',
        'priority'   => 1,
        'settings'    => 'top_header_background_color',
        ) ) );
    $wp_customize->add_setting( 'landing_pagency_color_scheme', array(
        'default'           => '#c69c6d',
        'sanitize_callback' => 'sanitize_hex_color',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'landing_pagency_color_scheme', array(
        'label'    => __('Primary Color Scheme','landing-pagency'),
        'section'  => 'landing_pagency_general_layout',
        'priority'   => 0,
        'settings' => 'landing_pagency_color_scheme',
        )) );


    /***************************************************/
    /*****               Sections                  ****/
    /**************************************************/
    $wp_customize->add_section( 'colors', array(
        'title'      => __('Background Color','landing-pagency'),
        'priority'   => 150,
        'capability' => 'edit_theme_options',

        ) );
    $wp_customize->add_section( 'static_front_page', array(
        'title'      => __('Static Front Page','landing-pagency'),
        'priority'   => 150,
        'capability' => 'edit_theme_options',

        ) );
 

    $wp_customize->add_section( 'landing_pagency_header_settings', array(
        'title'      => __('Header','landing-pagency'),
        'priority'   => 122,
        'capability' => 'edit_theme_options',
        ) );
  
  
    /***************************************************/
    /*****               pagination                ****/
    /**************************************************/
    $wp_customize->add_section( 'landing_pagency_pagination_settings', array(
        'title'      => __('Pagination Type','landing-pagency'),
        'priority'   => 122,
        'capability' => 'edit_theme_options',

        ) );

    $wp_customize->add_setting( 'landing_pagency_pagination_type', array(
        'default'           => '1',
        'capability'        => 'edit_theme_options',
        'priority'   => 1,
        'sanitize_callback' => 'sanitize_key',
        ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'landing_pagency_pagination_type',

            array(
                'label'     => __('Pagination Type', 'landing-pagency'),
                'section'   => 'all_blog_posts',

                'settings'  => 'landing_pagency_pagination_type',
                'type'      => 'radio',
                'choices'  => array(
                    '0'   => __('Next/Previous', 'landing-pagency'),
                    '1'  => __('Numbered', 'landing-pagency'),
                    ),
                'transport' => 'refresh',
                'priority'   => 99,
                )
            )
        );

    //Breadcrumb
    $wp_customize->add_setting('landing_pagency_single_breadcrumb_section', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_key',
        'transport'         => 'refresh',
        'default'           => '1',
        ));
    $wp_customize->add_control('landing_pagency_single_breadcrumb_section', array(
        'label'    => __('Breadcrumb Section', 'landing-pagency'),
        'section'  => 'landing_single_settings',
        'description' => __('This setting will only affect blog posts.','landing-pagency'),
        'settings' => 'landing_pagency_single_breadcrumb_section',
        'type'     => 'radio',
        'choices'  => array(
            '1' => __('OFF', 'landing-pagency'),
            '0' => __('ON', 'landing-pagency'),
            ),
        ));

    //Tags
    $wp_customize->add_setting('landing_pagency_single_tags_section', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_key',
        'transport'         => 'refresh',
        'default'           => '1',
        ));
    $wp_customize->add_control('landing_pagency_single_tags_section', array(
        'label'    => __('Tags Section', 'landing-pagency'),
        'section'  => 'landing_single_settings',
        'description' => __('This setting will only affect blog posts.','landing-pagency'),
        'settings' => 'landing_pagency_single_tags_section',
        'type'     => 'radio',
        'choices'  => array(
            '0' => __('OFF', 'landing-pagency'),
            '1' => __('ON', 'landing-pagency'),
            ),
        ));

    //Related Posts
    $wp_customize->add_setting('landing_pagency_relatedposts_section', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_key',
        'transport'         => 'refresh',
        'default'           => '1',
        ));
    $wp_customize->add_control('landing_pagency_relatedposts_section', array(
        'label'    => __('Related Posts Section', 'landing-pagency'),
        'section'  => 'landing_single_settings',
        'description' => __('This setting will only affect blog posts.','landing-pagency'),
        'settings' => 'landing_pagency_relatedposts_section',
        'type'     => 'radio',
        'choices'  => array(
            '1' => __('OFF', 'landing-pagency'),
            '0' => __('ON', 'landing-pagency'),
            ),
        ));

    //Author Box
    $wp_customize->add_setting('landing_pagency_authorbox_section', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_key',
        'transport'         => 'refresh',
        'default'           => '1',
        ));
    $wp_customize->add_control('landing_pagency_authorbox_section', array(
        'label'    => __('Author box Section', 'landing-pagency'),
        'section'  => 'landing_single_settings',
        'description' => __('This setting will only affect blog posts.','landing-pagency'),
        'settings' => 'landing_pagency_authorbox_section',
        'type'     => 'radio',
        'choices'  => array(
            '1' => __('OFF', 'landing-pagency'),
            '0' => __('ON', 'landing-pagency'),
            ),
        ));

    $wp_customize->get_setting( 'blogname' )->transport                              = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport                       = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport                      = 'postMessage';
    $wp_customize->get_section('header_image')->title = __( 'Header', 'landing-pagency' );
    $wp_customize->get_control( 'background_color'  )->section   = 'landing_pagency_general_layout';
    $wp_customize->get_control( 'background_image'  )->section   = 'landing_pagency_general_layout';
    $wp_customize->get_control( 'header_textcolor'  )->section   = 'header_image';

}
add_action( 'customize_register', 'landing_pagency_customize_register' );

if(! function_exists('landing_pagency_color_output' ) ):
/**
* Set the header background color 
*/
function landing_pagency_color_output(){

    ?>

    <style type="text/css">
    #site-header { background-color: <?php echo esc_attr(get_theme_mod( 'top_header_background_color')); ?>; }
    .primary-navigation, .primary-navigation, #navigation ul ul li { background-color: <?php echo esc_attr(get_theme_mod( 'navigation_background_color')); ?>; }
    a#pull, #navigation .menu a, #navigation .menu a:hover, #navigation .menu .fa > a, #navigation .menu .fa > a, #navigation .toggle-caret, #navigation span.site-logo a, #navigation.mobile-menu-wrapper .site-logo a, .primary-navigation.header-activated #navigation ul ul li a { color: <?php echo esc_attr(get_theme_mod( 'navigation_link_color')); ?> }
    #sidebars .widget h3, #sidebars .widget h3 a, #sidebars h3 { color: <?php echo esc_attr(get_theme_mod( 'sidebar_headline_color')); ?>; }
    #sidebars .widget a, #sidebars a, #sidebars li a { color: <?php echo esc_attr(get_theme_mod( 'sidebar_link_color')); ?>; }
    #sidebars .widget, #sidebars, #sidebars .widget li { color: <?php echo esc_attr(get_theme_mod( 'sidebar_text_color')); ?>; }
    .post.excerpt .post-content, .pagination a, .pagination2, .pagination .dots { color: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_text')); ?>; }
    .post.excerpt h2.title a { color: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_headline')); ?>; }
    .pagination a, .pagination2, .pagination .dots { border-color: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_text')); ?>; }
    span.entry-meta{ color: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_date')); ?>; }
    .article h1, .article h2, .article h3, .article h4, .article h5, .article h6, .total-comments, .article th{ color: <?php echo esc_attr(get_theme_mod( 'post_page_headline')); ?>; }
    .article, .article p, .related-posts .title, .breadcrumb, .article #commentform textarea  { color: <?php echo esc_attr(get_theme_mod( 'post_page_text')); ?>; }
    .article a, .breadcrumb a, #commentform a { color: <?php echo esc_attr(get_theme_mod( 'post_page_link')); ?>; }
    #commentform input#submit, #commentform input#submit:hover{ background: <?php echo esc_attr(get_theme_mod( 'post_page_link')); ?>; }
    .post-date-landing, .comment time { color: <?php echo esc_attr(get_theme_mod( 'post_page_date')); ?>; }
    .footer-widgets #searchform input[type='submit'],  .footer-widgets #searchform input[type='submit']:hover{ background: <?php echo esc_attr(get_theme_mod( 'footer_link_color')); ?>; }
    .footer-widgets h3:after{ background: <?php echo esc_attr(get_theme_mod( 'footer_headline_color')); ?>; }
    .footer-widgets h3{ color: <?php echo esc_attr(get_theme_mod( 'footer_headline_color')); ?>; }
    .footer-widgets .widget li, .footer-widgets .widget, #copyright-note, footer p{ color: <?php echo esc_attr(get_theme_mod( 'footer_text_color')); ?>; }
    footer .widget a, #copyright-note a, #copyright-note a:hover, footer .widget a:hover, footer .widget li a:hover{ color: <?php echo esc_attr(get_theme_mod( 'footer_link_color')); ?>; }
    .top-column-widget a, .top-column-widget a:hover, .top-column-widget a:active, .top-column-widget a:focus { color: <?php echo esc_attr(get_theme_mod( 'upper_widgets_link_color')); ?>; }
    .top-column-widget, .upper-widgets-grid { color: <?php echo esc_attr(get_theme_mod( 'upper_widgets_content_color')); ?>; }
    .top-column-widget .widget.widget_rss h3 a, .upper-widgets-grid h3, .top-column-widget h3{ color: <?php echo esc_attr(get_theme_mod( 'upper_widgets_headlinke_color')); ?>; }
    @media screen and (min-width: 865px) {
        .primary-navigation.header-activated #navigation a { color: <?php echo esc_attr(get_theme_mod( 'navigation_frontpage_link_color')); ?>; }
    }
    @media screen and (max-width: 865px) {
        #navigation.mobile-menu-wrapper{ background-color: <?php echo esc_attr(get_theme_mod( 'navigation_background_color')); ?>; }
    }
    .site-branding { padding-top: <?php echo esc_attr(get_theme_mod( 'header_top_padding')); ?>px; }
    .site-branding { padding-bottom: <?php echo esc_attr(get_theme_mod( 'header_bottom_padding')); ?>px; }
    </style>
    <?php }
    add_action( 'wp_head', 'landing_pagency_color_output' );
    endif;

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function landing_pagency_customize_preview_js() {
   wp_enqueue_script( 'landing_pagency_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'landing_pagency_customize_preview_js' );



