<?php

namespace MJamasb\Currency\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use MJamasb\Currency\Models\Currency;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class CurrencyTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('Created', 'created_at')->sortable()->format(fn($value, $column, $row) => $row->jalali_created_at),
            Column::make('Symbol',)->sortable()->searchable(),
            Column::make('Title',)->sortable()->searchable(),
            Column::make('Buy Price', 'price_buy')->sortable(),
            Column::make('Sell Price', 'price_sell')->sortable(),
            Column::make('Description', 'Description'),
        ];
    }

    public function query(): Builder
    {
        return Currency::query();
    }
}
