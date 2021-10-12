<?php

namespace MJamasb\Currency\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use MJamasb\Currency\Models\Currency;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //
        $currencies = Currency::all();
        return view('Currency::index',compact('currencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Currency::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \MJamasb\Currency\Models\Currency $currency
     * @return \Illuminate\Http\Response
     */
    public function show(Currency $currency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \MJamasb\Currency\Models\Currency $currency
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Currency $currency)
    {
        //
        return view('Currency::edit',compact('currency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \MJamasb\Currency\Models\Currency $currency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Currency $currency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \MJamasb\Currency\Models\Currency $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Currency $currency)
    {
        //
    }
}
