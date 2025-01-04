<?php

namespace Sejimo\OxaPay\Controllers\SystemStatus;

use App\Http\Controllers\Controller;
use Sejimo\OxaPay\Helpers\OxaRequest;

class SystemStatusController extends Controller
{
    public static function systemStatus()
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/monitor";

        return OxaRequest::send($url);
    }
}
