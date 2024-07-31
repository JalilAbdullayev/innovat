<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;
use App\Models\TeamTranslate;
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
        if($request->file('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileOriginalName = $file->getClientOriginalName();
            $explode = explode('.', $fileOriginalName);
            $fileOriginalName = Str::slug($explode[0], '-') . '_' . now()->format('d-m-Y-H-i-s') . '.' . $extension;
            Storage::putFileAs('public/images/team/', $file, $fileOriginalName);
        } else {
            $fileOriginalName = null;
        }

        $member = Team::create([
            'image' => $fileOriginalName ? 'images/team/' . $fileOriginalName : null,
        ]);

        for($i = 0; $i < count($request->lang); $i++) {
            TeamTranslate::create([
                'member_id' => $member->id,
                'name' => $request->name[$i],
                'position' => $request->position[$i],
                'lang' => $request->lang[$i],
            ]);
        }
        return Redirect::route('admin.team.index');
    }

    public function edit($id): Viewable {
        $member = Team::findOrFail($id);
        return View::make('admin.team.edit', compact('member'));
    }

    public function update($id, TeamRequest $request): RedirectResponse {
        $member = Team::findOrFail($id);
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
            $member->update([
                'image' => 'images/team/' . $fileOriginalName,
            ]);
        }

        for($i = 0; $i < count($request->lang); $i++) {
            TeamTranslate::whereMemberId($id)->whereLang($request->lang[$i])->update([
                'name' => $request->name[$i],
                'position' => $request->position[$i],
                'lang' => $request->lang[$i],
            ]);
        }
        return Redirect::route('admin.team.index');
    }

    public function delete($id): RedirectResponse {
        $member = Team::whereId($id)->first();
        TeamTranslate::whereMemberId($id)->delete();
        if($member->image) {
            Storage::delete('public/' . $member->image);
        }
        $member->delete();
        return Redirect::route('admin.team.index');
    }
}
