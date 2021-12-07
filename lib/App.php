<?php

namespace Cities;

class App
{
    protected $printer;
    protected $tuiCities;
    protected $weatherAPI;

    public function __construct()
    {
        $this->printer = new Printer();
        $this->tuiCities = new TuiCities();
        $this->weatherAPI = new WeatherApi();
    }


    public function runCommand($argv)
    {

        $cities = $this->tuiCities->getCities();
        foreach ($cities as $city) {
            $weather = $this->weatherAPI->getCityWeather($city);

            if($weather){
                $dayOneCondition = $weather->forecast->forecastday[1]->day->condition->text;
                $dayTwoCondition = $weather->forecast->forecastday[2]->day->condition->text;

                $data = "Processed city ".$city->name." | ".$dayOneCondition." - ".$dayTwoCondition."";

                $this->printer->display($data);
            }

        }
    }
}