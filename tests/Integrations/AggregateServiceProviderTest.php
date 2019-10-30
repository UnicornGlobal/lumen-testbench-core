<?php

namespace Lumen\Testbench\Tests\Integrations;

use Lumen\Testbench\TestCase;

class AggregateServiceProviderTest extends TestCase
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            'Lumen\Testbench\Tests\Stubs\Providers\ParentServiceProvider',
        ];
    }

    /** @test */
    public function it_populate_expected_services()
    {
        $this->assertTrue($this->app->bound('parent.loaded'));
        $this->assertTrue($this->app->bound('child.loaded'));
        $this->assertTrue($this->app->bound('child.deferred.loaded'));

        $this->assertTrue($this->app->make('parent.loaded'));
        $this->assertTrue($this->app->make('child.loaded'));
        $this->assertTrue($this->app->make('child.deferred.loaded'));
    }
}
