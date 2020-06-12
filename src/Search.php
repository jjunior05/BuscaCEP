<?php

namespace jeh\BuscaCep;

class Search
{


    public function getCepUF(string $uf): array
    {
        $opts = array('http' =>
        array(
            'method'  => 'GET',
            'header'  => 'Accept: application/json'
        ));

        $context = stream_context_create($opts);

        $url =  "http://cep.la/api/GET/";

        $get = file_get_contents($url . $uf, false, $context);

        return (array) json_decode($get);
    }

    public function getCep(string $cep): array
    {
        $url =  "https://viacep.com.br/ws/";

        $cep = preg_replace('/[^0-9]/im', '', $cep);
        $cep = rawurlencode($cep);

        $get = file_get_contents($url . $cep . "/json");

        return (array) json_decode($get);
    }
}
