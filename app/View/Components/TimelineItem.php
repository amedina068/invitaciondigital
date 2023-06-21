<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TimelineItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $title,
        public $place,
        public $time,
        public $mapsLink,
        public $right = false
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.timeline-item');
    }
}
