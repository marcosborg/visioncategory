<?php

namespace App\View\Components\website;

use App\Models\Legal;
use App\Models\Page;
use App\Models\WebsiteConfiguration;
use Illuminate\View\Component;

class footerComponent extends Component
{

    private $website_configuration;
    private $pages;
    private $featured;
    private $legals;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->website_configuration = WebsiteConfiguration::find(1);
        $this->pages = Page::all();
        $this->featured = Page::where('featured', true)->first();
        $this->legals = Legal::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.website.footer-component')->with([
            'website_configuration' => $this->website_configuration,
            'pages' => $this->pages,
            'featured' => $this->featured,
            'legals' => $this->legals
        ]);
    }
}
