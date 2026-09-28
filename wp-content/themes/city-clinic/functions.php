<?php
function city_clinic_scripts() {
    wp_enqueue_style('city-clinic-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'city_clinic_scripts');