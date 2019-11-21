<?php
/**
 * Plugin Name: App Functionality
 * Author:      Thiago Senna
 * Author URI:  http://thremes.com.br
 * Description: The application functionality plugin.
 * License:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package   App\Functionality
 */

define( 'APP_FUNCTIONALITY_PLUGIN', true );
define( 'APP_FUNCTIONALITY_PLUGIN_FILE', __FILE__ );

# ------------------------------------------------------------------------------
# Lorem ipsum dolor sit amet
# ------------------------------------------------------------------------------
#
# Suspendisse sodales ipsum non justo imperdiet, ut lacinia erat
# cursus. Vestibulum dictum nisi ligula, in dictum justo pulvinar quis.
#

add_action( 'mazoo/bootstrap', function ( \Dalen\plugin $plugin ) {

    $plugin->register( new \App\Functionality\Assets() );

} );
