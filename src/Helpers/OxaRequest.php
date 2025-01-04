<?php

namespace Sejimo\OxaPay\Helpers;

use Illuminate\Support\Facades\Http;

class OxaRequest
{
    public static function send($url, $data = [])
    {
        // request & response
        $response = Http::post($url, $data);

        return OxaResponse::parse($response);
    }
}
