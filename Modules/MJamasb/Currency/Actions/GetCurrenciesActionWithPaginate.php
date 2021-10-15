<?php

namespace MJamasb\Currency\Actions;

use MJamasb\Currency\Models\Currency;

class GetCurrenciesActionWithPaginate
{
    public static function handle()
    {
        return Currency::paginate();
    }
}
