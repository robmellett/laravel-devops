<?php

namespace Robmellett\Devops\Tests;

use Orchestra\Testbench\TestCase;
use Robmellett\Devops\DevopsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [DevopsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
