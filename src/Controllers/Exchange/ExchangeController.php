<?php

namespace Sejimo\OxaPay\Controllers\Exchange;

use App\Http\Controllers\Controller;
use Sejimo\OxaPay\Helpers\OxaRequest;

class ExchangeController extends Controller
{
    public static function rate($data)
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/exchange/rate";

        return OxaRequest::send($url, $data);
    }
    public static function calculate($data)
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/exchange/calculate";

        return OxaRequest::send($url, $data);
    }
    public static function pairs()
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/exchange/pairs";

        return OxaRequest::send($url);
    }
    public static function request($data)
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/exchange/request";

        return OxaRequest::send($url, $data);
    }
    public static function history($data)
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/exchange/list";

        return OxaRequest::send($url, $data);
    }
}
