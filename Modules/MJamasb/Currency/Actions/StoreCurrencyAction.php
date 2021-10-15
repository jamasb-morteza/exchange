<?php

namespace MJamasb\Currency\Actions;

use Illuminate\Http\Request;
use MJamasb\Currency\Models\Currency;

class StoreCurrencyAction
{
    public static function handle(Request $request)
    {
        return Currency::create($request->all());
    }
}
