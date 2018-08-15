<?php
class controller {
  //Função que carrega a view
  public function loadView($viewName, $viewData = array()){
    extract($viewData);
    require 'views/'.$viewName.'.php';
  }

  //função que carrega o template
  public function loadTemplate($viewName, $viewData = array()){
    require 'views/template.php';
  }

  //Função que carrega o view dentro do Template
  public function loadViewInTemplate($viewName, $viewData = array()){
    extract($viewData);
    require 'views/'.$viewName.'.php';
  }


}
