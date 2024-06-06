<!-- <div class="searchform">
    <label class="label">Enter Location, ZIP or City</label>
    <div class="formbox">
        <input class="form-control" type="text" />
        <button class="btn searchbtn">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/search.png" alt="search" />
        </button>
    </div>
</div>
<div class="map-list-box">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d186029.83435154!2d-86.55188183416199!3d43.23641034213622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88197cc3a93d9ed9%3A0x247e359134f72540!2sMuskegon%2C%20MI%2C%20USA!5e0!3m2!1sen!2sin!4v1716806863617!5m2!1sen!2sin" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="maplist">
        <a class="maplist-item" href="#">
            <h4>Black Market Cannabis Muskegon</h4>
            <div class="mapcontent">
                <div class="mapleftdata">
                    <h5>Muskegon</h5>
                    <p>5.2 km</p>
                </div>
                <div class="direction">Get directions</div>
            </div>
        </a>
        <a class="maplist-item" href="#">
            <h4>Bodega MUSKEGON</h4>
            <div class="mapcontent">
                <div class="mapleftdata">
                    <h5>Muskegon</h5>
                    <p>5.2 km</p>
                </div>
                <div class="direction">Get directions</div>
            </div>
        </a>
    </div>
</div> -->


<?php

global $wpsl_settings, $wpsl;

$output         = $this->get_custom_css();
$autoload_class = (!$wpsl_settings['autoload']) ? 'class="wpsl-not-loaded"' : '';

$output .=  '<div class="container"><div class="searchform ' . $this->get_css_classes() . '"><form autocomplete="off">';
$output .=  '<label class="label">' . esc_html($wpsl->i18n->get_translation('search_label', __('Enter Location, ZIP or City', 'wpsl'))) . '</label>';
$output .=  '<div class="formbox">';
$output .=  '<input id="wpsl-search-input" type="text" class="form-control" value="' . apply_filters('wpsl_search_input', '') . '" name="wpsl-search-input" placeholder="" aria-required="true" />';
$output .=  '<button id="wpsl-search-btn" class="btn searchbtn"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/search.png" alt="search" /></button>';
$output .=  '</div></form></div></div><div class="map-list-box">';
$output .=  '<div id="wpsl-gmap" class="wpsl-gmap-canvas"></div>';
$output .=  '<div id="wpsl-result-list" >';
$output .=  '<div class="maplist" id="wpsl-stores" ' . $autoload_class . '>';
$output .=  '<ul></ul>';
$output .=  '</div>';
$output .=  '</div></div>';
/*
$output .= '<div id="wpsl-wrap">' . "\r\n";
$output .= "\t" . '<div class="wpsl-search wpsl-clearfix ' . $this->get_css_classes() . '">' . "\r\n";
$output .= "\t\t" . '<div id="wpsl-search-wrap">' . "\r\n";
$output .= "\t\t\t" . '<form autocomplete="off">' . "\r\n";
$output .= "\t\t\t" . '<div class="wpsl-input">' . "\r\n";
$output .= "\t\t\t\t" . '<div><label for="wpsl-search-input">' . esc_html($wpsl->i18n->get_translation('search_label', __('Your location', 'wpsl'))) . '</label></div>' . "\r\n";
$output .= "\t\t\t\t" . '<input id="wpsl-search-input" type="text" value="' . apply_filters('wpsl_search_input', '') . '" name="wpsl-search-input" placeholder="" aria-required="true" />' . "\r\n";
$output .= "\t\t\t" . '</div>' . "\r\n";

if ($wpsl_settings['radius_dropdown'] || $wpsl_settings['results_dropdown']) {
    $output .= "\t\t\t" . '<div class="wpsl-select-wrap">' . "\r\n";

    if ($wpsl_settings['radius_dropdown']) {
        $output .= "\t\t\t\t" . '<div id="wpsl-radius">' . "\r\n";
        $output .= "\t\t\t\t\t" . '<label for="wpsl-radius-dropdown">' . esc_html($wpsl->i18n->get_translation('radius_label', __('Search radius', 'wpsl'))) . '</label>' . "\r\n";
        $output .= "\t\t\t\t\t" . '<select id="wpsl-radius-dropdown" class="wpsl-dropdown" name="wpsl-radius">' . "\r\n";
        $output .= "\t\t\t\t\t\t" . $this->get_dropdown_list('search_radius') . "\r\n";
        $output .= "\t\t\t\t\t" . '</select>' . "\r\n";
        $output .= "\t\t\t\t" . '</div>' . "\r\n";
    }

    if ($wpsl_settings['results_dropdown']) {
        $output .= "\t\t\t\t" . '<div id="wpsl-results">' . "\r\n";
        $output .= "\t\t\t\t\t" . '<label for="wpsl-results-dropdown">' . esc_html($wpsl->i18n->get_translation('results_label', __('Results', 'wpsl'))) . '</label>' . "\r\n";
        $output .= "\t\t\t\t\t" . '<select id="wpsl-results-dropdown" class="wpsl-dropdown" name="wpsl-results">' . "\r\n";
        $output .= "\t\t\t\t\t\t" . $this->get_dropdown_list('max_results') . "\r\n";
        $output .= "\t\t\t\t\t" . '</select>' . "\r\n";
        $output .= "\t\t\t\t" . '</div>' . "\r\n";
    }

    $output .= "\t\t\t" . '</div>' . "\r\n";
}

if ($this->use_category_filter()) {
    $output .= $this->create_category_filter();
}

$output .= "\t\t\t\t" . '<div class="wpsl-search-btn-wrap"><input id="wpsl-search-btn" type="submit" value="' . esc_attr($wpsl->i18n->get_translation('search_btn_label', __('Search', 'wpsl'))) . '"></div>' . "\r\n";

$output .= "\t\t" . '</form>' . "\r\n";
$output .= "\t\t" . '</div>' . "\r\n";
$output .= "\t" . '</div>' . "\r\n";

$output .= "\t" . '<div id="wpsl-gmap" class="wpsl-gmap-canvas"></div>' . "\r\n";

$output .= "\t" . '<div id="wpsl-result-list maplist">' . "\r\n";
$output .= "\t\t" . '<div id="wpsl-stores" ' . $autoload_class . '>' . "\r\n";
$output .= "\t\t\t" . '<ul></ul>' . "\r\n";
$output .= "\t\t" . '</div>' . "\r\n";
$output .= "\t\t" . '<div id="wpsl-direction-details">' . "\r\n";
$output .= "\t\t\t" . '<ul></ul>' . "\r\n";
$output .= "\t\t" . '</div>' . "\r\n";
$output .= "\t" . '</div>' . "\r\n";

if ($wpsl_settings['show_credits']) {
    $output .= "\t" . '<div class="wpsl-provided-by">' . sprintf(__("Search provided by %sWP Store Locator%s", "wpsl"), "<a target='_blank' href='https://wpstorelocator.co'>", "</a>") . '</div>' . "\r\n";
}

$output .= '</div>' . "\r\n";
*/
return $output;
