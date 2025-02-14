<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Legal;
use App\Models\Page;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }

    public function cms($page_id, $slug)
    {

        $page = Page::find($page_id);

        return view('website.cms', compact('page'));
    }

    public function legal($legal_id, $slug)
    {

        $legal = Legal::find($legal_id);

        return view('website.legal', compact('legal'));
    }

    public function rent($car_id, $slug) {

        $car = Car::find($car_id);

        return view('website.rent', compact('car'));
    }
}
