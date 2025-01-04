<?php

namespace Sejimo\OxaPay\Facades;

use Illuminate\Support\Facades\Facade;

class OxaPay extends Facade
{
    protected static function getFacadeAccessor(): string {
        return 'oxapay';
    }
}
