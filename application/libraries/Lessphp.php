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


class Lessphp {
    var $ci;
    function __construct(){

        $this->ci = &get_instance();
        $this->ci->config->load('asset');

    }

    public function less($file){

        $theme = $this->ci->template->get_theme();
        
        if(!class_exists('lessc',FALSE)){
            require APPPATH.'third_party/lessphp/lessc.inc.php';
        }

        $conf = $this->ci->config->item('assets');
        $input_file = FCPATH.'web/themes/'.$theme.'/'.$conf['less'].$file.'.less';
        
        $output = $less['output'];
        $output_file = FCPATH.'web/themes/'.$theme.'/'.$conf['css'].$file.'.css';
        if(!file_exists($input_file)){
            throw new Exception('The file could not be found: '. $input_file);
        }

        lessc::ccompile($input, $output);

        $output = str_replace('\\', '/', $output);

        // format of less
        
        $format = $conf['format']['less'];
        return $output_format = str_replace('{{url}}',$output, $format);

    }

}