<?php
/*
Plugin Name:	Oxygen Skin
Plugin URI:		https://wplit.com
Description:	Add clean 'avenir next' skin for Mac Users building sites with Oxygen
Version:		1.0.0
Author:			David Browne
Author URI:		https://wplit.com/
License:		GPL-2.0+
License URI:	http://www.gnu.org/licenses/gpl-2.0.txt

This plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
any later version.

This plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with This plugin. If not, see {URI to Plugin License}.
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Loads CSS for the Oxygen Builder UI
 */
add_action( 'oxygen_enqueue_ui_scripts', 'lit_give_us_some_avenir' );
function lit_give_us_some_avenir() {

	wp_enqueue_style( 'oxygen-custom-ui', plugin_dir_url( __FILE__ ) . 'css/style.css' );

}
