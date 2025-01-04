<?php

namespace Sejimo\OxaPay\Helpers;

class OxaResponse
{
    public static function parse($response)
    {
        $result = $response->json();
        $resultCode = $result['result'];
        $package_message = trans("oxapay::resultCode.$resultCode") ?? $result['message'];

        // custom key
        $result['oxapay_vendor']['status'] = $response->status();
        $result['oxapay_vendor']['message'] = $package_message;
        return $result;
    }
}
