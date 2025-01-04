<?php

namespace Sejimo\OxaPay\Controllers\Payment;

use App\Http\Controllers\Controller;
use Sejimo\OxaPay\Helpers\OxaRequest;

class PaymentController extends Controller
{
    public static function information($data)
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/merchants/inquiry";

        return OxaRequest::send($url, $data);
    }
    public static function history($data)
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/merchants/list";

        return OxaRequest::send($url, $data);
    }
}
