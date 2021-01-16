<?php

namespace App\Controllers;

use MF\Controllers\Action;
use MF\Model\Container;

use App\Models\Produto;
use App\Models\Info;

class IndexController extends Action { 
  
  public function index()
  { 
    $produto = Container::getModel('Produto');

    $produtos = $produto->getProdutos();

    $this->view->dados = $produtos;

    $this->render('index', 'layout1');
  }    
  
  public function sobreNos()
  { 
    $info = Container::getModel('Info');

    $this->view->dados = $info->getInfos();
    
    $this->render('sobreNos', 'layout1');
  }

}