<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomRequest;
use App\Models\Quality;
use App\Models\QualityTranslate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Illuminate\View\View as Viewable;

class QualityController extends Controller {
    public function index(): Viewable {
        $data = Quality::all();
        return View::make('admin.qualities.index', compact('data'));
    }

    public function create(): Viewable {
        return View::make('admin.qualities.create');
    }

    public function store(CustomRequest $request): RedirectResponse {
        if($request->file('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileOriginalName = $file->getClientOriginalName();
            $explode = explode('.', $fileOriginalName);
            $fileOriginalName = Str::slug($explode[0], '-') . '_' . now()->format('d-m-Y-H-i-s') . '.' . $extension;
            Storage::putFileAs('public/images/qualities/', $file, $fileOriginalName);
        } else {
            $fileOriginalName = null;
        }

        $quality = Quality::create([
            'image' => $fileOriginalName ? 'images/qualities/' . $fileOriginalName : null,
        ]);

        for($i = 0; $i < count($request->lang); $i++) {
            QualityTranslate::create([
                'quality_id' => $quality->id,
                'title' => $request->title[$i],
                'slug' => Str::slug($request->title[$i]),
                'description' => $request->description[$i],
                'keywords' => $request->keywords[$i],
                'text' => $request->text[$i],
                'lang' => $request->lang[$i],
            ]);
        }
        return Redirect::route('admin.qualities.index');
    }

    public function edit(int $id): Viewable {
        $quality = Quality::findOrFail($id);
        return View::make('admin.qualities.edit', compact('quality'));
    }

    public function update(int $id, CustomRequest $request): RedirectResponse {
        $quality = Quality::findOrFail($id);
        if($request->file('image')) {
            if($quality->image) {
                Storage::delete('public/' . $quality->image);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileOriginalName = $file->getClientOriginalName();
            $explode = explode('.', $fileOriginalName);
            $fileOriginalName = Str::slug($explode[0], '-') . '_' . now()->format('d-m-Y-H-i-s') . '.' . $extension;
            Storage::putFileAs('public/images/qualities/', $file, $fileOriginalName);
        } else {
            $fileOriginalName = null;
        }

        Quality::whereId($id)->update([
            'image' => $fileOriginalName ? 'images/qualities/' . $fileOriginalName : null,
        ]);

        for($i = 0; $i < count($request->lang); $i++) {
            QualityTranslate::whereQualityId($id)->whereLang($request->lang[$i])->update([
                'title' => $request->title[$i],
                'slug' => Str::slug($request->title[$i]),
                'description' => $request->description[$i],
                'keywords' => $request->keywords[$i],
                'text' => $request->text[$i]
            ]);
        }
        return Redirect::route('admin.qualities.index');
    }

    public function delete($id): RedirectResponse {
        $quality = Quality::findOrFail($id);
        QualityTranslate::whereQualityId($id)->delete();
        if($quality->image && Storage::exists('public/' . $quality->image)) {
            Storage::delete('public/' . $quality->image);
        }
        $quality->delete();
        return Redirect::route('admin.qualities.index');
    }
}
