<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardSmCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = 'Demo Cards',
        public string $value = '500',
        public string $icon = 'fa-solid fa-cloud',
        public string $link = '#'
    ) {
        $this->title = $title;
        $this->value = $value;
        $this->icon = $icon;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard-sm-card');
    }
}
