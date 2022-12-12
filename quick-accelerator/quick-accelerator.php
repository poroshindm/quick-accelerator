<?php
/*
Plugin Name: Quick Accelerator
Plugin URI: https://poroshindmitry.com/quick-accelerator/
Description: WordPress plugin that boosts performance and speeds up loading times.
Author: Dmitry Poroshin
Version: 1.0
Author URI: https://poroshindmitry.com/
*/

add_action( 'wp_enqueue_scripts', 'accelerator_wp_enqueue_scripts' );
add_filter( 'script_loader_tag', 'accelerator_script_loader_tag', 10, 2 );

function accelerator_wp_enqueue_scripts() {
  wp_enqueue_script( 'accelerator', plugin_dir_url( __FILE__ ) . 'js/accelerator.js', array(), '1.0', true );
}

function accelerator_script_loader_tag( $tag, $handle ) {
  if ( 'accelerator' === $handle ) {
    $tag = str_replace( 'text/javascript', 'module', $tag );
  }
  return $tag;
}

### Function: Quick Accelerator Menu
add_action('admin_menu', 'accelerator_menu');
function accelerator_menu() {
	if (function_exists('add_options_page')) {
		add_options_page(__('Quick Accelerator', 'quick-accelerator'), __('Quick Accelerator', 'quick-accelerator'), 'manage_options', 'quick-accelerator/quick-accelerator-options.php') ;
	}
}
