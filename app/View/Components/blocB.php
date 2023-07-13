<?php

namespace App\View\Components;

use App\Models\Tours;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class blocB extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Tours $tour)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bloc-b');
    }
}
