<?php

namespace App\View\Components\website;

use App\Models\Page;
use Illuminate\View\Component;

class featured extends Component
{
    private $pages;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->pages = Page::where('featured', true)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.website.featured')->with('pages', $this->pages);
    }
}
