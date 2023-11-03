<?php
add_action('login_enqueue_scripts', 'login_page_scripts');

function login_page_scripts()
{ 
    ?>
    <style type="text/css">
        #login h1 a,
        .login h1 a {
            background-image: url(<?php echo wp_get_attachment_url($attachmentID); ?>);
        }
    </style>
<?php
}