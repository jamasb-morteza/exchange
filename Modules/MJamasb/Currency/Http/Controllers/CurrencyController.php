<?php

namespace MJamasb\Currency\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use MJamasb\Currency\Actions\DeleteCurrencyAction;
use MJamasb\Currency\Actions\GetCurrencyByIdAction;
use MJamasb\Currency\Actions\StoreCurrencyAction;
use MJamasb\Currency\Actions\UpdateCurrencyAction;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('currency::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('currency::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        StoreCurrencyAction::handle($request);
        return redirect()->back()->with('action-result',
            [
                'success' => true,
                'message' => __('Currency Created')
            ]
        );
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $currency = GetCurrencyByIdAction::handle($id);
        return view('currency::show', compact('currency'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $currency = GetCurrencyByIdAction::handle($id);
        return view('currency::edit', compact('currency'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //
        $result = UpdateCurrencyAction::handle($id, $request);
        return redirect()->back()->with('action-result',
            [
                'success' => true,
                'message' => __('Currency Updated')
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        //
        $result = DeleteCurrencyAction::handle($id);
        return redirect()->back()->with('action-result',
            [
                'success' => true,
                'message' => __('Currency Deleted')
            ]
        );
    }
}
