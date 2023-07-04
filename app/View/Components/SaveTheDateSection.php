<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SaveTheDateSection extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $demo,
        public $src = null
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.save-the-date-section');
    }
}
