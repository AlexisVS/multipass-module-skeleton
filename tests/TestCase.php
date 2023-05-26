<?php

namespace VendorName\Skeleton\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use VendorName\Skeleton\SkeletonServiceProvider;

class TestCase extends Orchestra
{
    /**
     * Automatically enables package discoveries.
     */
    protected $enablesPackageDiscoveries = true;

    /**
     * Automatically loads environment variables.
     */
    protected $loadEnvironmentVariables = true;

    public function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');
    }

    protected function getPackageProviders($app): array
    {
        return [
            SkeletonServiceProvider::class,
        ];
    }

    public static function applicationBasePath(): string
    {
        return __DIR__.'/../../../../';
    }

    protected function getBasePath(): string
    {
        return __DIR__.'/../../../../';
    }
}
