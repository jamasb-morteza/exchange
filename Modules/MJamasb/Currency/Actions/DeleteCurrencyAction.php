<?php

namespace MJamasb\Currency\Actions;

use MJamasb\Currency\Models\Currency;

class DeleteCurrencyAction
{
    public static function handle($currency_id)
    {
        $currency = Currency::find($currency_id);
        return $currency->delete();
    }
}
