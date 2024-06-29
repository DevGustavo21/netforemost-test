<?php
function netforemost_enqueue_styles()
{
    wp_enqueue_style('netforemost-style', get_template_directory_uri() . '/dist/styles.css');

    wp_enqueue_script('javascript_netforemost', get_stylesheet_directory_uri() . "/dist/styles.js", ["jquery"], true);
}
add_action('wp_enqueue_scripts', 'netforemost_enqueue_styles', 15);