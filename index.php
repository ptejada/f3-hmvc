<?php

/** @var $app Base */
$app = require('lib/base.php');

$app->config('config.ini');

/*
 * Setup the DefaultModule route
 */
$DefaultModule = $app->get("DefaultModule");
$app->route("GET /", "\\$DefaultModule\\Controller->index");


/*
 * Run the application
 */
$app->run();

