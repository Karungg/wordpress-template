<?php
/**
 * landing Lite functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package landing Lite
 */

if ( ! function_exists( 'landing_pagency_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function landing_pagency_setup() {
    /*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on landing, use a find and replace
	 * to change 'landing-pagency' to the name of your theme in all the template files.
	 */
    load_theme_textdomain( 'landing-pagency', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150, true );
	add_image_size( 'landing-pagency-related', 200, 125, true ); //related

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'landing-pagency' ),
 ) );



  /*
         * Add support for starter content
        */
        // Starter Content Begin
  $nav_items = array(
    'home'                 => array(
      'title'      => 'Home',
      'url'    => '#',
    ),
    'custom_blog'           => array(
      'title'      => 'Blog',
      'url'    => '#',
    ),
    'custom_news'      => array(
      'title'      => 'News',
      'url'    => '#',
    ),
    'custom_categories' => array(
      'title'      => 'Categories',
      'url'    => '#',
    ),
    'custom_about'            => array(
      'title'      => 'About',
      'url'    => '#',
    ),
    'custom_contact'            => array(
      'title'      => 'Contact',
      'url'    => '#',
    ),
  );

  $header_widgets = array('custom' => array(
    'custom_html',
    array(
      'title' => '',
      'content' => '<p style="margin-bottom: 5px;"><img width="80" height="80" src="'.get_template_directory_uri().'/inc/starter_content/img/1.png" alt="alt text" /></p> <h3>Lorem Ipsum</h3> Lorem ipsum dolor sit amet, consectetur adipiscing elit cura bitur ac faucibus.'
    )
  ));

    $header_widgets_2 = array('custom' => array(
    'custom_html',
    array(
      'title' => '',
      'content' => '<p style="margin-bottom: 5px;"><img width="80" height="80" src="'.get_template_directory_uri().'/inc/starter_content/img/2.png" alt="alt text" /></p> <h3>Lorem Ipsum</h3> Lorem ipsum dolor sit amet, consectetur adipiscing elit cura bitur ac faucibus.'
    )
  ));

      $header_widgets_3 = array('custom' => array(
    'custom_html',
    array(
      'title' => '',
      'content' => '<p style="margin-bottom: 5px;"><img width="80" height="80" src="'.get_template_directory_uri().'/inc/starter_content/img/3.png" alt="alt text" /></p> <h3>Lorem Ipsum</h3> Lorem ipsum dolor sit amet, consectetur adipiscing elit cura bitur ac faucibus.'
    )
  ));

  $footer_widgets = array('custom' => array(
    'custom_html',
    array(
      'title' => 'LOREM IPSUM',
      'content' => '<p>Accusantium et doloremque veritatis architecto, eaque ipsa quae ab illo inventore veritatis perspiciatis. Sed ut iste natus voluptatem fringilla tempor dignissim at.</p>'
    )
  ));

  $starter_content = array(
    'attachments' => array(
      'featured-image-nothing-breaks-new-york' => array(
        'post_title'   => 'Featured Image 1',
        'post_content' => 'Attachment Description',
        'post_excerpt' => 'Attachment Caption',
        'file'         => 'inc/starter_content/img/nothing-breaks-new-york.png',
      ),
      'featured-image-getting-what-you-want' => array(
        'post_title'   => 'Featured Image 2',
        'post_content' => 'Attachment Description',
        'post_excerpt' => 'Attachment Caption',
        'file'         => 'inc/starter_content/img/getting-what-you-want.png',
      ),
      'featured-image-are-you-sabotaging-your-creativity' => array(
        'post_title'   => 'Featured Image 3',
        'post_content' => 'Attachment Description',
        'post_excerpt' => 'Attachment Caption',
        'file'         => 'inc/starter_content/img/are-you-sabotaging-your-creativity.png',
      ),
      'featured-image-what-ive-learned-from-road-trips' => array(
        'post_title'   => 'Featured Image 4',
        'post_content' => 'Attachment Description',
        'post_excerpt' => 'Attachment Caption',
        'file'         => 'inc/starter_content/img/what-ive-learned-from-road-trips.png',
      ),
      'featured-image-how-to-write-10000-words-a-week' => array(
        'post_title'   => 'Featured Image 5',
        'post_content' => 'Attachment Description',
        'post_excerpt' => 'Attachment Caption',
        'file'         => 'inc/starter_content/img/how-to-write-10000-words-a-week.png',
      ),
    ),
    'posts' => array(
      'custom_post_1' => require dirname(__FILE__) . "/inc/starter_content/posts/nothing_beats_new_york.php",
      'custom_post_2' => require dirname(__FILE__) . "/inc/starter_content/posts/getting_what_you_want.php",
      'custom_post_3' => require dirname(__FILE__). "/inc/starter_content/posts/are_you_sabotaging_your_creativity.php",
      'custom_post_4' => require dirname(__FILE__). "/inc/starter_content/posts/how-to-write-10000-words-a-week.php",
      'custom_post_5' => require dirname(__FILE__). "/inc/starter_content/posts/what_ive_learned_from_road_trips.php",
    ),
    'nav_menus' => array(
      'primary' => array(
        'name' => 'Primary',
        'items' => $nav_items,
      ),
    ),
    'widgets' => array(
      'top-widget-first' => $header_widgets,
      'top-widget-second' => $header_widgets_2,
      'top-widget-third' => $header_widgets_3,
      'footer-first' => $footer_widgets,
      'footer-second' => $footer_widgets,
      'footer-third' => $footer_widgets,
      'landing-pagency-sidebar-1' => array(
        'custom_portrait' => array(
          'custom_html',
          array(
            'content' => '<div style="text-align:center;">
            <img src="'.get_template_directory_uri().'/inc/starter_content/img/portrait.png">
            <p style="text-align:center;margin-bottom:0;">
            Aliquam et elit eu nunc rhoncus viverra quis at felis et netus et malesuada fames ac turpis egestas. Aenean commodo ligula eget dolor.
            </p>'
          )
        ),
        'custom_banner' => array(
          'custom_html',
          array(
            'content' => '<img src="'.get_template_directory_uri().'/inc/starter_content/img/banner.png"/>'
          )
        ),
      ),
    )
  );

  add_theme_support('starter-content', $starter_content);
        // Starter Content End


	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
 ) );

  if ( landing_pagency_is_wc_active() ) {
    add_theme_support( 'woocommerce' );
  }

	// Set up the WordPress core custom background feature.
  add_theme_support( 'custom-background', apply_filters( 'landing_pagency_custom_background_args', array(
    'default-color' => '#fff',
    'default-image' => '',
  ) ) );
}
endif;
add_action( 'after_setup_theme', 'landing_pagency_setup' );

