<?php

namespace MJamasb\Coin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Coin;
use Illuminate\Http\Request;

class CoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param \MJamasb\Coin\Models $coin
     * @return \Illuminate\Http\Response
     */
    public function show(Coin $coin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \MJamasb\Coin\Models $coin
     * @return \Illuminate\Http\Response
     */
    public function edit(Coin $coin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \MJamasb\Coin\Models $coin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coin $coin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \MJamasb\Coin\Models $coin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coin $coin)
    {
        //
    }
}