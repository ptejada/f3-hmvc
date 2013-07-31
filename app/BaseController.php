<?php

class BaseController {
	function __construct(){
		$app = Base::instance();
		$param = $app->get("PARAMS");
		$app->concat("UI",";app/".$param['module']."/views/");
	}
}