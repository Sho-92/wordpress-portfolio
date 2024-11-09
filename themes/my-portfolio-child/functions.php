<?php
// 親テーマのスタイルを読み込む
function my_portfolio_child_enqueue_styles() {
    wp_enqueue_style('my-portfolio-parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('my-portfolio-child-style', get_stylesheet_directory_uri() . '/style.css', array('my-portfolio-parent-style'));
}
add_action('wp_enqueue_scripts', 'my_portfolio_child_enqueue_styles');
