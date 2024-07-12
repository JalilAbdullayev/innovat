<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\View\View as Viewable;

class UserController extends Controller {
    public function index(): Viewable {
        $data = User::all();
        return View::make('admin.users.index', compact('data'));
    }

    public function create(): Viewable {
        return View::make('admin.users.create');
    }

    public function store(ProfileUpdateRequest $request) {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        if($request->password === $request->password_confirmation) {
            $user->save();
            return redirect()->route('admin.users.index');
        }

        return redirect()->back()->with('error', 'Şifrələr uyğun deyil.');
    }

    public function edit(int $id) {
        $user = User::whereId($id)->first();
        return View::make('admin.users.edit', compact('user'));
    }

    public function update(int $id, Request $request): RedirectResponse {
        User::whereId($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role
        ]);
        return Redirect::route('admin.users.index');
    }

    public function delete(int $id): RedirectResponse {
        User::whereId($id)->delete();
        return Redirect::back();
    }
}
