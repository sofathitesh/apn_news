<?php
/**
* @package HiteshPlugin
* @version 0.0
*/
/*
* Plugin Name: Form plugin
* Version : 0.0
*/
function myform(){
//	echo plugin_dir_path();
	require plugin_dir_path(__FILE__)."myform.html";
}
add_shortcode('myform','myform');
?>