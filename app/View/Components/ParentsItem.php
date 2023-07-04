<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ParentsItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $titleColor,
        public $heColor,
        public $sheColor,
        public $title,
        public $he,
        public $she,
        public bool $rounded = false
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.parents-item');
    }
}
