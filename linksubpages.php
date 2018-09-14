<?php
/**
 * Plugin Name:     Link Subpages
 * Plugin URI:      https://github.com/pixolin/linksubpages
 * Description:     Adds shortcode to show a list of links to subpages
 * Author:          Bego Mario Garde
 * Author URI:      https://pixolin.de
 * Text Domain:     linksubpages
 * Domain Path:     /languages
 * Version:         0.1.0
 * License:         GPLv2 or later
 *
 * @package         Linksubpages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
require plugin_dir_path( __FILE__ ) . 'includes/class-linksubpages.php';
$plugin = new LinkSubpages();
