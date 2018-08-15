<!-- Único arquivo que é aberto no navegador -->
<?php
session_start();
require 'config.php';

//Autoload
spl_autoload_register(function($class){
  if(file_exists('controllers/'.$class.'.php')){
    require 'controllers/'.$class.'.php';
  }else if(file_exists('model/'.$class.'.php')){
    require 'model/'.$class.'.php';
  }else if(file_exists('core/'.$class.'.php')){
    require 'core/'.$class.'.php';
  }
});

//Instanciando o core, o núcleo que é responsável por pegar a url e processá-la para obter controllers, actions e params.
$core = new Core();
$core->run();
