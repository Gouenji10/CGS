<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 	CodeIgniter Asset Library
 * 	An open source PHP library written to easily manage assets for CodeIgniter Framework
 *  
 *  Copyright 2014  Daniel Lee
 *	GitHub:  https://github.com/inputx/CodeIgniter-Asset-Library
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the Apache License (2.0) as published by
 *  the The Apache Software Foundation, either version 2.0 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  Apache License for more details.
 *
 *  You should have received a copy of the Apache License
 *  along with this program.  If not, see <http://www.apache.org/licenses/>
 *
 * @package			dli/framework-library/codeIgniter-asset-library
 * @author			Daniel Lee
 * @copyright		Copyright 2014 Daniel Lee
 * @link			https://github.com/inputx/CodeIgniter-Asset-Library
 * @since			Version 0.1
 * @updated			24th Oct 2014
 * @filesource
*/


/**
 * Load assets
 *
 * load multiple asset file, and output html code
 *
 * @access  public
 * @param   string  asset type
 * @param   boolen  enable/disable https access
 * @return  string
 */

if(!function_exists('vendor')){
	function vendor($type,$file){
		$ci = &get_instance();
		$theme = $ci->template->get_theme();
		if($type == 'css'){
			echo '<link rel="stylesheet" href="' . base_url() . 'themes/' . $theme . '/vendor/' . $file . '">';
		}elseif($type == 'js'){
			echo '<script src="'.base_url().'themes/'.$theme.'/vendor/'.$file.'" ></script>';
		}
	}
}

if (!function_exists('node')) {
	function node($type, $file)
	{
		$ci = &get_instance();
		$theme = $ci->template->get_theme();
		if ($type == 'css') {
			echo '<link rel="stylesheet" href="' . base_url() . 'themes/' . $theme . '/node_modules/' . $file . '">';
		} elseif ($type == 'js') {
			echo '<script src="' . base_url() . 'themes/' . $theme . '/node_modules/' . $file . '" ></script>';
		}
	}
}


if(!function_exists('less')){
	function less($file){
		require APPPATH.'third_party/lessphp/lessc.inc.php';
		$less = new lessc;
		$ci = &get_instance();
		$theme = $ci->template->get_theme();
		$file = FCPATH . 'themes/' . $theme . '/less/' . $file;
		$url = $less->compileFile($file);
		echo '<style type="text/css">'.$url.'</style>';
	}
}



if ( ! function_exists('load_assets'))
{

	function load_assets($type = "", $https = false)
	{
		$CI =& get_instance();
		$CI->load->library('asset');
		$output = "";
		switch($type)
		{
			case "css":
				$output = $CI->asset->load_css		($https);
				break;
			case "js":
				$output = $CI->asset->load_js 		($https);
				break;
			case "image":
				$output = $CI->asset->load_image 	($https);
				break;
			case "less":
				$output = $CI->asset->load_less	 	($https);
				break;
			default:
				break;
		}
		return $output;
	}
}

/**
 * Load assets
 *
 * load multiple type asset file, and output html code
 *
 * @access  public
 * @param   array  asset type
 * @param   boolen  enable/disable https access
 * @return  string
 */

if ( ! function_exists('load_multiple_assets'))
{
	function load_multiple_assets($type = array(), $https = false)
	{
		$CI =& get_instance();
        $CI->load->config("asset_config");
        $CI->load->library('asset');
        $assets_config = $CI->config->item('assets');
        $assets_format = array();
        if(isset($assets_config['format']))
        {
            $assets_format = $assets_config['format'];
        }
        $output = "";
        if(!empty($assets_format))
        {
        	foreach($assets_format as $key => $format)
        	{
        		if(in_array($key, $type) || empty($type))
        		{
        			switch($key)
					{
						case "css":
							$output .= $CI->asset->load_css		($https);
							break;
						case "js":
							$output .= $CI->asset->load_js 		($https);
							break;
						case "image":
							$output .= $CI->asset->load_image 	($https);
							break;
						case "less":
							$output .= $CI->asset->load_less	 ($https);
							break;
						default:
							break;
					}
        		} 
        	}
        }

        return $output;
	}
}

/**
 * Add asset files
 *
 * add multiple asset files
 *
 * @access  public
 * @param   string  asset type
 * @param   array   file name
 * @return  null
 */ 
if ( ! function_exists('add_assets'))
{
	function add_assets($type = "", $files = array())
	{
		$CI =& get_instance();
		$CI->load->library('asset');
		$CI->asset->add_assets($type, $files);
	}
}

/**
 * Add asset file
 *
 * add single file as asset
 *
 * @access  public
 * @param   string  file type
 * @param   string  file name
 * @return  null
 */
if ( ! function_exists('add_asset'))
{
	function add_asset($type = "", $file = "")
	{
		$CI =& get_instance();
		$CI->load->library('asset');
		switch($type)
		{
			case "css":
				$CI->asset->add_css		($file);
				break;
			case "js":
				$CI->asset->add_js 		($file);
				break;
			case "image":
				$CI->asset->add_image 	($file);
				break;
			case "less":
				$CI->asset->add_less 	($file);
				break;
			default:
				break;
		}
	}
}

if(!function_exists('css')){
	function css($file){
		$ci = &get_instance();
		$theme = $ci->template->get_theme();
		
		return '<link rel="stylesheet" href="' . base_url() . 'themes/' . $theme . '/css/' . $file . '?ver=1.0">';
		
	}
}

if (!function_exists('js')) {
	function js($file)
	{
		$ci = &get_instance();
		$theme = $ci->template->get_theme();
		
		return '<script src="' . base_url() . 'themes/' . $theme . '/js/' . $file . '?ver=1.0" ></script>';
		
	}
}

if (!function_exists('img')) {
	function img($file,$return =false , $args=array())
	{
		$ci = &get_instance();
		$theme = $ci->template->get_theme();

		if($return){
			return base_url().'themes/'.$theme.'/img/'.$file;
		}else{
			return '<img src="' . base_url() . 'themes/' . $theme . '/img/' . $file . '?ver=1.0" >';
		}
		
	}
}

// if(!function_exists('vendors')){
// 	function vendors($type, $file){
// 		$ci = &get_instance();
// 		$theme = $ci->template->get_theme();
// 		if($type == 'css'){
// 			return '<link rel="stylesheet" href="' . base_url() . 'themes/' . $theme . '/vendors/' . $file . '?ver=1.0">';
// 		}elseif($type == 'js'){
// 			return '<script src="' . base_url() . 'themes/' . $theme . '/vendors/' . $file . '?ver=1.0" ></script>';
// 		}
// 		elseif($type == 'img'){
// 			return '<img src="' . base_url() . 'themes/' . $theme . '/vendors/' . $file . '?ver=1.0" >';
// 		}
		
// 	}
// }

