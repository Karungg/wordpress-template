<?php
/**
 * Theme Admin Info class
 */
class consultinggrove_Admin_Info {
    /**
     * Initialize the theme
     */
    public function __construct() {
        add_action('admin_menu', array($this, 'add_menu'));
         add_action('after_switch_theme', array($this, 'reset_notification_dismissal'));
        add_action( 'admin_notices', array( $this, 'compatible_check' ) );
        add_action( 'admin_footer', array( $this, 'admin_notice_script' ) );
        add_action( 'wp_ajax_dismiss_consultinggrove_notification', array( $this, 'dismiss_notification_ajax_handler' ) );
    }
    
    /**
     * Add theme page
     */
    public function add_menu() {
        add_theme_page(
            esc_html__('ConsultingGrove Theme', 'consultinggrove'),
            esc_html__('ConsultingGrove Theme', 'consultinggrove'),
            'edit_theme_options',
            'consultinggrove',
            array($this, 'theme_page_display')
        );
    }

    /**
     * Display About theme page
     */
    public function theme_page_display() {
        $theme = wp_get_theme();
        include_once dirname( __FILE__ ) . '/../inc/theme-info.php';
    }      


    /**
     * Reset the notification dismissal state when the theme is activated
     */
    public function reset_notification_dismissal() {
        delete_transient('consultinggrove_notification_dismissed');
    }

    /**
     * Check compatibility and display notification
     */
    public function compatible_check() {
        $dismissed = get_transient('consultinggrove_notification_dismissed');
        if ($dismissed !== '1') {
            include_once dirname( __FILE__ ) . '/../inc/theme-notice.php';
        }
    }
        
    /**
     * Dismiss the notification
     */
    public function dismiss_notification() {
        set_transient('consultinggrove_notification_dismissed', '1', 7 * DAY_IN_SECONDS);
    }
        

    public function dismiss_notification_ajax_handler() {
        check_ajax_referer('dismiss_notification_nonce', 'nonce');
        $this->dismiss_notification();
        echo 'success'; 
        wp_die();
    }

    
    /**
     * Enqueue admin notice script
     */
    public function admin_notice_script() {
        ?>
        <script>
            (function($) {
                $(document).on('click', '.notice.is-dismissible .notice-dismiss', function() {
                    $.ajax({
                        url: ajaxurl,
                        type: 'POST',
                        data: {
                            action: 'dismiss_consultinggrove_notification',
                            nonce: '<?php echo wp_create_nonce( 'dismiss_notification_nonce' ); ?>'
                        }
                    });
                });
            })(jQuery);
        </script>
        <?php
    }

}

new consultinggrove_Admin_Info();
