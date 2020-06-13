<?php

/*
-- composer init
-- composer.phar update update nos pacotes do composer
Necessário gerar uma configuração de autoload no 'composer.json' "autoload": {
        "psr-0": {
            "Search": "src/"
        },
        "psr-4": {
            "jeh\\BuscaCep\\": "src/"
        }
    }
    Após, rodar o comando composer install, adcionar o require_once "vendor/autoload.php"
    Antes de dar um "commit" adicionar uma tag, para poder utilizar no packagist -- git commit 'm' / git tag 1.0.0 

    ## Teste unitário phpunit.de ##
    Realizado a instalação das dependências, rodar o seguinte comando:
    vendor/bin/phpunit --version

    */

require_once "vendor/autoload.php";

use jeh\BuscaCep\Search;

$busca = new Search();

$resultado = $busca->getCep('uf', 'ES');

print_r($resultado);
