<?php

namespace App\View\Components\website;

use App\Models\Page;
use Illuminate\View\Component;

class MenuComponent extends Component
{

    private $pages;
    private $last_page;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->pages = Page::all();
        $this->last_page = $this->pages->pop();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.website.menu-component')
            ->with('pages', $this->pages)
            ->with('last_page', $this->last_page);
    }
}
