<?php

namespace Sejimo\OxaPay\Controllers\WhiteLabel;

use App\Http\Controllers\Controller;
use Sejimo\OxaPay\Helpers\OxaRequest;
use Sejimo\OxaPay\Helpers\OxaSetData;

class WhiteLabelController extends Controller
{
    public static function createPayment($data)
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/merchants/request/whitelabel";

        // set callBackUrl
        $mergedData = OxaSetData::callBackUrl($data, 'createWhiteLabelPayment');
        return OxaRequest::send($url, $mergedData);
    }
}
