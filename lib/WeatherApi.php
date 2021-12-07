<?php

namespace Cities;

class WeatherApi
{
    /* Defining basic API parameters */
    const API_URL = 'http://api.weatherapi.com/v1';
    const API_PATH = '/forecast.json';
    const API_KEY = 'dc258c89f5704982864171521213011';


    public function getCityWeather($city)
    {
        $curl = new \Curl\Curl();
        $curl->get(self::API_URL.self::API_PATH,[
            'key'=>self::API_KEY,
            'q'=>implode(',',[$city->latitude,$city->longitude]),
            'days'=>'3',
            'aqi'=>'no',
            'alerts'=>'no'
        ]);
        $curl->close();
        return json_decode($curl->response);

    }
}