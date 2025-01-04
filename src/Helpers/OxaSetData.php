<?php

namespace Sejimo\OxaPay\Helpers;

class OxaSetData
{
    public static function callBackUrl($data, $key)
    {
        // if callback has data
        if(array_key_exists('callbackUrl', $data)) {
            if(!empty($data['callbackUrl'])) {
                return $data;
            }
        }

        // set callback from config
        $callbackUrl = config("oxapay.callbackUrl.$key");
        if(!empty($callbackUrl)) {
            $data['callbackUrl'] = $callbackUrl;
            return $data;
        }

        return $data;
    }

}
