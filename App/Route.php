<?php
namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {
  
  protected function initRoutes()
  {
    $routes['home'] = array(
      'route' => '/',
      'controller' => 'indexController',
      'method' => 'index'
    );

    $routes['sobreNos'] = array(
      'route' => '/sobreNos',
      'controller' => 'indexController',
      'method' => 'sobreNos',
    );

    $this->setRoutes($routes);
  }


}