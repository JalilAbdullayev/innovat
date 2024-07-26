<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomRequest;
use App\Models\About;
use App\Models\AboutTranslate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AboutController extends Controller {
    public function index() {
        $about = About::firstOrFail();
        return view('admin.about', compact('about'));
    }

    public function update(CustomRequest $request) {
        $about = About::firstOrFail();
        if($request->file('image')) {
            if($about->image) {
                Storage::delete('public/' . $about->image);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileOriginalName = $file->getClientOriginalName();
            $explode = explode('.', $fileOriginalName);
            $fileOriginalName = Str::slug($explode[0], '-') . '_' . now()->format('d-m-Y-H-i-s') . '.' . $extension;
            Storage::putFileAs('public/images/', $file, $fileOriginalName);
        } else {
            $fileOriginalName = null;
        }

        $about->update([
            'image' => $fileOriginalName ? 'images/' . $fileOriginalName : null,
        ]);

        for($i = 0; $i < count($request->lang); $i++) {
            AboutTranslate::whereAboutId($about->id)->whereLang($request->lang[$i])->update([
                'title' => $request->title[$i],
                'text' => $request->text[$i]
            ]);
        }
        return redirect()->back();
    }
}
