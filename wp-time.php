<?php

/* WP Time Ads */

if( !function_exists('WP_Time') ) {
	function WP_Time() {
		add_menu_page( 'WP Time', 'WP Time', 'update_core', 'WP_Time', 'WP_Time_Page', 'dashicons-admin-links');
		function WP_Time_Page() {
			?>
            	<div class="wrap">
                	<h2>WP Time</h2>
					<div class="tool-box">
                		<h3 class="title">Thanks for using our plugins!</h3>
                    	<p>For more plugins, please visit <a href="http://wp-time.com" title="Our Website" target="_blank">WP Time Website</a> and <a href="https://profiles.wordpress.org/qassimdev/#content-plugins" title="Our profile on WordPress" target="_blank">WP Time profile on WordPress</a>.</p>
                        <p>For contact or support, please visit <a href="http://wp-time.com/contact/" title="Contact us!" target="_blank">WP Time Contact Page</a>.</p>
                        <p>Follow WP Time owner on <a href="https://twitter.com/Qassim_Dev" title="Follow him!" target="_blank">Twitter</a>.</p>
					</div>
					<div class="tool-box">
						<h3 class="title">Beautiful WordPress Themes</h3>
						<p>Get collection of 87 WordPress themes for only $69, a lot of features and free support! <a href="http://j.mp/et_ref_wptimeplugins" title="Get it now!" target="_blank">Get it now</a>.</p>
                        <p>See also <a href="http://j.mp/cm_ref_wptimeplugins" title="CreativeMarket - WordPress themes" target="_blank">CreativeMarket</a> and <a href="http://j.mp/tf_ref_wptimeplugins" title="Themeforest - WordPress themes" target="_blank">Themeforest</a>.</p>
                        <p><a href="http://j.mp/et_ref_wptimeplugins" title="Get collection of 87 WordPress themes for only $69" target="_blank"><img src="http://www.elegantthemes.com/affiliates/banners/570x100.jpg"></a></p>
					</div>
                </div>
			<?php
		}
	}
	add_action( 'admin_menu', 'WP_Time' );
}

?>