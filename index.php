<?php
/**
 * @package boilerplate-block-gutenberg
 * @version 0.0.0
 */
/*
Plugin Name: boilerplate block gutenberg
Plugin URI: 
Description: 
Author: luuan-br <luuan.br@live.com>
Version: 0.0.0
Author URI: https://github.com/luuan-br
*/

add_action( 'enqueue_block_editor_assets', 'boilerplate_block_assets' );

function boilerplate_block_assets(){

	wp_enqueue_script(
 		'misha-newsletter',
		plugin_dir_url( __FILE__ ) . 'build/js/index.js',
		array( 
            'wp-blocks', 
            // 'wp-element', 
            'wp-editor', 
            // 'wp-components' 
        ),
		''
	);

	// wp_enqueue_style(
	// 	'misha-newsletter-css',
	// 	plugin_dir_url( __FILE__ ) . 'build/styles.css',
	// 	array( 'wp-edit-blocks' ),
	// 	''
	// );

}

// add_action( 'wp_enqueue_scripts', 'boilerplate_block_front_end_assets' );

// function boilerplate_block_front_end_assets(){

	// wp_enqueue_style(
	// 	'wp-block-misha-newsletter-css',
	// 	plugin_dir_url( __FILE__ ) . 'build/styles.css',
	// 	array(),
	// 	''
	// );

// }