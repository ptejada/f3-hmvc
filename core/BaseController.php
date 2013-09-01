<?php

class BaseController {
	/** @var \Base $app */
	protected $app;
	/** @var bool $render Flag to auto render view */
	protected $render = true;

	function __construct(){
		$this->app = Base::instance();
		$module = $this->app->get("PARAMS.module");
		$module = $module ? $module : $this->app->get("DefaultModule");
		$this->app->concat('UI',';app/'.$module.'/views/');
		$this->app->set('LOCALES', 'app/' . $module . '/dict/'); // load module dictionary
	}

	function afterroute(){
		if($this->render){
			$param = $this->app->get('PARAMS');
			$action = empty($param['action'])?'index':$param['action'];
			echo Template::instance()->render($action.".html");
		}
	}
}
