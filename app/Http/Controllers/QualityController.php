<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceQualityRequest;
use App\Models\Quality;
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

    public function store(ServiceQualityRequest $request): RedirectResponse {
        $quality = new Quality;
        $quality->title = $request->title;
        $quality->text = $request->text;
        if($request->file('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileOriginalName = $file->getClientOriginalName();
            $explode = explode('.', $fileOriginalName);
            $fileOriginalName = Str::slug($explode[0], '-') . '_' . now()->format('d-m-Y-H-i-s') . '.' . $extension;
            Storage::putFileAs('public/images/qualities/', $file, $fileOriginalName);
            $quality->image = 'images/qualities/' . $fileOriginalName;
        }
        $quality->save();
        return Redirect::route('admin.qualities.index');
    }

    public function edit(int $id): Viewable {
        $quality = Quality::findOrFail($id);
        return View::make('admin.qualities.edit', compact('quality'));
    }

    public function update(int $id, ServiceQualityRequest $request): RedirectResponse {
        $quality = Quality::findOrFail($id);
        $quality->title = $request->title;
        $quality->text = $request->text;
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
            $quality->image = 'images/qualities/' . $fileOriginalName;
        }
        $quality->save();
        return Redirect::route('admin.qualities.index');
    }

    public function delete($id): RedirectResponse {
        $quality = Quality::findOrFail($id);
        if($quality->image && Storage::exists('public/' . $quality->image)) {
            Storage::delete('public/' . $quality->image);
        }
        $quality->delete();
        return Redirect::route('admin.qualities.index');
    }
}
