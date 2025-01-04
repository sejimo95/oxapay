<?php

namespace Sejimo\OxaPay\Controllers\StaticWallet;

use App\Http\Controllers\Controller;
use Sejimo\OxaPay\Helpers\OxaRequest;
use Sejimo\OxaPay\Helpers\OxaSetData;

class StaticWalletController extends Controller
{
    public static function create($data)
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/merchants/request/staticaddress";

        // set callBackUrl
        $mergedData = OxaSetData::callBackUrl($data, 'createStaticWallet');
        return OxaRequest::send($url, $mergedData);
    }
    public static function revoke($data)
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/merchants/revoke/staticaddress";

        return OxaRequest::send($url, $data);
    }
    public static function list($data)
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/merchants/list/staticaddress";

        return OxaRequest::send($url, $data);
    }
}
