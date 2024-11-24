<?php
/**
 * Plugin Name:       ByteKit Plugin
 * Plugin URI:        https://github.com/byteever/bytekit-plugin
 * Description:       A set of related classes to kick start WordPress plugin development.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            ByteEver
 * Author URI:        https://byteever.com
 * License:           GPL v3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       bytekit-textdomain
 * Domain Path:       /languages
 *
 * @package ByteKit/Core
 */

//phpcs:disable

defined( 'ABSPATH' ) || exit;

require_once __DIR__ . '/vendor/autoload.php';

define( 'BYTEKIT_PLUGIN_FILE', __FILE__ );
