<?php

namespace Sejimo\OxaPay\Controllers\Price;

use App\Http\Controllers\Controller;
use Sejimo\OxaPay\Helpers\OxaRequest;
use Sejimo\OxaPay\Helpers\OxaResponse;

class PriceController extends Controller
{
    public static function price()
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/api/prices";

        return OxaRequest::send($url);
    }
}
