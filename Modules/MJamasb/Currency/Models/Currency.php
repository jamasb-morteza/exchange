<?php

namespace MJamasb\Currency\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
