<?php

class BaseController {
	function __construct(){
		$app = Base::instance();
		$param = $app->get('PARAMS');
		$module = empty($param['module'])?'landing':$param['module'];
		$app->concat('UI',';app/'.$module.'/views/');
	}
}
