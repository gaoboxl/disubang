<?php
/**
 * ===========================
 * 说明:公共函数库
 *
 * 作者:小李子
 * 
 * 时间:2018-12-24
 * ===========================
 */
 
use encryption\Crypts;
 

if (!function_exists('pr')) {

    function pr($data)
    {
       echo "<pre>";
	   print_r($data);
    }
}

if (!function_exists('api')) {

    function api($status, $msg, $data=[])
    {
       return json(['status'=>1,'msg'=>$msg,'data'=>$data]);
    }
}

if (! function_exists('encrypt')) {
	
    function encrypt($value)
    {
        $Crypts = new Crypts;
		
		return $Crypts->encrypt($value);
    }
}


if (! function_exists('decrypt')) {
   
    function decrypt($value)
    {
        $Crypts = new Crypts;
		
		return $Crypts->decrypt($value);
    }
}
