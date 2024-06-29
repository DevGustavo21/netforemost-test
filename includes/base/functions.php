<?php

// Here we enable the function to be able to upload svg files to our theme
function allow_svg_upload($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

// Here we enable the function to upload a logo for our site (you can find it in "Customize").
function theme_prefix_setup()
{
    add_theme_support(
        'custom-logo',
        array(
            'height' => 100,
            'width' => 300,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'theme_prefix_setup');

// Disable gutenberg editor
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_widgets_block_editor', '__return_false');


//Enable features images support
function theme_setup() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'theme_setup' );
