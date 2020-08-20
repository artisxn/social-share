<?php

namespace codicastudio\Share\Test;

use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    /**
     * Load Laravel share service provider
     *
     * @param \Illuminate\Foundation\Application $application
     * @return array
     */
    protected function getPackageProviders($application)
    {
        return ['codicastudio\Share\Providers\ShareServiceProvider'];
    }
}
