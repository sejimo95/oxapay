<?php

namespace Sejimo\OxaPay\Controllers\Invoice;

use App\Http\Controllers\Controller;
use Sejimo\OxaPay\Helpers\OxaRequest;
use Sejimo\OxaPay\Helpers\OxaSetData;

class InvoiceController extends Controller
{
    public static function create($data)
    {
        // generate url
        $baseUrl = config('oxapay.baseUrl');
        $url = "$baseUrl/merchants/request";

        // set callBackUrl
        $mergedData = OxaSetData::callBackUrl($data, 'createInvoice');
        return OxaRequest::send($url, $mergedData);
    }
}
