<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomRequest;
use App\Models\Service;
use App\Models\ServiceTranslate;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
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
        if($request->file('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileOriginalName = $file->getClientOriginalName();
            $explode = explode('.', $fileOriginalName);
            $fileOriginalName = Str::slug($explode[0], '-') . '_' . now()->format('d-m-Y-H-i-s') . '.' . $extension;
            Storage::putFileAs('public/images/services/', $file, $fileOriginalName);
        } else {
            $fileOriginalName = null;
        }

        $service = Service::create([
            'image' => $fileOriginalName ? 'images/services/' . $fileOriginalName : null,
        ]);

        for($i = 0; $i < count($request->lang); $i++) {
            ServiceTranslate::create([
                'service_id' => $service->id,
                'title' => $request->title[$i],
                'slug' => Str::slug($request->title[$i]),
                'description' => $request->description[$i],
                'keywords' => $request->keywords[$i],
                'text' => $request->text[$i],
                'lang' => $request->lang[$i],
            ]);
        }
        return Redirect::route('admin.services.index');
    }

    public function edit(int $id): Viewable {
        $service = Service::findOrFail($id);
        return View::make('admin.services.edit', compact('service'));
    }

    public function update(int $id, CustomRequest $request): RedirectResponse {
        $service = Service::findOrFail($id);
        if($request->file('image')) {
            if($service->image) {
                unlink(storage_path('app/public/' . $service->image));
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileOriginalName = $file->getClientOriginalName();
            $explode = explode('.', $fileOriginalName);
            $fileOriginalName = Str::slug($explode[0], '-') . '_' . now()->format('d-m-Y-H-i-s') . '.' . $extension;
            Storage::putFileAs('public/images/services/', $file, $fileOriginalName);
            $service->update(['image' => 'images/services/' . $fileOriginalName]);
        }

        for($i = 0; $i < count($request->lang); $i++) {
            ServiceTranslate::whereServiceId($id)->whereLang($request->lang[$i])->update([
                'title' => $request->title[$i],
                'slug' => Str::slug($request->title[$i]),
                'description' => $request->description[$i],
                'keywords' => $request->keywords[$i],
                'text' => $request->text[$i]
            ]);
        }
        return Redirect::route('admin.services.index');
    }

    public function delete($id): JsonResponse {
        $service = Service::findOrFail($id);
        ServiceTranslate::whereServiceId($id)->delete();
        if($service->image && Storage::exists('public/' . $service->image)) {
            Storage::delete('public/' . $service->image);
        }
        $service->delete();
        if(session('error')) {
            return Response::json(['success' => false, 'error' => session('error')]);
        }
        return Response::json(['success' => true]);
    }
}
