<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use Laravel\BrowserKitTesting\TestCase as BaseTestCase;

abstract class BrowserKitTestCase  extends BaseTestCase
{
    use CreatesApplication;

    public $baseUrl = 'http://localhost';
}
