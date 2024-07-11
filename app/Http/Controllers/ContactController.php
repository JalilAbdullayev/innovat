<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller {
    public function index() {
        return view('admin.contact');
    }

    public function update(ContactRequest $request) {
        Contact::firstOrFail()->update([
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'map' => $request->map
        ]);
        return redirect()->back();
    }
}
