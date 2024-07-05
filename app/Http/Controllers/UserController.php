<?php

namespace App\Http\Controllers;

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
