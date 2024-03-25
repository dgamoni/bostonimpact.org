<?php
 add_action('wp_footer', 'add_custom_css');
function add_custom_css() { ?>
	<script>
		jQuery(document).ready(function($) {

		});
	</script>
	<style>.log_wrap {	float: right;}.header_color a.log {	color:#0a93b2;	background: white;    border-radius: 8px;    padding: 6px 20px;    text-decoration: none;	}.log_wrap li {	padding-top: 7px;}
ul.log_wrap {	margin-bottom: 5px!important;}
	</style>
	<?php
}