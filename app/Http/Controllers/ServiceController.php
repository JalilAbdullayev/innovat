<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomRequest;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Illuminate\View\View as Viewable;

class ServiceController extends Controller {
    public function index(): Viewable {
        $data = Service::all();
        return View::make('admin.services.index', compact('data'));
    }

    public function create(): Viewable {
        return View::make('admin.services.create');
    }

    public function store(CustomRequest $request): RedirectResponse {
        $service = new Service;
        $service->title = $request->title;
        $service->slug = Str::slug($request->title);
        $service->description = $request->description;
        $service->keywords = $request->keywords;
        $service->text = $request->text;
        if($request->file('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileOriginalName = $file->getClientOriginalName();
            $explode = explode('.', $fileOriginalName);
            $fileOriginalName = Str::slug($explode[0], '-') . '_' . now()->format('d-m-Y-H-i-s') . '.' . $extension;
            Storage::putFileAs('public/images/services/', $file, $fileOriginalName);
            $service->image = 'images/services/' . $fileOriginalName;
        }
        $service->save();
        return Redirect::route('admin.services.index');
    }

    public function edit(int $id): Viewable {
        $service = Service::findOrFail($id);
        return View::make('admin.services.edit', compact('service'));
    }

    public function update(int $id, CustomRequest $request): RedirectResponse {
        $service = Service::findOrFail($id);
        $service->title = $request->title;
        $service->slug = Str::slug($request->title);
        $service->description = $request->description;
        $service->keywords = $request->keywords;
        $service->text = $request->text;
        if($request->file('image')) {
            if($service->image) {
                Storage::delete('public/' . $service->image);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileOriginalName = $file->getClientOriginalName();
            $explode = explode('.', $fileOriginalName);
            $fileOriginalName = Str::slug($explode[0], '-') . '_' . now()->format('d-m-Y-H-i-s') . '.' . $extension;
            Storage::putFileAs('public/images/services/', $file, $fileOriginalName);
            $service->image = 'images/services/' . $fileOriginalName;
        }
        $service->save();
        return Redirect::route('admin.services.index');
    }

    public function delete($id): RedirectResponse {
        $service = Service::findOrFail($id);
        if($service->image && Storage::exists('public/' . $service->image)) {
            Storage::delete('public/' . $service->image);
        }
        $service->delete();
        return Redirect::route('admin.services.index');
    }
}
