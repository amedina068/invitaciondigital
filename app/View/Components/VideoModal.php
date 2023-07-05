<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class VideoModal extends Component
{
    public $id;
    
    /**
     * Create a new component instance.
     */
    public function __construct(public string $src)
    {
        $this->id = 'video_'.Str::random(5);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.video-modal');
    }
}
