<?php

namespace module1;
use \BaseController;
use \Template;

class Controller extends BaseController {
	function index($app){
		echo Template::instance()->render("default.html");
	}

	function page1($app){
		echo Template::instance()->render("page1.html");

	}

	function page2($app){
		echo Template::instance()->render("page2.html");

	}
}