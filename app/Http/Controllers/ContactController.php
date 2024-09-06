<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\ContactTranslate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\View\View as ViewResponse;

class ContactController extends Controller {
    public function index(): ViewResponse {
        return View::make('admin.contact');
    }

    public function update(ContactRequest $request): RedirectResponse {
        $contact = Contact::firstOrFail();
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->map = $request->map;

        for($i = 0; $i < count($request->lang); $i++) {
            ContactTranslate::whereContactId($contact->id)->whereLang($request->lang[$i])->update([
                'address' => $request->address[$i]
            ]);
        }

        $contact->save();
        return Redirect::back();
    }
}
