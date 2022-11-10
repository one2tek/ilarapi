<?php

return [

    'modules_folder' => 'api',

    'exceptions_formatters' => [
        Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException::class => one2tek\ilarapi\ExceptionsFormatters\UnprocessableEntityHttpExceptionFormatter::class,
        Throwable::class => one2tek\ilarapi\ExceptionsFormatters\ExceptionFormatter::class
    ]
    
];
