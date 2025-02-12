<?php

namespace App\View\Components\website;

use App\Models\Testimonial;
use Illuminate\View\Component;

class TestimonialComponent extends Component
{

    private $testimonials;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->testimonials = Testimonial::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.website.testimonial-component')->with('testimonials', $this->testimonials);
    }
}