function landing_pagency_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'landing_pagency_content_width', 678 );
}
add_action( 'after_setup_theme', 'landing_pagency_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function landing_pagency_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'landing-pagency' ),
		'id'            => 'sidebar',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
 ) );

    // First Top Widget 
  register_sidebar( array(
    'name'          => __( 'Top Widget 1', 'landing-pagency' ),
    'description'   => __( 'First Top Widget Column', 'landing-pagency' ),
    'id'            => 'top-widget-first',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );


    // Second Top Widget 
  register_sidebar( array(
    'name'          => __( 'Top Widget 2', 'landing-pagency' ),
    'description'   => __( 'Second Top Widget Column', 'landing-pagency' ),
    'id'            => 'top-widget-second',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );

    // Third Top Widget 
  register_sidebar( array(
    'name'          => __( 'Top Widget 3', 'landing-pagency' ),
    'description'   => __( 'Third Top Widget Column', 'landing-pagency' ),
    'id'            => 'top-widget-third',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );


    // First Footer 
  register_sidebar( array(
    'name'          => __( 'Footer 1', 'landing-pagency' ),
    'description'   => __( 'First footer column', 'landing-pagency' ),
    'id'            => 'footer-first',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );

	// Second Footer 
  register_sidebar( array(
    'name'          => __( 'Footer 2', 'landing-pagency' ),
    'description'   => __( 'Second footer column', 'landing-pagency' ),
    'id'            => 'footer-second',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );

	// Third Footer 
  register_sidebar( array(
    'name'          => __( 'Footer 3', 'landing-pagency' ),
    'description'   => __( 'Third footer column', 'landing-pagency' ),
    'id'            => 'footer-third',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );

  if ( landing_pagency_is_wc_active() ) {
        // Register WooCommerce Shop and Single Product Sidebar
    register_sidebar( array(
      'name' => __('Shop Page Sidebar', 'landing-pagency' ),
      'description'   => __( 'Appears on Shop main page and product archive pages.', 'landing-pagency' ),
      'id' => 'shop-sidebar',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title"><span>',
      'after_title' => '</span></h3>',
    ) );
    register_sidebar( array(
      'name' => __('Single Product Sidebar', 'landing-pagency' ),
      'description'   => __( 'Appears on single product pages.', 'landing-pagency' ),
      'id' => 'product-sidebar',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title"><span>',
      'after_title' => '</span></h3>',
    ) );
  }
}
add_action( 'widgets_init', 'landing_pagency_widgets_init' );

function landing_pagency_custom_sidebar() {
    // Default sidebar.
  $sidebar = 'sidebar';

    // Woocommerce.
  if ( landing_pagency_is_wc_active() ) {
    if ( is_shop() || is_product_category() ) {
      $sidebar = 'shop-sidebar';
    }
    if ( is_product() ) {
      $sidebar = 'product-sidebar';
    }
  }

  return $sidebar;
}

/**
 * Enqueue scripts and styles.
 */
function landing_pagency_scripts() {
	wp_enqueue_style( 'landing-pagency-style', get_stylesheet_uri() );

	$handle = 'landing-pagency-style';

    // WooCommerce
  if ( landing_pagency_is_wc_active() ) {
    if ( is_woocommerce() || is_cart() || is_checkout() ) {
      wp_enqueue_style( 'landing-pagency-woocommerce', get_template_directory_uri() . '/css/woocommerce2.css' );
      $handle = 'woocommerce';
    }
  }

  wp_enqueue_script( 'landing-pagency-customscripts', get_template_directory_uri() . '/js/customscripts.js',array('jquery'),'',true); 

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
  $landing_pagency_color_scheme = get_theme_mod('landing_pagency_color_scheme', '#c69c6d');
  $landing_pagency_color_scheme2 = get_theme_mod('landing_pagency_color_scheme2', '#1b1b1b');
  $landing_pagency_layout = get_theme_mod('landing_pagency_layout', 'cslayout');
  $header_image = esc_url(get_header_image());
  esc_html($custom_css = "
        #site-header { background-image: url('$header_image'); }
    .related-posts .related-posts-no-img h5.title.front-view-title, #tabber .inside li .meta b,footer .widget li a:hover,.fn a,.reply a,#tabber .inside li div.info .entry-title a:hover, #navigation ul ul a:hover,.single_post a, a:hover, .sidebar.c-4-12 .textwidget a, #site-footer .textwidget a, #commentform a, #tabber .inside li a, .copyrights a:hover, a, .sidebar.c-4-12 a:hover, .top a:hover, footer .tagcloud a:hover,.sticky-text { color: $landing_pagency_color_scheme; }

    .total-comments span:after, span.sticky-post, .nav-previous a:hover, .nav-next a:hover, #commentform input#submit, #searchform input[type='submit'], .home_menu_item, .currenttext, .pagination a:hover, .readMore a, .ldgpgy-subscribe input[type='submit'], .pagination .current, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce-product-search input[type=\"submit\"], .woocommerce a.button, .woocommerce-page a.button, .woocommerce button.button, .woocommerce-page button.button, .woocommerce input.button, .woocommerce-page input.button, .woocommerce #respond input#submit, .woocommerce-page #respond input#submit, .woocommerce #content input.button, .woocommerce-page #content input.button, #sidebars h3.widget-title:after, .postauthor h4:after, .related-posts h3:after, .archive .postsby span:after, .comment-respond h4:after, .single_post header:after, #cancel-comment-reply-link, .upper-widgets-grid h3:after  { background-color: $landing_pagency_color_scheme; }

    .related-posts-no-img, #navigation ul li.current-menu-item a, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce-page nav.woocommerce-pagination ul li span.current, .woocommerce #content nav.woocommerce-pagination ul li span.current, .woocommerce-page #content nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce-page nav.woocommerce-pagination ul li a:hover, .woocommerce #content nav.woocommerce-pagination ul li a:hover, .woocommerce-page #content nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce-page nav.woocommerce-pagination ul li a:focus, .woocommerce #content nav.woocommerce-pagination ul li a:focus, .woocommerce-page #content nav.woocommerce-pagination ul li a:focus, .pagination .current, .tagcloud a { border-color: $landing_pagency_color_scheme; }
    .corner { border-color: transparent transparent $landing_pagency_color_scheme transparent;}

    ") ;
  if(!empty($landing_pagency_layout) && $landing_pagency_layout == "sclayout") {
    $custom_css .= ".article { float: right; } .sidebar.c-4-12 { float: left; }";
  }
  wp_add_inline_style( $handle, $custom_css );
}
add_action( 'wp_enqueue_scripts', 'landing_pagency_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * Custom Comments template
 */
if ( ! function_exists( 'landing_pagency_comments' ) ) {
	function landing_pagency_comment($comment, $args, $depth) { ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>" style="position:relative;" itemscope itemtype="http://schema.org/UserComments">
      <div class="comment-author vcard">
       <?php echo get_avatar( $comment->comment_author_email, 70 ); ?>
       <div class="comment-metadata">
        <?php printf('<span class="fn" itemprop="creator" itemscope itemtype="http://schema.org/Person">%s</span>', get_comment_author_link()) ?>
        <span class="comment-meta">
          <?php edit_comment_link(__('(Edit)', 'landing-pagency'),'  ','') ?>
        </span>
      </div>
    </div>
    <?php if ($comment->comment_approved == '0') : ?>
      <em><?php esc_html_e('Your comment is awaiting moderation.', 'landing-pagency') ?></em>
      <br />
    <?php endif; ?>
    <div class="commentmetadata" itemprop="commentText">
     <?php comment_text() ?>
     <time><?php comment_date(get_option( 'date_format' )); ?></time>
     <span class="reply">
      <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </span>
  </div>
</div>
</li>
<?php }
}

/*
 * Excerpt
 */
function landing_pagency_excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt);
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

/**
 * Shorthand function to check for more tag in post.
 *
 * @return bool|int
 */
function landing_pagency_post_has_moretag() {
  return strpos( get_the_content(), '<!--more-->' );
}

if ( ! function_exists( 'landing_pagency_readmore' ) ) {
    /**
     * Display a "read more" link.
     */
    function landing_pagency_readmore() {
      ?>
      <div class="readMore">
        <a href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php the_title_attribute(); ?>">
          <?php esc_html_e( 'Read More', 'landing-pagency' ); ?>
        </a>
      </div>
      <?php 
    }
  }

/**
 * Breadcrumbs
 */
if (!function_exists('landing_pagency_the_breadcrumb')) {
  function landing_pagency_the_breadcrumb() {
    if ( is_front_page() ) {
      return;
    }
    echo '<span typeof="v:Breadcrumb" class="root"><a rel="v:url" property="v:title" href="';
    echo esc_url( home_url() );
    echo '">'.esc_html(sprintf( __( "Home", 'landing-pagency' )));
    echo '</a></span><span><i class="landing-icon icon-angle-double-right"></i></span>';
    if (is_single()) {
      $categories = get_the_category();
      if ( $categories ) {
        $level = 0;
        $hierarchy_arr = array();
        foreach ( $categories as $cat ) {
          $anc = get_ancestors( $cat->term_id, 'category' );
          $count_anc = count( $anc );
          if (  0 < $count_anc && $level < $count_anc ) {
            $level = $count_anc;
            $hierarchy_arr = array_reverse( $anc );
            array_push( $hierarchy_arr, $cat->term_id );
          }
        }
        if ( empty( $hierarchy_arr ) ) {
          $category = $categories[0];
          echo '<span typeof="v:Breadcrumb"><a href="'. esc_url( get_category_link( $category->term_id ) ).'" rel="v:url" property="v:title">'.esc_html( $category->name ).'</a></span><span><i class="landing-icon icon-angle-double-right"></i></span>';
        } else {
          foreach ( $hierarchy_arr as $cat_id ) {
            $category = get_term_by( 'id', $cat_id, 'category' );
            echo '<span typeof="v:Breadcrumb"><a href="'. esc_url( get_category_link( $category->term_id ) ).'" rel="v:url" property="v:title">'.esc_html( $category->name ).'</a></span><span><i class="landing-icon icon-angle-double-right"></i></span>';
          }
        }
      }
      echo "<span><span>";
      the_title();
      echo "</span></span>";
    } elseif (is_page()) {
      $parent_id  = wp_get_post_parent_id( get_the_ID() );
      if ( $parent_id ) {
        $breadcrumbs = array();
        while ( $parent_id ) {
          $page = get_page( $parent_id );
          $breadcrumbs[] = '<span typeof="v:Breadcrumb"><a href="'.esc_url( get_permalink( $page->ID ) ).'" rel="v:url" property="v:title">'.esc_html( get_the_title($page->ID) ). '</a></span><span><i class="landing-icon icon-angle-double-right"></i></span>';
          $parent_id  = $page->post_parent;
        }
        $breadcrumbs = array_reverse( $breadcrumbs );
        foreach ( $breadcrumbs as $crumb ) { echo $crumb; }
      }
      echo "<span><span>";
      the_title();
      echo "</span></span>";
    } elseif (is_category()) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $this_cat_id = $cat_obj->term_id;
      $hierarchy_arr = get_ancestors( $this_cat_id, 'category' );
      if ( $hierarchy_arr ) {
        $hierarchy_arr = array_reverse( $hierarchy_arr );
        foreach ( $hierarchy_arr as $cat_id ) {
          $category = get_term_by( 'id', $cat_id, 'category' );
          echo '<span typeof="v:Breadcrumb"><a href="'.esc_url( get_category_link( $category->term_id ) ).'" rel="v:url" property="v:title">'.esc_html( $category->name ).'</a></span><span><i class="landing-icon icon-angle-double-right"></i></span>';
        }
      }
      echo "<span><span>";
      single_cat_title();
      echo "</span></span>";
    } elseif (is_author()) {
      echo "<span><span>";
      if(get_query_var('author_name')) :
        $curauth = get_user_by('slug', get_query_var('author_name'));
      else :
        $curauth = get_userdata(get_query_var('author'));
      endif;
      echo esc_html( $curauth->nickname );
      echo "</span></span>";
    } elseif (is_search()) {
      echo "<span><span>";
      the_search_query();
      echo "</span></span>";
    } elseif (is_tag()) {
      echo "<span><span>";
      single_tag_title();
      echo "</span></span>";
    }
  }
}


/*
 * Google Fonts
 */
function landing_pagency_fonts_url() {
  $fonts_url = '';

    /* Translators: If there are characters in your language that are not
    * supported by Monda, translate this to 'off'. Do not translate
    * into your own language.
    */
    $monda = _x( 'on', 'Monda font: on or off', 'landing-pagency' );

    if ( 'off' !== $monda ) {
      $font_families = array();

      if ( 'off' !== $monda ) {
        $font_families[] = urldecode('Roboto:400,500,700,900');
      }

      $query_args = array(
        'family' => urlencode( implode( '|', $font_families ) ),
            //'subset' => urlencode( 'latin,latin-ext' ),
      );

      $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
    }

    return $fonts_url;
  }

  function landing_pagency_scripts_styles() {
    wp_enqueue_style( 'landing-pagency-fonts', landing_pagency_fonts_url(), array(), null );
  }
  add_action( 'wp_enqueue_scripts', 'landing_pagency_scripts_styles' );

/**
 * WP Mega Menu Plugin Support
 */
function landing_pagency_megamenu_parent_element( $selector ) {
  return '.primary-navigation .container';
}
add_filter( 'wpmm_container_selector', 'landing_pagency_megamenu_parent_element' );

/**
 * Determines whether the WooCommerce plugin is active or not.
 * @return bool
 */
function landing_pagency_is_wc_active() {
  if ( is_multisite() ) {
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

    return is_plugin_active( 'woocommerce/woocommerce.php' );
  } else {
    return in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) );
  }
}

/**
 * WooCommerce
 */
if ( landing_pagency_is_wc_active() ) {
  if ( !function_exists( 'landing_pagency_ldgpgy_loop_columns' )) {
        /**
         * Change number or products per row to 3
         *
         * @return int
         */
        function landing_pagency_ldgpgy_loop_columns() {
            return 3; // 3 products per row
          }
        }
        add_filter( 'loop_shop_columns', 'landing_pagency_ldgpgy_loop_columns' );

    /**
     * Change the number of product thumbnails to show per row to 4.
     *
     * @return int
     */
    function landing_pagency_woocommerce_thumb_cols() {
     return 4; // .last class applied to every 4th thumbnail
   }
   add_filter( 'woocommerce_product_thumbnails_columns', 'landing_pagency_woocommerce_thumb_cols' );


    /**
     * Ensure cart contents update when products are added to the cart via AJAX.
     *
     * @param $fragments
     *
     * @return mixed
     */
    function landing_pagency_header_add_to_cart_fragment( $fragments ) {
      global $woocommerce;
      ob_start(); ?>

      <a class="cart-contents" href="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>" title="<?php esc_html_e( 'View your shopping cart', 'landing-pagency' ); ?>"><?php echo sprintf( _n( '%d item', '%d items', $woocommerce->cart->cart_contents_count, 'landing-pagency' ), $woocommerce->cart->cart_contents_count );?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>

      <?php $fragments['a.cart-contents'] = ob_get_clean();
      return $fragments;
    }
    add_filter( 'add_to_cart_fragments', 'landing_pagency_header_add_to_cart_fragment' );

    /**
     * Optimize WooCommerce Scripts
     * Updated for WooCommerce 2.0+
     * Remove WooCommerce Generator tag, styles, and scripts from non WooCommerce pages.
     */
    function landing_pagency_manage_woocommerce_styles() {
        //remove generator meta tag
      remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );

        //first check that woo exists to prevent fatal errors
      if ( function_exists( 'is_woocommerce' ) ) {
            //dequeue scripts and styles
        if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
          wp_dequeue_style( 'woocommerce-layout' );
          wp_dequeue_style( 'woocommerce-smallscreen' );
          wp_dequeue_style( 'woocommerce-general' );
                wp_dequeue_style( 'wc-bto-styles' ); //Composites Styles
                wp_dequeue_script( 'wc-add-to-cart' );
                wp_dequeue_script( 'wc-cart-fragments' );
                wp_dequeue_script( 'woocommerce' );
                wp_dequeue_script( 'jquery-blockui' );
                wp_dequeue_script( 'jquery-placeholder' );
              }
            }
          }
          add_action( 'wp_enqueue_scripts', 'landing_pagency_manage_woocommerce_styles', 99 );

    // Remove WooCommerce generator tag.
          remove_action('wp_head', 'wc_generator_tag');
        }

/**
 * Post Layout for Archives
 */
if ( ! function_exists( 'landing_pagency_archive_post' ) ) {
    /**
     * Display a post of specific layout.
     * 
     * @param string $layout
     */
    function landing_pagency_archive_post( $layout = '' ) { 
     ?>
     <article class="post excerpt">

       <?php if ( has_post_thumbnail() ) { ?>
         <div class="post-blogs-container-thumbnails">
         <?php } else { ?>
           <div class="post-blogs-container">
           <?php } ?>
           <?php if ( has_post_thumbnail() ) { ?>
             <div class="featured-thumbnail-container">
              <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" id="featured-thumbnail">
                <?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  
                echo '<div class="blog-featured-thumbnail" style="background-image:url('.esc_url($featured_img_url).')"></div>';
                ?>
              </a>
            </div>
            <div class="thumbnail-post-content">
            <?php } else { ?>
              <div class="nothumbnail-post-content">
              <?php } ?>
              <h2 class="title">
                <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
              </h2>

              <span class="entry-meta">
                <?php echo get_the_date(); ?>
                <?php
                if ( is_sticky() && is_home() && ! is_paged() ) {
                  printf( ' / <span class="sticky-text">%s</span>', __( 'Featured', 'landing-pagency' ) );
                } ?>
              </span>
              <div class="post-content">
                <?php echo landing_pagency_excerpt(26); ?>...
              </div>
              <?php if (landing_pagency_post_has_moretag()) : ?>
                <?php landing_pagency_readmore(); ?>
              </div>
            </div>
          <?php endif; ?>

        </article>
      <?php }
    }



/**
 * Copyright and License for Upsell button by Justin Tadlock - 2016 © Justin Tadlock. Customizer button https://gitblogily.com/justintadlock/trt-customizer-pro
 */
require_once( trailingslashit( get_template_directory() ) . 'justinadlock-customizer-button/class-customize.php' );








// Theme page start

add_action('admin_menu', 'landing_pagency_themepage');
function landing_pagency_themepage()
{
  $option = get_option('landing_pagency_themepage_seen');
  $awaiting = !$option ? ' <span class="awaiting-mod">1</span>' : '';
  $theme_info = add_theme_page(__('Theme Settings', 'landing-pagency'), __('Theme Settings', 'landing-pagency').$awaiting, 'manage_options', 'landing-pagency-info.php', 'landing_pagency_info_page', 1);
}
function landing_pagency_info_page()
{
  $user = wp_get_current_user();
  $theme = wp_get_theme();
  $parent_name = is_child_theme() ? wp_get_theme($theme->Template) : '';
  $theme_name = is_child_theme() ? $theme." ".__("and", "landing-pagency")." ".$parent_name : $theme;
  $demo_text = is_child_theme() ? sprintf(__("Need inspiration? Take a moment to view our theme demo for the %s parent theme %s!", "landing-pagency"), $theme, $parent_name) : __("Need inspiration? Take a moment to view our theme demo!", "landing-pagency");
  $premium_text = is_child_theme() ? sprintf(__("Unlock all features by upgrading to the premium edition of %s and its parent theme %s.", "landing-pagency"), $theme, $parent_name) : sprintf(__("Unlock all features by upgrading to the premium edition of %s.", "landing-pagency"),$theme);
  $option_name = 'landing_pagency_themepage_seen';
  $option = get_option($option_name, null);
  if (is_null($option)) {
    add_option($option_name, true);
  } elseif (!$option) {
    update_option($option_name, true);
  } ?>
  <div class="wrap">

    <div class="spt-theme-settings-wrapper">
      <div class="spt-theme-settings-wrapper-main-content">
        <div class="spt-theme-settings-tabs">

         <div class="spt-theme-settings-tab">
           <input type="radio" id="tab-1" name="tab-group-1">



           <label class="spt-theme-settings-label" for="tab-1"><?php esc_html_e("Get started with", "landing-pagency"); ?> <?php echo esc_html($theme_name); ?></label>

           <div class="spt-theme-settings-content">

            <div class="spt-theme-settings-content-getting-started-wrapper">
              <div class="spt-theme-settings-content-item">
                <div class="spt-theme-settings-content-item-header">
                  <?php esc_html_e("Add Menus", "landing-pagency"); ?>
                </div>
                <div class="spt-theme-settings-content-item-content">
                 <a href="<?php echo esc_url(admin_url('nav-menus.php'))  ?>"><?php esc_html_e("Go to Menus", "landing-pagency"); ?></a>
               </div>
             </div>

             <div class="spt-theme-settings-content-item">
              <div class="spt-theme-settings-content-item-header">
               <?php esc_html_e("Add Widgets", "landing-pagency"); ?>
             </div>
             <div class="spt-theme-settings-content-item-content">
              <a href="<?php echo esc_url(admin_url('widgets.php'))  ?>"><?php esc_html_e("Go to Widgets", "landing-pagency"); ?></a>
            </div>
          </div>

          <div class="spt-theme-settings-content-item">
            <div class="spt-theme-settings-content-item-header">
              <?php esc_html_e("Change Header Image", "landing-pagency"); ?>
            </div>
            <div class="spt-theme-settings-content-item-content">
              <a href="<?php echo esc_url(admin_url('customize.php')) ?>"><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></a>
            </div>
          </div>

          <div class="spt-theme-settings-content-item">
            <div class="spt-theme-settings-content-item-header">
              <?php esc_html_e("Customize Header Text, Colors & Background", "landing-pagency"); ?>
           </div>
           <div class="spt-theme-settings-content-item-content">
            <a href="<?php echo esc_url(admin_url('customize.php')) ?>"><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></a>
          </div>
        </div>

                  <div class="spt-theme-settings-content-item">
            <div class="spt-theme-settings-content-item-header">
              <?php esc_html_e("Customize Primary Color", "landing-pagency"); ?>
           </div>
           <div class="spt-theme-settings-content-item-content">
            <a href="<?php echo esc_url(admin_url('customize.php')) ?>"><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></a>
          </div>
        </div>

        <div class="spt-theme-settings-content-item">
          <div class="spt-theme-settings-content-item-header">
           <?php esc_html_e("Upload Logo", "landing-pagency"); ?>
         </div>
         <div class="spt-theme-settings-content-item-content">
          <a href="<?php echo esc_url(admin_url('customize.php')) ?>"><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></a>
        </div>
      </div>

      <div class="spt-theme-settings-content-item">
        <div class="spt-theme-settings-content-item-header">
         <?php esc_html_e("Change Background Color / Image", "landing-pagency"); ?>
       </div>
       <div class="spt-theme-settings-content-item-content">
        <a href="<?php echo esc_url(admin_url('customize.php')) ?>"><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></a>
      </div>
    </div>


    <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Customize All Fonts", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></span>
      </div>
    </a>

    <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Customize All Colors", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></span>
      </div>
    </a>

    <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Import Demo Content", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Demo Import", "landing-pagency"); ?></span>
      </div>
    </a>

    <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Contact Premium Support", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></span>
      </div>
    </a>

    <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Unlock Full SEO Optimization", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></span>
      </div>
    </a>

    <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Activate Language/Country Target SEO", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></span>
      </div>
    </a>

    <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Only Show Header On Front Page", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></span>
      </div>
    </a>

    <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Custom Header Title & Tagline", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></span>
      </div>
    </a>


    <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Only Show Top Widgets On Front Page", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></span>
      </div>
    </a>

    <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Unlock Elementor Compatibility", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Install Elementor", "landing-pagency"); ?></span>
      </div>
    </a>

    <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Access All Child Themes", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("View Child Themes", "landing-pagency"); ?></span>
      </div>
    </a>


    <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Add Recent Posts Widget", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Widgets", "landing-pagency"); ?></span>
      </div>
    </a>

    <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Customize Header Height", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></span>
      </div>
    </a>


    <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Custom Copyright Text", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></span>
      </div>
    </a>


    <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Remove 'Tag' from tag page title", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></span>
      </div>
    </a>


    <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Remove 'Author' from author page title", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></span>
      </div>
    </a>


    <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Remove 'Category' from author page title", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></span>
      </div>
    </a>


    <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Hide/Show Related Posts Section", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></span>
      </div>
    </a>
        <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Hide/Show Author Info Section", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></span>
      </div>
    </a>
        <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Right/Left Sidebar", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></span>
      </div>
    </a>

            <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Hide/Show Breadcrumbs", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></span>
      </div>
    </a>
            <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Hide/Show Tags Section", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></span>
      </div>
    </a>
            <a target="_blank" href="https://superbthemes.com/landing-pagency/" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
      <div class="spt-theme-settings-content-item-header">
        <span><?php esc_html_e("Next/Previous or Numbered Pagination", "landing-pagency"); ?></span> <span><?php esc_html_e("Premium", "landing-pagency"); ?></span>
      </div>
      <div class="spt-theme-settings-content-item-content">
        <span><?php esc_html_e("Go to Customizer", "landing-pagency"); ?></span>
      </div>
    </a>
    

  </div>
