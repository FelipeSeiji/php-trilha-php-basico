<?php

namespace Felipeseiji\DigitalCep;

class Search
{
    private $url = 'https://viacep.com.br/ws/';

    public function getAddressFromZipCode($zipCode)
    {
        $zipCode = preg_replace('/[^0-9]/', '', $zipCode);

        $get = file_get_contents($this->url . $zipCode . '/json/');

        return (array) json_decode($get, true);
    }
}