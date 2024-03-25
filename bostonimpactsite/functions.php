<?php
 add_action('wp_footer', 'add_custom_css');
function add_custom_css() { ?>
	<script>
		jQuery(document).ready(function($) {

		});
	</script>
	<style>
		.log_wrap {	
			float: right;
		}
		.header_color a.log {	
			color:#0a93b2;	
			background: white;    
			border-radius: 8px;    
			padding: 6px 20px;    
			text-decoration: none;	
		}
		.log_wrap li {	
			padding-top: 7px;
		}
		ul.log_wrap {	
			margin-bottom: 5px!important;
		}

		@media only screen and (max-width: 1146px) and (min-width: 768px) {
		  .responsive #top .av_mobile_menu_tablet .av-main-nav .menu-item {
		    display: none;
		  }

		  .responsive #top .av_mobile_menu_tablet .av-main-nav .menu-item-avia-special {
		      display: block;
		  }
		}

	</style>
	<?php
}