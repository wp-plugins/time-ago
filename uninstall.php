<?php

/* Uninstall Plugin */

// if not uninstalled plugin
if( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) 
	exit(); // out!


/*esle:
	if uninstalled plugin, this options will be deleted
*/
delete_option('wptta_min');
delete_option('wptta_mins');
delete_option('wptta_hour');
delete_option('wptta_hours');
delete_option('wptta_day');
delete_option('wptta_days');
delete_option('wptta_week');
delete_option('wptta_weeks');
delete_option('wptta_month');
delete_option('wptta_months');
delete_option('wptta_year');
delete_option('wptta_years');
delete_option('wptta_comments');

?>