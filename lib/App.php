<?php

namespace Cities;

class App
{
    protected $printer;
    protected $tuiCities;

    public function __construct()
    {
        $this->printer = new Printer();
        $this->tuiCities = new TuiCities();
    }


    public function runCommand($argv)
    {

        $cities = $this->tuiCities->getCities();
        foreach ($cities as $city) {

            $data = "Processed city ".$city->name;

            $this->printer->display($data);

        }
    }
}