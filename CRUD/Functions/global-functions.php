<?php 

/**
 * Verifica chaves de arrays
 * 
 * verifica se a chave existe no array e se ela tem algum valor
 * Obs: Essa função é de escopo global, será muito requisitada
 * 
 * @param array $array O array
 * @param string $key A chave do array
 * @return string!null O valor do array ou nulo
 */

 function check_array($array, $key){
  //verifica se a chave existe no array
  if(isset($array[$key]) && !empty($array[$key])){
    //retorna o valor da chave
    return $array[$key];
  }
  //retorna nulo como padrão
  return null;
 }//check_array

/**
 * Função para carregar automaticamente todas as classes padrão
 * Ver: http://php.net/manual/pt_BR/function.autoload.php.
 * As classes do projeto estão na pasta classes/.
 * O nome do arquivo deverá ser class-NomeDaClasse.php.
 * Por exemplo: para a classe TutsupMVC, o arquivo vai chamar class-TutsupMVC.php
 */

spl_autoload_register(function ($class_name)
{
  $file = ABSPATH . '/Classes/class-' . $class_name . '.php';

  if ( ! file_exists( $file ) ) {
		require_once ABSPATH . '/Includes/404.php';
		return;
	};

  // Inclui o arquivo da classe
  require_once $file;
});