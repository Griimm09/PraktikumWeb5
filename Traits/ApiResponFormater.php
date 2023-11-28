<?php

namespace Traits;

trait ApiResponseFormater
{
    public function apiResponse($code = 200, $message = "succes", $data = [])
    {
        return json_encode([
            "code" => $code,
            "message" => $message,
            "data" => $data
        ]);
    }
}