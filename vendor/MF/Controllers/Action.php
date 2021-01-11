<?php

namespace MF\Controllers;

abstract class Action {
 
  protected $view;

	public function __construct()
	{
		$this->view = new \stdClass();
  }
  
  protected function render($view)
  {
    $currentClass = get_class($this);
    $currentClass = str_replace('App\\Controllers\\', '', $currentClass);
    $currentClass = strtolower(str_replace('Controller', '', $currentClass));

    require_once "../App/Views/".$currentClass."/".$view.".php";
  }
}