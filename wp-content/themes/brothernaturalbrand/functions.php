<?php

function catalog()
{
    wp_enqueue_style('googleapis', 'https://fonts.googleapis.com');
    wp_enqueue_style('gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style('fonts-googleapis', 'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    wp_enqueue_style('bootstrap',  get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('fonts',  get_template_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style('carousel',  get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme',  get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
    wp_enqueue_style('all',  get_template_directory_uri() . '/assets/fonts/fontawesome-free/css/all.min.css');
    wp_enqueue_style('default-style',  get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('custom-script-jquery', get_template_directory_uri() . '/assets/js/jquery-3.min.js', array('jquery'));
    wp_enqueue_script('custom-script-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'));
    wp_enqueue_script('custom-script-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'));
    wp_enqueue_script('custom-script-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'));
    wp_enqueue_script('custom-script-validate',  get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array('jquery'));
    wp_enqueue_script('custom-script-validate-additional-methods',  get_template_directory_uri() . '/assets/js/additional-methods.min.js', array('jquery'));
    // wp_enqueue_script('custom-script-validate-min', get_template_directory_uri() . '/assets/js/jquery.validate.js', array('jquery'));
    wp_enqueue_script('custom-script-custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'catalog');

register_nav_menus(array(
    'brother-primary-menu' => __('Primary Menu'),
    'brother-footer_menu' => __('Footer Menu'),
));


add_theme_support('custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array('site-title', 'site-description'),
));

add_theme_support('custom-logo');

function get_custom_logo_url()
{
    $custom_logo_id = get_theme_mod('custom_logo');
    $image = wp_get_attachment_image_src($custom_logo_id, 'full');
    return $image[0];
}

function add_li_class($classes, $item, $args)
{
    if ($args->theme_location == 'brother-primary-menu') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_li_class', 1, 3);

function add_a_class($atts, $item, $args)
{
    if ($args->theme_location == 'brother-primary-menu') {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_a_class', 1, 3);


//Custom Theme Settings
add_action('admin_menu', 'add_gcf_interface');

function add_gcf_interface()
{
    add_options_page('Global Setting', 'Global Setting', '8', 'functions', 'editglobalcustomfields');
}

function editglobalcustomfields()
{
?>
    <div class='wrap'>
        <h2>Global Setting</h2>
        <form method="post" action="options.php">
            <?php wp_nonce_field('update-options') ?>

            <p><strong>Facebook Link:</strong><br />
                <input type="text" name="facebook_link" value="<?php echo get_option('facebook_link'); ?>" pattern="(?:(?:http|https):\/\/)?(?:www.)?facebook.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[?\w\-]*\/)?(?:profile.php\?id=(?=\d.*))?([\w\-]*)?" />
            </p>

            <p><strong>Instagram Link:</strong><br />
                <input type="text" name="instagram_link" value="<?php echo get_option('instagram_link'); ?>" pattern="/(?:(?:http|https):\/\/)?(?:www\.)?(?:instagram\.com|instagr\.am)\/([A-Za-z0-9-_\.]+)/im" />
            </p>

            <p><strong>LinkedIn Link:</strong><br />
                <input type="text" name="linkedin_link" value="<?php echo get_option('linkedin_link'); ?>" pattern="http(s)?:\/\/([\w]+\.)?linkedin\.com\/in\/[A-z0-9_-]+\/?" />
            </p>

            <p><input type="submit" name="Submit" value="Update Options" /></p>

            <input type="hidden" name="action" value="update" />
            <input type="hidden" name="page_options" value="instagram_link,linkedin_link,facebook_link" />

        </form>
    </div>
<?php
}

add_action('template_redirect', function () {

    if (is_front_page() &&  !$_COOKIE["confirm-id"]) {
        wp_redirect(home_url('/confirm-age'));
        die();
    }
});



remove_action('wpcf7_init', 'wpcf7_add_form_tag_submit');
add_action('wpcf7_init', 'new_wpcf7_add_shortcode_submit_button', 20);

function new_wpcf7_add_shortcode_submit_button()
{
    wpcf7_add_shortcode('submit', 'new_wpcf7_submit_button_shortcode_handler');
}

function new_wpcf7_submit_button_shortcode_handler($tag)
{
    $class = wpcf7_form_controls_class($tag->type, 'has-spinner');

    $atts = array();

    $atts['class'] = $tag->get_class_option($class);
    $atts['id'] = $tag->get_id_option();
    $atts['tabindex'] = $tag->get_option('tabindex', 'signed_int', true);

    $value = isset($tag->values[0]) ? $tag->values[0] : '';

    if (empty($value)) {
        $value = __('Send', 'contact-form-7');
    }

    $atts['type'] = 'submit';
    $atts['value'] = $value;

    $atts = wpcf7_format_atts($atts);

    $html = sprintf('<button %1$s >' . $value . '</button>', $atts);

    return $html;
}

add_filter('wpsl_templates', 'brother_nature_brand_template');

function brother_nature_brand_template($templates)
{

    /**
     * The 'id' is for internal use and must be unique ( since 2.0 ).
     * The 'name' is used in the template dropdown on the settings page.
     * The 'path' points to the location of the custom template,
     * in this case the folder of your active theme.
     */
    $templates[] = array(
        'id'   => 'custom',
        'name' => 'Brother Nature Brand',
        'path' => get_stylesheet_directory() . '/' . 'wpsl-templates.php',
    );

    return $templates;
}
