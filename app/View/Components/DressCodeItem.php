<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DressCodeItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $headingColor,
        public $titleColor,
        public $descriptionColor,
        public $title,
        public $subtitle,
        public $note,
        public $rounded
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dress-code-item');
    }
}
