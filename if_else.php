<?php

/* if get options from time ago settings */

if( get_option('wptta_min') ){
		$min_text = get_option('wptta_min');
	}else{
		$min_text = 'min ago';
	}
		
	if( get_option('wptta_mins') ){
		$mins_text = get_option('wptta_mins');
	}else{
		$mins_text = 'mins ago';
	}
		
	if( get_option('wptta_hour') ){
		$hour_text = get_option('wptta_hour');
	}else{
		$hour_text = 'hour ago';
	}
		
	if( get_option('wptta_hours') ){
		$hours_text = get_option('wptta_hours');
	}else{
		$hours_text = 'hours ago';
	}
		
	if( get_option('wptta_day') ){
		$day_text = get_option('wptta_day');
	}else{
		$day_text = 'day ago';
	}
		
	if( get_option('wptta_days') ){
		$days_text = get_option('wptta_days');
	}else{
		$days_text = 'days ago';
	}
		
	if( get_option('wptta_week') ){
		$week_text = get_option('wptta_week');
	}else{
		$week_text = 'week ago';
	}
		
	if( get_option('wptta_weeks') ){
		$weeks_text = get_option('wptta_weeks');
	}else{
		$weeks_text = 'weeks ago';
	}
		
	if( get_option('wptta_month') ){
		$month_text = get_option('wptta_month');
	}else{
		$month_text = 'month ago';
	}
		
	if( get_option('wptta_months') ){
		$months_text = get_option('wptta_months');
	}else{
		$months_text = 'months ago';
	}
		
	if( get_option('wptta_year') ){
		$year_text = get_option('wptta_year');
	}else{
		$year_text = 'year ago';
	}
		
	if( get_option('wptta_years') ){
		$years_text = get_option('wptta_years');
	}else{
		$years_text = 'years ago';
	}

?>