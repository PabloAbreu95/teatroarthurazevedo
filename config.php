<?php
 //Arquivo de configurações, nele é feito conexão ao banco de dados e também é definida a url base
require 'environment.php'; //Requerindo environment

//Setando as variáveis para conexão
$config = array();
if(ENVIRONMENT == 'development'){
  define("BASE_URL", "http://localhost/teatroarthurazevedo/");
  $config['dbname'] = 'mvc';
  $config['host'] = 'localhost';
  $config['dbuser'] = 'root';
  $config['dbpass'] = 'root';
} else{
  define("BASE_URL", "http://localhost/mvc/");
  $config['dbname'] = 'mvc';
  $config['host'] = 'localhost';
  $config['dbuser'] = 'root';
  $config['dbpass'] = '';
}

//Fazendo a conxão
global $db;
try{
  $pdo = new PDO('mysql:dbname='.$config['dbname'].';host='.$config['host'],$config['dbuser'],$config['dbpass']);
}catch(PDOException $e){
  echo 'ERRO: '.$e->getMessage();
}
