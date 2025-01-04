<?php

namespace Sejimo\OxaPay\Controllers\Payout;

use App\Http\Controllers\Controller;
use Sejimo\OxaPay\Helpers\OxaRequest;
use Sejimo\OxaPay\Helpers\OxaSetData;

class PayoutController extends Controller
{
    public static function history($data)
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/api/list";

        return OxaRequest::send($url, $data);
    }
    public static function information($data)
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/api/inquiry";

        return OxaRequest::send($url, $data);
    }
    public static function create($data)
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/api/send";

        // set callBackUrl
        $mergedData = OxaSetData::callBackUrl($data, 'createPayout');
        return OxaRequest::send($url, $mergedData);
    }
}