</div> 
</div>


</div>      
</div>

<div class="spt-theme-settings-wrapper-sidebar">

  <div class="spt-theme-settings-wrapper-sidebar-item">
    <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("Additional Resources", "landing-pagency"); ?></div>
    <div class="spt-theme-settings-wrapper-sidebar-item-content">
      <ul>
        <li>
          <a target="_blank" href="https://wordpress.org/support/forums/"><span class="dashicons dashicons-wordpress"></span><?php esc_html_e("WordPress.org Support Forum", "landing-pagency"); ?></a>
        </li>
        <li>
          <a target="_blank" href="https://www.facebook.com/superbthemescom/"><span class="dashicons dashicons-facebook-alt"></span><?php esc_html_e("Find us on Facebook", "landing-pagency"); ?></a>
        </li>
        <li>
          <a target="_blank" href="https://twitter.com/superbthemescom"><span class="dashicons dashicons-twitter"></span><?php esc_html_e("Find us on Twitter", "landing-pagency"); ?></a>
        </li>
        <li>
          <a target="_blank" href="https://www.instagram.com/superbthemes/"><span class="dashicons dashicons-instagram"></span><?php esc_html_e("Find us on Instagram", "landing-pagency"); ?></a>
        </li>

      </ul>
    </div>
  </div>


  <div class="spt-theme-settings-wrapper-sidebar-item">
    <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("View Demo", "landing-pagency"); ?></div>
    <div class="spt-theme-settings-wrapper-sidebar-item-content">
      <p><?php echo esc_html($demo_text); ?></p>
      <a href="https://superbthemes.com/demo/landing-pagency/" target="_blank" class="button button-primary"><?php esc_html_e("View Demo", "landing-pagency"); ?></a>
    </div>
  </div>

  <div class="spt-theme-settings-wrapper-sidebar-item">
    <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("Upgrade to Premium", "landing-pagency"); ?></div>
    <div class="spt-theme-settings-wrapper-sidebar-item-content">
      <p><?php echo esc_html($premium_text); ?></p>
      <a href="https://superbthemes.com/landing-pagency/" target="_blank" class="button button-primary"><?php esc_html_e("View Premium Version", "landing-pagency"); ?></a>
    </div>
  </div>

  <div class="spt-theme-settings-wrapper-sidebar-item">
    <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("Helpdesk", "landing-pagency"); ?></div>
    <div class="spt-theme-settings-wrapper-sidebar-item-content">
      <p><?php esc_html_e("If you have issues with", "landing-pagency"); ?> <?php echo esc_html($theme); ?> <?php esc_html_e("then send us an email through our website!", "landing-pagency"); ?></p>
      <a href="https://superbthemes.com/customer-support/" target="_blank" class="button"><?php esc_html_e("Contact Support", "landing-pagency"); ?></a>
    </div>
  </div>

  <div class="spt-theme-settings-wrapper-sidebar-item">
    <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("Review the Theme", "landing-pagency"); ?></div>
    <div class="spt-theme-settings-wrapper-sidebar-item-content">
      <p><?php esc_html_e("Do you enjoy using", "landing-pagency"); ?> <?php echo esc_html($theme); ?><?php esc_html_e("? Support us by reviewing us on WordPress.org!", "landing-pagency"); ?></p>
      <a href="https://wordpress.org/support/theme/<?php echo esc_attr(get_stylesheet()); ?>/reviews/#new-post" target="_blank" class="button"><?php esc_html_e("Leave a Review", "landing-pagency"); ?></a>
    </div>
  </div>



