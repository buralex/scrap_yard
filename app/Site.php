<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 08.05.2017
 * Time: 17:10
 */

class Site
{
	public static function root()
	{
		return str_replace("\\","/", __DIR__);
	}
	public static function url()
	{
		$link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
		return rtrim($link,"/");
	}
}