<?php

namespace App\Http\Controllers;

use App\Models\Privacy;
use App\Models\PrivacyTranslate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\View\View as Viewable;

class PrivacyController extends Controller {
    public function index(): Viewable {
        $privacy = Privacy::firstOrFail()->translate()->orderBy('lang')->get();
        return View::make('admin.privacy', compact( 'privacy'));
    }

    public function update(Request $request) {
        $privacy = Privacy::firstOrFail();
        $request->validate(['text' => 'required'], ['text.required' => 'The privacy policy field is required.']);
        for($i = 0; $i < count($request->lang); $i++) {
            PrivacyTranslate::wherePrivacyId($privacy->id)->whereLang($request->lang[$i])->update([
                'text' => $request->text[$i]
            ]);
        }
        return Redirect::back();
    }
}