</div>

</div>
</div>


<?php
}

function landing_pagency_comparepage_css($hook) {
  if ('appearance_page_landing-pagency-info' != $hook) {
    return;
  }
  wp_enqueue_style('landing-pagency-custom-style', get_template_directory_uri() . '/css/compare.css');
}
add_action('admin_enqueue_scripts', 'landing_pagency_comparepage_css');

// Theme page end




/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Landing Pagency for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/tgm/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/tgm/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once dirname( __FILE__ ) . '/tgm/class-tgm-plugin-activation.php';
 */
require_once get_template_directory() . '/tgm/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'landing_pagency_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function landing_pagency_register_required_plugins() {
  /*
   * Array of plugin arrays. Required keys are name and slug.
   * If the source is NOT from the .org repo, then source is also required.
   */
  $plugins = array(

    array(
      'name'      => 'Superb Helper',
      'slug'      => 'superb-helper',
      'required'  => false,
    ),
  array(
      'name'      => 'Superb Addons - WordPress Editor And Elementor Blocks, Sections & Patterns',
      'slug'      => 'superb-blocks',
      'required'  => false,
    ),

  );

  /*
   * Array of configuration settings. Amend each line as needed.
   *
   * TGMPA will start providing localized text strings soon. If you already have translations of our standard
   * strings available, please help us make TGMPA even better by giving us access to these translations or by
   * sending in a pull-request with .po file(s) with the translations.
   *
   * Only uncomment the strings in the config array if you want to customize the strings.
   */
  $config = array(
    'id'           => 'landing-pagency',                 // Unique ID for hashing notices for multiple instances of TGMPA.
    'default_path' => '',                      // Default absolute path to bundled plugins.
    'menu'         => 'tgmpa-install-plugins', // Menu slug.
    'has_notices'  => true,                    // Show admin notices or not.
    'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
    'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
    'is_automatic' => false,                   // Automatically activate plugins after installation or not.
    'message'      => '',                      // Message to output right before the plugins table.


  );

  tgmpa( $plugins, $config );
}


