<?php

namespace hbc_career_embed\block;

function career_embed_render_callback($block, $content = '', $is_preview = false, $post_id = 0) {
    // Custom class handling
    $class_name = isset($block['className']) ? esc_attr($block['className']) : '';

    echo '
    <div class="career-embed-block ' . $class_name . '">
        <script 
        type="text/javascript" 
        src="https://careers-content.clearcompany.com/js/v1/career-site.js?siteId=a01e8e2d-0f1d-2586-1830-5910e6e7d498" 
        />
    </div>';
}