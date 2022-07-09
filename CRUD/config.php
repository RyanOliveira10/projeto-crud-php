<?php

/**Configurações gerais */

//caminho para a raiz do projeto
define('ABSPATH', dirname(__FILE__));

//caminho para a pasta de uploads
define('UBS_ABSPATH', ABSPATH . '/Views/Uploads');

// URL da home
define( 'HOME_URI', 'http://localhost/desafio-php/crud/' );

// Nome do host da base de dados
define( 'HOSTNAME', 'localhost' );

// Nome do DB
define( 'DB_NAME', 'crud' );

// Usuário do DB
define( 'DB_USER', 'root' );

// Senha do DB
define( 'DB_PASSWORD', '' );

// Charset da conexão PDO
define( 'DB_CHARSET', 'utf8' );

// Se você estiver desenvolvendo, modifique o valor para true
define( 'DEBUG', true );

// Carrega o loader, que vai carregar a aplicação inteira
require_once ABSPATH . '/loader.php';