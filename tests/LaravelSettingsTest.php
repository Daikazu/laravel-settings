<?php

namespace Daikazu\LaravelSettings\Tests;

use Daikazu\LaravelSettings\Facades\LaravelSettings;
use Daikazu\LaravelSettings\ServiceProvider;
use Orchestra\Testbench\TestCase;

class LaravelSettingsTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'laravel-settings' => LaravelSettings::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
