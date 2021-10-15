<?php

namespace MJamasb\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use MJamasb\Currency\Actions\DeleteUserAction;
use MJamasb\Currency\Actions\GetUserByIdAction;
use MJamasb\Currency\Actions\GetUsersActionWithPaginate;
use MJamasb\Currency\Actions\StoreUserAction;
use MJamasb\Currency\Actions\UpdateUserAction;
use MJamasb\User\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('user::index');
    }

    public function create()
    {
        return view('user::create');
    }

    public function store(Request $request)
    {
        $user = StoreUserAction::handle($request->all());
        return redirect()->back()->with('action-result', ['success' => true, 'message' => __('User Created')]);
    }

    public function edit($user_id)
    {
        $user = GetUserByIdAction::handle($user_id);
        return view('user::edit', compact('user'));
    }

    public function update(Request $request, $user_id)
    {
        $user = UpdateUserAction::handle($user_id, $request->all());
        return redirect()->back()->with('action-result', ['success' => true, 'message' => __('User Updated')]);
    }

    public function destroy($user_id)
    {
        $result = DeleteUserAction::handle($user_id);
        return redirect()->back()->with('action-result', ['success' => true, 'message' => __('User Deleted')]);
    }

    public function profile()
    {

    }

    public function updateProfile()
    {

    }
}

