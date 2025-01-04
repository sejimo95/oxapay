<?php

return [

    /**
     * baseUrl
     */
    'baseUrl' => 'https://api.oxapay.com',

    /**
     * callbackUrl
    */
    'callbackUrl' => [
        'createInvoice' => '', //https://example.com/oxapay/callback/create-invoice
        'createStaticWallet' => '', //https://example.com/oxapay/callback/create-static-wallet
        'createPayout' => '', //https://example.com/oxapay/callback/create-payout
        'createWhiteLabelPayment' => '', //https://example.com/oxapay/callback/create-white-label-payment
    ],

    /**
     * merchants API KEYS
     */
    'merchants' => [
        'key_1' => 'value_1',
        'key_2' => 'value_2',
    ],

    /**
     * payouts API KEYS
     */
    'payouts' => [
        'key_1' => 'value_1',
        'key_2' => 'value_2',
    ],

    /**
     * general API KEYS
     */
    'general' => [
        'key_1' => 'value_1',
        'key_2' => 'value_2',
    ],

];
