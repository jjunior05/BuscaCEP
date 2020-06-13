<?php

use PHPUnit\Framework\TestCase;
use jeh\BuscaCep\Search;

class SearchTest extends TestCase
{
    /** 
     * @dataProvider dadosTest
     */
    public function testGetCepDefaultusage(string $input, array $esperado)
    {


        $resultado = new Search();
        $resultado = $resultado->getCep($input);
        $this->assertEquals($esperado, $resultado);
    }

    public function dadosTest()
    {
        return [
            "Travessa Cinco" => [
                '29155478',
                [
                    "cep" => "29155-478",
                    "logradouro" => "Travessa Cinco",
                    "complemento" => "",
                    "bairro" => "Porto Novo",
                    "localidade" => "Cariacica",
                    "uf" => "ES",
                    "unidade" => "",
                    "ibge" => "3201308",
                    "gia" => ""
                ]
            ],
            "Travessa Silvano Ferreira Santos" => [
                '29155351',
                [
                    "cep" => "29155-351",
                    "logradouro" => "Travessa Silvano Ferreira Santos",
                    "complemento" => "",
                    "bairro" => "Porto Novo",
                    "localidade" => "Cariacica",
                    "uf" => "ES",
                    "unidade" => "",
                    "ibge" => "3201308",
                    "gia" => ""
                ]
            ]
        ];
    }
}
