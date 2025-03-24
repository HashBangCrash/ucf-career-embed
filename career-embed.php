<?php
/**
 * Plugin Name: Career Embed Block
 * Description: A simple WordPress block to embed a JavaScript script via ACF.
 * Version: 1.0.0
 * Author: Stephen Schrauger
 * Plugin URI: https://github.com/HashBangCrash/ucf-career-embed
 * Github Plugin URI: HashBangCrash/ucf-career-embed
 */

namespace hbc_career_embed;

include_once plugin_dir_path( __FILE__ ) . 'includes/acf-pro-fields.php';
include_once plugin_dir_path( __FILE__ ) . 'includes/block.php';

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Used by acf enqueue assets, to load the js and css conditionally (only when block is on page)
 */
function enqueue_js_css() {
    add_css();
}

function add_css() {
    if ( file_exists( plugin_dir_path( __FILE__ ) . '/includes/plugin.css' ) ) {
        wp_enqueue_style(
            'child-pages-menu-style',
            plugin_dir_url( __FILE__ ) . '/includes/plugin.css',
            false,
            filemtime( plugin_dir_path( __FILE__ ) . '/includes/plugin.css' ),
            false
        );
    }
}
