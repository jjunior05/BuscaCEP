<?php

namespace jeh\BuscaCep;

class Search
{


    public function getCep(string $cep): array
    {
        $url =  "https://viacep.com.br/ws/";

        $cep = preg_replace('/[^0-9]/im', '', $cep);
        $cep = rawurlencode($cep);

        $get = file_get_contents($url . $cep . "/json");

        return (array) json_decode($get);
    }
}
