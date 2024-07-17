<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Illuminate\View\View as Viewable;

class TeamController extends Controller {
    public function index(): Viewable {
        $data = Team::all();
        return View::make('admin.team.index', compact('data'));
    }

    public function create(): Viewable {
        return View::make('admin.team.create');
    }

    public function store(TeamRequest $request): RedirectResponse {
        $member = new Team;
        $member->name = $request->name;
        $member->position = $request->position;
        if($request->file('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileOriginalName = $file->getClientOriginalName();
            $explode = explode('.', $fileOriginalName);
            $fileOriginalName = Str::slug($explode[0], '-') . '_' . now()->format('d-m-Y-H-i-s') . '.' . $extension;
            Storage::putFileAs('public/images/team/', $file, $fileOriginalName);
            $member->image = 'images/team/' . $fileOriginalName;
        }
        $member->save();
        return Redirect::route('admin.team.index');
    }

    public function edit($id): Viewable {
        $member = Team::whereId($id)->first();
        return View::make('admin.team.edit', compact('member'));
    }

    public function update($id, TeamRequest $request): RedirectResponse {
        $member = Team::whereId($id)->first();
        $member->name = $request->name;
        $member->position = $request->position;
        if($request->file('image')) {
            if($member->image) {
                Storage::delete('public/' . $member->image);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileOriginalName = $file->getClientOriginalName();
            $explode = explode('.', $fileOriginalName);
            $fileOriginalName = Str::slug($explode[0], '-') . '_' . now()->format('d-m-Y-H-i-s') . '.' . $extension;
            Storage::putFileAs('public/images/team/', $file, $fileOriginalName);
            $member->image = 'images/team/' . $fileOriginalName;
        }
        $member->save();
        return Redirect::route('admin.team.index');
    }

    public function delete($id): RedirectResponse {
        $member = Team::whereId($id)->first();
        if($member->image) {
            Storage::delete('public/' . $member->image);
        }
        $member->delete();
        return Redirect::route('admin.team.index');
    }
}
