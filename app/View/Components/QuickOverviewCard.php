<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class QuickOverviewCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $metric,
        public string $metricTitle,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.quick-overview-card');
    }
}
