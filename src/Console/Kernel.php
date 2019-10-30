<?php

namespace Lumen\Testbench\Console;

use Exception;

class Kernel extends \Laravel\Lumen\Console\Kernel
{
    /**
     * The bootstrap classes for the application.
     *
     * @return void
     */
    protected $bootstrappers = [];

    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [];

    /**
     * Report the exception to the exception handler.
     *
     * @param  \Exception  $e
     *
     * @throws \Exception
     *
     * @return void
     */
    protected function reportException(Exception $e)
    {
        throw $e;
    }
}
