<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Quality;
use App\Models\Service;
use Illuminate\Support\Facades\View;
use Illuminate\View\View as Viewable;

class FrontController extends Controller {
    public function index(): Viewable {
        $services = Service::all();
        $qualities = Quality::all();
        $about = About::firstOrFail();
        return View::make('front.index', compact('services', 'qualities', 'about'));
    }
}
