<?php

namespace Cities;

class App
{
    protected $printer;

    public function __construct()
    {
        $this->printer = new Printer();
    }


    public function runCommand($argv)
    {

        $this->printer->display('test');
    }
}