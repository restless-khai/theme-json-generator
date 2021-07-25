<?php
/**
 * Plugin Name: Theme Json Generator
 * Description:
 * Plugin URI: https://italystrap.com
 * Author: Enea Overclokk
 * Author URI: https://italystrap.com
 * Version: 0.0.1
 * License: MIT
 * Text Domain: italystrap
 * Domain Path: languages
 */

/*

    Copyright (C) 2021  Enea Overclokk  info@overclokk.net

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

require __DIR__ . '/vendor/autoload.php';


function foo_command( $args ) {
	\WP_CLI::success( "The script has run!" );
//	\WP_CLI::success( $args[0] );
//	\WP_CLI::success( $args[1] );

	$generator = new  \ItalyStrap\ThemeJsonGenerator\Generator(['ciao'=>'bello']);
	$is_generated = $generator->generate();

	\WP_CLI::success( $is_generated );
}
\WP_CLI::add_command( 'foo', 'foo_command' );
