<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class error extends Exception
{
    function render($request, Throwable $exception)
    {
            if ($this->isHttpException($exception))
            {
                $statusCode = $exception->getStatusCode();

                if ($statusCode== 404)
                {
                    return response()->view('errors.404', [], 404);
                }
                if ($statusCode== 401)
                {
                    return response()->view('errors.401', [], 401);
                }
                if ($statusCode== 500)
                {
                    return response()->view('errors.500', [], 500);
                }

            }
            return parent::render($request, $exception);
    }}
