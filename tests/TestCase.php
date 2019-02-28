<?php

namespace Tests;

use Revolution\Amazon\ProductAdvertising\Providers\AmazonProductServiceProvider;
use Revolution\Amazon\ProductAdvertising\Facades\AmazonProduct;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            AmazonProductServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'AmazonProduct' => AmazonProduct::class,
        ];
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        //
    }
}