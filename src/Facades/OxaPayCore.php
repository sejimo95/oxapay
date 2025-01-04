<?php

namespace Sejimo\OxaPay\Facades;

use Sejimo\OxaPay\Controllers\AcceptedCoins\AcceptedCoinsController;
use Sejimo\OxaPay\Controllers\AccountBalance\AccountBalanceController;
use Sejimo\OxaPay\Controllers\Exchange\ExchangeController;
use Sejimo\OxaPay\Controllers\Invoice\InvoiceController;
use Sejimo\OxaPay\Controllers\Payment\PaymentController;
use Sejimo\OxaPay\Controllers\Payout\PayoutController;
use Sejimo\OxaPay\Controllers\Price\PriceController;
use Sejimo\OxaPay\Controllers\StaticWallet\StaticWalletController;
use Sejimo\OxaPay\Controllers\Supported\SupportedController;
use Sejimo\OxaPay\Controllers\SystemStatus\SystemStatusController;
use Sejimo\OxaPay\Controllers\WhiteLabel\WhiteLabelController;

class OxaPayCore
{
    public function acceptedCoins($merchant)
    {
        return AcceptedCoinsController::acceptedCoins($merchant);
    }
    public function price()
    {
        return PriceController::price();
    }
    public function systemStatus()
    {
        return SystemStatusController::systemStatus();
    }
    public function supportedCurrencies()
    {
        return SupportedController::currencies();
    }
    public function supportedFiatCurrencies()
    {
        return SupportedController::fiatCurrencies();
    }
    public function supportedNetworks()
    {
        return SupportedController::networks();
    }
    public function createInvoice($data)
    {
        return InvoiceController::create($data);
    }
    public function accountBalance($data)
    {
        return AccountBalanceController::balance($data);
    }
    public function exchangeRate($data)
    {
        return ExchangeController::rate($data);
    }
    public function exchangeCalculate($data)
    {
        return ExchangeController::calculate($data);
    }
    public function exchangePairs()
    {
        return ExchangeController::pairs();
    }
    public function exchangeRequest($data)
    {
        return ExchangeController::request($data);
    }
    public function exchangeHistory($data)
    {
        return ExchangeController::history($data);
    }
    public function createStaticWallet($data)
    {
        return StaticWalletController::create($data);
    }
    public function revokeStaticWallet($data)
    {
        return StaticWalletController::revoke($data);
    }
    public function staticWalletList($data)
    {
        return StaticWalletController::list($data);
    }
    public function payoutHistory($data)
    {
        return PayoutController::history($data);
    }
    public function payoutInformation($data)
    {
        return PayoutController::information($data);
    }
    public function createPayout($data)
    {
        return PayoutController::create($data);
    }
    public function paymentInformation($data)
    {
        return PaymentController::information($data);
    }
    public function paymentHistory($data)
    {
        return PaymentController::history($data);
    }
    public function createWhiteLabelPayment($data)
    {
        return WhiteLabelController::createPayment($data);
    }

}
