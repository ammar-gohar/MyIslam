<?php

namespace App\View\Components;

use App\Models\Tag;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;
use Illuminate\View\Component;

class TagsSection extends Component
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
        return view('components.tags-section', [
          'tags' => Tag::inRandomOrder()
                          ->select("name_" . App::currentLocale() . " as name")
                          ->limit(10)
                          ->get(),
        ]);
    }
}
