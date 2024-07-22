<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Privacy;
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

    public function services(): Viewable {
        $services = Service::all();
        $qualities = Quality::all();
        return View::make('front.services', compact('services', 'qualities'));
    }

    public function service($slug): Viewable {
        $item = Service::whereSlug($slug)->firstOrFail();
        $others = Service::where('id', '!=', $item->id)->take(3)->inRandomOrder()->get();
        return View::make('front.service', compact('item', 'others'));
    }

    public function quality($slug): Viewable {
        $item = Quality::whereSlug($slug)->firstOrFail();
        $others = Quality::where('id', '!=', $item->id)->take(3)->inRandomOrder()->get();
        return View::make('front.service', compact('item', 'others'));
    }

    public function contact(): Viewable {
        return View::make('front.contact');
    }

    public function about(): Viewable {
        $about = About::firstOrFail();
        return View::make('front.about', compact('about'));
    }

    public function team(): Viewable {
        $team = Team::all();
        return View::make('front.team', compact('team'));
    }

    public function privacy(): Viewable {
        $privacy = Privacy::first();
        return View::make('front.privacy', compact('privacy'));
    }
}
