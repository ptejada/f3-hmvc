<?php

namespace module2;
use \BaseController;
use \Template;

class Controller extends BaseController {
	function index($app){
		//Model from module1
		$app->set("data", new \module1\models\Data());
		echo Template::instance()->render("default.html");
	}

	function page1($app){
		echo Template::instance()->render("page1.html");

	}

	function page2($app){
		echo Template::instance()->render("page2.html");

	}
}