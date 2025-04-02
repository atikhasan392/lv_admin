<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardModal extends Component
{
    /**
     * Create a new component instance.
     */

    public function __construct(
        public string $id = 'dashboardModal',
        public string $title = 'Dashboard Modal',
        public string $actionUrl = 'javascript:;',
        public string $actionText = 'Save changes'
    )
    {
        $this->id = $id;
        $this->title = $title;
        $this->actionUrl = $actionUrl;
        $this->actionText = $actionText;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard-modal');
    }
}
