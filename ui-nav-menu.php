<?php
/**
 * Plugin Name:       Urban Index Nav Menu
 * Description:       Navigation Menu for urban-index.fr
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            sjapaget
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       ui-nav-menu
 *
 * @package           ui-nav-menu
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function ui_nav_menu_ui_nav_menu_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'ui_nav_menu_ui_nav_menu_block_init' );
