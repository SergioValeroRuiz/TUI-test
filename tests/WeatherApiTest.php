<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class WeatherApiTest extends TestCase
{
    public function testCanGetCityWeather(): void
    {
        $weatherApi = new Cities\WeatherApi();
        $tuiCities = new Cities\TuiCities();

        $cities=$tuiCities->getCities();
        $this->assertIsArray($cities, 'Tui Cities Format not as expected' );
        $this->assertNotEmpty($cities, 'Couldn\'t retrive data from TUI Cities API' );

        $weather = $weatherApi->getCityWeather($cities[0]);
        $this->assertInstanceOf(
            stdClass::class,
            $weather
        );

    }

}