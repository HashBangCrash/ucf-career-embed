<?php

namespace hbc_career_embed\block;

function career_embed_render_callback($block, $content = '', $is_preview = false, $post_id = 0) {
    // Custom class handling
    $class_name = isset($block['className']) ? esc_attr($block['className']) : '';

    if( ! $is_preview ) {
        // Frontend rendering
        echo "
        <div class='career-embed-block ${class_name} '>
            <script 
            type='text/javascript'
            src='https://careers-content.clearcompany.com/js/v1/career-site.js?siteId=a01e8e2d-0f1d-2586-1830-5910e6e7d498' 
            data-site-id='a01e8e2d-0f1d-2586-1830-5910e6e7d498'
            data-content-selector='.career-embed-block'
            >
            <!-- Random text required for some browsers to close the script tag -->
            </script>
        </div>
        ";
    } else {
        // Backend editor rendering
        echo "
        <div class='career-embed-block hbc-editor ${class_name}'>
            <span>
                UCF Career Embed. Content unavailable in Editor mode. Please save and publish the page. You will see the content on the published page.
            </span>
            <div>Career content will load here.</div>
        </div>
        ";
    }
}