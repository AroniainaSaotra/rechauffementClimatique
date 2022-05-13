<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('image_url'))
{
	function image_url($uri = '', $protocol = NULL)
	{
		$url=$base_url()."assets/images";
		return get_instance()->config->image_url($uri, $protocol);
	}
}

if ( ! function_exists('css_url'))
{
	function image_url($uri = '', $protocol = NULL)
	{
		$url=$base_url()."assets/css";
		return get_instance()->config->css_url($uri, $protocol);
	}
}

if ( ! function_exists('js_url'))
{
	function js_url($uri = '', $protocol = NULL)
	{
		$url=$base_url()."assets/js";
		return get_instance()->config->js_url($uri, $protocol);
	}
}
?>