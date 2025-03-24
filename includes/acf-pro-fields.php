<?php

namespace hbc_career_embed\acf_pro_fields;

// Register the block
add_action('acf/init', __NAMESPACE__ . '\register_career_embed_block');

function register_career_embed_block() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'ucf-career-embed',
            'title'             => __('UCF Career Embed'),
            'description'       => __('Embeds an external Career listing block by using an external JavaScript file.'),
            'render_callback'   => 'hbc_ucf_page_list\\block\\career_embed_render_callback',
            'category'          => 'widgets',
            'icon'              => 'admin-site',
            'keywords'          => array('embed', 'script', 'career'),
            'supports'          => array(
                'align'            => false,
                'multiple'         => true,
                'customClassName'  => true,
            ),
        ));
    }
}