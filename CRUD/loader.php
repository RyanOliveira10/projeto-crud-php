<?php

//evita que os usuários acessem este arquivo diretamente
if (!defined('ABSPATH')) exit;

//inicia a sessão
session_start();

//verifica o modo para debug
if (!defined('DEBUG') || DEBUG === false) {
  //esconde todos os erros
  error_reporting(0);
  ini_set("display_errors", 0);
} else {
  //mostra todos os erros
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
}

//FUNÇÕES GLOBAIS
require_once ABSPATH . './Functions/global-functions.php';
require_once ABSPATH . './Classes/CrudMVC.php';

//carrega a aplicação
$crud_mvc = new CrudMVC();


