<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DatePlaceItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $title,
        public $hour,
        public $place,
        public $address,
        public $mapsLink,
        public bool $rounded,
        public $titleColor,
        public $placeColor,
        public $hourColor,
        public $addressColor,
        public $mapsLinkColor,
        public $src = null,
        public $text = 'left'
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.date-place-item');
    }
}
