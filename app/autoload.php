<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.05.2017
 * Time: 13:58
 */

spl_autoload_register(function ($class) {
	if (file_exists(__DIR__ . '/' . $class . '.php')) {
		require_once __DIR__ . '/' . $class . '.php';
	}
});