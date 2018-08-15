<?php
class homeController extends controller{

  public function index(){
    $dados = array();
    $dados['nome'] = 'Pablo';
    $this->loadTemplate('home', $dados);
  }
}
