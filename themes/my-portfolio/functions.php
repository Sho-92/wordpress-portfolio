<?php
function enqueue_custom_assets() {
    // CSSファイルの読み込み
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
    wp_enqueue_style('custom-index-style', get_template_directory_uri() . '/assets/css/index.css', array('custom-style'), '1.0.0');
    wp_enqueue_style('custom-common-style', get_template_directory_uri() . '/assets/css/common.css', array('custom-style', 'custom-index-style'), '1.0.0');
    wp_enqueue_style('custom-projects-style', get_template_directory_uri() . '/assets/css/projects.css', array('custom-style', 'custom-index-style'), '1.0.0');
    wp_enqueue_style('custom-contact-style', get_template_directory_uri() . '/assets/css/contact.css', array('custom-style', 'custom-index-style'), '1.0.0');
    wp_enqueue_style('custom-about-style', get_template_directory_uri() . '/assets/css/about.css', array('custom-style', 'custom-index-style'), '1.0.0');

    // JavaScriptファイルの読み込み
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true);
}

// WordPressのフックを使って、スタイルとスクリプトを読み込む
add_action('wp_enqueue_scripts', 'enqueue_custom_assets');



