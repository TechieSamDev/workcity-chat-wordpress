<?php
function workcity_chat_shortcode($atts) {
    // Enqueue scripts and styles
    wp_enqueue_script(
        'workcity-chat-js',
        plugin_dir_url(__FILE__) . '../assets/js/chat-widget.js',
        array('jquery'),
        '1.0',
        true
    );

    wp_enqueue_style(
        'workcity-chat-css',
        plugin_dir_url(__FILE__) . '../assets/css/chat-widget.css'
    );

    return '<div id="workcity-chat-root"></div>';
}

add_shortcode('workcity_chat', 'workcity_chat_shortcode');
