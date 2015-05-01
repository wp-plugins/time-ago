<?php
/*
Plugin Name: Time Ago
Plugin URI: http://wp-time.com/time-ago/
Description: One click convert date and time to "time ago" (e.g. 1 hour ago).
Version: 1.2
Author: Qassim Hassan
Author URI: http://qass.im
License: GPLv2 or later
*/

/*  Copyright 2015 Qassim Hassan (email: qassim.pay@gmail.com)

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


// WP Time Page
if( !function_exists('WP_Time_Ghozylab_Aff') ) {
    function WP_Time_Ghozylab_Aff() {
        add_menu_page( 'WP Time', 'WP Time', 'update_core', 'WP_Time_Ghozylab_Aff', 'WP_Time_Ghozylab_Aff_Page');
        function WP_Time_Ghozylab_Aff_Page() {
            ?>
                <div class="wrap">
                    <h2>WP Time</h2>
                    <div class="tool-box">
                        <h3 class="title">Thanks for using our plugins!</h3>
                        <p>For more plugins, please visit <a href="http://wp-time.com" target="_blank">WP Time Website</a> and <a href="https://profiles.wordpress.org/qassimdev/#content-plugins" target="_blank">WP Time profile on WordPress</a>.</p>
                        <p>For contact or support, please visit <a href="http://wp-time.com/contact/" target="_blank">WP Time Contact Page</a>.</p>
                    </div>
                    <div class="tool-box">
                        <h3 class="title">Great WordPress Plugins</h3>
                        <p><a href="http://j.mp/GL_WPTime" target="_blank">Must Have Awesome Plugins.</a></p>
                        <p><a href="http://j.mp/GL_WPTime" target="_blank"><img src="http://content.ghozylab.com/partners/aff/images/global-aff-img.png" width="728" height="90"></a></p>
                    </div>
                </div>
            <?php
        }
    }
    add_action( 'admin_menu', 'WP_Time_Ghozylab_Aff' );
}


// Add settings page
if ( is_admin() ){
	include ( plugin_dir_path( __FILE__ ).'/settings.php' );
} 


// Time ago function
function WPTime_time_ago() {
	global $post;
	$from = get_post_time('U', false, $post->ID, false); // get post time
	$to = current_time('timestamp'); // get current time
	$diff = (int) abs( $to - $from );
	include ( plugin_dir_path( __FILE__ ).'/if_else.php' ); // some conditionals
	include ( plugin_dir_path( __FILE__ ).'/calculator.php' ); // time and date calculator
	return $since; // display time ago
}

if( !is_admin() ){
	add_filter('human_time_diff', 'WPTime_time_ago'); // return WPTime_time_ago() instead of human_time_diff()
	add_filter('get_the_date', 'WPTime_time_ago'); // return WPTime_time_ago() instead of get_the_date()
	add_filter('get_the_time', 'WPTime_time_ago'); // return WPTime_time_ago() instead of get_the_time()
	add_filter('the_time', 'WPTime_time_ago'); // return WPTime_time_ago() instead of th_time()
}


// Display time ago to comments date
if( get_option('wptta_comments') and !is_admin() ){	
	function WPTime_time_ago_comments() {
		$from = get_comment_time('U'); // get comment time
		$to = current_time('timestamp'); // get current time
		$diff = (int) abs( $to - $from );
		include ( plugin_dir_path( __FILE__ ).'/if_else.php' ); // some conditionals
		include ( plugin_dir_path( __FILE__ ).'/calculator.php' ); // time and date calculator
		return $since; // display time ago
	}
	add_filter('get_comment_date', 'WPTime_time_ago_comments'); // return WPTime_time_ago() instead of get_comment_date()
}

?>