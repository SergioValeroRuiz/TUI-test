<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class AppTest extends TestCase
{
    public function testCanRunCommand(): void
    {
        $output = `php cities`;
        $this->assertRegExp(
            '/(Processed city (.*) | (.*) - (.*)\n)*/',
            'Command output was not as expected'
        );

    }

}