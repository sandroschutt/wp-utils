<?php

add_filter("script_loader_tag", "add_es_modules", 10, 3);
function add_es_modules($tag, $handle, $src)
{
    $scripts = array(
        'your-script-handle-1',
        'your-script-handle-2',
    );

    foreach ($scripts as $key => $script) {
        if ($script === $handle) {
            $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
        }
    }

    return $tag;
}