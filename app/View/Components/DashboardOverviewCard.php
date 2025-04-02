<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardOverviewCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = 'Demo Title',
        public string $value = '500',
        public string $icon = 'fas fa-calendar',
        public string $color = 'bg-gray-100',
        public string $textColor = 'text-gray-900',
        public string $iconColor = 'text-gray-500',
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard-overview-card');
    }
}
