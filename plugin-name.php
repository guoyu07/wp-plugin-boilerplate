<?php
/*
Plugin Name: Plugin Name
Plugin URI: http://www.chaozh.com/
Description: [Plugin desc]  This version of Plugin requires at least WordPress 3.1 and PHP 5.0+ to work.
Version: 0.1
Author: chaozh
Author URI: http://chaozh.com/
*/

### INSTALLATION/USAGE INSTRUCTIONS ###
//	Installation and/or usage instructions for the Plugin
//	can be found at http://www.chaozh.com/
define('VERSION', 0.1);
define('PLUGINNAME','plugin');
define('PLUGINNAME_BASE', 'plugin-name');

/*  Copyright 2009-2012 CHAO ZHENG  (email: chao@whu.edu.cn)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
define('PLUGINNAME_URL', plugins_url( '', __FILE__ )); 
define('PLUGINNAME_ROOT', dirname(__FILE__) );
define('PLUGINNAME_REL', dirname( plugin_basename( __FILE__ ) ));
define('PLUGINNAME_BASENAME', plugin_basename( __FILE__ ));
define('PLUGINNAME_FILE', __FILE__);
// aboud debug
define('PLUGINNAME_DEBUG',false);

// Adds translation support for language files
function PLUGINNAME_localization() {
	load_plugin_textdomain( PLUGINNAME_BASE, false, PLUGINNAME_REL. '/languages' );
}
add_action( 'plugins_loaded', 'PLUGINNAME_localization' );

if ( ! function_exists('PLUGINNAME_log')) {
function PLUGINNAME_log ( $log )  {
    if(WP_DEBUG === true && PLUGINNAME_DEBUG == true){
        if ( is_array( $log ) || is_object( $log ) ) {
            error_log( print_r( $log, true ) );
        } else {
            error_log( $log );
        }
    }
}
}