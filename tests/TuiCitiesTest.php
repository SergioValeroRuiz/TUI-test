<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class TuiCitiesTest extends TestCase
{
    public function testCanGetCities(): void
    {
        $tuiCities = new Cities\TuiCities();

        $cities=$tuiCities->getCities();
        $this->assertIsArray($cities, 'Tui Cities Format not as expected' );
        $this->assertNotEmpty($cities, 'Couldn\'t retrive data from TUI Cities API' );

    }

}