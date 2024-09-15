<?php

namespace App\View\Components;

use App\Models\Scholar;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ScholarsSection extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.scholars-section', [
          'scholars' => Scholar::inRandomOrder()
                                  ->limit(5)
                                  ->get(),
        ]);
    }
}
