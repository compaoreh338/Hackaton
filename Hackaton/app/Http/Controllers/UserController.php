<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{


    public function list(Request $request): View
    {

        $user = User::all();

        return view('user.list', compact('user'));
    }

    public function new(Request $request): view
    {

        $user = User::all();

        return view('user.new', compact('user'));
    }

    public function create(StoreUserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

            'image' => $request->image,


        ]);


        $user->save();

        return redirect()->route('user.list');
    }

    public function edit(Request $request, int $id): View
    {
        $user = User::findOrFail($id);

        return view('user.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, $id): RedirectResponse
    {

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->categories,
            'image' => $request->image

        ]);

        if ($request->password) {
            $user->update([
                'password' => Hash::make($request->password),
            ]);
        }

        $user->save();
        return redirect()->route('dashboard');
    }

    public function destroy(Request $request, int $id)
    {
        User::findOrFail($id)->delete();

        return redirect()->route('user.list');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
