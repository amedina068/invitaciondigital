<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DatePlaceSection extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $titleColor,
        public $backgroundColor,
        public $itemTitleColor,
        public $itemPlaceColor,
        public $itemHourColor,
        public $itemAddressColor,
        public $itemMapsLinkColor,
        public $titleFont = 'Poppins',
        public $subtitle = '',
        public $src = null,
        public bool $rounded = false,
        public string $text = 'center'
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.date-place-section');
    }
}
