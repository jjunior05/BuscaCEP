<?php

namespace jeh\BuscaCep;

class Search
{


    public function getCep(string $tipo, string $valor): array
    {

        $opts = array('http' =>
        array(
            'method'  => 'GET',
            'header'  => 'Accept: application/json'
        ));
        $context = stream_context_create($opts);

        $get = file_get_contents($this->getUrl($tipo, $valor), false, $context);

        return (array) json_decode($get);
    }

    private function getUrl(string $tipo, string $valor): string
    {
        $url = '';
        if ($tipo == 'uf') {
            return $url =  "http://cep.la/api/GET/" . $valor;
        }
        if ($tipo == 'cep') {
            $cep = preg_replace('/[^0-9]/im', '', $valor);
            $cep = rawurlencode($cep);
            return $url =  "https://viacep.com.br/ws/" . $valor . "/json";
        }
    }
}
