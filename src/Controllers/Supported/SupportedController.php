<?php

namespace Sejimo\OxaPay\Controllers\Supported;

use App\Http\Controllers\Controller;
use Sejimo\OxaPay\Helpers\OxaRequest;

class SupportedController extends Controller
{
    public static function currencies()
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/api/currencies";

        return OxaRequest::send($url);
    }
    public static function fiatCurrencies()
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/api/fiats";

        return OxaRequest::send($url);
    }
    public static function networks()
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/api/networks";

        return OxaRequest::send($url);
    }
}
