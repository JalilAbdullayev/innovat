<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\View\View as Viewable;

class FrontController extends Controller {
    public function index(): Viewable {
        return View::make('front.index');
    }
}