add_action('admin_init', 'landing_pagency_spbThemesNotification', 8);

function landing_pagency_spbThemesNotification(){
  $notifications = include('inc/admin_notification/Autoload.php');
  $notifications->Add("landing_pagency_notification", "Unlock All Features with Landing Pagency Premium – Limited Time Offer", "

    Take advantage of the up to <span style='font-weight:bold;'>40% discount</span> and unlock all features with Landing Pagency Premium. 
    The discount is only available for a limited time.

    <div>
    <a style='margin-bottom:15px;' class='button button-large button-secondary' target='_blank' href='https://superbthemes.com/landing-pagency/'>Read More</a> <a style='margin-bottom:15px;' class='button button-large button-primary' target='_blank' href='https://superbthemes.com/landing-pagency/'>Upgrade Now</a>
    </div>

    ", "info");
 

  $options_notification_start = array("delay"=> "-1 seconds", "wpautop" => false);
  $notifications->Add("landing_pagency_notification_start", "Let's get you started with Landing Pagency!", '
    <span class="st-notification-wrapper">
    <span class="st-notification-column-wrapper">
      <span class="st-notification-column">
        <img src="'. esc_url( get_template_directory_uri() . '/inc/admin_notification/src/preview.png' ).'" width="150" height="177" />
      </span>

      <span class="st-notification-column">
        <h2>Why Landing Pagency</h2>
        <ul class="st-notification-column-list">
        <li>Easy to Use & Customize</li>
        <li>Search Engine Optimized</li>
        <li>Lightweight and Fast</li>
        <li>Top-notch Customer Support</li>
        </ul>
        <a href="https://superbthemes.com/demo/landing-pagency/" target="_blank" class="button">View Landing Pagency Demo <span aria-hidden="true" class="dashicons dashicons-external"></span></a> 

      </span>
        <span class="st-notification-column">
        <h2>Customize Landing Pagency</h2>
        <ul>
          <li><a href="'. esc_url( admin_url( 'customize.php' ) ) .'" class="button button-primary">Customize The Design</a></li>
          <li><a href="'. esc_url( admin_url( 'widgets.php' ) ) .'" class="button button-primary">Add/Edit Widgets</a></li>
          <li><a href="https://superbthemes.com/customer-support/" target="_blank" class="button">Contact Support <span aria-hidden="true" class="dashicons dashicons-external"></span></a> </li>
        </ul>
      </span>
      </span>
      <span class="st-notification-footer">
        Landing Pagency is created by SuperbThemes. We have 100.000+ users and are rated <strong>Excellent</strong> on Trustpilot <img src="'. esc_url( get_template_directory_uri() . '/inc/admin_notification/src/stars.svg' ).'" width="87" height="16" />
      </span>
    </span>

<style>.st-notification-column-wrapper{width:100%;display:-webkit-box;display:-ms-flexbox;display:flex;border-top:1px solid #eee;padding-top:20px;margin-top:3px}.st-notification-column-wrapper h2{margin:0}.st-notification-footer img{margin-bottom:-3px;margin-left:10px}.st-notification-column-wrapper .button{min-width:180px;text-align:center;margin-top:10px}.st-notification-column{margin-right:10px;padding:0 10px;max-width:250px;width:100%}.st-notification-column img{border:1px solid #eee}.st-notification-footer{display:inline-block;width:100%;padding:15px 0;border-top:1px solid #eee;margin-top:10px}.st-notification-column:first-of-type{padding-left:0;max-width:160px}.st-notification-column-list li{list-style-type:circle;margin-left:15px;font-size:14px}@media only screen and (max-width:1000px){.st-notification-column{max-width:33%}}@media only screen and (max-width:800px){.st-notification-column{max-width:50%}.st-notification-column:first-of-type{display:none}}@media only screen and (max-width:600px){.st-notification-column-wrapper{display:block}.st-notification-column{width:100%;max-width:100%;display:inline-block;padding:0;margin:0}span.st-notification-column:last-of-type{margin-top:30px}}</style>

    ', "info", $options_notification_start);
  $notifications->Boot();
}
