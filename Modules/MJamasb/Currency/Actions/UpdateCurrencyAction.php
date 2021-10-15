<?php

namespace MJamasb\Currency\Actions;

use MJamasb\Currency\Models\Currency;

class UpdateCurrencyAction
{
    public static function handle($currency_id, $data)
    {
        $currency = Currency::find($currency_id);
        return $currency->update($data);
    }
}
