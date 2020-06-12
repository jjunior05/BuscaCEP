<?php

/*Necessário gerar uma configuração de autroload no 'composer.json' "autoload": {
        "psr-0": {
            "Search": "src/"
        },
        "psr-4": {
            "jeh\\BuscaCep\\": "src/"
        }
    }
    Após, rodar o comando composer install, adcionar o require_once "vendor/autoload.php"
    */

require_once "vendor/autoload.php";

use jeh\BuscaCep\Search;

$busca = new Search();

$resultado = $busca->getCep('29155351');

print_r($resultado);
