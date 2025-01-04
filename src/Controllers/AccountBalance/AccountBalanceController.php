<?php

namespace Sejimo\OxaPay\Controllers\AccountBalance;

use App\Http\Controllers\Controller;
use Sejimo\OxaPay\Helpers\OxaRequest;

class AccountBalanceController extends Controller
{
    public static function balance($data)
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/api/balance";

        return OxaRequest::send($url, $data);
    }
}
