<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardBreadcrumb extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = 'Not defined',
        public string $route = '#',
        public string $icon = 'fa-solid fa-house',
        public string $buttonText = 'My Home',
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard-breadcrumb');
    }
}
