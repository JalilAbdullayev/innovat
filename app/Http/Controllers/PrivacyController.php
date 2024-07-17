<?php

namespace App\Http\Controllers;

use App\Models\Privacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\View\View as Viewable;

class PrivacyController extends Controller {
    public function index(): Viewable {
        $privacy = Privacy::first();
        return View::make('admin.privacy', compact('privacy'));
    }

    public function update(Request $request) {
        $request->validate(['text' => 'required'], ['text.required' => 'The privacy policy field is required.']);
        Privacy::first()->update(['text' => $request->text]);
        return redirect()->back();
    }
}
