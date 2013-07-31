<?php

namespace module2;
use \BaseController;
use \Template;

class Controller extends BaseController {
	function index($app){
		//Model from module1
		$app->set("data", new \module1\models\Data());
	}

	function page1($app){}

	function page2($app){}
}