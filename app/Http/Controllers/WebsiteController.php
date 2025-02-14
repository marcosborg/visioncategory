<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarRentalContactRequest;
use App\Models\Legal;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\carRentalContact;

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

    public function rent($car_id, $slug)
    {

        $car = Car::find($car_id);

        return view('website.rent', compact('car'));
    }

    public function formRent(Request $request)
    {

        $car_rental_contact_request = new CarRentalContactRequest;
        $car_rental_contact_request->car_id = $request->car_id;
        $car_rental_contact_request->name = $request->name;
        $car_rental_contact_request->phone = $request->phone;
        $car_rental_contact_request->email = $request->email;
        $car_rental_contact_request->city = $request->city;
        $car_rental_contact_request->tvde = $request->tvde;
        $car_rental_contact_request->tvde_card = $request->tvde_card;
        $car_rental_contact_request->message = $request->message;
        $car_rental_contact_request->rgpd = $request->rgpd;
        $car_rental_contact_request->save();

        Notification::route('mail', 'marcosborges@netlook.pt')
            ->notify(new carRentalContact($car_rental_contact_request));
    }
}
