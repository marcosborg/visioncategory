<?php

namespace App\View\Components\website;

use App\Models\WebsiteConfiguration;
use Illuminate\View\Component;

class topbar extends Component
{

    private $website_configuration;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->website_configuration = WebsiteConfiguration::find(1);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.website.topbar')->with('website_configuration', $this->website_configuration);
    }
}
