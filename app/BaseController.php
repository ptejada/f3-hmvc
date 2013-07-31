<?php

class BaseController {
	protected $app;

	function __construct(){
		$this->app = Base::instance();
		$param = $this->app->get('PARAMS');
		$module = empty($param['module'])?'landing':$param['module'];
		$this->app->concat('UI',';app/'.$module.'/views/');
	}

	function afterroute(){
		$param = $this->app->get('PARAMS');
		$action = empty($param['action'])?'index':$param['action'];
		echo Template::instance()->render($action.".html");
	}
}
