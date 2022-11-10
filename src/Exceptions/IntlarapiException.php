<?php

namespace one2tek\ilarapi\Exceptions;

use Exception;

class IlarapiException extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
