<?php

/* Time ago settings */

	function WPTime_time_ago_settings() {
		add_menu_page( 'Time Ago Settings', 'Time Ago', 'update_core', 'WPTime_time_ago_settings', 'WPTime_time_ago_settings_page' );
	}
	add_action( 'admin_menu', 'WPTime_time_ago_settings' );

	function WPTime_time_ago_register_settings() {
		register_setting( 'WPTime_time_ago_setting', 'wptta_min' );
		register_setting( 'WPTime_time_ago_setting', 'wptta_mins' );
		register_setting( 'WPTime_time_ago_setting', 'wptta_hour' );
		register_setting( 'WPTime_time_ago_setting', 'wptta_hours' );
		register_setting( 'WPTime_time_ago_setting', 'wptta_day' );
		register_setting( 'WPTime_time_ago_setting', 'wptta_days' );
		register_setting( 'WPTime_time_ago_setting', 'wptta_week' );
		register_setting( 'WPTime_time_ago_setting', 'wptta_weeks' );
		register_setting( 'WPTime_time_ago_setting', 'wptta_month' );
		register_setting( 'WPTime_time_ago_setting', 'wptta_months' );
		register_setting( 'WPTime_time_ago_setting', 'wptta_year' );
		register_setting( 'WPTime_time_ago_setting', 'wptta_years' );
		register_setting( 'WPTime_time_ago_setting', 'wptta_comments' );
	}
	add_action( 'admin_init', 'WPTime_time_ago_register_settings' );
		
	function WPTime_time_ago_settings_page(){ // settings page function
	
		$current 	= 	1;
		$echo 		= 	true;
		$comments_time_ago 	=	get_option('wptta_comments');
		
		include ( plugin_dir_path( __FILE__ ).'/if_else.php' );
		
		?>
			<div class="wrap">
				<h2>Time Ago Settings</h2>
				<?php if( isset($_GET['settings-updated']) && $_GET['settings-updated'] ){ ?>
					<div id="setting-error-settings_updated" class="updated settings-error"> 
						<p><strong>Settings saved.</strong></p>
					</div>
				<?php } ?>
                
            	<form method="post" action="options.php">
                	<?php settings_fields( 'WPTime_time_ago_setting' ); ?>
                	<table class="form-table">
                		<tbody>
                    		<tr>
                        		<th scope="row"><label for="wptta_min">Minute Text</label></th>
                            	<td>
                                    <input class="regular-text" name="wptta_min" type="text" id="wptta_min" value="<?php echo esc_attr( $min_text ); ?>">
								</td>
                        	</tr>
                            
                    		<tr>
                        		<th scope="row"><label for="wptta_mins">Minutes Text</label></th>
                            	<td>
                                    <input class="regular-text" name="wptta_mins" type="text" id="wptta_mins" value="<?php echo esc_attr( $mins_text ); ?>">
								</td>
                        	</tr>
                            
                    		<tr>
                        		<th scope="row"><label for="wptta_hour">Hour Text</label></th>
                            	<td>
                                    <input class="regular-text" name="wptta_hour" type="text" id="wptta_hour" value="<?php echo esc_attr( $hour_text ); ?>">
								</td>
                        	</tr>
                            
                    		<tr>
                        		<th scope="row"><label for="wptta_hours">Hours Text</label></th>
                            	<td>
                                    <input class="regular-text" name="wptta_hours" type="text" id="wptta_hours" value="<?php echo esc_attr( $hours_text ); ?>">
								</td>
                        	</tr>
                            
                    		<tr>
                        		<th scope="row"><label for="wptta_day">Day Text</label></th>
                            	<td>
                                    <input class="regular-text" name="wptta_day" type="text" id="wptta_day" value="<?php echo esc_attr( $day_text ); ?>">
								</td>
                        	</tr>
                            
                    		<tr>
                        		<th scope="row"><label for="wptta_days">Days Text</label></th>
                            	<td>
                                    <input class="regular-text" name="wptta_days" type="text" id="wptta_days" value="<?php echo esc_attr( $days_text ); ?>">
								</td>
                        	</tr>
                            
                    		<tr>
                        		<th scope="row"><label for="wptta_week">Week Text</label></th>
                            	<td>
                                    <input class="regular-text" name="wptta_week" type="text" id="wptta_week" value="<?php echo esc_attr( $week_text ); ?>">
								</td>
                        	</tr>
                            
                    		<tr>
                        		<th scope="row"><label for="wptta_weeks">Weeks Text</label></th>
                            	<td>
                                    <input class="regular-text" name="wptta_weeks" type="text" id="wptta_weeks" value="<?php echo esc_attr( $weeks_text ); ?>">
								</td>
                        	</tr>
                            
                    		<tr>
                        		<th scope="row"><label for="wptta_month">Month Text</label></th>
                            	<td>
                                    <input class="regular-text" name="wptta_month" type="text" id="wptta_month" value="<?php echo esc_attr( $month_text ); ?>">
								</td>
                        	</tr>
                            
                    		<tr>
                        		<th scope="row"><label for="wptta_months">Months Text</label></th>
                            	<td>
                                    <input class="regular-text" name="wptta_months" type="text" id="wptta_months" value="<?php echo esc_attr( $months_text ); ?>">
								</td>
                        	</tr>
                            
                    		<tr>
                        		<th scope="row"><label for="wptta_year">Year Text</label></th>
                            	<td>
                                    <input class="regular-text" name="wptta_year" type="text" id="wptta_year" value="<?php echo esc_attr( $year_text ); ?>">
								</td>
                        	</tr>
                            
                    		<tr>
                        		<th scope="row"><label for="wptta_years">Years Text</label></th>
                            	<td>
                                    <input class="regular-text" name="wptta_years" type="text" id="wptta_years" value="<?php echo esc_attr( $years_text ); ?>">
								</td>
                        	</tr>
                            
							<tr>
								<th scope="row">Comments Date</th>
									<td>
                                    	<fieldset>
                                        	<legend class="screen-reader-text"><span>Comments Date</span></legend>
                                            <label for="wptta_comments">
												<input name="wptta_comments" type="checkbox" id="wptta_comments" value="1" <?php checked( $comments_time_ago, $current, $echo ); ?>>
												Display time ago to comments date.
                                            </label>
										</fieldset>
								</td>
							</tr>
                    	</tbody>
                    </table>
                    <p class="submit"><input id="submit" class="button button-primary" type="submit" name="submit" value="Save Changes"></p>
                </form>
                <div class="tool-box">
                    <h3 class="title">Beautiful WordPress Themes</h3>
                    <p>Get collection of 87 WordPress themes for $69 only, a lot of features and free support! <a href="http://j.mp/ET_WPTime_ref_pl" target="_blank">Get it now</a>.</p>
                    <p>See also:</p>
                        <ul>
                            <li><a href="http://j.mp/GL_WPTime" target="_blank">Best Gallery & Portfolio WordPress Plugins.</a></li>
                            <li><a href="http://j.mp/CM_WPTime" target="_blank">Premium WordPress themes on CreativeMarket.</a></li>
                            <li><a href="http://j.mp/TF_WPTime" target="_blank">Premium WordPress themes on Themeforest.</a></li>
                            <li><a href="http://j.mp/CC_WPTime" target="_blank">Premium WordPress plugins on Codecanyon.</a></li>
                            <li><a href="http://j.mp/BH_WPTime" target="_blank">Unlimited web hosting for $3.95 only.</a></li>
                        </ul>
                    <p><a href="http://j.mp/GL_WPTime" target="_blank" title="Download Best Gallery & Portfolio WordPress Plugins"><img src="http://content.ghozylab.com/partners/aff/images/global-aff-img.png" width="728" height="90"></a></p>
                    <p><a href="http://j.mp/ET_WPTime_ref_pl" title="Get collection of 87 WordPress themes for $69 only" target="_blank"><img src="http://www.elegantthemes.com/affiliates/banners/570x100.jpg"></a></p>
                </div>
            </div>
        <?php
	} // settings page function
	
?>