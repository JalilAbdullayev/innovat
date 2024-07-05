<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\View\View as Viewable;

class ProfileController extends Controller {
    public function index(): Viewable {
        return View::make('admin.profile');
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse {
        $request->user()->fill($request->validated());

        if($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();
        return Redirect::back();
    }

    public function delete(): RedirectResponse {
        $user = auth()->user();
        $user->delete();
        return Redirect::route('home');
    }
}
