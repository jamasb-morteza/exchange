<?php

namespace MJamasb\Currency\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Currency extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
        'symbol',
        'price_buy',
        'price_sell',
    ];

    protected static function newFactory()
    {
        return \MJamasb\Currency\Database\Factories\CurrencyFactory::new();
    }


}
