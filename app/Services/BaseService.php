<?php

namespace App\Services;

use stdClass;

class BaseService
{
    protected $env;
    protected $productionEnv = 'production';
    protected $connection = 'mysql';

    public function __construct()
    {
        $this->env = config('app.env');
    }

    public function responseMessage($message, $statusCode, $data = [])
    {
        return response()->json(
            [
                "message" => $message,
                "data" => $data
            ],
            $statusCode
        );
    }
}