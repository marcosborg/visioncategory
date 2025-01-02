<?php

namespace App\View\Components\website;

use App\Models\HeroBanner;
use Illuminate\View\Component;

class hero_banner extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.website.hero_banner');
    }
}
