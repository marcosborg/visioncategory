<?php

namespace App\View\Components\website;

use Illuminate\View\Component;
use App\Models\Service;

class ServiceComponent extends Component
{

    private $services;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->services = Service::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.website.service-component')->with('services', $this->services);
    }
}
