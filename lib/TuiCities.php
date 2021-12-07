<?php

namespace Cities;

class TuiCities
{
    /* Defining basic API parameters */
    const API_URL = 'https://api.musement.com/api/v3';
    const API_PATH = '/cities';

    public function getCities()
    {
        $curl = new \Curl\Curl();
        $curl->get(self::API_URL.self::API_PATH);
        $curl->close();
        return json_decode($curl->response);
    }
}