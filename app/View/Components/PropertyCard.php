<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Property;

class PropertyCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public Property $property
    ) {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.property-card');
    }
}
