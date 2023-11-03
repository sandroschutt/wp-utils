<?php
add_action('login_enqueue_scripts', 'login_page_scripts');

function login_page_scripts()
{
    wp_register_style('login-page', get_theme_file_uri() . '/path-to/login-page.css');
    wp_enqueue_style('login-page');
}