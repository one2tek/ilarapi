<?php

namespace one2tek\ilarapi\Facades;

use Illuminate\Support\Facades\Facade;

class ApiConsumer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'apiconsumer';
    }
}
