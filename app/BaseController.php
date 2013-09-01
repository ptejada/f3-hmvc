<?php

class BaseController {
	/** @var \Base */
	protected $app;

	function __construct(){
		$this->app = Base::instance();
		$module = $this->app->get("PARAMS.module");
		$module = $module ? $module : $this->app->get("DefaultModule");
		$this->app->concat('UI',';app/'.$module.'/views/');
		$this->app->set('LOCALES', 'app/' . $module . '/dict/'); // load module dictionary
	}

	function afterroute(){
		$param = $this->app->get('PARAMS');
		$action = empty($param['action'])?'index':$param['action'];
		echo Template::instance()->render($action.".html");
	}
}
