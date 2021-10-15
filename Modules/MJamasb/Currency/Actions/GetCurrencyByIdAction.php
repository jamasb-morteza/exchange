<?php

namespace MJamasb\Currency\Actions;

use MJamasb\Currency\Models\Currency;

class GetCurrencyByIdAction
{
    public static function handle($currency_id)
    {
        $currency = Currency::find($currency_id);
        return $currency;
    }
}
