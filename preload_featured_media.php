<?php
function preload_featured_media()
{
    global $post;
    $featured_image_id = get_post_thumbnail_id($post->ID);
    $featured_image_url = wp_get_attachment_image_src($featured_image_id, 'full');
    if ($featured_image_url) {
        echo '<link rel="preload" href="' . esc_url($featured_image_url[0]) . '" as="image">';
    }
}

add_action('wp_head', 'preload_featured_media');

