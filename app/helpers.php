<?php
/**
 * Created by PhpStorm.
 * User: prasanna
 * Date: 3/6/17
 * Time: 4:38 PM
 */
if(!function_exists('classActivePath')){
    function classActivePath($path_array){
        foreach ($path_array as $path) {
            if(Request::is($path)){
                return ' class="active"';
            }
        }
        return '';
    }
}

if(!function_exists('classActiveSegment')){
    function classActiveSegment($segment,$value){
        if(!is_array($value)){
            return Request::segment($segment)==$value ? ' class="active"' : '';
        }
        foreach($value as $v){
            return Request::segment($segment)==$v ? ' class="active"' : '';
        }
        return '';
    }
}