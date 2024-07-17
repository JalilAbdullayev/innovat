<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Quality;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Support\Facades\View;
use Illuminate\View\View as Viewable;

class FrontController extends Controller {
    public function index(): Viewable {
        $services = Service::take(4)->get();
        $qualities = Quality::take(4)->get();
        $about = About::firstOrFail();
        return View::make('front.index', compact('services', 'qualities', 'about'));
    }

    public function services() {
        $services = Service::all();
        $qualities = Quality::all();
        return View::make('front.services', compact('services', 'qualities'));
    }

    public function service($slug) {
        $item = Service::whereSlug($slug)->firstOrFail();
        $others = Service::where('id', '!=', $item->id)->get();
        return View::make('front.service', compact('item', 'others'));
    }

    public function quality($slug) {
        $item = Quality::whereSlug($slug)->firstOrFail();
        $others = Quality::where('id', '!=', $item->id)->get();
        return View::make('front.service', compact('item', 'others'));
    }

    public function contact() {
        return View::make('front.contact');
    }

    public function about() {
        $about = About::firstOrFail();
        return View::make('front.about', compact('about'));
    }

    public function team() {
        $team = Team::all();
        return View::make('front.team', compact('team'));
    }
}
