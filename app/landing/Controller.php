<?php

namespace landing;
use \BaseController;
use \Template;

class Controller extends BaseController {
  function index($app){
		echo Template::instance()->render("default.html");
	}
}
