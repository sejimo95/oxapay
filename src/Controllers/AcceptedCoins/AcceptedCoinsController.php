<?php

namespace Sejimo\OxaPay\Controllers\AcceptedCoins;

use App\Http\Controllers\Controller;
use Sejimo\OxaPay\Helpers\OxaRequest;

class AcceptedCoinsController extends Controller
{
    public static function acceptedCoins($merchant)
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/merchants/allowedCoins";
        $data = ['merchant' => $merchant];

        return OxaRequest::send($url, $data);
    }
}
