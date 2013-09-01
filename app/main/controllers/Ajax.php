<?php

namespace main\controllers;

class Ajax extends \BaseController{
	protected $render = false;

	function user(){ echo json_encode(array("some","thing")); }
	function group(){ echo json_encode(array("some","thing")); }
}