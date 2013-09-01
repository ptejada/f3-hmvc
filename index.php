<?php

/** @var $app Base */
$app = require('core/f3/lib/base.php');

/*
 * Load required configurations
 */
$app->config('core/config.ini');

/*
 * Load user defined configurations if exists
 */
if(file_exists("config.ini"))
	$app->config('config.ini');

/*
 * Setup the DefaultModule route
 */
$DefaultModule = $app->get("DefaultModule");
$app->route("GET /", "\\$DefaultModule\\controllers\\Controller->index");
//$app->route("GET /@action", "\\$DefaultModule\\controllers\\Controller->@action");


/*
 * Run the application
 */
$app->run();

